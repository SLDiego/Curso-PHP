<?php

// Uma função retorna um valor, ou seja, a chamada da função representa um valor após sua execução. 
// Uma subrotina apenas executa um código isolado.


function exibeMensagem(string $mensagem){
    echo $mensagem . PHP_EOL;
}

function sacar(array $conta, float $valorASacar)
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar este valor");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}



function depositar(array $conta, float $valorADepositar)
{
	if ($valorADepositar < 0) {
		echo "Você não pode fazer um deposito negativo" .PHP_EOL;
	} else{
		$conta['saldo'] += $valorADepositar;
	}
	return $conta;
}




$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.789-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];


$contasCorrentes['123.256.789-12'] = depositar($contasCorrentes['123.256.789-12'], 95);

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 500);
$contasCorrentes['123.456.789-11'] = sacar($contasCorrentes['123.456.789-11'], 500);



foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}