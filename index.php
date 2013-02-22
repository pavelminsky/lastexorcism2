<?php

$browser = $_SERVER['HTTP_USER_AGENT'];

if(strstr($browser,'iPad') || strstr($browser,'iPhone') || strstr($browser,'Android')){
	include("indexOK.php");
} 
else{
	if(strrpos($browser, "MSIE")) {
		include("indexIE.php");
	} 
	else{
		include("indexOK.php");
	}
}
?>