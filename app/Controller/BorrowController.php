<?php
namespace App\Controller;

use App\Service\Form;
use App\Service\Validation;
use App\Weblitzer\Controller;
use App\Model\BorrowModel;
use App\Model\AbonneModel;
use App\Model\ProductModel;

class BorrowController extends Controller {
  //METHODE READ
  public function read() {
    $borrows = BorrowModel::all();
    $abonnes = AbonneModel::all();
    $products = ProductModel::all();
    $count = BorrowModel::count();
    $this->render('app.borrow.read',array(
      'borrows' => $borrows,
      'abonnes' => $abonnes,
      'products' => $products,
      'count' => $count
    ));
  }

  //METHODE ADD
  public function add() {
    $errors = array();
    if(!empty($_POST['submitted'])) {
      $post = $this->cleanXss($_POST);
      $validation = new Validation();
      $errors = $this->validationBorrow($validation, $errors, $post);
      if($validation->IsValid($errors)) {
        BorrowModel::insert($post);
        $this->redirect('readborrow');
      }
    }
    $form = new Form($errors);
    $this->render('app.borrow.add', array(
      'form' => $form
    ));
  }

  //METHODE HIDE
  public function hide($id){
    $borrow = $this->ifBorrowExistOr404($id);
    BorrowModel::hide($id);
    $this->redirect('readborrow');
  }

  //METHODE REDIRECTION 404
  private function ifBorrowExistOr404($id)
    {
        $borrow = BorrowModel::findById($id);
        if(empty($borrow)) {
            $this->Abort404();
        }
        return $borrow;

    }

    //METHODE VALIDATION
    private function validationBorrow($validation,$errors,$post)
    {
      $errors['id_abonne'] = $validation->textValid($post['id_abonne'], 'id_abonne', 0, 99999999999);
      $errors['id_product'] = $validation->textValid($post['id_product'], 'id_product', 0, 99999999999);
      return $errors;
    }
}
