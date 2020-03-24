<form action="" method="post">
  <!-- NOM -->
  <?php echo $form->label('nom'); ?>
  <?php echo $form->input('nom', $abonne->nom); ?>
  <?php echo $form->error('nom'); ?>
  <!-- PRENOM -->
  <?php echo $form->label('prenom'); ?>
  <?php echo $form->input('prenom', $abonne->prenom); ?>
  <?php echo $form->error('prenom'); ?>
  <!-- EMAIL -->
  <?php echo $form->label('email'); ?>
  <?php echo $form->input('email', $abonne->email); ?>
  <?php echo $form->error('email'); ?>
  <!-- AGE -->
  <?php echo $form->label('age'); ?>
  <?php echo $form->input('age', $abonne->age); ?>
  <?php echo $form->error('age'); ?>
  <!-- SUBMIT -->
  <?php echo $form->submit(); ?>
</form>
