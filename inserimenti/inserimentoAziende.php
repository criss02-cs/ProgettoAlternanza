<html>
    <?php
        include_once "../mysql_configuration/connection.php";
        $conn = $GLOBALS['mysqli'];
        $partitaIVA = $_POST['PartitaIva'];
        $ragioneSociale = $_POST['RagioneSociale'];
        $rappresentanteLegale = $_POST['RappresentanteLegale'];
        $indirizzoAzienda = $_POST['IndirizzoAzienda'];
        $telefonoAzienda = $_POST['TelefonoAzienda'];
        $mailAzienda = $_POST['MailAzienda'];
        $sql = "
            INSERT INTO `aziende`(`PartitaIva`, `RagioneSociale`, `RappresentanteLegale`, `IndirizzoAzienda`, `TelefonoAzienda`, `MailAzienda`) 
            VALUES ('$partitaIVA', '$ragioneSociale', '$rappresentanteLegale', '$indirizzoAzienda', '$telefonoAzienda', '$mailAzienda')
        ";
        if ($conn->query($sql) === TRUE) {
            echo "Successo";
        } else {
            echo $conn->error;
        }
        header("Location: inserimentoAziende.html");
    ?>
</html>