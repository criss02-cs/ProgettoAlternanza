<html>
    <?php
        include_once "../mysql_configuration/connection.php";
        $conn = $GLOBALS['mysqli'];
        $matricola = $_POST['Matricola'];
        $nome = $_POST['Nome'];
        $cognome = $_POST['Cognome'];
        $dataNascita = $_POST['DataNascita'];
        $comuneNascita = $_POST['ComuneNascita'];
        $provinciaNascita = $_POST['ProvinciaNascita'];
        $sesso = $_POST['Sesso'];
        $indirizzo = $_POST['Indirizzo'];
        $mail = $_POST['Mail'];
        $telefono = $_POST['Telefono'];
        $sql = "
            UPDATE `studenti` 
            SET `Nome` = '$nome', `Cognome` = '$cognome', `DataNascita` = '$dataNascita', `ComuneNascita` = '$comuneNascita', `ProvinciaNascita` = '$provinciaNascita', `Sesso` = '$sesso', `Indirizzo` = '$indirizzo', `Mail` = '$mail', `Telefono` = '$telefono' 
            WHERE `Matricola` = '$matricola'
        ";
        if ($conn->query($sql) === TRUE) {
            echo "Successo";
        } else {
            echo $conn->error;
        }
        header("Location: visualizzaStudenti.php");
    ?>
</html>