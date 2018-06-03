<?php
/*
* model
* Contoh model menggunakan library class_pdo
*/

Class PDO_model
{
  public $conn;

  public $id;
  public $title;
  public $title_uri;
  public $content;
  public $image;
  public $thumbnail;
  public $author;
  public $posts = [];
  public $specific = [];

  public function __construct()
  {
    $this-> newConn();
  }

  public function newConn()
  {
    $this->conn = new class_pdo(host, user, password, dbname);
  }

  public function showPosts()
  {
    // buat objek dari class class_pdo
    $posts = $this->conn;
    // Tampung data pada variabel array
    $this->posts = $posts->getData("minif_posts");    
  }

  public function selectID()
  {
    $id = $this->id;
    $kelas = $this->conn;
    $this->specific = $kelas->getSpecificData("minif_posts","id",$id);
    
  }

  public function delPost()
  {
    $id = $this->id;
    $kelas = $this->conn;
    $this->specific = $kelas->delSpecific("minif_posts","id",$id);
  }

  public function addPosts()
  {
    
    $kelas = $this->conn;
    $kelas->query("INSERT INTO minif_posts (title, title_uri, posts, image, thumbnail, author) ".
      "VALUE('$this->title', '$this->title_uri', '$this->content', '$this->image','$this->thumbnail','$this->author')");
  }

  public function updatePosts()
  {
    $title_uri = str_replace(' ', '-', $this->title);
    $kelas = $this->conn;
    $kelas->updateData('minif_posts','title',$this->title,'id',$this->id);
    $kelas->updateData('minif_posts','title_uri',$title_uri,'id',$this->id);
    $kelas->updateData('minif_posts','posts',$this->content,'id',$this->id);
  }

}
