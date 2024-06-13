<?php

$file=$_REQUEST['fname'];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://localhost/virtual/program/".$file); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 ); 
$answer=curl_exec($ch); 

$fp=fopen("program/output.txt","w");
	fwrite($fp,$answer);
	fclose($fp);
?>