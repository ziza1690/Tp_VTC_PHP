<div class="container">
  <form method="post">
    <div class="form-group">
      <label for="exampleFormControlSelect1">Conducteur</label>
      <select class="form-control" id="exampleFormControlSelect1" name="id_conducteur">
        <?php
          foreach($liste_des_conducteurs as $conducteur){
            echo "<option value=".$conducteur->getIdConducteur().">".$conducteur->getPrenom()." - ".$conducteur->getNom()."</option>";
        }
        ?>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Véhicule</label>
      <select class="form-control" id="exampleFormControlSelect1" name="id_vehicule">
        <?php
          foreach($liste_des_vehicules as $vehicule){
            echo "<option value=".$vehicule->getIdVehicule().">".$vehicule->getMarque()." - ".$vehicule->getModele()."</option>";
        }
        ?>
      </select>
    </div>
  <button type="submit" class="btn btn-primary" name="submit">Créer</button>
</form>
</div>