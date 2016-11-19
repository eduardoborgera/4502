<?php
	
	$dt1 = new DateTime();
	$dt2 = new DateTime('2016-12-10');
	
	print_r($dt1);
	echo"<br/>";
	print_r($dt2);
	
	if($dt1 > $dt2){
		
		echo "Boleto vencido";
	}
	
	echo"<br/>";
	
	if($dt1 <= $dt2){
		
		echo "Boleto dentro do prazo de vencimento";
	}
	
	echo"<br/>";
	
	if($dt1 == $dt2){
		echo "Q porra eh essa?";
	}