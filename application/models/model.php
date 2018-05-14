<?php

class Model extends CI_Model {

    function simpan_data($data, $table){
        $this->db->insert($table,$data);
        return true;
    }
    //
    // function list_data($table, $limit, $start){
    //      return $query = $this->db->get($table, $limit, $start)->result();
    // }
    //
    function list_data_all($table){
         return $query = $this->db->get($table);
    }
    function getBB()
    {
      // code...
      return $query = $this->db->query("SELECT * FROM infokampanye WHERE i_jenis = 'BB'");
    }
    function getBD()
    {
      // code...
      return $query = $this->db->query("SELECT * FROM infokampanye WHERE i_jenis = 'BD'");
    }
    function getAKS()
    {
      $query = $this->db->get('tbl_desa');
      return $query->result_array();
    }
    function getBD1()
    {
      $query = $this->db->get('tbl_berbagidana');
      return $query->result_array();
    }
    function getBB1()
    {
      $query = $this->db->get('tbl_berbagibarang');
      return $query->result_array();
    }
    function getAKS1()
    {
      $query = $this->db->get('tbl_aksisosial');
      return $query->result_array();
    }
    function dataa($number,$offset){
		return $query = $this->db->get('tbl_desa',$number,$offset)->result();
	}
  function dataa1($number,$offset){
  return $query = $this->db->get('tbl_aksisosial',$number,$offset)->result();
  }
  function dataa2($number,$offset){
  return $query = $this->db->get('tbl_berbagidana',$number,$offset)->result();
  }
  function dataa3($number,$offset){
  return $query = $this->db->get('tbl_berbagibarang',$number,$offset)->result();
  }
	function jumlah_data(){
		return $this->db->get('tbl_desa')->num_rows();
	}
  function jumlah_data1(){
		return $this->db->get('tbl_aksisosial')->num_rows();
	}
  function jumlah_data2(){
		return $this->db->get('tbl_berbagidana')->num_rows();
	}
  function jumlah_data3(){
		return $this->db->get('tbl_berbagibarang')->num_rows();
	}
    //
    // function hitung($param_id, $id, $table){
    //     return $this->db->get_where($table, array($param_id => $id))->num_rows();
    // }
    //
    // function hapus($param_id, $id, $table){
    //     $this->db->delete($table, array($param_id => $id));
    //     return true;
    // }
    //
    function ambil_data($where,$table){
      return $this->db->get_where($table,$where);
    }
    function ambil($param_id, $id, $table){
       return $this->db->get_where($table, array($param_id => $id));
    }
    //
    function update($param_id, $id, $table, $data){
        $this->db->where($param_id, $id);
        $this->db->update($table, $data);
        return true;
    }
    function tambahTransaksi($id){
      $this->db->set('i_terkumpul', 'i_terkumpul +'.(int) 1,false);
      $this->db->where('id_kampanye', $id);
      $this->db->update('infokampanye');
      return true;
    }
    function tambahTransaksiD($id,$nominal){
      $this->db->set('i_terkumpul', 'i_terkumpul +'.(int) $nominal,false);
      $this->db->where('id_kampanye', $id);
      $this->db->update('infokampanye');
      return true;
    }
    function tambahTUser($id){
      $this->db->set('u_transaksi', 'u_transaksi +'.(int) 1,false);
      $this->db->where('id', $id);
      $this->db->update('user');
      return true;
    }
    function verifDana($id,$status){
      $this->db->set('bd_status',$status,false);
      $this->db->where('id_berbagidana', $id);
      $this->db->update('tbl_berbagidana');
      return true;
    }
    function verifBarang($id,$status){
      $this->db->set('bd_status',$status,false);
      $this->db->where('id_berbagibarang', $id);
      $this->db->update('tbl_berbagibarang');
      return true;
    }
    function verifAksi($id,$status){
      $this->db->set('aks_status',$status,false);
      $this->db->where('id_aksisosial', $id);
      $this->db->update('tbl_aksisosial');
      return true;
    }
    function ambil_transaksi($id) {
      $this->db->select('i_terkumpul');
      $this->db->where('id_kampanye',$id);
      $query = $this->db->get('infokampanye');
      return true;
    }
    function ambil_Utransaksi($id) {
      $this->db->select('u_transaksi');
      $this->db->where('id',$id);
      $query = $this->db->get('user');
      return true;
    }
    //
    // function autocomplete($table, $param_table, $id){
    //     //$this->db->order_by('id', 'DESC');
    //     $this->db->like($param_table, $id);
    //     $this->db->limit(5);
    //     return $this->db->get($table);
    // }
    //
    // function max($param_id,$table ){
    //     $this->db->select_max($param_id);
    //     $query = $this->db->get($table)->result_array();
    //     return (int) $query[0][$param_id];
    //
    // }
    //
    function maxWhere($param_id1,$param_id2,$id,$table ){
        $this->db->select_max($param_id1);
        $this->db->where($param_id2, $id);
        $query = $this->db->get($table)->result_array();
        return (int) $query[0][$param_id1];

    }

    function maxFrom($param_id,$table ){
        $this->db->select_max($param_id);
        $query = $this->db->get($table)->result_array();
        return (int) $query[0][$param_id];

    }
    public function getDataUser($username){
      return $data = $this->db->select("*")
      ->from("user")
      ->where("user.username",$username)
      ->get();
    }
    public function getUser(){
      return $data = $this->db->select("*")
                          ->from("user")
                          ->get();
    }
    public function getNilai(){
      return $data = $this->db->select("*")
                          ->from("nilai")
                          ->get();
    }
    public function setNilai($data,$table){
      $this->db->insert($table,$data);
      return true;
    }
    public function updateNilai($param_id,$id,$table,$data){
      // $this->db->set($data);
      $this->db->where($param_id,$id);
      $this->db->update($table,$data);
      return true;
    }
    public function deleteNilai($param_id,$id,$table){
      $this->db->delete($table, array($param_id=>$id));
      return true;
    }
    function data($number,$offset){
		return $query = $this->db->get('infokampanye',$number,$offset)->result();
	}

}
