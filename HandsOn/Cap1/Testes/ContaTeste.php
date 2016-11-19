<?php
	
	require '../Classes/Contas.php';
	class ContasTeste extends PHPUnit_Framework_TestCase{
		
		public function testeDepositarSucess(){
			
			$conta = new Contas();
			$saldoAtual = $conta->getSaldo();
			$valorDeposito= 500;
			
			$valorAtualizado=$saldoAtual + $valorDeposito;
			
			$conta->depositar($valorDeposito);
			$saldoAposDeposito= $conta->getSaldo();
			
			$this->assertEquals($saldoAposDeposito,$valorAtualizado);
			
		}
		
		public function testSacarSuccess(){
			
			$conta = New Contas();
			$conta->depositar(500);
			$saldoAtual = $conta->getSaldo();
			$valorSacar= 300;
			
			$retorno = $conta->sacar($valorSacar);
			
			$this->assertTrue($retorno);
			
		}
		
		public function testSacarFail(){
			
			$conta = New Contas();
			$conta->depositar(500);
			$saldoAtual = $conta->getSaldo();
			$valorSacar= 600;
				
			$retorno = $conta->sacar($valorSacar);
				
			$this->assertFalse($retorno);
			
		}
	}