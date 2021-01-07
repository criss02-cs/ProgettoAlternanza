<?php
    $aziende = $_POST['aziende'];
    $matricole = $_POST['matricole'];
    $inizio = date("Y-m-d", strtotime($_POST['inizio']));
    $fine = date("Y-m-d", strtotime($_POST['fine']));
    //File per la connessione al database
    include_once "../mysql_configuration/connection.php";
    $conn = $GLOBALS['mysqli'];
    $sql = "INSERT INTO stage (fk_matricola, fk_partitaIva, Inizio, Fine) VALUES";
    for($i = 0; $i < count($aziende); $i++){
        $sql = "INSERT INTO stage (fk_matricola, fk_partitaIva, Inizio, Fine) VALUES";
        $sql.= " ($matricole[$i], '$aziende[$i]', '$inizio', '$fine')";
        if($conn->query($sql) === TRUE){
            echo "Successo";
        }
        else{
            echo $conn->error;
        }
    }
    header("location: index.php");
?>