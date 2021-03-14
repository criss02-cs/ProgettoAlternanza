<ul>
  <li><a href="../index.php">Home</a></li>
  <?php
    if(!isset($_SESSION)) { 
        session_start(); 
    }
    else {
        session_destroy();
        session_start(); 
    }
    if(isset($_SESSION['nomeUtente'])){ ?>
      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Stage</a>
        <div class="dropdown-content">
          <a href="../inserimentoStage/index.php">Organizza Stage</a>
        <a href="../StoricoStage/index.php">Storico Stage</a>
        </div>
      </li>
      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Aziende</a>
        <div class="dropdown-content">
          <a href="../inserimenti/insDispo.php">Inserisci Disponibili</a>
          <a href="../visualizza/visualizzaDispo.php">Visualizza Disponibili</a>
          <a href="../visualizza/visualizzaAziende.php">Anagrafica Aziende</a>
          <a href="../inserimenti/inserimentoAziende.php">Inserisci Aziende</a>
        </div>
      </li>
      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Studenti</a>
        <div class="dropdown-content">
          <a href="../visualizza/visualizzaStudenti.php">Visualizza Studenti</a>
          <a href="../inserimenti/inserimentoStudenti.php">Inserisci Studenti</a>
        </div>
      </li>
      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Tutor Scolastici</a>
        <div class="dropdown-content">
          <a href="../visualizza/visualizzaTutorS.php">Visualizza Tutor Scolastici</a>
          <a href="../inserimenti/inserimentoTutorScolastici.php">Inserisci Tutor Scolastici</a>
        </div>
      </li>
      <?php
    }
  ?>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">About</a>
    <div class="dropdown-content">
      <a href="../visualizza/credits.php">Credits</a>
    </div>
  </li>
  <?php
    if(!isset($_SESSION['nomeUtente'])){ ?>
      <li class="dropdown" style="float: right;">
          <a href="../Login/index.php" class="dropbtn">Login</a>
      </li>
      <?php
    }
    else { ?>
      <li class="dropdown" style="float: right;">
          <a href="../Login/logout.php" class="dropbtn">Logout</a>
      </li>
      <?php
    }
  ?>
</ul>