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
		<a href="../visualizza/visualizzaStudenti.php">Visualizza Studenti</a>
		<a href="../inserimenti/inserimentoStudenti.html">Inserisci Studenti</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Aziende</a>
    <div class="dropdown-content">
      <a href="../visualizza/visualizzaAziende.php">Anagrafica Aziende</a>
	  <a href="../inserimenti/inserimentoAziende.html">Inserisci Azienda</a>
	  <a href="#">Aziende Disponibili</a>
	  <a href="#">Aggiungi Disponibilità</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Tutor Scolastici</a>
    <div class="dropdown-content">
		<a href="../visualizza/visualizzaTutorS.php">Visualizza Tutor Scolastici</a>
		<a href="../inserimenti/inserimentoTutorScolastici.html">Inserisci Tutor Scolastici</a>
    </div>
  </li>
</ul>