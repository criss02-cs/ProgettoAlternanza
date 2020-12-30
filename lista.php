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
    
?>
<table>
    <th>Nome</th>
    <th>Cognome</th>
    <?php
        while($row = mysqli_fetch_assoc($result)){ ?>
            <tr>
                <td><?=$row['Nome']?></td>
                <td><?=$row['Cognome']?></td>
                <td>
                    <select name="azienda">
                        <option value="empty" selected> </option>
                        <?php 
                            $risultato = $conn->query($aziende);
                            while($riga = mysqli_fetch_assoc($risultato)){ ?>
                                <option value="<?=$riga['PartitaIva']?>"><?=$riga['RagioneSociale']?></option>
                            <?php }
                        ?>
                    </select>
                    <input type="hidden" name="matricola" value="<?=$row['Matricola']?>">
                </td>
            </tr>
        <?php }
    ?>
</table>