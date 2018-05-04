<?php
/*
* contoh menggunakan model Posts_PDO_model
*/
Class News_PDO extends Controller
{
  public $data;

  public function __construct()
  {
    // Menggunakan model Posts_PDO_model
    $this->data = $this->model('PDO_model');
  }

  public function index()
  {
    // Menggunakan view('PDO_view/index')
    $this->view('PDO_view/index', $this->data);
  }

  public function printArray()
  {
    print_r($this->data);
  }

  public function json()
	{
		$data = $this->model('PDO_model');
		$json = $data;
		header('Content-type: application/json');
		echo $json_data = json_encode($json);
	}
}
