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
        <link rel="stylesheet" href="../inserimenti/style.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include("../Materials/menu.php"); ?>
        <div class="container">
            <form id="contact" action="modificaAzienda.php" method="post">
                <h3>Modifica Azienda</h3>
                <fieldset>
                    <input type="text" name="PartitaIva" placeholder="Partita Iva" value='<?php echo $row["PartitaIva"]; ?>' tabindex="1">
                </fieldset>
                <fieldset>
                    <input placeholder="Ragione Sociale" value='<?php echo $row["RagioneSociale"]; ?>' name="RagioneSociale" type="text" tabindex="2">
                </fieldset>
                <fieldset>
                    <input placeholder="Rappresentante Legale" value='<?php echo $row["RappresentanteLegale"]; ?>' name="RappresentanteLegale" type="text" tabindex="3">
                </fieldset>
                <fieldset>
                    <input placeholder="Indirizzo" name="Indirizzo" value='<?php echo $row["IndirizzoAzienda"]; ?>' type="text" tabindex="4">
                </fieldset>
                <fieldset>
                    <input placeholder="Email" name="Mail" value='<?php echo $row["MailAzienda"]; ?>' type="email" tabindex="5">
                </fieldset>
                <fieldset>
                    <input type="tel" placeholder="Numero di Telefono" value='<?php echo $row["TelefonoAzienda"]; ?>' name="Telefono" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" tabindex="6">
                </fieldset>
                <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Modifica</button>
                </fieldset>
            </form>
        </div>
        <?php include("../Materials/footer.php");?>
    </body>
</html>