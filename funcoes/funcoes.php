<?php

function operacao(float $num1, float $num2, string $operacao = "*"): float
{
    switch ($operacao) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            return $num1 / $num2;

        default:
            return 0.0;
    }
}


echo "<br> O resultado é: " . operacao(25, 25) . "<br>";



function DiaSemana(int $dia): string
{
    switch ($dia) {
        case 0:
            return 'domingo';
        case 1:
            return 'segunda';
        case 2:
            return 'terça';
        case 3:
            return 'quarta';
        case 4:
            return 'quinta';
        case 5:
            return 'sexta';
        case 6:
            return 'sabado';
        default:
            return null;
    }
}


echo "dado o valor informado o dia é: " . DiaSemana(2) . "<br>";



$nome = 'bono';


function muda_nome(string &$var): string
{
    $var = 'outro nome';
    return $var;
}

echo "<br> função retornará : ". muda_nome($nome) . "<br><br>";
echo "<br><br> A variável \$nome ainda vale: \"$nome\" <br><br>";