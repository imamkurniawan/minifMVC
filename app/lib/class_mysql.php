<?php
/*
********************************************************************
*	Class database
*	class untuk menghandle database MySQL dengan mysql Extension.
* TIdak bisa digunakan di PHP7
*	Author : imam kurniawan
*	first UPDATE : 2015
*	last UPDATE : 2017 Sept 24
********************************************************************
*/

// Menggunakan mysql extention (standard)
Class class_mysql{
public $host;
private $username;
private $password;
private $dbname;

public $list_table = array();

public function __Construct($host, $username, $password, $dbname){
	$this->host = $host;
	$this->username = $username;
	$this->password = $password;
	$this->dbname = $dbname;
	$this->bukaKoneksi();
	//$this->mysql_getTable(); // Tampung list tabel
}

public function bukaKoneksi(){
	$connection = mysql_connect($this->host,$this->username,$this->password) or die ("No Connection");
	$db = mysql_select_db($this->dbname,$connection) or die ("Not Found");
}

public function tutupKoneksi(){
	mysql_close();
}

public function mysql_getData($tabel, $ket=""){
	$query = mysql_query("SELECT * FROM $tabel $ket/*LIMIT 0,10*/") or die ("Table Not Exists");
	while ($row = mysql_fetch_array($query))
		$data[] = $row;
	return $data;
}

public function mysql_getSpecifikData($tabel,$field,$spesifik){
	$query = mysql_query("SELECT * FROM $tabel where $field=$spesifik");
	while ($row = mysql_fetch_array($query))
	if(!$row){
		//echo "No data";
	}else{
		//echo "ada data";
		$data[] = $row;
		return $data;
	}
}

public function mysql_delAll($tabel){
	$query = "DELETE from $tabel";
	$result = mysql_query($query);
}

public function mysql_delSpecifik($tabel,$field,$spesifik){
	$query = "DELETE from $tabel where $field=$spesifik";
	$result = mysql_query($query);
}

function mysql_editData($tbl,$field,$newvalue,$ID){
	$query = "UPDATE $tbl SET $field='$newvalue' where ID=$ID";
	$result = mysql_query($query);
}

public function mysql_queryData($query){
		$result = mysql_query($query);
		while ($row = mysql_fetch_array($result))
			$data[] = $row;
		return $data;
}

public function mysql_queryInsert($query){
		$result = mysql_query($query);
}

public function mysql_getTable(){
		$sql = "SHOW TABLES FROM $this->dbname";
		$list_tabel = $this->mysql_queryData($sql);
		//$this->list_table = $list_tabel; // copy array
		return $list_tabel;
}

public function mysql_getColumn($tabel){
		$sql = "SHOW COLUMNS FROM $tabel FROM $this->dbname";
		$list_column = $this->mysql_queryData($sql);
		return $list_column;

}

} /* End of Class */
