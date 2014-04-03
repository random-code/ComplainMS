<?php
// Turn off all error reporting
 error_reporting(E_ERROR);
?>
<?php
/**
* Show erros constant
* @const SHOW_ERRORS
*/
define("SHOW_ERRORS",true);

/**
* HTML error renderer
* @const ERROR_CODE
*/
define("ERROR_CODE",'<font face="verdana, arial" size="1"><b>Layout Error: <font color="#000080">[error]</font></b></font><br>');

 

/**
* Read and process HTML files
*
* @autor Daniel Chaves <irond@allmasters.com.br>;
* @version 1.0
* @access public
* @package IS Layout
*/

class IS_Layout
{
    /**
    * Contains the html´s souce code
    * @var  string
    * @access   private
    */
    VAR $_code;

    /**
    * Informs if the lines are set
    * @var bool
    * @access private
    */
    VAR $_linesSet=False;

    /**
    * IS_Layout Constructor
    * @param string $arg path to html file or the html lines
    * @access public
    */
    function IS_Layout($arg=NULL)
    {
      
        if(isset($arg) and is_file($arg))
            return $this->openFile($arg);
        elseif(isset($arg) and is_string($arg))
            $this->setCode($arg); 
    }

	function alterTemplate($PH)
	{      	
      	foreach  ($PH as $k=>$val)
		{
			$this->replace($k,$val);
		}
	
		$this->display();  	
	}
    /**
    * Opens the HTML file
    * @param string $file Path to HTML file 
    * @return mixed boolean true, if successful or error message (see const SHOW_ERRORS)
    * @access public
    */
    function openFile($file)
    {
        $res=@fopen($file,"r");
            
        if(!is_resource($res)){
            return $this->_error('Fail to open file "'.$file.'"');
        }

        $code='';
        while(!feof($res))
            $code.=fgets($res,1024);

        fclose($res);
        $this->setCode($code);
        return True;
    }

    /**
    * Sets the HTML lines
    * @param string $str Lines of current HTML code
    * @access public
    */
    function setCode($str)
    {
        $this->_code=$str;
        $this->_linesSet=True;
    }

    /**
    * Parse errors
    * @param string $error Error Message 
    * @return string error message or displayed message
    * @access private
    * @see define SHOW_ERROR
    */
    function _error($error)
    {
        $this->setCode(ERROR_CODE);
        $this->replace('error',$error);

        if(SHOW_ERRORS)
            return $this->display();
        else
            return $this->toHtml();
    }

    /**
    * Replace variables on HTML code
    * @param string $sId Identification of element
    * @param mixed $items String or Array of values  
    * @access public
    */
    function replace($sId, $items)
    {
        if(is_array($items)){
            foreach($items as $k=>$v){
                if(is_array($v)){
                    foreach($v as $kb=>$v){
                        $this->_doReplace("$sId,$k,$kb",$v);
                    }
                }else{
                    $this->_doReplace("$sId,$k",$v);
                }
            }
        }else{
            $this->_doReplace($sId,$items);
        }
    }

    /**
    * Do a loop in part of HTML code replacing variables
    * @param string $Id Identification of element
    * @param array $Values Array of values  
    * @access public
    */
    function loop_replace($Id, $Values)
    {
        $arReturn=$this->_getElement('replace',"id=\"$Id\"");
        $sReplaceLines=$arReturn[0];

        foreach($Values as $aValue){
            $sTempValue=$sReplaceLines;
            foreach($aValue as $key=>$value){
                $sTempValue=ereg_replace("\[$key\]",(string)$value,$sTempValue);
            }
            $sReturn.=$sTempValue;
        }

        $this->_Element_replace('replace',"id=\"$Id\"",$sReturn);
    }

    /**
    * Get an Element of HTML Code
    * @param string $Name Identification of element
    * @param mixed $args String or Array of values passed in identification 
    * @access private
    */
    function _getElement($Name, $args=NULL)
    {
        if(is_array($args)){
            $comp="\s{1,}";
            foreach($args as $key=>$value)
                $comp.="$key=\"$value\"\s{0,}";    
        }elseif($args!=NULL){
            $comp="\s{0,}".$args;
            $comp=preg_replace("[\s{1,}]","\s{1,}",$comp);
        }

        $preg="|<!-- $Name$comp(.*?)-->(.*?)<!-- end $Name -->|s";

        preg_match($preg,$this->_code,$ret);
        $return=array(NULL,NULL);
        $return[0]=$ret[2];

        if(!empty($ret[1])){
            $args=explode(" ",$ret[1]);
            foreach($args as $v){
                $v=trim($v);
                $v=ereg_replace(quotemeta('"'),'',$v);
                list($a,$b)=explode("=",$v);
                if(!empty($a))
                    $return[1][$a]=$b;
            }
        }

        return $return;
    }

    /**
    * Replace an Element of HTML Code
    * @param string $Name Identification of element
    * @param mixed $args String or Array of values passed in identification 
    * @param string $el HTML code for substitute the code between the element
    * @access private
    */
    function _Element_replace($Name, $args=NULL, $el=NULL)
    {
        if(is_array($args)){
            $comp="\s{1,}";
            foreach($args as $key=>$value)
                $comp.="$key=\"$value\"\s{0,}";    
        }elseif($args!=NULL){
            $comp="\s{0,}".$args;
            $comp=preg_replace("[\s{1,}]","\s{1,}",$comp);
        }

        $preg="|<!-- $Name$comp(.*?)-->(.*?)<!-- end $Name -->|s";
        $this->_code=preg_replace($preg,$el,$this->_code);
    }

    /**
    * Get part of main HTML code
    * @param string $Id Identification of element
    * @return object Object contains the main code
    * @access public
    */
    function getCode($Id)
    {
        $code=$this->_getElement('code', "id=\"$Id\"");
        return new IS_Layout($code[0]);
    }

    /**
    * Remove part of main HTML code
    * @param string $Id Identification of element
    * @param string $Code HTML code to replace
    * @access public
    */
    function code_replace($Id,$Code)
    {
        $this->_Element_replace('code', "id=\"$Id\"",$Code);
    }

    /**
    * Remove part of main HTML code
    * @param string $Id Identification of element
    * @access public
    */
    function remove($Id)
    {
        $this->_Element_replace('remove', "id=\"$Id\"");
    }

    /**
    * Include code to main HTML
    * @param object IS_Layout $Inc Object of layout
    * @access public
    */
    function inc($Inc)
    {
        $this->replace('include', $Inc->toHtml());
    }

    /**
    * Replace a variable in HTML code
    * @param string $Id Identification of element
    * @param string $Item code
    * @access private
    */
    function _doReplace($Id, $Item)
    {
        $this->_code=ereg_replace(quotemeta("[$Id]"), (string)$Item, $this->_code);
    }

    /**
    * Replace non used elements
    * @access private
    */
    function _replace_none()
    {
        $this->_code=ereg_replace("\\[([^\\[]*),([^\\[]*)\\]",'',$this->_code);    
        $this->_code=ereg_replace("\\[([^\\[]*),([^\\[]*),([^\\[]*)\\]",'',$this->_code);
        $this->_code=preg_replace("|<!-- code(.*?)-->|s",$el,$this->_code);
        $this->_code=preg_replace("|<!-- end code -->|s",$el,$this->_code);
        $this->_Element_replace('replace');
    }

    /**
    * Return HTML code
    * @return string $Code Code HTML
    * @access public
    */
    function toHtml()
    {
        $this->_replace_none();
        return $this->_code;
    }

    /**
    * Print HTML code
    * @access public
    */
    function display()
    {
        if(!$this->_linesSet)
            return False;

        echo $this->toHtml();
    }
    
    	/*
    	function alterTemplate($PH,$filed)
	{
		include("_constants.php");
		
		//include("{$constant['class_path']}/islayout.php");
		
		if(isset($arg) and is_file($arg))
            return $this->openFile($arg);
        elseif(isset($arg) and is_string($arg))
            $this->setCode($arg);
            
	
		$this->IS_Layout("{$constant['temple_path']}/$filed");
	
		foreach  ($PH as $k=>$val)
		{
			$this->replace($k,$val);
		}
	
		$this->display();
	}
	*/
  
  function selectWithPaging($strSQL){
    $page = 1;
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    $strSQL .= " LIMIT $page,10 ";
    $return = mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());
    return $return;
  } 

  function pageCount($strSQL){
    $page = 1;
    $result = mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());
    return mysql_num_rows($return);
  } 
}

?>