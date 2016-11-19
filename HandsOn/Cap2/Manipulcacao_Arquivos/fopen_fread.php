<?php
	
	$file = fopen('produtos.txt','w+');
	
	fwrite($file, "Mouse\n");
	fwrite($file, "Teclado\n");
	fwrite($file, "Sublime ainda eh de viado");
	
	fclose($file);
	
	$file = fopen('produtos.txt','a+');
	
	$dados = fread($file, 4096);
	echo nl2br($dados);
	fclose($file);
	
	