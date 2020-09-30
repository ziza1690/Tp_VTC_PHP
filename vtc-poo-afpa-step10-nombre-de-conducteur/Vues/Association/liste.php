<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Conducteur</th>
      <th scope="col">Véhicule</th>
      <th scope="col">Modification</th>
      <th scope="col">Suppression</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach ($afficher_association as $association) {
      	
        echo "<tr>";
        echo "<td>".$association->getIdAssociation()."</td>";
        echo "<td>".$association->prenom." ".$association->nom." </br>".$association->getIdConducteur()."</td>";
        echo "<td>".$association->marque." ".$association->modele." </br>".$association->immatriculation."</td>";
        echo "</tr>";
      }
    ?>
  </tbody>
</table>
