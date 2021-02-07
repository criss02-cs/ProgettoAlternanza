<!DOCTYPE html>
<html lang="it">
<?php
    //File per la connessione al database
    include_once "../mysql_configuration/connection.php";
    $conn = $GLOBALS['mysqli'];
?>
<head>
    <title>Inserimento stage</title>
    <link rel="stylesheet" href="../Materials/style.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        include("../Materials/menu.php");
    ?>
    <div class="container">
        <form action="#" id="contact" method="post">
            <h3>Inserimento Disponibilita</h3>
            <fieldset>
                <select name="aziende[]" hidden multiple="multiple">
                    <?php
                        foreach ($_GET['azienda'] as $aziende) { ?>
                            <option value="<?= $aziende ?>" selected><?= $aziende ?></option>
                        <?php
                        }
                    ?>
                </select>
                <?php
                    include("listaDispo.php");
                ?>
            </fieldset>
            <fieldset>
                <input name="disp3" tabindex="2" type="number" placeholder="Disponibilita terze">
            </fieldset>
            <fieldset>
                <input name="disp4" tabindex="3" type="number" placeholder="Disponibilita quarte">
            </fieldset>
            <fieldset>
                <input name="disp5" tabindex="4" type="number" placeholder="Disponibilita quinte">
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Inserisci</button>
            </fieldset>
        </form> 
    </div>
    <?php
        include("../Materials/footer.php");
    ?>
</body>
</html>