<!DOCTYPE html>
<html>
    <?php
        include_once "../mysql_configuration/connection.php";
        $conn = $GLOBALS['mysqli'];
        $orderBy = $_POST['orderBy'] = !empty($_POST['orderBy']) && $_POST['order'] != "empty" ? $_POST['orderBy'] : "PartitaIva";
        $order = $_POST['order'] = !empty($_POST['order']) && $_POST['order'] != "empty" ? $_POST['order'] : "ASC";
        $search = $_POST['search'] = !empty($_POST['search']) ? $_POST['search'] : "%";
        $sql = "         
			SELECT *
			FROM aziende
			RIGHT JOIN disponibilita
			ON aziende.PartitaIva = disponibilita.fk_partitaIVA
			where annoScolastico=YEAR(CURDATE())
        ";
        $result = $conn->query($sql);
    ?>
    <head>
        <title>Disponibilità aziende</title>
        <link rel="stylesheet" href="../Materials/style.css">
        <link rel="stylesheet" href="style.css">
        <link href="../fontawesome/css/all.min.css" rel="stylesheet">
    </head>
    <body>
        <?php 
            include("../Materials/menu.php"); 
            session_start();
            if(!isset($_SESSION['nomeUtente'])){
                header("Location: ../Login/index.php");
            }
        ?>
        <table id="stage">
            <tr>
                <th>Partita IVA</th>
                <th>Ragione sociale</th>
                <th>Indirizzo</th>
                <th>Telefono</th>
				<th>III</th>
				<th>IV</th>
				<th>V</th>
                <th>Modifica</th>
            </tr>
            <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row["PartitaIva"]; ?></td>
                            <td><?php echo $row["RagioneSociale"]; ?></td>
                            <td><?php echo $row["IndirizzoAzienda"]; ?></td>
                            <td><?php echo $row["TelefonoAzienda"]; ?></td>
							<td><?php echo $row["disp3"]; ?></td>
							<td><?php echo $row["disp4"]; ?></td>
							<td><?php echo $row["disp5"]; ?></td>
                            <td>
                                <form action="modificaDispo.php" method="post">
                                    <input type="hidden" name="pa" value='<?php echo $row["PartitaIva"]; ?>'>
                                    <button type="submit" class="button"><i class="far fa-edit"></i></button>
                                </form>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "0 results";
                }
            ?>
        </table>
        <?php include("../Materials/footer.php");?>
    </body>
</html>