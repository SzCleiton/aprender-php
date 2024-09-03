<?php

$saldo = 1_000;
$titularConta = 'Cleiton Souza';

echo "**********\n";
echo "Titular: $titularConta\n";
echo "Saldo Atual: R$ $saldo\n";
echo "**********\n";

do {
    echo "1. Consultar Saldo Atual\n";
    echo "2. Sacar Valor\n";
    echo "3. Depositar Valor\n";
    echo "4. Sair\n";

    $opcao = (int) fgets(STDIN); // Captura a entrada do usuário corretamente

    switch ($opcao) {
        case 1:
            echo "**********\n";
            echo "Titular: $titularConta\n";
            echo "Saldo Atual: R$ $saldo\n";
            echo "**********\n";
            break;

        case 2:
            echo "Qual valor deseja sacar?\n";
            $valorASacar = (float) fgets(STDIN); // Use fgets para capturar o valor a ser sacado
            if ($valorASacar > $saldo) {
                echo "Saldo insuficiente\n";
            } else {
                $saldo -= $valorASacar;
            }
            break;

        case 3:
            echo "Quanto deseja depositar?\n";
            $valorADepositar = (float) fgets(STDIN); // Use fgets para capturar o valor a ser depositado
            $saldo += $valorADepositar;
            break;

        case 4:
            echo "Adeus!\n";
            break;
            
        default:
            echo "Opção inválida!!\n";
            break;
    }
} while ($opcao != 4);

?>
