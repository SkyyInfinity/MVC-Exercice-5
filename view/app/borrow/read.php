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
    <tr>
      <?php foreach($abonnes as $abonne) { ?>
      <td><?= $abonne->nom; ?></td>
      <?php } ?>
      <?php foreach($products as $product) { ?>
      <td><?= $product->titre; ?></td>
      <?php } ?>
      <?php foreach($borrows as $borrow) { ?>
      <td><?= date('d/m/Y',strtotime($borrow->date_start)); ?></td>
      <td>
        <a href="<?= $view->path('hideborrow',array($borrow->date_end)); ?>" onclick="return confirm('Voulez vous vraiment cacher cet emprunt ?');">Caché</a>
        <?php } ?>
      </td>
    </tr>
  </tbody>
</table>
