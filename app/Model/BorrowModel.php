<?php
namespace App\Model;

use App\App;
use App\Weblitzer\Model;

class BorrowModel extends Model {
  protected static $table = 'borrows';
  public static function insert($post) {
    App::getDatabase()->prepareInsert("INSERT INTO " . self::getTable() . " (id_abonne, id_product, date_start, date_end) VALUES (?,?,NOW(),NULL) ",[$post['id_abonne'],$post['id_product']]);
  }
  public static function rendu($id){
    App::getDatabase()->prepareInsert("UPDATE " . self::getTable() . " SET date_end = NOW() WHERE id = ?",[$id]);
  }
}
