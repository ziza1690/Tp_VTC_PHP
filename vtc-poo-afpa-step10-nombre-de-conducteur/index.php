<?php
	
	require_once "./Vues/header.html";
	require_once "Controlleurs/ConducteurController.php";

	require_once 'Controlleurs/VehiculeController.php';

	/* APPEL DE LA CLASSSE ASSOCIATION*/
	require_once 'Controlleurs/AssociationController.php';

	$conducteur = new ConducteurController();
	$vehicule = new VehiculeController();

	$association = new AssociationController();

	if (isset($_GET['action'])) {

		if($_GET['action'] == 'modifierConducteur'){
			$conducteur->show($_GET['conducteurId']);
		}
		elseif($_GET['action'] == 'supprimerConducteur'){
			$conducteur->delete($_GET['conducteurId']);
		}
		/* LES VEHICULES - CRUD */
		elseif($_GET['action'] == 'ajoutVehicule'){
			$vehicule->list();
			$vehicule->ajout();
		}/* LES VEHICULES - CRUD - MODIFICATION VEHICULE*/
		elseif($_GET['action'] == 'modificationVehicule'){
			$vehicule->voirVehiculeAModifier($_GET['vehiculeId']);
		}
		/* PARTIE ASSOCIATION */
		elseif($_GET['action'] == 'association'){
			$association->listAssoc();
			$association->creationAssoc();
		}
	}else{
		/* Afficcher la liste des conducteurs*/
		$conducteur->listConducteur();

		/* Ajout de nouveau conducteur */
		$conducteur->nouveauConducteur();

	}


?>