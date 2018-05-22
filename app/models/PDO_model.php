<?php
/*
* model
* Contoh model menggunakan library class_pdo
*/

Class PDO_model
{
  public $id;
  public $title;
  public $content;
  public $posts = [];
  public $specific = [];

  public function __construct()
  {
    //$this->showPosts();
    //$this->showSpecific();
  }

  public function showPosts()
  {
    // buat objek dari class class_pdo
    $posts = new class_pdo(host, user, password, dbname);
    // Tampung data pada variabel array
    $this->posts = $posts->getData("minif_posts");
    
  }

  public function showSpecific()
  {
    // buat objek dari class class_pdo
    $posts = new class_pdo(host, user, password, dbname);
    $this->specific = $posts->getSpecificData("minif_posts","id",1);
  }

}
