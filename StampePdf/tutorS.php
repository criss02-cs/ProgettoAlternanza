<?php
        require("../pdf/fpdf.php");
        include_once "../mysql_configuration/connection.php";
        $conn = $GLOBALS['mysqli'];
        $id = $_POST['id'];
        $sql = "select * from tutorscolastici where id_tutorscolastico=$id";
        echo $sql;
        $result = mysqli_query($conn, $sql);
        $pdf = new FPDF('P','mm','A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 25);
        $pdf->Write(10, "Lista tutor scolastici");
        $pdf->Ln();
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(50,12,"Id Tutor Scolastico",1);
        $pdf->Cell(50,12,"Nome",1);
        $pdf->Cell(50,12,"Cognome",1);
        while($row = mysqli_fetch_assoc($result)){
            $pdf->Ln();
            $pdf->Cell(50,12,$row['id_tutorscolastico'],1);
            $pdf->Cell(50,12,$row['Nome'],1);
            $pdf->Cell(50,12,$row['Cognome'],1);
        }
        ob_end_clean();
        $pdf->SetCompression(true);
        $pdf->Output();
?>