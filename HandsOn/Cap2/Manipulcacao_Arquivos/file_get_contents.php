<?php
	
// 	$file = file_get_contents('emails.txt', FILE_APPEND);
	
// 	echo nl2br($file);
	
	
	echo "<hr/>";
	
	
	file_put_contents('emails.txt', "eduardo.borges\n",FILE_APPEND);
	
	$file = file_get_contents('emails.txt');
	
	echo nl2br($file);