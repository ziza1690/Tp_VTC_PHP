<?php

/**
 * 
 */

require_once './Models/Vehicule.php';

class VehiculeController
{
	
	public function ajout()
	{
		require_once './Vues/Vehicule/formulaire_ajout.html';
		if(isset($_POST['submit'])){
			$vehicule = new Vehicule();

			$marque = $vehicule->setMarque($_POST['marque']);

			$modele = $vehicule->setModele($_POST['modele']);

			$couleur = $vehicule->setCouleur($_POST['couleur']);

			$immatriculation = $vehicule->setImmatriculation($_POST['immatriculation']);

			$vehicule->ajoutVehicule($marque, $modele, $couleur, $immatriculation);
		}

	}

	public function list()
	{
		$vehicule = new Vehicule();

		$liste_vehicules = $vehicule->findAll('vehicule');

		require_once './Vues/Vehicule/list.php';
	}

	/** MODIFICATON VEHICULE */
	public function voirVehiculeAModifier($id_du_vehicule_a_modifier)
	{
		$vehicule = new Vehicule();
		$vehiculeById = $vehicule->findById($id_du_vehicule_a_modifier, 'vehicule');
		require_once "./Vues/vehicule/formulaire_modification.php";

		if(isset($_POST['submit'])){
			foreach ($vehiculeById as $value) {
				
				$marque = $value->setMarque($_POST['marque']);
				$modele = $value->setModele($_POST['modele']);
				$couleur = $value->setCouleur($_POST['couleur']);
				$immatriculation = $value->setImmatriculation($_POST['immatriculation']);

				$value->updateVehi($id_du_vehicule_a_modifier, $marque, $modele, $couleur, $immatriculation);
			}
		}
	}
}
?>