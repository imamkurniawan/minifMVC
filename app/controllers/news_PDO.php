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
    // memanggil model posts
    $kelas = $this->model('PDO_model');
    // inisiasi property id pada model posts
    $kelas->id = $id;
    // jalankan method query spesifik id
    $kelas->selectID();
    //print_r($kelas->specific);
    $data = $kelas->specific;

    // call views
    $this->view("PDO_view/news-detail", $data);
  }

  public function delete($id="")
  {
    if($id == null)
    {
      $id = 0;
      $this->view('news/page-not-found');
      exit;
    }
    $kelas = $this->model('PDO_model');
    $kelas->id = $id;
    $kelas->delPost();
    $this->index();
  }

  public function formNews()
  {
    $this->view('PDO_view/posting-news');
  }

  public function addNews($title="", $content="")
  {
    // Memproses kiriman dari formNews
    $posts = $this->model('PDO_model');
    $posts->title = $_POST['title'];
    $posts->content = $_POST['content'];
    $posts->title_uri = str_replace(' ', '-', $posts->title);
    $posts->image = date("Ymd")."-".$posts->title_uri.".jpg";
    $posts->thumbnail = "thumb-".$posts->image;
    $posts->author = "admin";    
    $posts->addPosts();

    $this->index();
  }

  public function formUpdate($id='')
  {
    $kelas = $this->model('PDO_model');
    $kelas->id = $id;
    $kelas->selectID();
    $data = $kelas->specific;
    $this->view('PDO_view/update-news', ['id' => $id, 'posts' =>$data]);
  }

  public function updateNews()
  {
    $kelas = $this->model('PDO_model');
    $kelas->id = $_POST['id'];
    $kelas->title = $_POST['title'];
    $kelas->content = $_POST['content'];
    $kelas->updatePosts();

    $this->index();
  }


  /**
   * Extended method
   */
  public function printArray()
  {
    $kelas = $this->model('PDO_model');
    $kelas->showPosts();
    $this->data = $kelas->posts;
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
