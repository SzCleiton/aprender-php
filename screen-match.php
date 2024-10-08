<?php

function exibeMensagemLancamento(int $ano) : void {
    if ($ano > 2022) {
        echo "Esse filme é um lançamento\n";
    } elseif ($ano > 2020 && $ano <= 2022){
        echo "Esse filme ainda é novo\n";
    } else {
        echo "Esse filme não é um lançamento\n";
    }
}

function incluidoNoPlano(bool $planoPrime, int $anoLancamento) : bool {
    return $planoPrime || $anoLancamento < 2020;
}

echo "Bem vindo ao screen match\n";

$nomeFilme = "Top Gun - Maverick";

$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

// $somaDeNotas = 0;
// foreach ($notas as $nota) {
//     $somaDeNotas += $nota;
// }

var_dump($notas);

// $contador = 1;
// while ($argv[$contador] != 0) {
//     $somaDeNotas += $argv[$contador++];
// }

// do {

// } while (true);

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);

echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: $notaFilme \n";
echo "Ano lancamento: $anoLancamento\n";

exibeMensagemLancamento($anoLancamento);

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "Ação",
    "Thor: Ragnarok" => "Super-Heroi",
    "Se beber nao case" => "Comedia",
    default => "Genero desconhecido",
};

echo "O genero do filme é: $genero\n";

// $notasParaOFilme = [
//     10, 
//     8, 
//     9 ,
//     7.5, 
//     5 , 
//     6.8
// ];
// var_dump($notasParaOFilme);

$filme = [
    "nome" => "Thor - Ragnarok",
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "Super-Herói",
];

echo $filme["nome"];

var_dump($notas);
sort($notas);
var_dump($notas);
$menorNota = min($notas);
echo $menorNota;