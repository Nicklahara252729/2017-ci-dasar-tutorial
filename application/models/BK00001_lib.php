<?php
if(!defined('BASEPATH')) exit('no file allowed');
class BK00001_lib extends CI_Model{
  function __construct(){
    parent::__construct();
  }

  function selection_one(){
      $query = "select nama,alamat,telp from mahasiswa";
      return $this->db->query($query);
  }

  function selection_two(){
    $query = "select nama from mahasiswa limit 3";
    return $this->db->query($query);
  }

  function selection_three(){
    $sql = "select * from mahasiswa where nama=? and telp=?";
    return $this->db->query($sql,array('Nico Gawa Lahara','082275192292'));
  }

  function selecting_data_one(){
    return $this->db->get('mahasiswa');
  }

  function selecting_data_two(){
    return $this->db->get('mahasiswa',1,1);
  }

  function selecting_data_three($n_id,$n_limit,$n_offset){
    return $this->db-> get_where ('mahasiswa',array('id'=>$n_id),$n_limit,$n_offset);
  }

  function selecting_data_four(){
    $this->db->select('nama,alamat,telp');
    return $query = $this->db->get('mahasiswa');
  }

  function selecting_data_five(){
    $this->db->select('nama,alamat,telp');
    $this->db->from('mahasiswa');
    return $query = $this->db->get();
  }

  function selecting_data_six(){
    return $this->db->select('*')
             ->from('nilai')
             ->join('mahasiswa','mahasiswa.id=nilai.id')
             ->get();
  }

  function selecting_data_seven(){
    return $this->db->where('nama','Safira Annisa')
                    ->get('mahasiswa');
  }

  function selecting_data_eight(){
    return $this->db->like('nama','Nico')
                    ->get('mahasiswa');
  }

  function selecting_data_nine(){
    return $this->db->group_by('kota')
                    ->get('mahasiswa');
  }

  function add_mahasiswa($n_nama,$n_alamat,$n_telp,$n_kota){
    $n_data_array = array('nama'=>$n_nama,'alamat'=>$n_alamat,'telp'=>$n_telp,'kota'=>$n_kota);
    $n_inserting = $this->db->insert('mahasiswa',$n_data_array);
    if($n_inserting){
      return TRUE;
    }else{
      return FALSE;
    }
  }

  function add_mahasiswa_obj($n_nama,$n_alamat,$n_telp,$n_kota){
    $this->db->set(['nama'=>$n_nama,'alamat'=>$n_alamat,'telp'=>$n_telp,'kota'=>$n_kota]);
    $n_inserting = $this->db->insert('mahasiswa');
    if($n_inserting){
      return TRUE;
    }else{
      return FALSE;
    }
  }

  function updating(){
    return $this->db->from('mahasiswa')
              ->limit(3)
              ->get();
  }

  function update($n_id){
    return $this->db->from('mahasiswa')
                    ->where('id',$n_id)
                    ->get();

  }

  function updated($n_nama,$n_alamat,$n_telp,$n_kota,$n_id){
    $n_data = array(
      'nama'=>$n_nama,
      'alamat'=>$n_alamat,
      'telp'=>$n_telp,
      'kota'=>$n_kota
    );
    return $this->db->where('id',$n_id)
                    ->update('mahasiswa',$n_data);
  }

  function deleting_data($n_id){
    $n_delete = $this->db->delete('mahasiswa',array('id'=>$n_id));
    if($n_delete){
      return TRUE;
    }else{
      return FALSE;
    }
  }
}
