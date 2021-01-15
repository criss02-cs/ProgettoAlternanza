<?php
        require("../pdf/fpdf.php");
        include_once "../mysql_configuration/connection.php";
        $conn = $GLOBALS['mysqli'];
        $sql = "select * from aziende";
        echo $sql;
        $result = mysqli_query($conn, $sql);
        $pdf = new FPDF('L','mm','A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 25);
        $pdf->Write(10, "Lista aziende");
        $pdf->Ln();
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(30,12,"Partita Iva",1);
        $pdf->Cell(50,12,"Ragione Sociale",1);
        $pdf->Cell(50,12,"Rappresentante Legale",1);
        $pdf->Cell(50,12,"Indirizzo",1);
        $pdf->Cell(50,12,"Telefono",1);
        $pdf->Cell(50,12,"Mail",1);
        while($row = mysqli_fetch_assoc($result)){
            $pdf->Ln();
            $pdf->Cell(30,12,$row['PartitaIva'],1);
            $pdf->Cell(50,12,$row['RagioneSociale'],1);
            $pdf->Cell(50,12,$row['RappresentanteLegale'],1);
            $pdf->Cell(50,12,$row['IndirizzoAzienda'],1);
            $pdf->Cell(50,12,$row['TelefonoAzienda'],1);
            $pdf->Cell(50,12,$row['MailAzienda'],1);
        }
        ob_end_clean();
        $pdf->SetCompression(true);
        $pdf->Output();
?>