<table>
  <thead>
    <tr>
      <th>Nom</th>
      <th>Prenom</th>
      <th>Email</th>
      <th>Age</th>
      <th>Créer le...</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?= $abonne->nom; ?></td>
      <td><?= $abonne->prenom; ?></td>
      <td><?= $abonne->email; ?></td>
      <td><?= $abonne->age; ?></td>
      <td><?= date('d/m/Y',strtotime($abonne->created_at)); ?></td>
    </tr>
  </tbody>
</table>
