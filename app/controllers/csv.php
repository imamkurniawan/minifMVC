<?php

class Csv  extends Controller
{
  public function index()
  {
    $csv = new class_csv('contents/csv/tes.csv');
    $fields = $csv->csv_header;

    header('Content-type: application/json');
    echo $json = json_encode($fields);

    
  }

}
