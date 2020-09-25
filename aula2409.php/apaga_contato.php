<?php
require_once 'db.php';

$id = preg_replace('/\D/', '', $_GET['id']);

if ($objBanco->exec("DELETE FROM contatos WHERE id = $id") !== false) {
    $msg = 'nos livramos das provas';
} else {
    $msg = ' ih chefia, não dei certo';
}


include 'apaga_contato_tpl.php';
