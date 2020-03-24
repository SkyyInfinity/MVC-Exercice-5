<li><a href="<?= $view->path('addborrow'); ?>">Ajouter un nouvel emprunts</a></li>
<!-- TABLEAU -->
<table>
  <thead>
    <tr>
      <th>Abonné</th>
      <th>Produit</th>
      <th>Date du début</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($borrows as $borrow) { ?>
    <tr>
      <td><?= $abonne->nom; ?></td>
      <td><?= $product->titre; ?></td>
      <td><?= date('d/m/Y',strtotime($borrow->date_start)); ?></td>
      <td>
        <a href="<?= $view->path('hideborrow',array($borrow->date_end)); ?>" onclick="return confirm('Voulez vous vraiment effacer cet utilisateur ?');">Caché</a>
      </td>
    </tr>
  <?php } ?>
  </tbody>
</table>
