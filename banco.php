<?php

//foreach -> outra forma de realizar loops (repetições), específica para trabalhar com listas de dados (normalmente, arrays).
//com a funcão foreach -> Não precisamos conhecer as chaves de cada item para percorrer seus valores  
// podemos percorrer arrays associativos sem nenhum problema. Podemos inclusive recuperar o valor de seus índices dentro do loop.


$contasCorrentes = [
	'123.456.789-10' =>  [
	'titular' => 'Vinicius',
	'saldo' => 100

	], 
	'123.456.789-11' =>[
	'titular' => 'Maria',
	'saldo' => 10000	
	], 
	'123.456.789-12' =>[
	'titular' => 'Alberto',
	'saldo' => 300
	]	
];

$contasCorrentes['123.456.789-11']['saldo'] -= 500;


foreach ($contasCorrentes as $cpf => $conta) {
	echo $cpf . " " . $conta['titular'] . '	' . $conta['saldo'] .PHP_EOL;
	
}


	
