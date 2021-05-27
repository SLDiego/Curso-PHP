<?php

// Uma função retorna um valor, ou seja, a chamada da função representa um valor após sua execução. 
// Uma subrotina apenas executa um código isolado.
//include e require -> inclui um arquivo externo
//Caso o arquivo a ser incluído não seja encontrado, utilize require
//Caso o arquivo não seja encontrado, include irá lançar um aviso (E_WARNING) enquanto require irá lançar um erro e não permitirá a execução do programa.


require_once 'funcoesweb.php';


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


//unset remove variaveis da memoria, inclusive remover itens de uma lista
unset($contasCorrentes['123.456.789-11']);


titularComLetrasMaiusculas($contasCorrentes['123.256.789-12']);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>

    <dl>
    	<?php foreach ($contasCorrentes as $cpf => $conta) { ?>
    		
        <dt>
        	<h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>
        Saldo: <?= $conta['saldo']; ?>
    	</dd>
    	 <?php } ?>
    </dl>
</body>
</html>