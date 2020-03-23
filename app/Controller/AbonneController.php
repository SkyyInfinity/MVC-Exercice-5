<?php
namespace App\Controller;

use App\Service\Form;
use App\Service\Validation;
use App\Weblitzer\Controller;
use App\Model\AbonneModel;

class AbonneController extends Controller {
  //METHODE READ
  public function read() {
    $abonnes = AbonneModel::all();
    $count = AbonneModel::count();
    $this->render('app.abonne.read',array(
      'abonnes' => $abonnes,
      'count' => $count
    ));
  }

  //METHODE ADD
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
        AbonneModel::insert($post);
        $this->redirect('read');
      }
    }
    $form = new Form($errors);
    $this->render('app.abonne.add', array(
      'form' => $form
    ));
  }

  //METHODE DETAIL
  public function detail($id) {
    $abonne = AbonneModel::findById($id);
    if(empty($abonne)) {
      $this->Abort404();
    }
    $this->render('app.abonne.detail', array(
      'abonne' => $abonne
    ));
  }

  //METHODE UPDATE
  public function update($id) {
    $errors = array();
    $abonne = AbonneModel::findById($id);
    if(empty($abonne)) {
      $this->Abort404();
    }
    if(!empty($_POST['submitted'])) {
      $post = $this->cleanXss($_POST);
      $validation = new Validation();
      $errors['nom'] = $validation->textValid($post['nom'], 'nom', 3, 255);
      $errors['prenom'] = $validation->textValid($post['prenom'], 'prenom', 3, 255);
      $errors['email'] = $validation->emailValid($post['email']);
      $errors['age'] = $validation->textValid($post['age'], 'age', 1, 2);
      if($validation->IsValid($errors)) {
        AbonneModel::update($id, $post);
        $this->redirect('read');
      }
    }
    $form = new Form($errors);
    $this->render('app.abonne.update', array(
      'form' => $form,
      'abonne' => $abonne
    ));
  }

  //METHODE DELETE
  public function delete($id){
    $abonne = AbonneModel::findById($id);
    if(empty($abonne)) { $this->Abort404(); }
    AbonneModel::delete($id);
    $this->redirect('read');
  }
}
