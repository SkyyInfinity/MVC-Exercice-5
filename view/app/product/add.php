<form action="" method="post">
  <!-- TITRE -->
  <?php echo $form->label('titre'); ?>
  <?php echo $form->input('titre'); ?>
  <?php echo $form->error('titre'); ?>
  <!-- REFERENCE -->
  <?php echo $form->label('reference'); ?>
  <?php echo $form->input('reference'); ?>
  <?php echo $form->error('reference'); ?>
  <!-- DESCRIPTION -->
  <?php echo $form->label('description'); ?>
  <?php echo $form->textarea('description'); ?>
  <?php echo $form->error('description'); ?>
  <!-- SUBMIT -->
  <?php echo $form->submit(); ?>
</form>
