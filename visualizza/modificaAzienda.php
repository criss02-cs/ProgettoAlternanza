<html>
    <?php
        include_once "../mysql_configuration/connection.php";
        $conn = $GLOBALS['mysqli'];
        $partitaIVA = $_POST['pa'];
        $ragioneSociale = $_POST['RagioneSociale'];
        $rappresentanteLegale = $_POST['RappresentanteLegale'];
        $indirizzoAzienda = $_POST['IndirizzoAzienda'];
        $telefonoAzienda = $_POST['TelefonoAzienda'];
        $mailAzienda = $_POST['MailAzienda'];
        $sql = "
            UPDATE `aziende` 
            SET `RagioneSociale` = '$ragioneSociale', `RappresentanteLegale` = '$rappresentanteLegale', `IndirizzoAzienda` = '$indirizzoAzienda', `TelefonoAzienda` = '$telefonoAzienda', `MailAzienda` = '$mailAzienda'
            WHERE `PartitaIva` = '$partitaIVA'
        ";
        if ($conn->query($sql) === TRUE) {
            echo "Successo";
        } else {
            echo $conn->error;
        }
        header("Location: visualizzaAziende.php");
    ?>
</html>