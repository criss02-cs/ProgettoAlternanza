<html>
    <?php
        include_once "mysql_configuration/connection.php";
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
            INSERT INTO `studenti`(`Matricola`, `Nome`, `Cognome`, `DataNascita`, `ComuneNascita`, `ProvinciaNascita`, `Sesso`, `Indirizzo`, `Mail`, `Telefono`) 
            VALUES ('$matricola', '$nome', '$cognome', '$dataNascita', '$comuneNascita', '$provinciaNascita', '$sesso', '$indirizzo', '$mail', '$telefono')
        ";
        if ($conn->query($sql) === TRUE) {
            echo "Successo";
        } else {
            echo $conn->error;
        }
        header("Location: inserimentoStudenti.html");
    ?>
</html>