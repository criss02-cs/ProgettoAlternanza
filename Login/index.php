<!DOCTYPE html> 
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inserimento delle aziende</title>
        <link rel="stylesheet" href="../Materials/style.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php 
            session_start();
            if(isset($_SESSION['nomeUtente'])){
                if($_SESSION['nomeUtente'] == "Credenziali errate riprova"){ ?>
                    <script language="Javascript">
                        alert("Credenziali errate riprova");
                    </script>
                <?php
                    $_SESSION = array();
                    session_destroy();
                } 
                else{ ?>
                    <script language="Javascript">
                        alert("Login avvenuto con successo!");
                    </script>
                    <?php
                    $_SESSION = array();
                    session_destroy();
                }
            }            
        ?>
        <?php include("../Materials/menu.php"); ?>
        <div class="container">
            <form id="contact" action="login.php" method="post">
                <h3>Login</h3>
                <fieldset>
                    <input type="text" name="nomeUtente" placeholder="Nome utente" tabindex="1" required autofocus>
                    <input type="hidden" name="paginaPrimaria" value= <?php echo $_SERVER['HTTP_REFERER'] ?>>
                </fieldset>
                <fieldset>
                    <input placeholder="Password" name="password" type="password" tabindex="2" required>
                </fieldset>
                <fieldset>
                    <button name="login" type="submit" id="contact-submit" data-submit="...Sending">Login</button>
                </fieldset>
            </form>
        </div>
        <?php include("../Materials/footer.php"); ?>
    </body>
</html>