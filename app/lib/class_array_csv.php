<?php
/*
*	Class tampungArrayCsv
*	class untuk menghandle csv ke array
*	Author : imam kurniawan
*/
Class class_array_csv{
var $file;

public function setCsv($file){
	$this->file = $file;	
	}
public function columnToArray($col){
	$datacsv = fopen($this->file, "r");
	$pemisah=",";
	$i = 0; 
	$result = array();
	while (!feof($datacsv)){
		$data = fgetcsv($datacsv, 1000, $pemisah);
		if($i != 0){ // remove header	
			$result[] = $data[$col];
			}
		if($data == null){
			break;
			}
		$i++;		
		}
	return $result;
	}
}

?>