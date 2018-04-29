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
      // code...
      return $query = $this->db->query("SELECT * FROM infokampanye WHERE i_jenis = 'AKS'");
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
    function ambil($param_id, $id, $table){
       return $this->db->get_where($table, array($param_id => $id));
    }
    //
    function update($param_id, $id, $table, $data){
        $this->db->where($param_id, $id);
        $this->db->update($table, $data);
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

}
