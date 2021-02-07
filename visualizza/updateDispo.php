<html>
    <?php
        include_once "../mysql_configuration/connection.php";
        $conn = $GLOBALS['mysqli'];
        $partitaIVA = $_POST['PartitaIva'];
		$anno== $_POST['Anno'];
        $disp3 = $_POST['Disp3'];
        $disp4 = $_POST['Disp4'];
        $disp5 = $_POST['Disp5'];
        $sql = "
            UPDATE `disponibilita` 
            SET `disp3` = '$disp3', `disp4` = '$disp4', `disp5` = '$disp5'
            WHERE `fk_partitaIVA` = '$partitaIVA' AND annoScolastico=YEAR(CURDATE())
        ";
        echo $sql."<br>";
        if ($conn->query($sql) === TRUE) {
            echo "Successo";
        } else {
            echo $conn->error;
        }
        header("Location: visualizzaDispo.php");
    ?>
</html>