<?php

require_once 'config.php';

$objBanco = new PDO(DSN,DB_USER,DB_PASS);

$consulta = $objBanco->query ('SELECT id,nome, whatsapp FROM contatos',PDO:: FETCH_ASSOC);



foreach ($consulta as $registro){
    echo "ID: {$registro['id']} NOME:{$registro['nome']} WHATS: {$registro['whatsapp']}<br>";
}


