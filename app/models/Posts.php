<?php

class Posts
{
  public $id;
  public $title;
  public $content;
  public $posts = [];

  public function __construct()
  {
    $this->showPosts();
  }

  public function getData()
  {
    $this->kelas = ['user' => "imam", 'id' => 21, 'password' => '', 'role' => 'root'];
    //$this->kelas = $data;
  }

  public function showPosts()
  {
    $posts = new class_mysql(host, user, password, dbname);
    $this->posts = $posts->mysql_getData("minif_posts");
  }

  public function delPosts()
  {
    $posts = new class_mysql(host, user, password, dbname);
    $posts->mysql_delSpecifik('minif_posts','id',$this->id);
  }

  public function addPosts()
  {
    $title_uri = str_replace(' ', '-', $this->title);
    $posts = new class_mysql(host, user, password, dbname);
    $posts->mysql_queryInsert("INSERT INTO minif_posts (title, title_uri, posts) VALUE('$this->title', '$title_uri', '$this->content')");
  }

  public function selectID()
  {
    $id = $this->id;
    $posts = new class_mysql(host, user, password, dbname);
    $this->posts = $posts->mysql_getSpecifikData('minif_posts','id',$id);
  }

  public function updatePosts()
  {
    $title_uri = str_replace(' ', '-', $this->title);
    $posts = new class_mysql(host, user, password, dbname);
    $posts->mysql_editData('minif_posts', 'title', $this->title, $this->id);
    $posts->mysql_editData('minif_posts', 'title_uri', $title_uri, $this->id);
    $posts->mysql_editData('minif_posts', 'posts', $this->content, $this->id);
  }

}
