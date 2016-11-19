<?php
	
	echo "<pre/>";
	$dt1 = new DateInterval('P2Y4DT6H8M');
	print_r($dt1);
	echo "<hr/>";
	echo $dt1->format('%y Anos, %m Meses, %d Dias');