<!DOCTYPE html>
<html lang="it">
    <?php
        //File per la connessione al database
        include_once "../mysql_configuration/connection.php";
        $conn = $GLOBALS['mysqli'];
        $orderBy = $_POST['orderBy'] = !empty($_POST['orderBy']) && $_POST['order'] != "empty" ? $_POST['orderBy'] : "id_stage";
        $order = $_POST['order'] = !empty($_POST['order']) && $_POST['order'] != "empty" ? $_POST['order'] : "ASC";
        $search = $_POST['search'] = !empty($_POST['search']) ? $_POST['search'] : "%";
        //Query per ottenere le classi dell'anno scolastico corrente
        $sql = "SELECT id_stage, Nome, Cognome, RagioneSociale, Inizio, Fine 
                FROM ((stage INNER JOIN studenti on fk_matricola = Matricola) 
                INNER JOIN aziende on fk_partitaIva = PartitaIva)
                WHERE (id_stage LIKE '%".$search."%') OR
                (Nome LIKE '%".$search."%') OR
                (Cognome LIKE '%".$search."%') OR
                (RagioneSociale LIKE '%".$search."%') OR
                (Inizio LIKE '%".$search."%') OR
                (Fine LIKE '%".$search."%')
                ORDER BY $orderBy $order";
        //Esecuzione della query
        $result = $conn->query($sql);
    ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Storico Stage</title>
        <link rel="stylesheet" href="../Materials/style.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include("../Materials/menu.php"); ?>
        <form action="index.php" method="post" onchange="this.submit()">
            <select name="orderBy">
                <option value="empty" <?php if(empty($_POST['orderBy'])) echo 'selected';?>> </option>
                <option value="id_stage" <?php if(!empty($_POST['orderBy']) && $orderBy == "id_stage") echo 'selected';?>>id_stage</option>
                <option value="Nome" <?php if(!empty($_POST['orderBy']) && $orderBy == "Nome") echo 'selected';?>>Nome</option>
                <option value="Cognome" <?php if(!empty($_POST['orderBy']) && $orderBy == "Cognome") echo 'selected';?>>Cognome</option>
                <option value="RagioneSociale" <?php if(!empty($_POST['orderBy']) && $orderBy == "RagioneSociale") echo 'selected';?>>Ragione Sociale</option>
                <option value="Inizio" <?php if(!empty($_POST['orderBy']) && $orderBy == "Inizio") echo 'selected';?>>Inizio</option>
                <option value="Fine" <?php if(!empty($_POST['orderBy']) && $orderBy == "Fine") echo 'selected';?>>Fine</option>
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
                <th>Id</th>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Ragione Sociale</th>
                <th>Inizio</th>
                <th>Fine</th>
            </tr>
            <?php
                while($row = mysqli_fetch_assoc($result)){ ?>
                    <tr>
                        <td><?=$row['id_stage']?></td>
                        <td><?=$row['Nome']?></td>
                        <td><?=$row['Cognome']?></td>
                        <td><?=$row['RagioneSociale']?></td>
                        <td><?=date("d-m-Y", strtotime($row['Inizio']))?></td>
                        <td><?=date("d-m-Y", strtotime($row['Fine']))?></td>
                    </tr>
                    <?php
                }
            ?>
        </table>
    </body>
</html>