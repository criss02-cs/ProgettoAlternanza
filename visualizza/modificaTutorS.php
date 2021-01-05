<html>
    <?php
        include_once "../mysql_configuration/connection.php";
        $conn = $GLOBALS['mysqli'];
        $id_tutorscolastico = $_POST['id'];
        $nome = $_POST['Nome'];
        $cognome = $_POST['Cognome'];
        $sql = "
            UPDATE `tutorscolastici` SET `Nome` = '$nome', `Cognome` = '$cognome' 
            WHERE `id_tutorscolastico` = '$id_tutorscolastico'
        ";
        if ($conn->query($sql) === TRUE) {
            echo "Successo";
        } else {
            echo $conn->error;
        }
        header("Location: visualizzaTutorS.php");
    ?>
</html>