<?php

/**
 * 
 */

require_once "./Models/Association.php";

class AssociationController
{
	public function creationAssoc()
	{
		$association = new Association();

		$liste_des_conducteurs = $association->findAll('conducteur');
		$liste_des_vehicules = $association->findAll('vehicule');

		require_once './Vues/Association/formulaire_creation_association.php';

		if (isset($_POST['submit'])) {

			$nouveau_conducteur = $association->setIdConducteur($_POST['id_conducteur']);

			$nouveau_vehicule = $association->setIdVehicule($_POST['id_vehicule']);

			$association->ajout_association($nouveau_conducteur, $nouveau_vehicule);
		}
	}

	public function listAssoc()
	{
		$association = new Association();

		$afficher_association = $association->show_association();

		require_once './Vues/Association/liste.php';
	}
	
}
?>