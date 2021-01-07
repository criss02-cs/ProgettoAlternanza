<!DOCTYPE html>
    <?php
        include_once "../mysql_configuration/connection.php";
        $conn = $GLOBALS['mysqli'];
        $ma = $_POST["ma"];
        $sql = "
            SELECT * 
            FROM `studenti`
            WHERE '$ma' = `Matricola`
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
            <form id="contact" action="modificaStudente.php" method="post">
                <h3>Modifica studente</h3>
                <fieldset>
                    <input type="text" name="Matricola" value="<?php echo $row["Matricola"]; ?>" placeholder="Codice Matricola" tabindex="1">
                </fieldset>
                <fieldset>
                    <input placeholder="Nome Studente" value='<?php echo $row["Nome"]; ?>' name="Nome" type="text" tabindex="2">
                </fieldset>
                <fieldset>
                    <input placeholder="Cognome Studente" value='<?php echo $row["Cognome"]; ?>' name="Cognome" type="text" tabindex="3">
                </fieldset>
                <fieldset>
                    <input placeholder="Data Nascita" value='<?php echo $row["DataNascita"]; ?>' name="DataNascita" type="date" tabindex="4">
                </fieldset>
                <fieldset>
                    <input placeholder="Comune di nascita" value='<?php echo $row["ComuneNascita"]; ?>' name="ComuneNascita" type="text" tabindex="5">
                </fieldset>
                <fieldset>
                    <input placeholder="Provincia di nascita" value='<?php echo $row["ProvinciaNascita"]; ?>' name="ProvinciaNascita" type="text" tabindex="6">
                </fieldset>
                <fieldset>
                    <select name="Sesso" tabindex="7">
                        <option value="empty" selected disabled>Sesso</option>
                        <option value="M" <?php if($row["Sesso"] == "M") echo 'selected'; ?>>Maschio</option>
                        <option value="F" <?php if($row["Sesso"] == "F") echo 'selected'; ?>>Femmina</option>
                    </select>
                </fieldset>
                <fieldset>
                    <input placeholder="Indirizzo" value='<?php echo $row["Indirizzo"]; ?>' name="Indirizzo" type="text" tabindex="8">
                </fieldset>
                <fieldset>
                    <input placeholder="Email" value='<?php echo $row["Mail"]; ?>' name="Mail" type="email" tabindex="9">
                </fieldset>
                <fieldset>
                    <input type="tel" placeholder="Numero di Telefono" value='<?php echo $row["Telefono"]; ?>' name="Telefono" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" tabindex="10">
                </fieldset>
                <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Modifica</button>
                </fieldset>
            </form>
        </div>
        <?php include("../Materials/footer.php");?>
    </body>
</html>