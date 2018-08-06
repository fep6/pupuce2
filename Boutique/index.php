<?php 
// j'inclue ici mon fichier commun à toutes mes pages afin de centraliser/factoriser les infos dans un soucis de maintenabilité
// Inclusion des fichiers: 
//                         -config.php (connexion à la bdd)
//                         Par l'autoloader répertoire: include/class/
//                         -client.php commande.php config.php fournisseur.php panier.php personne.php produit.php produitfournisseur.php Users.php               
include 'include/AppTop.php';
// Si je n'inclue pas ce fichier dans AppTop.php c'est parce que je ne veux pas que ma page login soit sécurisée (car sinon on rentre dans une boucle infinie de redirection jusqu'à la mort du PC)
/// le fichier "secure" teste si la session existe. Si tel est le cas 
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
    
    <!--Mise en forme de la barre nav-->
    <style type="text/css">
        .inline-form input {
            display: inline-block;
            width: 100px;
        }
    </style>
 
   
    <title>Chez Pupuce</title>
  </head>
  <body>
  	<br>
    <div class="container">
    	<div class="row">
    		<div class="col">
    		    <!-- Affichage "Bienvenue" variable $user (classe users)                               -->
    			<h1>Bienvenue chez Pupuce <?php echo $user->_nom; ?> (<?php echo $user->_id; ?>) !</h1>
				<?php 
				// J'ai créé un fichier permettant d'afficher simplement mes msg et potentiellement commun à tous les fichiers : j'ai créé un composant réutilisable (variables $msgKO & $msgOK)
				include 'include/component/alert.php'; 

				// je créé un Users vide avec seulement son id
				$userTest = new Users("","","", 2);
                
				echo "Id de userTest : " . $userTest->_id."<br>";
				// ici je récupère les infos contenues dans la bdd dont le lien est passé en argument
				$userTest->getInfoById($bdd);
				echo "Nom de userTest : " . $userTest->_nom."<br>";
				?>
    			<pre>
    				<?php // print_r(Users::getAll($bdd)); ?>
    			</pre>
    			<a href="logout.php">Logout</a>
    		</div>
    	</div>
    </div>
    
   <?php include './include/menu.php' ?>

   
   
   
   
   
   
   
   
   
   
   
   
   
   
   <!-- Formulaire Fournisseur -->
<!--<form action="<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">-->
 
 <!--   <table class='table table-hover table-responsive table-bordered'>
 
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
             Appel de fonction staitque nouveauFournisseur($_POST)
            <?php
               /* $f=new fournisseur( $_POST['fournisseurNom'], $_POST['fournisseurPrenom'], $_POST['fournisseurMail'], $_POST['fournisseurAdresse'], $_POST['fournisseurCodePostal'], $_POST['fournisseurVille'], $_POST['fournisseurDateDeNaissance'], $_POST['fournisseurCodeComptable'], "", "", "", "", "", "", "", "", "", "");
                $f->nouveauFournisseur($bdd,$_POST);*/

                
                  
            ?>    
            </td>
        </tr>
 
        <tr>
            <td></td>
            <td>
                <button type="submit" class="btn btn-primary">Create</button>
            </td>
        </tr>
 
    </table>
</form>-->
  
  


    
    

  
 
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>