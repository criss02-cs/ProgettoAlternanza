<?php
    include_once "../mysql_configuration/connection.php";
    $conn = $GLOBALS['mysqli'];
    $nomeUtente = $_POST['nomeUtente'];
    $password = $_POST['password'];
    // protezione per SQL injection
    $nomeUtente = stripslashes($nomeUtente);
    $password = stripslashes($password);
    $nomeUtente =  $conn->real_escape_string($nomeUtente);
    $password = $conn->real_escape_string($password);
    $passmd5 = md5($password);
    $sql = "SELECT nomeUtente, password FROM utenti WHERE nomeUtente = '$nomeUtente' AND password = '$passmd5'";
    $result = $conn->query($sql);
    $conta = mysqli_num_rows($result);
    session_start();
    if($conta == 1){
        $_SESSION['nomeUtente'] = $nomeUtente;
        header("Location: ../index.php");
    } 
    else{
        $_SESSION['nomeUtente'] = "Credenziali errate riprova";
        header("Location: index.php");
    }
?>