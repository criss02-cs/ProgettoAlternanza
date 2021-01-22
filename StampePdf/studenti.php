<?php
        require("../pdf/fpdf.php");
        include_once "../mysql_configuration/connection.php";
        $conn = $GLOBALS['mysqli'];
        $sql = "select * from studenti";
        echo $sql;
        $result = mysqli_query($conn, $sql);
        $pdf = new FPDF('P','mm','A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 25);
        $pdf->Write(10, "Lista studenti");
        $pdf->Ln();
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(50,12,"Matricola",1);
        $pdf->Cell(50,12,"Nome",1);
        $pdf->Cell(50,12,"Cognome",1);
        while($row = mysqli_fetch_assoc($result)){
            $pdf->Ln();
            $pdf->Cell(50,12,$row['Matricola'],1);
            $pdf->Cell(50,12,$row['Nome'],1);
            $pdf->Cell(50,12,$row['Cognome'],1);
        }
        ob_end_clean();
        $pdf->SetCompression(true);
        $pdf->Output();
?>