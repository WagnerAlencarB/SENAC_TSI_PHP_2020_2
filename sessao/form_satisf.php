<html>

<head>

</head>

<body>
    <center>
        <h3>qual a probabilidade de voce recomendar nossa empresa?

        </h3>
        <form method="post" action="nps.php" >
            pouco provavel
            <?php
            for ($i = 0; $i <= 10; $i++) {
                echo " <input type ='radio' id='nps$i' name='nota' value='$i'><br>
                       <label for='nps$i'> $i </label> <br>   ";
            }
            ?>
            muito provavel
            <br>
            <br>
            explique o motivo<br>
            <textarea name=' explicacao' cols="90" rows="5"></textarea>
            <br>
            <input type="submit"    name="avaliacao" value="avaliar">
        </form>
    </center>
</body>

</html>