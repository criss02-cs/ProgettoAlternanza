<div class="topnav">
  <a <?php if(strpos($_SERVER['PHP_SELF'], 'Materials') !== false) echo 'class="active"'?> href="../index.php">Home</a>
  <a <?php if(strpos($_SERVER['PHP_SELF'], 'Storico') !== false) echo 'class="active"'?> href="../StoricoStage/index.php">Storico Stage</a>
  <a <?php if(strpos($_SERVER['PHP_SELF'], 'inserimentoStage') !== false) echo 'class="active"'?> href="../inserimentoStage/index.php">Organizza Stage</a>
  <a <?php if(strpos($_SERVER['PHP_SELF'], 'inserimentoStudenti') !== false) echo 'class="active"'?> href="../inserimenti/inserimentoStudenti.html">Inserisci Studenti</a>
  <a <?php if(strpos($_SERVER['PHP_SELF'], 'inserimentoAziende') !== false) echo 'class="active"'?> href="../inserimenti/inserimentoAziende.html">Inserisci Aziende</a>
  <a <?php if(strpos($_SERVER['PHP_SELF'], 'inserimentoTutorScolastici') !== false) echo 'class="active"'?> href="../inserimenti/inserimentoTutorScolastici.html">Inserisci Tutor Scolastici</a>
</div> 