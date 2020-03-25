<?php

namespace App\Models;
use Config\Db;

class Model
{
  static public function all()
  {
    $obj = new static;
   // var_dump($obj->table);
    $conn = Db::conexao();
    $select = "select * from ". $obj->table;
    $ret = $conn->query($select);
    $compras = $ret->fetchAll();
    return $compras;
  }
}
