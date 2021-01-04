<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <?php include("menu.php"); ?>
        <video id="myVideo" autoplay muted loop>
            <source src="informatico.mp4" type="video/mp4">
        </video>
        <div class="content">
            <h1>Alternanza Scuola Lavoro Indirizzo Informatico</h1>
            <p>Benvenuti nel sito per la gestione dell'alternanza scuola lavoro dell'indirizzo informatico
            del Polo Tecnico Franchetti Salviani</p>
            <button id="myBtn" onclick="myFunction()">Pause</button>
        </div>
        
        <script>
            var video = document.getElementById("myVideo");
            var btn = document.getElementById("myBtn");

            function myFunction(){
                if(video.paused){
                    video.play();
                    btn.innerHTML = "Pause";
                }
                else{
                    video.pause();
                    btn.innerHTML = "Play";
                }
            }
        </script>   
    </body>
</html>