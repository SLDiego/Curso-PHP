<?php



function exibeMensagem(string $mensagem){
    echo $mensagem . PHP_EOL;
}

function sacar(array $conta, float $valorASacar)
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Atenção: Você não pode sacar este valor");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}



function depositar(array $conta, float $valorADepositar)
{
	if ($valorADepositar < 0) {
		echo "Atenção: Você não pode fazer um deposito negativo" .PHP_EOL;
	} else{
		$conta['saldo'] += $valorADepositar;
	}
	return $conta;
}


//Para usar a passagem de referência basta colocar o caracter & na frente da variável
function titularComLetrasMaiusculas(array &$conta)
{
	$conta['titular'] = mb_strtoupper($conta['titular']);


}


	
