<?php

//foreach -> outra forma de realizar loops (repetições), específica para trabalhar com listas de dados (normalmente, arrays).
//com a funcão foreach -> Não precisamos conhecer as chaves de cada item para percorrer seus valores  
// podemos percorrer arrays associativos sem nenhum problema. Podemos inclusive recuperar o valor de seus índices dentro do loop.


$contasCorrentes = [
	12345678910 =>  [
	'titular' => 'Vinicius',
	'saldo' => 1000

	], 
	12345678911 =>[
	'titular' => 'Maria',
	'saldo' => 10000	
	], 
	12345678912 =>[
	'titular' => 'Alberto',
	'saldo' => 300
	]	
];


foreach ($contasCorrentes as $cpf => $conta) {
	echo $cpf .PHP_EOL;
	
}


	
