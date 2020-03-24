<li><a href="<?= $view->path('addabonne'); ?>">Ajouter un nouvel abonne</a></li>
<!-- TABLEAU -->
<table>
  <thead>
    <tr>
      <th>Nom</th>
      <th>Prenom</th>
      <th>Email</th>
      <th>Age</th>
      <th>Inscrit Depuis...</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($abonnes as $abonne) { ?>
    <tr>
      <td><?= $abonne->nom; ?></td>
      <td><?= $abonne->prenom; ?></td>
      <td><?= $abonne->email; ?></td>
      <td><?= $abonne->age; ?></td>
      <td><?= date('d/m/Y',strtotime($abonne->created_at)); ?></td>
      <td>
        <a href="<?= $view->path('detailabonne',array($abonne->id)); ?>">Voir</a>
        <a href="<?= $view->path('updateabonne',array($abonne->id)); ?>">Modifier</a>
        <a href="<?= $view->path('deleteabonne',array($abonne->id)); ?>" onclick="return confirm('Voulez vous vraiment effacer cet utilisateur ?');">Supprimer</a>
      </td>
    </tr>
  <?php } ?>
  </tbody>
</table>
