<?php
/**
 *
 */
class client extends personne
{
// Déclaration des attributs
    private $_clientDateCreation;
	private $_clientPassword;
    
    
// Méthode
    
    //fct constructeur
	function __construct($clientDateCreation, $clientPassword)
	{
		# code...
		$this->_clientDateCreation = $clientDateCreation;
		$this->_clientPassword = $clientPassword;
	}
    // fonctions
    




}