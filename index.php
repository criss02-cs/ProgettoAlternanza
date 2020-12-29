<!DOCTYPE html>
<html lang="it">
    <?php
        include_once "mysql_configuration/connection.php";
        
        $conn = $GLOBALS['mysqli'];
        $sql = "SELECT * FROM classi WHERE AnnoScolastico LIKE '". date("Y") ."%' 
                OR AnnoScolastico LIKE '%". date("Y", strtotime("+1 years")) ."%'";
        $result = $conn->query($sql);
        $classe = "";
        if(!empty($_GET) && !empty($_GET['classi']))
            $classe = $_GET['classi'];
    ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
    </head>
    <body>
        <form method="get" action="index.php" onchange="this.submit()">
            <select name="classi" id="classi">
                <option value="empty" <?php if(empty($_GET['classi'])) echo 'selected';?>> </option>
                <?php 
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <option value="<?php echo $row['Anno'].' '.$row['Sezione'].' '.$row['AnnoScolastico']?>" 
                            <?php if(!empty($_GET['classi']) && $row['Anno'].' '.$row['Sezione'].' '.$row['AnnoScolastico'] == $classe) echo 'selected';?>>
                                <?php echo $row['Anno'].' '.$row['Sezione'].' '.$row['AnnoScolastico']?>
                        </option>
                    <?php }
                ?>
            </select>
            <?php
                if(!empty($_GET) && !empty($_GET['classi']) && $_GET['classi'] != "empty"){
                    include("periodo.php");
                }
            ?>
        </form>
    </body>
</html>