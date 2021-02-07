<?php
//Esecuzione della query aziende Minus Disponibilita
$aziende = "SELECT `PartitaIva`,`RagioneSociale` FROM `aziende` AS t1
			LEFT JOIN disponibilita AS t2 ON 
			t1.`PartitaIva`=t2.fk_partitaIVA
			WHERE t2.fk_partitaIVA IS NULL";
$i = 0;

?>
<table>
    <select name="azienda[]">
        <option value="empty" <?php if (empty($_GET['azienda'])) echo 'selected'; ?>> </option>
        <?php
        $risultato = $conn->query($aziende);
        while ($riga = mysqli_fetch_assoc($risultato)) { ?>
            <option value="<?= $riga['PartitaIva'] ?>" <?php if (!empty($_GET['azienda']) && $_GET['azienda'][$i] == $riga['PartitaIva']) echo 'selected'; ?>>
                <?= $riga['RagioneSociale'] ?>
            </option>
        <?php
        }
        $i++;
        ?>
    </select>

</table>