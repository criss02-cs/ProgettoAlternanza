<!DOCTYPE html>
    <?php
        include_once "../mysql_configuration/connection.php";
        $conn = $GLOBALS['mysqli'];
        $pa = $_POST["pa"];
        $sql = "
            SELECT * 
            FROM `aziende`
            WHERE '$pa' = `PartitaIva`
        ";
        $result = $conn->query($sql);
        $row = mysqli_fetch_assoc($result);
    ?>
    <head>
        <title>Modifca dell'azienda</title>
        <link rel="stylesheet" href="../Materials/style.css">
    </head>
    <body>
        <?php include("../Materials/menu.php"); ?>
        <form action="modificaAzienda.php" method="post">
            <label for="PartitaIva">Partita IVA: </label><br>
            <input type="text" name="PartitaIva" value='<?php echo $row["PartitaIva"]; ?>' disabled><br>
            <input type="hidden" name="pa" value='<?php echo $row["PartitaIva"]; ?>'>
            <label for="RagioneSociale">Ragione Sociale: </label><br>
            <input type="text" name="RagioneSociale" value='<?php echo $row["RagioneSociale"]; ?>'><br>
            <label for="RappresentanteLegale">Rappresentante Legale: </label><br>
            <input type="text" name="RappresentanteLegale" value='<?php echo $row["RappresentanteLegale"]; ?>'><br>
            <label for="IndirizzoAzienda">Indirizzo dell'azienda: </label><br>
            <input type="text" name="IndirizzoAzienda" value='<?php echo $row["IndirizzoAzienda"]; ?>'><br>
            <label for="TelefonoAzienda">Telefono</label><br>
            <input type="tel" name="TelefonoAzienda" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" value='<?php echo $row["TelefonoAzienda"]; ?>'><br>
            <label for="MailAzienda">Mail: </label><br>
            <input type="text" name="MailAzienda" value='<?php echo $row["MailAzienda"]; ?>'><br><br>
            <input type="submit" value="Modifica">
        </form>
    </body>
</html>