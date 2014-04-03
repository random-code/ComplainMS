<!-- Initialize the XMLHttpRequest Object -->

	var xmlhttp=false;

	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
	  xmlhttp = new XMLHttpRequest();
	} else if (window.ActiveXObject) {
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
<!-- End XMLHttpRequest Initialization -->