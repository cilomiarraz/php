<?php
	
	//TIPOS BÁSICOS
	
	//variavel tipo string
	$nome = "Cilomi";
	$sobrenome = 'Souto Arraz';

	//variavel tipo inteiro
	$ano = 1981;

	//variavel tipo float / double
	$salario = 5500.99;

	//variavel tipo booleano
	$bloqueado = false;
	/////////////////////////////////////

	//TIPOS COMPOSTOS

	//variavel tipo array
	$frutas = array("abacaxi", "laranja", "manga");
	echo $frutas[2];
	echo "<br>";
	//variavel tipo objeto
	$nascimento = new DateTime(); // quando se vê a palavra "new" sabe-se que se está usando orientação a objeto.
	//var_dump($nascimento);

	//TIPOS DE VARIAVEIS ESPECIAIS

	//variavel tipo resource
	$arquivo = fopen("exemplo-03.php", "r");
	var_dump($arquivo);

	//variavel tipo null
	$nulo = null;
	$vazio = "";
?>