<?php
    session_start();
    $_SESSION['nomeUtente'] = "";
    unset($_SESSION['nomeUtente']);
    session_destroy();
    header("Location: ../index.php");
?>
