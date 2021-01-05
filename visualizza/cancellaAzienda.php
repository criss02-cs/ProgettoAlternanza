<html>
    <?php
        include_once "../mysql_configuration/connection.php";
        $conn = $GLOBALS['mysqli'];
        $pa = $_POST["pa"];
        $sql = "
            DELETE FROM `aziende` 
            WHERE `PartitaIva` = '$pa'
        ";
        $result = $conn->query($sql);
        header("Location: visualizzaAziende.php");
    ?>
</html>