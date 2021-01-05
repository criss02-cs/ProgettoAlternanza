<!DOCTYPE html>
<html>
    <?php
        include_once "../mysql_configuration/connection.php";
        $conn = $GLOBALS['mysqli'];
        $orderBy = $_POST['orderBy'] = !empty($_POST['orderBy']) && $_POST['order'] != "empty" ? $_POST['orderBy'] : "id_tutorscolastico";
        $order = $_POST['order'] = !empty($_POST['order']) && $_POST['order'] != "empty" ? $_POST['order'] : "ASC";
        $search = $_POST['search'] = !empty($_POST['search']) ? $_POST['search'] : "%";
        $sql = "
            SELECT * 
            FROM `tutorscolastici`
            WHERE (id_tutorscolastico LIKE '%".$search."%') OR 
            (Nome LIKE '%".$search."%') OR
            (Cognome LIKE '%".$search."%')
            ORDER BY $orderBy $order
        ";
        $result = $conn->query($sql);
    ?>
    <head>
        <title>Visualizza aziende</title>
        <link rel="stylesheet" href="../Materials/style.css">
    </head>
    <body>
        <?php include("../Materials/menu.php"); ?>
        <form action="visualizzaTutorS.php" method="post" onchange="this.submit()">
            <select name="orderBy">
                <option value="id_tutorscolastico" <?php if(!empty($_POST['orderBy']) && $orderBy == "id_tutorscolastico") echo 'selected';?>>ID</option>
                <option value="Nome" <?php if(!empty($_POST['orderBy']) && $orderBy == "Nome") echo 'selected';?>>Nome</option>
                <option value="Cognome" <?php if(!empty($_POST['orderBy']) && $orderBy == "Cognome") echo 'selected';?>>Cognome</option>
            </select>
            <select name="order">
                <option value="empty" <?php if(empty($_POST['order'])) echo 'selected';?>> </option>
                <option value="ASC" <?php if(!empty($_POST['order']) && $order == "ASC") echo 'selected';?>>Crescente</option>
                <option value="DESC" <?php if(!empty($_POST['order']) && $order == "DESC") echo 'selected';?>>Decrescente</option>
            </select>
            <input type="text" name="search" value="<?php if(!empty($_POST['search']) && $_POST['search'] != "%") echo $search;?>">
        </form>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Modifica</th>
                <th>Elimina</th>
            </tr>
            <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row["id_tutorscolastico"]; ?></td>
                            <td><?php echo $row["Nome"]; ?></td>
                            <td><?php echo $row["Cognome"]; ?></td>
                            <td>
                                <form action="modificaValoriTS.php" method="post">
                                    <input type="hidden" name="id" value='<?php echo $row["id_tutorscolastico"]; ?>'>
                                    <input type="submit" value="Modifica" class="button">
                                </form>
                            </td>
                            <td>
                                <form action="cancellaTutorS.php" method="post">
                                    <input type="hidden" name="id" value='<?php echo $row["id_tutorscolastico"]; ?>'>
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
    </body>
</html>