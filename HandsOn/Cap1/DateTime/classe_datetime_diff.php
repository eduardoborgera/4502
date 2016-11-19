<?php
	
	echo "<pre>";
	$dt1 = new DateTime();
	//$dtIntervall = DateInterval('P7D');
	$dt2 = new DateTime('2016-10-10');
	
	$diferenca = $dt1->diff($dt2);
	
	print_r($diferenca);
	
	echo "<br>";
	echo $diferenca->format('%R %d dias');
	echo "<br>";
	echo $diferenca->format('%R %m Mes(es) porem esta com %d dias em atraso ou %a Dias');
	
	echo "<hr />";