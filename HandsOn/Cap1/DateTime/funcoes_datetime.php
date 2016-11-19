<?php
	
	echo date('d/m/Y H:i:s:u');
	echo "<br/>";
	
	echo date('d-m-y');
	echo "<br/>";
	
	echo date('Y-m-d');
	echo "<br/>";
	
	echo date('d');
	echo "<br/>";
	
	echo date('m');
	echo "<br/>";
	
	echo date('Y');
	echo "<br/>";
	
	echo date('d m Y');
	echo "<br/>";
	
	echo time();
	echo "<br/>";
	
	echo microtime();
	echo "<br/>";
	
	$proxSemana = time() + (7 * 24 * 60 * 60);
	echo date('d-m-Y', $proxSemana);
	echo "<br/>";
	
	echo microtime(true);
	echo "<br/>";
	
	echo date('d-m-y', strtotime('now'));
	echo "<br/>";
	
	echo date('d-m-y',strtotime('next day'));
	echo "<br/>";
	
	echo date('d-m-y',strtotime('next week'));
	echo "<br/>";
	
	echo date('d-m-y',strtotime('tomorrow'));
	echo "<br/>";
	
	echo date('d-m-y',strtotime('+ 2 days'));
	echo "<br/>";
	
	echo date('d-m-Y H:i:s',mktime(10,10,10,11,19,2016));
	echo "<br/>";
	
	
	