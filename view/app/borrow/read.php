<!-- FORMULAIRE -->
<form action="" method="post">
  <!-- ABONNE -->
  <?php echo $form->label('Abonné'); ?>
  <?php echo $form->select('id_abonne',$abonnes,'nom'); ?>
  <?php echo $form->error('id_abonne'); ?>
  <!-- PRODUIT -->
  <?php echo $form->label('Produit'); ?>
  <?php echo $form->select('id_product',$products,'titre'); ?>
  <?php echo $form->error('id_product'); ?>
  <!-- SUBMIT -->
  <?php echo $form->submit(); ?>
</form>

<a href="<?= $view->path('borrow_historique'); ?>">Historique</a>

<!-- TABLEAU -->
<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Nom</th>
      <th>Produit</th>
      <th>Date du début</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($borrows as $borrow) { ?>
    <tr>
      <td><?= $borrow->id; ?></td>
      <td><?= $borrow->nom; ?></td>
      <td><?= $borrow->titre; ?></td>
      <td><?= date('d/m/Y',strtotime($borrow->date_start)); ?></td>
      <td>
        <a href="<?= $view->path('hideborrow',array($borrow->id)); ?>" onclick="return confirm('Voulez vous vraiment cacher cet emprunt ?');">Rendu</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
