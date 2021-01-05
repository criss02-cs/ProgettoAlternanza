<!DOCTYPE html>
    <?php
        include_once "../mysql_configuration/connection.php";
        $conn = $GLOBALS['mysqli'];
        $ma = $_POST["ma"];
        $sql = "
            SELECT * 
            FROM `studenti`
            WHERE '$ma' = `Matricola`
        ";
        $result = $conn->query($sql);
        $row = mysqli_fetch_assoc($result);
    ?>
    <head>
        <title>Modifca dell'azienda</title>
        <link rel="stylesheet" href="../Materials/style.css">
    </head>
    <body>
        <?php include("../Materials/menu.php"); ?>
        <form action="modificaStudente.php" method="post">
            <label for="Matricola">Matricola: </label><br>
            <input type="text" name="Matricola" value='<?php echo $row["Matricola"]; ?>' disabled><br>
            <input type="hidden" name="ma" value='<?php echo $row["Matricola"]; ?>'>
            <label for="Nome">Nome: </label><br>
            <input type="text" name="Nome" value='<?php echo $row["Nome"]; ?>'><br>
            <label for="Cognome">Cognome: </label><br>
            <input type="text" name="Cognome" value='<?php echo $row["Cognome"]; ?>'><br>
            <label for="DataNascita">Data di nascita: </label><br>
            <input type="date" name="DataNascita" value='<?php echo $row["DataNascita"]; ?>'><br>
            <label for="ComuneNascita">Comune di nascita: </label><br>
            <input type="text" name="ComuneNascita" value='<?php echo $row["ComuneNascita"]; ?>'><br>
            <label for="ProvinciaNascita">Provincia di nascita: </label><br>
            <input type="text" name="ProvinciaNascita" value='<?php echo $row["ProvinciaNascita"]; ?>'><br>
            <label for="Sesso">Sesso: </label><br>
            <input type="text" name="Sesso" value='<?php echo $row["Sesso"]; ?>'><br>
            <label for="Indirizzo">Indirizzo: </label><br>
            <input type="text" name="Indirizzo" value='<?php echo $row["Indirizzo"]; ?>'><br>
            <label for="Mail">Mail: </label><br>
            <input type="text" name="Mail" value='<?php echo $row["Mail"]; ?>'><br>
            <label for="Telefono">Telefono</label><br>
            <input type="tel" name="Telefono" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" value='<?php echo $row["Telefono"]; ?>'><br><br>
            <input type="submit" value="Modifica">
        </form>
    </body>
</html>