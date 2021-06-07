<?php 

//escalares
$nome="ola world!";
$numero=2;
var_dump($nome);
echo "<hr>";

if (is_string($numero)) 
{echo "sim é uma string!";} 
else{echo "nao é!";	}
echo "<hr>";

if (is_scalar($numero)) 
{echo "sim";} 
else{echo "nao !";}
echo "<hr>";


 //compostos
//array
$carros = array("gol","celta","corsa","palio");
var_dump($carros);
echo "<hr>";

//object
/**
 * 
 */
class Cliente {
	public $nome;
	public function atribuirNome($nome){
		$this->$nome=$nome;
	}

}
$cliente = new Cliente();
$cliente->atribuirNome("orlean");
var_dump($cliente);