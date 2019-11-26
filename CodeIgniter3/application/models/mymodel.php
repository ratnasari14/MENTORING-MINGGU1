<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {

public function GetMahasiswa(){
$data = $this -> db -> query ('select * from mahasiswa');
return $data-> result_array();
		
	}

public function InsertData ($tabelNama, $data){
$res = $this->db->insert ($tabelNama, $data); 
return $res;
}
public function UpdateData ($tabelNama, $data, $where){
	$res = $this->db->update ($tabelNama, $data, $where); 
return $res;
}
public function DeleteData ($tabelNama, $data ){
		$res = $this->db->delete ($tabelNama, $data); 
return $res;

}
}
