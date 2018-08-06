<?php 
// chemin de travail
$PathHome="http://localhos t/POO/Boutique"; ?>
<!--page de menu -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo $PathHome; ?>"><img src="img\telechargement.jpg" alt="Bienvenue chez Pupuce !" width="30" height="30" class="d-inline-block align-top logo">Chez Pupuce</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $PathHome; ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Qui sommes nous ?</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Catégories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="creationFournisseur.php">Création de fournisseurs</a>
          <a class="dropdown-item" href="readFournisseur.php">Recherche de fournisseurs</a>
          <a class="dropdown-item" href="formulaireClient.php">Gestion des clients</a>
          <a class="dropdown-item" href="formulaireProduit.php">Gestion des produits</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $PathHome; ?>admin_index.php">Administration</a>
      </li>
    </ul>
  </div>
</nav>