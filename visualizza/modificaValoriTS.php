<!DOCTYPE html>
    <?php
        include_once "../mysql_configuration/connection.php";
        $conn = $GLOBALS['mysqli'];
        $id = $_POST["id"];
        $sql = "
            SELECT * 
            FROM `tutorscolastici`
            WHERE '$id' = `id_tutorscolastico`
        ";
        $result = $conn->query($sql);
        $row = mysqli_fetch_assoc($result);
    ?>
    <head>
        <title>Modifca dell'azienda</title>
        <link rel="stylesheet" href="../Materials/style.css">
    </head>
    <body>
        <?php include("../Materials/menu.php"); ?>
        <form action="modificaTutorS.php" method="post">
            <label for="id_tutorscolastico">ID: </label><br>
            <input type="text" name="id_tutorscolastico" value='<?php echo $row["id_tutorscolastico"]; ?>' disabled><br>
            <input type="hidden" name="id" value='<?php echo $row["id_tutorscolastico"]; ?>'>
            <label for="Nome">Nome: </label><br>
            <input type="text" name="Nome" value='<?php echo $row["Nome"]; ?>'><br>
            <label for="Cognome">Cognome: </label><br>
            <input type="text" name="Cognome" value='<?php echo $row["Cognome"]; ?>'><br><br>
            <input type="submit" value="Modifica">
        </form>
    </body>
</html>