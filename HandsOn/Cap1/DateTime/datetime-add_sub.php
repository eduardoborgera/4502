<?php
	
echo "<pre>";
	$dt = new DateTime();
	$dtInterval = new dateInterval('P7D');
	
	$dt->add($dtInterval);
	print_r($dt);
	echo "<hr/>";
	
	$dt2 = new DateTime();
	$dt2->sub($dtInterval);
	print_r($dt2);