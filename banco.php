<?php

// Uma função retorna um valor, ou seja, a chamada da função representa um valor após sua execução. 
// Uma subrotina apenas executa um código isolado.
//include e require -> inclui um arquivo externo
//Caso o arquivo a ser incluído não seja encontrado, utilize require
//Caso o arquivo não seja encontrado, include irá lançar um aviso (E_WARNING) enquanto require irá lançar um erro e não permitirá a execução do programa.


include 'funcoes.php';


$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 100000
    ],
    '123.456.789-11' => [
        'titular' => 'Alberto',
        'saldo' => 3000
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ]
];


$contasCorrentes['123.256.789-12'] = depositar($contasCorrentes['123.256.789-12'], 195);

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 500);
$contasCorrentes['123.456.789-11'] = sacar($contasCorrentes['123.456.789-11'], 500);



foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem(
    	mensagem: "$cpf {$conta['titular']} {$conta['saldo']}"
    );
}