<?php
/**
 *
 */
class fournisseur extends personne
{
// Déclaration des attributs
	private $_fournisseurNom;
    private $_fournisseurPrenom;
    private $_fournisseurMail;
    private $_fournisseurAdresse;
    private $_fournisseurCodePostal;
    private $_fournisseurVille;
    private $_fournisseurDateDeNaissance;
    private $_fournisseurCodeComptable;
    
    
    
    
// Méthode
    
    //fct constructeur
    // On déclare dans cette fonction toutes les variables de la présente classe, et celle de la classe mère (personne)


	function __construct( $fournisseurNom, $fournisseurPrenom, $fournisseurMail, $fournisseurAdresse, $fournisseurCodePostal , $fournisseurVille, $fournisseurDateDeNaissance, $fournisseurCodeComptable, $Id, $Nom, $Prenom, $Mail, $Adresse, $CodePostal, $Ville, $DateAnniversaire, $DateCreation, $Password)
	{
		# code...
        // Rappelde la fonction constructeur de la classe mère
        parent::__construct($Id, $Nom, $Prenom, $Mail, $Adresse, $CodePostal, $Ville, $DateAnniversaire, $DateCreation, $Password);
        
        
        $this->_fournisseurNom = $fournisseurNom;
        $this->_fournisseurPrenom = $fournisseurPrenom;
        $this->_fournisseurMail = $fournisseurMail;        
        $this->_fournisseurAdresse = $fournisseurAdresse;
        $this->_fournisseurCodePostal = $fournisseurCodePostal;
        $this->_fournisseurVille = $fournisseurVille;        
        $this->_fournisseurDateDeNaissance = $fournisseurDateDeNaissance;
        $this->_fournisseurCodeComptable = $fournisseurCodeComptable;       


	}
    
    // fonctions
    
    public function nouveauFournisseur($baseDeDonnees, $donneesFournisseur){
        
      

            // Sauvegarde dans la base de données (Requete SQL)
        // => 'Si tous les champs existent et qu'ils ne sont pas vides'
            
            if (isset($donneesFournisseur['fournisseurNom']) && !empty($donneesFournisseur['fournisseurNom']) &&
            isset($donneesFournisseur['fournisseurPrenom']) && !empty($donneesFournisseur['fournisseurPrenom']) &&
            isset($donneesFournisseur['fournisseurMail']) && !empty($donneesFournisseur['fournisseurMail']) &&   
            isset($donneesFournisseur['fournisseurAdresse']) && 
            !empty($donneesFournisseur['fournisseurAdresse']) &&
            isset($donneesFournisseur['fournisseurCodePostal']) && 
            !empty($donneesFournisseur['fournisseurCodePostal']) &&
            isset($donneesFournisseur['fournisseurVille']) && 
            !empty($donneesFournisseur['fournisseurVille']) &&
            isset($donneesFournisseur['fournisseurDateDeNaissance']) && 
            !empty($donneesFournisseur['fournisseurDateDeNaissance'])&&
            isset($donneesFournisseur['fournisseurCodeComptable']) && 
            !empty($donneesFournisseur['fournisseurCodeComptable']) ) {
                
               /* var_dump($_POST);*/
 
               
                // Définition de la requête
                // => 'Alors on insère dans la table 'fournisseur'
                $sql="INSERT INTO fournisseur (fournisseurNom, fournisseurPrenom, fournisseurMail, fournisseurAdresse, fournisseurCodePostal, fournisseurVille, fournisseurDateDeNaissance, fournisseurCodeComptable) VALUES (:champ1, :champ2, :champ3, :champ4, :champ5, :champ6, :champ7, :champ8)";
                
                
                // Préparation de la requête 
                
                $requete=$baseDeDonnees->prepare($sql);
                
                //Dans la requete, on lie :champ(x) à l'attribut de la classe
                $requete->bindparam(":champ1",$this->_fournisseurNom );
                $requete->bindparam(":champ2",$this->_fournisseurPrenom );
                $requete->bindparam(":champ3",$this->_fournisseurMail );
                $requete->bindparam(":champ4",$this->_fournisseurAdresse );
                $requete->bindparam(":champ5",$this->_fournisseurCodePostal );
                $requete->bindparam(":champ6",$this->_fournisseurVille );
                $requete->bindparam(":champ7",$this->_fournisseurDateDeNaissance );
                $requete->bindparam(":champ8",$this->_fournisseurCodeComptable );
                
                // Execution de la requête
                
                $requete->execute();
                 
                
            }        
    }
}       
    