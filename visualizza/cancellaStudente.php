<html>
    <?php
        include_once "../mysql_configuration/connection.php";
        $conn = $GLOBALS['mysqli'];
        $ma = $_POST["ma"];
        $sql = "
            DELETE FROM `studenti` 
            WHERE `Matricola` = '$ma'
        ";
        $result = $conn->query($sql);
        header("Location: visualizzaStudenti.php");
    ?>
</html>