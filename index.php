<?php

$n1 = readline("Digite a  1° nota: ");
$n2 = readline("Digite a  2° nota: ");
$n3 = readline("Digite a  3° nota: ");
$n4 = readline("Digite a  4 nota: ");

$media = ($n1 + $n2 + $n3 + $n4) / 4;

echo "A média do aluno(a) é: $media\n";

$frequencia = readline("Digite a frequência (0 a 100): ");

if ($frequencia < 75) {
    echo "Reprovaiudo por falta!";
} elseif ($media >= 6) {
    echo "Aprovado";
} else {
    $rec = readline("Digite a nota da recuperação: ");
    $mediaFinal = $media + $rec;

    if ($mediaFinal > 5) {
        echo "Aprogyvado na recuperação!";
    } else {
        echo "Reprovado!";
    }
}



?>