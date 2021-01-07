<html>
    <?php
        include_once "../mysql_configuration/connection.php";
        $conn = $GLOBALS['mysqli'];
        $partitaIVA = $_POST['PartitaIva'];
        $ragioneSociale = $_POST['RagioneSociale'];
        $rappresentanteLegale = $_POST['RappresentanteLegale'];
        $indirizzoAzienda = $_POST['Indirizzo'];
        $telefonoAzienda = $_POST['Telefono'];
        $mailAzienda = $_POST['Mail'];
        $sql = "
            UPDATE `aziende` 
            SET `RagioneSociale` = '$ragioneSociale', `RappresentanteLegale` = '$rappresentanteLegale', `IndirizzoAzienda` = '$indirizzoAzienda', `TelefonoAzienda` = '$telefonoAzienda', `MailAzienda` = '$mailAzienda'
            WHERE `PartitaIva` = '$partitaIVA'
        ";
        echo $sql."<br>";
        if ($conn->query($sql) === TRUE) {
            echo "Successo";
        } else {
            echo $conn->error;
        }
        header("Location: visualizzaAziende.php");
    ?>
</html>