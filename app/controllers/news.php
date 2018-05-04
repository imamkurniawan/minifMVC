<?php
/*
* Contoh menggunakan model posts yang menggunakan librari class_mysql
* Contoh ini tidak bisa digunakan pada PHP7
*/
class News extends Controller
{
  public function index($name = '', $role = 'News')
  {
    $posts = $this->model('Posts');
    $posts->name = $name;
    $this->view( 'news/news', ['name' => $posts->name, 'posts' =>$posts->posts,
                  'role' => $role]);
  }

  public function newsDetail($id='', $title_uri='')
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
    $posts = $this->model('posts');
    // inisiasi property id pada model posts
    $posts->id = $id;
    // jalankan method query spesifik id
    $posts->selectID();

    // Panggil view
    $this->view('news/news-detail', $data = $posts->posts);
  }

  public function addNews($title = '', $content= '')
  {
    $posts = $this->model('Posts');
    $posts->title = $_POST['title'];
    $posts->content = $_POST['content'];
    $posts->addPosts();

    $this->index();
    //echo "News was added and ";
    //echo "<a href=".HOME_PATH."news>back to the News Page </a>";
  }

  public function showJson($key='')
  {
    $token = "123456";
    header('Content-type: application/json');
    $posts = $this->model('Posts');
    if($key<>$token){
      $data = ["cod" => 401, "message" => "Invalid API Key."];
    }
    else{
      $data = $posts->posts;
    }
    echo $json = json_encode($data);
  }

  public function delete($id='')
  {
    $posts = $this->model('Posts');
    $posts->id = $id;
    $posts->delPosts();
    $this->index();
    //echo "news was deleted and ";
    //echo "<a href=".home."news>Back to news page </a>";
  }

  public function formNews()
  {
    $this->view('news/posting_news');
  }

  public function formUpdate($id='')
  {
    $list = $this->model('Posts');
    $list->id = $id;
    $list->selectID();
    $posts = $list->posts;
    $this->view('news/update_news', ['id' => $id, 'posts' =>$posts]);
  }

  public function updateNews()
  {
    $posts = $this->model('Posts');
    $posts->id = $_POST['id'];
    $posts->title = $_POST['title'];
    $posts->content = $_POST['content'];
    $posts->updatePosts();

    $this->index();
    //echo "<a href=".HOME_PATH."news>Back to news page </a>";
  }

}
