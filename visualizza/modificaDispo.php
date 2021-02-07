<!DOCTYPE html>
    <?php
        include_once "../mysql_configuration/connection.php";
        $conn = $GLOBALS['mysqli'];
        $pa = $_POST["pa"];
        $sql = "
		SELECT *
			FROM aziende
			RIGHT JOIN disponibilita
			ON aziende.PartitaIva = disponibilita.fk_partitaIVA
			where annoScolastico=YEAR(CURDATE())AND '$pa' = `PartitaIva`
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
            <form id="contact" action="updateDispo.php" method="post">
				<h3>Azienda: <?php echo $row["RagioneSociale"]; ?></h3>
				<h4>Sede: <?php echo $row["IndirizzoAzienda"]; ?></h4>
				<h4>Tel. <?php echo $row["TelefonoAzienda"]; ?></h4>
                <fieldset>
                    <input placeholder="PartitaIva" name="PartitaIva" hidden="true" value='<?php echo $row["PartitaIva"]; ?>' tabindex="1">
                </fieldset>
                <fieldset>
                    <h2>Disponibilita terze</h2>
                </fieldset>
                <fieldset>
                  <input placeholder="Disponibilita terze" name="disp3" value='<?php echo $row["disp3"]; ?>' type="number" tabindex="3">
                </fieldset>
                <fieldset>
                    <h2>Disponibilita quarte</h2>
                </fieldset>
				<fieldset>
                   <input placeholder="Disponibilita quarte" name="disp4" value='<?php echo $row["disp4"]; ?>' type="number" tabindex="4">
                </fieldset>
                <fieldset>
                    <h2>Disponibilita quinte</h2>
                </fieldset>
				<fieldset>
                    <input placeholder="Disponibilita quinte" name="disp5" value='<?php echo $row["disp5"]; ?>' type="number" tabindex="5">
                </fieldset>
                <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Modifica</button>
                </fieldset>
            </form>
        </div>
        <?php include("../Materials/footer.php");?>
    </body>
</html>