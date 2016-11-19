<?php
	
	echo "<pre>";
	$dt = new DateTime();
	
	print_r($dt);
	echo "<hr/>";
	
	$dt->setDate(2017,1,1);	
	$dt1 = $dt;
	print_r($dt1);
	
	echo "<hr/>";
	$dt1->setTime(18,30,15);
	print_r($dt1);
	
	echo "<hr/>";
	
	$dt2 = new DateTime('2016-11-26 00:00:00');
	print_r($dt2);
	
	echo "<hr/>";
	
	$dt2->modify('+ 2 days');
	print_r($dt2);
	echo "<hr/>";
	
	echo $dt1->format('d-m-Y');
	echo "<hr/>";
	echo $dt1->format('d-m-Y H:i:s:u');
	echo "<hr/>";
	
	$dt3 = new DateTime();
	echo $dt3->format('d-m-Y H:i:s:u');
	echo "<br/>";
	$dtTimeZone = new DateTimeZone('Asia/Tokyo');
	$dt3->setTimeZone($dtTimeZone);
	echo $dt3->format('d-m-Y');