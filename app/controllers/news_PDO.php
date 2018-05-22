<?php
/*
* Controller
* contoh menggunakan model Posts_PDO_model
*/
Class News_PDO extends Controller
{
  public $data;

  public function index()
  {
    // inisiasi kelas model 'PDO_model'
    // jalankan method showPost()
    $kelas = $this->model('PDO_model');
    $kelas->showPosts();
    // tampung properties posts
    $this->data = $kelas->posts;
    // Menggunakan view('PDO_view/index')
    $this->view('PDO_view/index', $this->data);
  }

  public function newsDetails($id="")
  {
    // $id untuk query berita
    // $title_uri untuk menampilkan title uri di browser
    if($id == null)
    {
      $id = 0;
      $this->view('news/page-not-found');
      exit;
    }


  }

  public function printArray()
  {
    print_r($this->data);
  }

  public function json()
  {
    $kelas = $this->model('PDO_model');
    $kelas->showPosts();
    $data = $kelas->posts;
	  $json = $data;
	header('Content-type: application/json');
	  echo $json_data = json_encode($json);
  }
}
