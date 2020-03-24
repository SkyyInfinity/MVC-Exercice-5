<li><a href="<?= $view->path('addproduct'); ?>">Ajouter un nouveau produit</a></li>
<!-- TABLEAU -->
<table>
  <thead>
    <tr>
      <th>Titre</th>
      <th>Reference</th>
      <th>Description</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($products as $product) { ?>
    <tr>
      <td><?= $product->titre; ?></td>
      <td><?= $product->reference; ?></td>
      <td><?= $product->description; ?></td>
      <td>
        <a href="<?= $view->path('detailproduct',array($product->id)); ?>">Voir</a>
        <a href="<?= $view->path('updateproduct',array($product->id)); ?>">Modifier</a>
        <a href="<?= $view->path('deleteproduct',array($product->id)); ?>" onclick="return confirm('Voulez vous vraiment effacer ce produit ?');">Supprimer</a>
      </td>
    </tr>
  <?php } ?>
  </tbody>
</table>
