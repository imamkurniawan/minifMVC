<?php

class class_csv
{
  public $filename;
  public $csv_header = [];

  public function __Construct($file)
  {
    // Set property filename
    $this->filename = $file;
    // Get header
    $this->getCsvHeader();
  }

  public function getCsvHeader()
  {
    // Get data perlines
    $lines_csv = file($this->filename);

    // Get header column
    $field = explode(',', $lines_csv[0]);
    // Save header on csv_header property
    $this->csv_header = $field;
    //
  }

}

