<?php 
$nome = "belgas";
echo "test1 " , $nome;
echo "<hr>";

function exibeNome(){
	global $nome; /*se nao colocar o escopo global ela nao vai ler o valor fora da funcao*/
	echo $nome;
}
echo "test2 ";
exibeNome();

echo "<hr>";



 ?>