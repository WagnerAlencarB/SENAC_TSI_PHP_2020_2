<?php
ini_set('display_errors' ,1);
ini_set('display_startup',1);
var_dump($_POST);

$nota = $_POST['nota'];
$explicacao = $_POST['explicacao'];

echo " voce deu a nota $nota pelo motivo \"$explicacao\"";