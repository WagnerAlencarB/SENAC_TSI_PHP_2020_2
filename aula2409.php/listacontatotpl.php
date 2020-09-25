<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p> <?php echo $msg; ?> </p>
    <a href='./'>+Novo contato</a>
    <br><br>
    <table border="1" width="50%">
        <tr>
            <td>ID</td>
            <td>nome</td>
            <td>whatsapp</td>
            <td>ação</td>
        </tr>
        <?php
        if (is_array($tabela) > 0) {
            foreach ($tabela as $id => $reg) {
                echo " <tr>
                            <td>nome</td>
                            <td> {$reg['nome']}</td>
                            <td> {$reg['whatsapp']}</td>
                            <td><a href='apaga_contato.php?id=$id'></a> Apagar</td>
                            <td><a href='listacontato.php?id=$id'></a> listar</td>
                        </tr>";
            }
        } else {
            echo " <tr>
                      <tdcolspan ='3' > não há dados </td>
                   </tr>";
        }
        ?>


    </table>
</body>

</html>