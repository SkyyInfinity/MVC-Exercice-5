<?php
namespace App\Model;

use App\App;
use App\Weblitzer\Model;

class AbonnesModel extends Model {
  protected static $table = 'abonnes';
  public static function insert($post) {
    App::getDatabase()->prepareInsert("INSERT INTO " . self::getTable() . " (nom, prenom, email, age, created_at) VALUES (?, ?, NOW())", [$post['nom'], [$post['prenom'], [$post['email'], [$post['age']]);
  }
}
