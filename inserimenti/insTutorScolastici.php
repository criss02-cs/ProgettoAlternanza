<html>
    <?php
        include_once "../mysql_configuration/connection.php";
        $conn = $GLOBALS['mysqli'];
        $nome = $_POST['Nome'];
        $cognome = $_POST['Cognome'];
        $sql = "
            INSERT INTO `tutorscolastici`(`Nome`, `Cognome`) 
            VALUES ('$nome', '$cognome')
        ";
        if ($conn->query($sql) === TRUE) {
            echo "Successo";
        } else {
            echo $conn->error;
        }
        header("Location:../visualizza/visualizzaTutorS.php");
    ?>
</html>