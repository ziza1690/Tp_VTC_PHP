<?php
/**
 * 
 */
require_once 'Model.php';

class Association extends Model
{
	private $id_association;
	private $id_conducteur;
	private $id_vehicule;

	public function getIdAssociation()
	{
		return $this->id_association;
	}

	public function getIdConducteur()
	{
		return $this->id_conducteur;
	}

	public function setIdConducteur($id_conducteur)
	{
		return $this->id_conducteur = $id_conducteur;
	}

	public function getIdVehicule()
	{
		return $this->id_vehicule;
	}

	public function setIdVehicule($id_vehicule)
	{
		return $this->id_vehicule = $id_vehicule;
	}

	public function ajout_association($id_conducteur, $id_vehicule)
	{
		$bdd = Model::getConnection();

		$sql = $bdd->prepare("INSERT INTO association (id_conducteur, id_vehicule) VALUES ('$id_conducteur','$id_vehicule')");

		if (!$sql->execute()) {
			die("OUPS: Revoir la requete sql");
		}
		
	}


	public function show_association()
	{
		$bdd = Model::getConnection();

		$sql = $bdd->prepare("SELECT * FROM association assoc JOIN vehicule v ON assoc.id_vehicule = v.id_vehicule JOIN conducteur c ON c.id_conducteur = assoc.id_conducteur");
		$sql->execute();
		$resultat = $sql->fetchAll(PDO::FETCH_CLASS, 'Association');

		return $resultat;
	}
	
}
?>