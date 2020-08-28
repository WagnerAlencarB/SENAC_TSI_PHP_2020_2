<?php
ini_set('display_errors',1);
ini_set('display_statup_errors',1);
error_reporting(E_ALL);

$clima = 'tropical';

if ($clima == 'gelado') {
    echo "Meu pé congela!<br><br>";
}



$bool = 1;
$var = $bool == 1 ? '$bool é igual a 1' : '$bool é diferente de 1';

echo $var . '<br><br>';

$var = $bool === 1 ? '$bool é igual a 1' : '$bool é diferente de 1';

echo $var . '<br><br>';

$var = $bool != 1 ? '$bool é igual a 1' : '$bool é diferente de 1';

echo $var . '<br><br>';
$var = $bool !== 1 ? '$bool é igual a 1' : '$bool é diferente de 1';

echo $var . '<br><br>';

$frase = 'meu pai tinha um cachorro amarelo e rosa';

if (strpos($frase, 'meu')) {
    echo "<br><br>encontrei o Meu<br><br>";
} else {
    echo "<br><br>não encontrei o doguinho D:<br><br>";
}

//switch

switch ($clima) {
    case 'quente':
    case 'tropical';
        if (true) {
            echo '<br>--- if dentro de switch';
        }
        if (true) {
            echo '<br> --- of aninhado dentro de um switch';
        }
        break;
    case 'morno':
        echo "morno é melhor que frio";
        break;

    case 'fresco':
        echo "clima fresco é o melhor ";
        break;

    case 'frio':
        echo "uuuuuuuuuuu está muito frio";
        break;
    default:
        echo 'não foi dessa vez , quem sabe na proxima';
        break;
}

$isso = $isso ?? "isso";
echo "<br><br> olha só $isso , presta atenção é só....";