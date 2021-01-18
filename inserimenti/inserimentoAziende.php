<!DOCTYPE html> 
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inserimento delle aziende</title>
        <link rel="stylesheet" href="../Materials/style.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include("../Materials/menu.php"); ?>
        <div class="container">
            <form id="contact" action="inserimentoAziende.php" method="post">
                <h3>Inserimento azienda</h3>
                <fieldset>
                    <input type="text" name="PartitaIva" placeholder="Partita Iva" tabindex="1" required autofocus>
                </fieldset>
                <fieldset>
                    <input placeholder="Ragione Sociale" name="RagioneSociale" type="text" tabindex="2" required>
                </fieldset>
                <fieldset>
                    <input placeholder="Rappresentante Legale" name="RappresentanteLegale" type="text" tabindex="3" required>
                </fieldset>
                <fieldset>
                    <input placeholder="Indirizzo" name="Indirizzo" type="text" tabindex="4" required>
                </fieldset>
                <fieldset>
                    <input placeholder="Email" name="Mail" type="email" tabindex="5" required>
                </fieldset>
                <fieldset>
                    <input type="tel" placeholder="Numero di Telefono" name="Telefono" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" tabindex="5" required>
                </fieldset>
                <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Inserisci</button>
                </fieldset>
            </form>
        </div>
        <?php include("../Materials/footer.php"); ?>
    </body>
</html>