<?php

class Maps extends Controller
{
  public function index($value='')
  {
    $this->view('maps/index');
  }

  public function Leisure_Room($value='')
  {
    echo "<h1>This is Leisure Rooms, ".$value."!</h1>";
  }
}
