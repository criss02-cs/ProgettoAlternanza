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
            FROM aziende right join disponibilita on PartitaIva = fk_partitaIVA
            WHERE (PartitaIva LIKE '%".$search."%') OR 
            (RagioneSociale LIKE '%".$search."%') OR
            (RappresentanteLegale LIKE '%".$search."%') OR
            (IndirizzoAzienda LIKE '%".$search."%') OR
            (TelefonoAzienda LIKE '%".$search."%') OR
            (MailAzienda LIKE '%".$search."%') OR
            annoScolastico LIKE '%". date("Y") ."%' 
            OR annoScolastico LIKE '%". date("Y", strtotime("+1 years")) ."%'
            ORDER BY $orderBy $order;
        ";
        $result = $conn->query($sql);
    ?>
    <head>
        <title>Visualizza aziende</title>
        <link rel="stylesheet" href="../Materials/style.css">
        <link rel="stylesheet" href="style.css">
        <link href="../fontawesome/css/all.min.css" rel="stylesheet">
    </head>
    <body>
        <?php 
            include("../Materials/menu.php");
            if(!isset($_SESSION['nomeUtente'])){
                header("Location: ../Login/index.php");
            }
        ?>
        <form action="visualizzaAziende.php" method="post" onchange="this.submit()">
            <select name="orderBy">
                <option value="PartitaIva" <?php if(!empty($_POST['orderBy']) && $orderBy == "PartitaIva") echo 'selected';?>>Partita IVA</option>
                <option value="RagioneSociale" <?php if(!empty($_POST['orderBy']) && $orderBy == "RagioneSociale") echo 'selected';?>>Ragione sociale</option>
                <option value="RappresentanteLegale" <?php if(!empty($_POST['orderBy']) && $orderBy == "RappresentanteLegale") echo 'selected';?>>Rappresentante Legale</option>
                <option value="IndirizzoAzienda" <?php if(!empty($_POST['orderBy']) && $orderBy == "IndirizzoAzienda") echo 'selected';?>>Indirizzo</option>
                <option value="TelefonoAzienda" <?php if(!empty($_POST['orderBy']) && $orderBy == "TelefonoAzienda") echo 'selected';?>>Telefono</option>
                <option value="MailAzienda" <?php if(!empty($_POST['orderBy']) && $orderBy == "MailAzienda") echo 'selected';?>>Mail</option>
            </select>
            <select name="order">
                <option value="empty" <?php if(empty($_POST['order'])) echo 'selected';?>> </option>
                <option value="ASC" <?php if(!empty($_POST['order']) && $order == "ASC") echo 'selected';?>>Crescente</option>
                <option value="DESC" <?php if(!empty($_POST['order']) && $order == "DESC") echo 'selected';?>>Decrescente</option>
            </select>
            <input type="text" name="search" value="<?php if(!empty($_POST['search']) && $_POST['search'] != "%") echo $search;?>">
        </form>
        <table id="stage">
            <tr>
                <th>Partita IVA</th>
                <th>Ragione sociale</th>
                <th>Rappresentante Legale</th>
                <th>Indirizzo</th>
                <th>Telefono</th>
                <th>Mail</th>
                <th>Disp Terzo</th>
                <th>Disp Quarto</th>
                <th>Disp Quinto</th>
            </tr>
            <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row["PartitaIva"]; ?></td>
                            <td><?php echo $row["RagioneSociale"]; ?></td>
                            <td><?php echo $row["RappresentanteLegale"]; ?></td>
                            <td><?php echo $row["IndirizzoAzienda"]; ?></td>
                            <td><?php echo $row["TelefonoAzienda"]; ?></td>
                            <td><?php echo $row["MailAzienda"]; ?></td>
                            <td><?php echo $row["disp3"]; ?></td>
                            <td><?php echo $row["disp4"]; ?></td>
                            <td><?php echo $row["disp5"]; ?></td>
                        </tr>
                        <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="8" id="no-disp">
                            <?="Nessuna azienda disponibile"?>
                        </td>
                    </tr>
                    <?php
                }
            ?>
        </table>
        <?php include("../Materials/footer.php");?>
    </body>
</html>