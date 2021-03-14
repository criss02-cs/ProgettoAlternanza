<!DOCTYPE html> 
    <head>
        <title>Inserimento dei tutor scolastici</title>
        <link rel="stylesheet" href="../Materials/style.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php 
            include("../Materials/menu.php");
        ?>
        <div class="container">
            <form id="contact" action="insTutorScolastici.php" method="post">
                <h3>Inserimento tutor scolastico</h3>
                <fieldset>
                    <input type="text" name="Nome" placeholder="Nome" tabindex="1" required autofocus>
                </fieldset>
                <fieldset>
                    <input placeholder="Cognome" name="Cognome" type="text" tabindex="2" required>
                </fieldset>
                <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Inserisci</button>
                </fieldset>
            </form>
        </div>
        <?php include("../Materials/footer.php"); ?>
    </body>
</html>