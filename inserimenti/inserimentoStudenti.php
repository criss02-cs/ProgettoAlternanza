<!DOCTYPE html> 
    <head>
        <title>Inserimento degli studenti</title>
        <link rel="stylesheet" href="../Materials/style.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include("../Materials/menu.php"); ?>
        <div class="container">
            <form id="contact" action="inserimentoStudenti.php" method="post">
                <h3>Inserimento studente</h3>
                <fieldset>
                    <input type="text" name="Matricola" placeholder="Codice Matricola" tabindex="1" required autofocus>
                </fieldset>
                <fieldset>
                    <input placeholder="Nome Studente" name="Nome" type="text" tabindex="2" required>
                </fieldset>
                <fieldset>
                    <input placeholder="Cognome Studente" name="Cognome" type="text" tabindex="3" required>
                </fieldset>
                <fieldset>
                    <input placeholder="Data Nascita" name="DataNascita" type="date" tabindex="4" required>
                </fieldset>
                <fieldset>
                    <input placeholder="Comune di nascita" name="ComuneNascita" type="text" tabindex="5" required>
                </fieldset>
                <fieldset>
                    <input placeholder="Provincia di nascita" name="ProvinciaNascita" type="text" tabindex="6" required>
                </fieldset>
                <fieldset>
                    <select name="Sesso" tabindex="7">
                        <option value="empty" selected disabled>Sesso</option>
                        <option value="M">Maschio</option>
                        <option value="F">Femmina</option>
                    </select>
                </fieldset>
                <fieldset>
                    <input placeholder="Indirizzo" name="Indirizzo" type="text" tabindex="8" required>
                </fieldset>
                <fieldset>
                    <input placeholder="Email" name="Mail" type="email" tabindex="9" required>
                </fieldset>
                <fieldset>
                    <input type="tel" placeholder="Numero di Telefono" name="Telefono" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" tabindex="10" required>
                </fieldset>
                <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Inserisci</button>
                </fieldset>
            </form>
        </div>
        <?php include("../Materials/footer.php"); ?>
    </body>
</html>