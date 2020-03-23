<?php
namespace App\Controller;

use App\Service\Form;
use App\Service\Validation;
use App\Weblitzer\Controller;
use App\Model\AbonnesModel;

class AbonnesController extends Controller {
  public function add() {
    $errors = array();
    if(!empty($_POST['submitted'])) {
      $post = $this->cleanXss($_POST);
      $validation = new Validation();
      $errors['nom'] = $validation->textValid($post['nom'], 'nom', 3, 255);
      $errors['prenom'] = $validation->textValid($post['prenom'], 'prenom', 3, 255);
      $errors['email'] = $validation->emailValid($post['email']);
      $errors['age'] = $validation->textValid($post['age'], 'age', 1, 2);
      if($validation->IsValid($errors)) {
        AbonnesModel::insert($post);
        $this->redirect('home');
      }
    }
    $form = new Form($errors);
    $this->render('app.abonnes.add', array(
      'form' => $form
    ));
  }
}
