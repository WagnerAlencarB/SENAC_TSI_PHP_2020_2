<?php
ini_set('display_errors',1);
ini_set('display_statup_errors',1);
error_reporting(E_ALL);
date_default_timezone_set('America/Sao_Paulo');

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
 echo '<br> hoje é ' .$semana[$hoje] . "<br>";


echo '<br><br>';
unset($semana);
$semana['Domingo']= 0;
$semana['segunda'] = 1;
$semana['terça'] = 2;
$semana['quarta'] = 3;
$semana['quinta'] = 4;
$semana['sexta'] = 5;
$semana['sabado'] = 6;


$hoje = date('w');

echo "<br> Hoje é " . $semana['quinta'] . " com índice alfanumérico";
echo '<br><br>';

$usuario = [        'nome'  =>    'Luiz Bono',
                    'Idade' =>     25,
                    'peso'  =>     67.8,
                    'signo' =>     'aquariano'];

echo "o professor " .  $usuario['nome'] . " tem " . $usuario['Idade']." anos " .$usuario['peso']."Kg e é ". $usuario['signo'] ."<br>";
    
define('MUNDO', 'raimundo nonato');

define('RES_P_PAG' , 10);

for ($i = 0; $i < RES_P_PAG;$i++){

    echo "resultado $i<br>";
}
echo 'olá ' .MUNDO . "<br>";

echo "o professor  {$usuario['nome']} tem  {$usuario['Idade']} anos ,pesa " .
 number_format($usuario['peso'],1, ',','.'). 
 " Kg e é  {$usuario['signo']}" ;
    



 
 $professores = array (  0 => array( 'nome'  =>    'Luiz Bono',
                                     'Idade' =>     25,
                                     'peso'  =>     67.8,
                                     'signo' =>     'aquariano'),

                         1 => array ( 'nome'  =>    'Tiao',
                                      'Idade' =>     21,
                                      'peso'  =>     50,
                                      'signo' =>     'SargiOtario'),
                        
                         2 => array ( 'nome'  =>    'Serjao',
                                      'Idade' =>     23,
                                      'peso'  =>     60,
                                      'signo' =>     'Liao'));

?>

<table border="1">
<tr><td>ID</td><td>Nome</td><td>Idade</td><td>Peso</td><td>Signo</td> </tr>
<?php
foreach ($professores as $linha => $professor){
    echo "<tr> <td>$linha</td>
        <td>{$professor['nome']}</td>
        <td>{$professor['Idade']}</td> 
        <td>{$professor['peso']}</td>
        <td>{$professor['signo']}</td></tr>";
}
 
?>

</table>