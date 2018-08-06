<?php            
include 'include/AppTop.php';
include 'include/secure.php';
?>
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    </head>
    <body>
    <!--Retoour menu pricipal-->
        <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li class="active"> <a href="index.php">Accueil</a> </li>>
          </ul>
        </div>
      </nav>
    
    
    
   <!-- Formulaire Fournisseur -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
 
    <table class='table table-hover table-responsive table-bordered'>
 
        <tr>
            <td>Nom du fournisseur</td>
            <td><input type='text' name='fournisseurNom' class='form-control' /></td>
        </tr>
        <tr>
            <td>Prenom du fournisseur</td>
            <td><input type='text' name='fournisseurPrenom' class='form-control' /></td>
        </tr>
 
        <tr>
            <td>Mail du fournisseur</td>
            <td><input type='text' name='fournisseurMail' class='form-control' /></td>
        </tr>
 
        <tr>
            <td>Adresse du fournisseur</td>
            <td><textarea name='fournisseurAdresse' class='form-control'></textarea></td>
        </tr>
        
         <tr>
            <td>Code Postal du fournisseur</td>
            <td><textarea name='fournisseurCodePostal' class='form-control'></textarea></td>
        </tr>
        
         <tr>
            <td>Ville du fournisseur</td>
            <td><textarea name='fournisseurVille' class='form-control'></textarea></td>
        </tr>
        
         <tr>
            <td>Date de naissance du fournisseur</td>
            <td><textarea name='fournisseurDateDeNaissance' class='form-control'></textarea></td>
        </tr>
        
         <tr>
            <td>Code comptable du fournisseur</td>
            <td><textarea name='fournisseurCodeComptable' class='form-control'></textarea></td>
        </tr>
        
        <tr>
            <td>  </td>
            <td>
            <!-- instanciation de la classe fournisseur, appel de la fonction nouveauFournisseur(create via retour $_POST)-->
            <?php
                if(isset($_POST) && !empty($_POST)){
                    $f=new fournisseur( $_POST['fournisseurNom'], $_POST['fournisseurPrenom'], $_POST['fournisseurMail'], $_POST['fournisseurAdresse'], $_POST['fournisseurCodePostal'], $_POST['fournisseurVille'], $_POST['fournisseurDateDeNaissance'], $_POST['fournisseurCodeComptable'], "", "", "", "", "", "", "", "", "", "");
                    $f->nouveauFournisseur($bdd,$_POST);
    
                }
                
                
                  
            ?>    
            </td>
        </tr>
 
        <tr>
            <td></td>
            <td>
               <!-- Bouton de creation-->
                <button type="submit" class="btn btn-primary">Create</button>
            </td>
        </tr>
 
    </table>
</form>
  
  


    
    

  
 
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>