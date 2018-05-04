<?php

class Admin extends Controller
{
  // list file system
  public $lib = [];
  public $cont = [];
  public $models_file = [];
  public $helpers_file = [];
  public $conf_file = [];

  // List database
  public $tableInDb = [];

  public function index()
  {
    $this->checkSession();
    $this->getFileSystem();
    $this->getTable();
    $this->view('admin/adm-dash',['lib' => $this->lib, 'cont'=>$this->cont, 'table'=>$this->tableInDb,
    'models'=>$this->models_file, 'helpers'=>$this->helpers_file, 'conf'=>$this->conf_file]);
  }

  public function getFileSystem()
  {
    // get library file
    $file = new class_file('../app/lib/');
    $this->lib = $file->file_property;
    // get controller file
    $file = new class_file('../app/controllers/');
    $this->cont = $file->file_property;
    // get model filename
    $file = new class_file('../app/models/');
    $this->models_file = $file->file_property;
    // get helpers file
    $file = new class_file('../app/helpers/');
    $this->helpers_file = $file->file_property;
    // get conf file
    $file = new class_file('../app/conf/');
    $this->conf_file = $file->file_property;
  }

  public function getTable()
  {
    $table = new class_mysql(host, user, password, dbname);
    $this->tableInDb = $table->mysql_getTable();
  }

  public function saveLogToDb()
  {
    save_visitor_info('log/log.txt');
    $this->index();
  }

  public function checkSession($value='')
  {
    $user = 'imam';
    $id = 'imam';
    if(!isset($user) || ($user <> $id)){
      // echo "U must Login!";
      exit;
    }
    else{
      // echo "Login successfuly";
    }
  }

}
