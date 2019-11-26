<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data = $this -> mymodel -> GetMahasiswa();
		foreach ($data as $d ){
			echo "Nomor induk mahasiswa : ". $d['npm']. "<br/>";
			echo "Nama  : ". $d['nama']. "<br/>";
			echo "jurusan: ". $d['jurusan']. "<br/>";
			echo "alamat : ". $d['alamat']. "<hr/>";

		}
	}
		public function insert (){
			$res= $this -> mymodel-> InsertData('mahasiswa', array(
				"npm" => "",
				"nama " => "ratna sari",
				"jurusan" => "teknil infor",
			    "alamat"=> "maliki",));
			if ($res >= 1 ){
				echo "<h2> insert data sukses </h2>";
			}else {
				echo "<h2> insert data gagal </h2>";
			}

		}
		public function update(){
			$res= $this -> mymodel-> UpdateData('mahasiswa', array(
			    "alamat"=> "maliki, Depok",),
			array('npm'=> '55451682'));
			if ($res >= 1 ){
				echo "<h2> update  data sukses </h2>";
			}else {
				echo "<h2> update data gagal </h2>";
			}



		}
		public function delete(){
			$res = $this -> mymodel-> DeleteData ('mahasiswa', array ('npm' => '55451683'));

			if ($res >= 1 ){
				echo "<h2> delete data sukses </h2>";
			}else {
				echo "<h2> delete() data gagal </h2>";
			}


		}
	
}


