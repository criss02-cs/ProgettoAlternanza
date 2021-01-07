<!DOCTYPE html>
<html>
    <?php
        include_once "../mysql_configuration/connection.php";
        $conn = $GLOBALS['mysqli'];
        $orderBy = $_POST['orderBy'] = !empty($_POST['orderBy']) && $_POST['order'] != "empty" ? $_POST['orderBy'] : "Matricola";
        $order = $_POST['order'] = !empty($_POST['order']) && $_POST['order'] != "empty" ? $_POST['order'] : "ASC";
        $search = $_POST['search'] = !empty($_POST['search']) ? $_POST['search'] : "%";
        $sql = "
            SELECT * 
            FROM `studenti`
            WHERE (Matricola LIKE '%".$search."%') OR 
            (Nome LIKE '%".$search."%') OR
            (Cognome LIKE '%".$search."%') OR
            (DataNascita LIKE '%".$search."%') OR
            (ComuneNascita LIKE '%".$search."%') OR
            (ProvinciaNascita LIKE '%".$search."%') OR
            (Sesso LIKE '%".$search."%') OR
            (Indirizzo LIKE '%".$search."%') OR
            (Mail LIKE '%".$search."%') OR
            (Telefono LIKE '%".$search."%')
            ORDER BY $orderBy $order
        ";
        $result = $conn->query($sql);
    ?>
    <head>
        <title>Visualizza studenti</title>
        <link rel="stylesheet" href="../Materials/style.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include("../Materials/menu.php"); ?>
        <form action="visualizzaStudenti.php" method="post" onchange="this.submit()">
            <select name="orderBy">
                <option value="Matricola" <?php if(!empty($_POST['orderBy']) && $orderBy == "Matricola") echo 'selected';?>>Matricola</option>
                <option value="Nome" <?php if(!empty($_POST['orderBy']) && $orderBy == "Nome") echo 'selected';?>>Nome</option>
                <option value="Cognome" <?php if(!empty($_POST['orderBy']) && $orderBy == "Cognome") echo 'selected';?>>Cognome</option>
                <option value="DataNascita" <?php if(!empty($_POST['orderBy']) && $orderBy == "DataNascita") echo 'selected';?>>Data di nascita</option>
                <option value="ComuneNascita" <?php if(!empty($_POST['orderBy']) && $orderBy == "ComuneNascita") echo 'selected';?>>Comune di nascita</option>
                <option value="ProvinciaNascita" <?php if(!empty($_POST['orderBy']) && $orderBy == "ProvinciaNascita") echo 'selected';?>>Provincia di nascita</option>
                <option value="Sesso" <?php if(!empty($_POST['orderBy']) && $orderBy == "Sesso") echo 'selected';?>>Sesso</option>
                <option value="Indirizzo" <?php if(!empty($_POST['orderBy']) && $orderBy == "Indirizzo") echo 'selected';?>>Indirizzo</option>
                <option value="Mail" <?php if(!empty($_POST['orderBy']) && $orderBy == "Mail") echo 'selected';?>>Mail</option>
                <option value="Telefono" <?php if(!empty($_POST['orderBy']) && $orderBy == "Telefono") echo 'selected';?>>Telefono</option>
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
                <th>Matricola</th>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Data di nascita</th>
                <th>Comune di nascita</th>
                <th>Provincia di nascita</th>
                <th>Sesso</th>
                <th>Indirizzo</th>
                <th>Mail</th>
                <th>Telefono</th>
                <th>Modifica</th>
                <th>Elimina</th>
            </tr>
            <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row["Matricola"]; ?></td>
                            <td><?php echo $row["Nome"]; ?></td>
                            <td><?php echo $row["Cognome"]; ?></td>
                            <td><?php echo $row["DataNascita"]; ?></td>
                            <td><?php echo $row["ComuneNascita"]; ?></td>
                            <td><?php echo $row["ProvinciaNascita"]; ?></td>
                            <td><?php echo $row["Sesso"]; ?></td>
                            <td><?php echo $row["Indirizzo"]; ?></td>
                            <td><?php echo $row["Mail"]; ?></td>
                            <td><?php echo $row["Telefono"]; ?></td>
                            <td>
                                <form action="modificaValoriS.php" method="post">
                                    <input type="hidden" name="ma" value='<?php echo $row["Matricola"]; ?>'>
                                    <input type="submit" value="Modifica" class="button">
                                </form>
                            </td>
                            <td>
                                <form action="cancellaStudente.php" method="post">
                                    <input type="hidden" name="ma" value='<?php echo $row["Matricola"]; ?>'>
                                    <input type="submit" value="Elimina" class="button">
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