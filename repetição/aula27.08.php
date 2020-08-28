<?php
date_default_timezone_set('America/Sao_Paulo');
//estrutura de pré testada
for ( $i = 0,$j = 4;$i < 5; $i++,$j--){
    echo "linha $i $j<br>";
}
$i = 0;
$j = 4;
while ($i < 5 && $j >= 0){
    echo "coluna: $i $j,";
    $i++;
    $j--;
}


// estrutura de pós testada
$i = 0;
$j = 4;
do {
    echo "<br>linha numero: $i $j<br>";

    $i++;
    $j--;

}while ($i < 5 && $j>=0);


$domingo  =0;
$segunda  =1;
$terça    =2;
$quarta   =3;
$quinta   =4;
$sexta    =5;
$sabado   =6;

var_dump(date ('d/m/y') );
switch ( date( 'W' ) ){
    case 0:
        echo 'Domingo';
    break;
    case 1:
        echo 'segunda';
    break;
    case 2:
        echo 'terça';
    break;
    case 3:
        echo 'quarta';
    break;
    case 4:
        echo 'quinta';
    break;
    case 5:
        echo 'sexta';
    break;
    case 6:
        echo 'sabado';
    break;
    
}
$semana[0] = 'Domingo';
$semana[1] = 'segunda';
$semana[2] = 'terça';
$semana[3] = 'quarta';
$semana[4] = 'quinta';
$semana[5] = 'sexta';
$semana[6] = 'sabado';

$hoje = date('w');
 echo 'hoje é'.$semana[$hoje];
