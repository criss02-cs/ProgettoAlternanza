<ul>
  <li><a <?php //if(strpos($_SERVER['PHP_SELF'], 'Materials') !== false) echo 'class="active"'?> href="../index.php">Home</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Stage</a>
    <div class="dropdown-content">
      <a href="../StoricoStage/index.php">Storico Stage</a>
      <a href="../inserimentoStage/index.php">Organizza Stage</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Studenti</a>
    <div class="dropdown-content">
      <a href="../inserimenti/inserimentoStudenti.html">Inserisci Studenti</a>
      <a href="../visualizza/visualizzaStudenti.php">Visualizza Studenti</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Aziende</a>
    <div class="dropdown-content">
      <a href="../inserimenti/inserimentoAziende.html">Inserisci Aziende</a>
      <a href="../visualizza/visualizzaAziende.php">Visualizza Aziende</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Tutor Scolastici</a>
    <div class="dropdown-content">
      <a href="../inserimenti/inserimentoTutorScolastici.html">Inserisci Tutor Scolastici</a>
      <a href="../visualizza/visualizzaTutorS.php">Visualizza Tutor Scolastici</a>
    </div>
  </li>
</ul>