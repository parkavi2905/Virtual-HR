<?php
$file=$_REQUEST['fname'];
//$f1=explode(".",$file);
//$f2=$f1[0].".exe";
$ff=explode(".",$file);
$fname=$ff[0];
	//file_put_contents($file, $current);
	putenv("PATH=C:\Program Files (x86)\Java\jdk1.7.0_65\bin");
	chdir("program/");
	shell_exec("javac $file");//compile
	
	$answer=shell_exec("java $fname");//compile
	
	$fp=fopen("output.txt","w");
	fwrite($fp,$answer);
	fclose($fp);
	/*$runcmd = "./a.out > output.txt";
$process_stdin = popen($runcmd, 'w');
fwrite($process_stdin, "text to send to process");
pclose($process_stdin);*/
?>