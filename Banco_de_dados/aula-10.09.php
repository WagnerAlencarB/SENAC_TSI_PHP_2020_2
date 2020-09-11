<?php
$db = mysqli_connect('localhost', 'root', '', 'php');


$query = mysqli_query( $db,
    'CREATE TABLE IF NOT EXISTS contatos
(id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(255)NOT NULL,
whatsapp BIGINT )');




if ($query) {
    echo 'tabela contatos criada com sucesso!<br>';
} else {
    echo ' tabela não foi criada';
    echo mysqli_connect_error();
}

$contato = ['nome' => 'Luiz Bono','whatsapp' => '5511900000000'];

if (mysqli_query($db, 
"
INSERT INTO contatos 
    (nome, whatsapp)
VALUES
    ('{$contato['nome']}','{$contato['whatsapp']}')"))
{
    echo "contato inserido com sucesso!!";
}

$query = mysqli_query($db,' SELECT 
                                id, nome, whatsapp
                            FROM
                                contatos');

echo '<table>';
echo "<tr><td> ID</td><td>NOME</td><td> WHATSAPP</td></tr>";
while ($registro = $query->fetch_assoc() ){
    echo "<tr>
             <td> {$registro['id']}</td>
             <td>{$registro['nome']}</td>
             <td> {$registro['whatsapp']}</td>
          </tr>";
}
                          
echo '</table>';
if(mysqli_query($db, '
                    DELETE FROM contatos
                    WHERE id')){
             echo "registro apagado com sucesso!" ;      
}else{
    echo" não foi possivel apagar o registro";
}

var_dump($_POST);