<?php
$file=$_REQUEST['fname'];
//$f1=explode(".",$file);
//$f2=$f1[0].".exe";

	//file_put_contents($file, $current);
	
	//putenv("PATH=C:\Program Files (x86)\Dev-Cpp\MinGW64\bin");
	//shell_exec("g++ $file -o helloc.exe");//compile
	
	putenv("PATH=C:\Program Files (x86)\Dev-Cpp\MinGW64\bin");
	chdir("program/");
	shell_exec("g++ $file -o hello.exe");//compile
	
	$answer=shell_exec("hello.exe");
	
	$fp=fopen("output.txt","w");
	fwrite($fp,$answer);
	fclose($fp);
	/*$runcmd = "./a.out > output.txt";
$process_stdin = popen($runcmd, 'w');
fwrite($process_stdin, "text to send to process");
pclose($process_stdin);*/
?>