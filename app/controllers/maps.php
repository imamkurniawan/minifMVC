<?php

class Maps extends Controller
{
  public function index($value='')
  {
    $this->view('maps/index');
  }

  public function scanFile()
  {
    $folder = new class_file("js/");
    print_r($folder);
    print "<br>";
    print("File Count : " . $folder->file_count) . " File<br>";
    print("Total Size : " . $folder->file_totalSizeMB) . " MB<br>";
    foreach($folder->file_property as $list)
    {
      echo $list['filename'] . " (".$list['filesize2'].")<br>";
    }
  }

  public function scanFolder($folder = "../app/")
  {
    $kelas = new class_folder($folder);
  }

  public function findFile($folder="content", $keyword="")
  {
    //$keyword = "js";
    $files = findFile($folder,"*$keyword*");
    //print_r($files);
    foreach($files as $list)
      print($list)."<br>";
  }
}
