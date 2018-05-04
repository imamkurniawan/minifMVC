<?php

class Api extends Controller
{
  public function index()
  {
    $data = ['fruit'=>['Banana','Mango','Apple','Strawberry'],
    'animal'=>['Horse','Cat','Dog','Sheep']];
    
    header('Content-type: application/json');
    echo $json = json_encode($data);
  }

  public function current()
  {
    if(!isset($_GET['id']))
    {
      //echo "no variable";
      $this->view('api/401');
    }
    else{
      echo "ther is a variable exist, value is ".$_GET['id'];
    }
  }
}
