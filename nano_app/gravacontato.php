<?php


require_once 'db.php';


$objStmt = $objBanco -> prepare('INSERT INTO contatos 
                                    (nome,whatsapp) 
                                VALUES 
                                    (:nome,:whatsapp)');


$objStmt -> bindParam(':nome', $_POST['nm']);
$objStmt -> bindParam(':whatsapp', $_POST['whats']);

if($objStmt ->execute()){
    $msg = 'obrigado';
}else {
    $msg = 'nem lost ta tão perdido assim';
}


include 'gravacontatotpl.php ';