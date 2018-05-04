<?php

Class class_file{
public $file_property = array();
/*
*		property file terdiri Dari :
*		['filename'], ['type'], ['filesize'],
*		[filesize2], [folder], ['extension']
*/
public $file_count;
public $file_totalSize;
public $file_totalSizeKB;
public $file_totalSizeMB;
public $file_totalSizeGB;

public function __Construct($dir){
	//$this->file = $file;
	$this->getFile($dir);
	$this->file_count = count($this->file_property);
}

public function fsize($file){
	$a = array("Byte","KB","MB","GB","TB","PB");
	$pos = 0;
	$size = filesize($file);
	while ($size >=1024) {
		$size /= 1024;
		$pos++;
	}
	return round($size,2)." ".$a[$pos];
}

/* Execute this ! */
public function getFile($dir){
	if ($handle = opendir($dir)) {
	$i =0; $totalSize = 0;
    /* This is the correct way to loop over the directory. */
    while (false !== ($entry = readdir($handle))) {
		$nama_file = $entry;
		$jenis_file = filetype($dir . $entry);
		$ukuran_file = filesize($dir . $entry);
		$totalSize = $totalSize + $ukuran_file;
		$ukuran_file2 = $this->fsize($dir . $entry);
		$info = pathinfo($dir . $entry);
		$dirname = $info['dirname'];
		$basename = $info['basename'];
		//$extension = $info['extension'];
		if($jenis_file != 'dir'){
				$this->file_property[$i] = array (	"filename" => $nama_file,
							"type" => $jenis_file,
							"filezise" => $ukuran_file,
							"filesize2" => $ukuran_file2,
							"folder" => $dirname,
							"extension" => $info['extension']); // if filetype <> dir then file have extension
			}
		$i++;
		}
    closedir($handle);
	$this->file_totalSize = $totalSize;
	$this->file_totalSizeKB = round($totalSize / 1024,2);
	$this->file_totalSizeMB = round($this->file_totalSizeKB / 1024,2);
	$this->file_totalSizeGB = round($this->file_totalSizeMB / 1024,2);
	}
}
} /* end of Class */

