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
