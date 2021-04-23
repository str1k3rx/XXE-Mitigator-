<?php 
    libxml_disable_entity_loader (false); //enable the ability to load external entities.
    $Readxmlfile = file_get_contents('php://input'); //read the file contents
    $DomElement = new DOMDocument(); // create a new dom 
    $DomElement->loadXML($Readxmlfile, LIBXML_NOENT | LIBXML_DTDLOAD);
	$Student_Data=simplexml_import_dom($DomElement);
	$name=$Student_Data->name; //access the name nested inside student root
	$age=Student_Data->age; //access the age nested inside student root
	$faculty=Student_Data->faculty; //access the faculty nested inside student root

?> 


