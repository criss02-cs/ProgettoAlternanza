<?php
$anno = strtok($classe, " ");
$sezione = strtok(" ");
$annoScolastico = strtok(" ");
//Query per ottenere le classi dell'anno scolastico corrente
$sql = "SELECT Matricola, Nome, Cognome from ((studenti inner join frequenta on matricola = fk_matricola))
    WHERE fk_annoscolastico = '$annoScolastico' and fk_anno = '$anno' and fk_sezione = '$sezione'";
//Esecuzione della query
$result = $conn->query($sql);
$aziende = "SELECT PartitaIva, RagioneSociale FROM aziende";
$i = 0;

?>
<table>
    <th>Nome</th>
    <th>Cognome</th>
    <?php
    while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td name="Nome"><?= $row['Nome'] ?></td>
            <td><?= $row['Cognome'] ?></td>
            <td>
                <select name="azienda[]">
                    <option value="empty" <?php if(empty($_GET['azienda'])) echo 'selected';?>> </option>
                    <?php
                        $risultato = $conn->query($aziende);
                        $i = 0;
                        while ($riga = mysqli_fetch_assoc($risultato)) { ?>
                            <option value="<?= $riga['PartitaIva'] ?>" <?php if(!empty($_GET['azienda']) && $_GET['azienda'][$i] == $riga['PartitaIva']) echo 'selected';?>>
                                <?= $riga['RagioneSociale'] ?>
                            </option>
                        <?php $i++;
                        }
                    ?>
                </select>
                <input type="hidden" name="matricola">
            </td>
        </tr>
    <?php }
        foreach($_GET['azienda'] as $azienda)
            echo $azienda." ";
    ?>
</table>