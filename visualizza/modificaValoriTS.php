<!DOCTYPE html>
    <?php
        include_once "../mysql_configuration/connection.php";
        $conn = $GLOBALS['mysqli'];
        $id = $_POST["id"];
        $sql = "
            SELECT * 
            FROM `tutorscolastici`
            WHERE '$id' = `id_tutorscolastico`
        ";
        $result = $conn->query($sql);
        $row = mysqli_fetch_assoc($result);
    ?>
    <head>
        <title>Modifca dell'azienda</title>
        <link rel="stylesheet" href="../Materials/style.css">
        <link rel="stylesheet" href="../inserimenti/style.css">
    </head>
    <body>
        <?php include("../Materials/menu.php"); ?>
        <div class="container">
            <form id="contact" action="modificaTutorS.php" method="post">
                <h3>Modifica Tutor Scolastico</h3>
                <input type="hidden" name="id_tutorscolastico" value='<?php echo $row["id_tutorscolastico"]; ?>' disabled>
                <fieldset>
                    <input type="text" name="Nome" value="<?php echo $row["Nome"]; ?>" placeholder="Nome" tabindex="1">
                </fieldset>
                <fieldset>
                    <input placeholder="Cognome" value="<?php echo $row["Cognome"]; ?>" name="Cognome" type="text" tabindex="2">
                </fieldset>
                <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Modifica</button>
                </fieldset>
            </form>
        </div>
        <?php include("../Materials/footer.php");?>
    </body>
</html>