<?php

class Home extends Controller
{
	public function index()
	{
		$data = array ('name'=>"imam", 'kelas'=>21, 'buah' => ['nama'=>'mangga','warna'=>'merah',
		'namas'=>'mangga','warnas'=>'merah'], 'usia'=>123);
		//header('Content-type: application/json');
		//echo $json = json_encode($data);
		$this->view('home/index',$data);
	}

}
