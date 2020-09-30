<?php

   if (empty($liste_vehicules)) {
        echo "<div class='alert alert-danger' role='alert'>Pas de véhicule disponible !
        </div>";
      }
      else{
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Marque</th>
      <th scope="col">Modéle</th>
      <th scope="col">Couleur</th>
      <th scope="col">Immatriculation</th>
      <th scope="col">Modification</th>
      <th scope="col">suppression</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach ($liste_vehicules as $vehicule) {
        echo "<tr>";
        echo "<td>".$vehicule->getIdVehicule()."</td>";
        echo "<td>".$vehicule->getMarque()."</td>";
        echo "<td>".$vehicule->getModele()."</td>";
        echo "<td>".$vehicule->getCouleur()."</td>";
        echo "<td>".$vehicule->getImmatriculation()."</td>";
        echo "<td><a href='?action=modificationVehicule&vehiculeId=".$vehicule->getIdVehicule()."'><img src='./Ressources/img/editVehi.png' width='30'></a>
        </td>";
        ?>
        <td><img src='./Ressources/img/deleteVehi.png' width='20' data-toggle="modal" data-target="#vtc-<?php echo $vehicule->getIdVehicule(); ?>"></td>


        <!-- Modal -->
        <div class="modal fade" id="vtc-<?php echo $vehicule->getIdVehicule(); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">VTC - AFPA </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Voulez vous vraiment supprimer: <?php echo $vehicule->getMarque()." ".$vehicule->getModele(); ?> ? 
                <small>Tu es sûr ? </small>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
                <a href="">
                  <button type="button" class="btn btn-danger">Oui</button>
                </a>
              </div>
            </div>
          </div>
        </div>
        <?php
        echo "</tr>";
      }
    ?>
  </tbody>
</table>
<?php
}
