<html>
    <?php
        include_once "../mysql_configuration/connection.php";
        $conn = $GLOBALS['mysqli'];
        $id = $_POST["id"];
        $sql = "
            DELETE FROM `tutorscolastici` 
            WHERE `id_tutorscolastico` = '$id'
        ";
        $result = $conn->query($sql);
        header("Location: visualizzaTutorS.php");
    ?>
</html>