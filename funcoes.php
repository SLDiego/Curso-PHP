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



	
