<?php
/**
 *
 */
abstract class personne
{
// Déclaration des attributs

  protected $_Id;
  protected $_Nom;
  protected $_Premon;
  protected $_Mail;
  protected $_Adresse;
  protected $_CodePostal;
  protected $_Ville;
  protected $_DateAnniversaire;
  protected $_DateCreation;
  protected $_Password;
    
    
// Méthode
    
    //fct constructeur


	function __construct($Id, $Nom, $Prenom, $Mail, $Adresse, $CodePostal, $Ville, $DateAnniversaire, $DateCreation, $Password)
	{
		# code...
		$this->_Id = $Id;
		$this->_Nom = $Nom;
		$this->_Premon = $Prenom;
		$this->_Mail = $Mail;
		$this->_Adresse = $Adresse;
		$this->_CodePostal = $CodePostal;
		$this->_Ville = $Ville;
		$this->_DateAnniversaire = $DateAnniversaire;
		$this->_DateCreation = $DateCreation;
		$this->_Password = $Password;
	}
    
    // fonctions
    




}