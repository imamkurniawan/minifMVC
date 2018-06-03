<?php
/*
* Library class pdo
* untuk menghandle database menggunakan teknik PDO
* Author : Imam Kurniawan (imamkurniawan.ntb@gmail.com)
*
*/

Class class_pdo{
	public $host;
	private $username;
	private $password;
	private $dbname;
	public $conn;

	public function __construct($host, $username, $password, $dbname){
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->dbname = $dbname;
		$this->bukaKoneksi();
	}

	public function bukaKoneksi(){
		try{
			$this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
		}
		catch (PDOException $e){
			echo "Error ". $e->getMessage();
			exit;
		}
	}

	public function getData($tabel, $ket=""){
		// Sangat dianjurkan menggunakan double quote pada query..
		// $ket dapat digunakan untuk limit data. (exp: "LIMIT 0,10")
		$result = $this->conn->query("SELECT * FROM $tabel $ket");

		// menampung data pada variabel array kemudian mengembalikan nilainya
		while ($row = $result->fetch(PDO::FETCH_ASSOC))
			$data[] = $row;
		return $data;
	}

	public function getSpecificData($tabel,$field,$spesifik)
	{
		$query = $this->conn->query("SELECT * FROM $tabel where $field=$spesifik");
		while ($row = $query->fetch(PDO::FETCH_ASSOC))
			$data[] = $row;
		return $data;
	}

	public function delAll($table)
	{
		$query = "DELETE FROM $tabel"; 
		$this->conn->query($query);
	}

	public function delSpecific($tabel,$field,$spesifik)
	{
		$query = "DELETE FROM $tabel WHERE $field=$spesifik";
		$this->conn->query($query);
	}

	public function query($query="")
	{
		$this->conn->query($query);
	}

	public function updateData($tbl,$field,$newvalue,$keyfield,$keyvalue)
	{
		$query = "UPDATE $tbl SET $field='$newvalue' where $keyfield=$keyvalue";
		$this->conn->query($query);
	}

	public function getTable()
	{

	}

	public function getColumn()
	{

	}
}
