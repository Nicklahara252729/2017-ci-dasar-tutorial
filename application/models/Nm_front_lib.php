<?php
if(!defined('BASEPATH')) exit('no file allowed');
class Nm_front_lib extends CI_Model{
  public function __construct(){
    parent::__construct();
  }

  public function menu($n_nobuk){
    return $this->db->from('menus')
                    ->where(['nobuku'=>$n_nobuk])
                    ->order_by('no','asc')
                    ->get();
  }

  public function take_menu($n_id){
    return $this->db->get_where('menus',['id'=>$n_id]);
  }

  function edit_menu($n_id,$n_no,$n_menu,$n_kunci,$n_folder,$n_file){
    $n_data = [
      'no'=>$n_no,
      'menu'=>$n_menu,
      'kunci'=>$n_kunci,
      'folder'=>$n_folder,
      'file'=>$n_file,
    ];
    $n_update = $this->db->where('id',$n_id)
                         ->update('menus',$n_data);
    if($n_update){
      return TRUE;
    }else{
      return FALSE;
    }
  }

  public function info_book($n_nobuk){
    return $this->db->from('buku')
                    ->where('nobuku',$n_nobuk)
                    ->get();
  }

  public function get_one($n_key){
    return $this->db->get_where('menus',['kunci'=>$n_key]);
  }

  public function n_tambah_menu($n_nama_menu,$n_kunci,$n_folder,$n_file,$n_no,$n_idbuku){
    $n_correction = $this->db->insert('menus',['no'=>$n_no,'menu'=>$n_nama_menu,'kunci'=>$n_kunci,'folder'=>$n_folder,'file'=>$n_file,'nobuku'=>$n_idbuku]);
    if($n_correction){
      return 1;
    }else{
      return 0;
    }
  }

  public function books(){
    return $this->db->from('buku')
                    ->get();
  }

  public function search($search){
    return $this->db->from('buku')
                    ->like('judul',$search)
                    ->get();
  }

  public function users(){
    return $this->db->from('pengguna')
                    ->get();
  }

  public function hps_user($n_id){
    $n_cord = $this->db->get_where('pengguna',['id_user'=>$n_id])->row();
    $n_do = $this->db->delete('pengguna',['id_user'=>$n_id]);
    $n_pic = $n_cord->gambar;
    if($n_do){
      $unlink = unlink("uploads/gambar/".$n_pic);
      if($unlink){
      return TRUE;
      }
      return FALSE;
    }else{
      return FALSE;
    }
  }

  public function hps_buku($n_id){
    $n_cord = $this->db->get_where('buku',['id_buku'=>$n_id])->row();
    $n_do = $this->db->delete('buku',['id_buku'=>$n_id]);
    $n_pic = $n_cord->cover;
    if($n_do){
      $unlink = unlink('uploads/cover/'.$n_pic);
      if($unlink){
        return TRUE;
      }else{
        return FALSE;
      }
    }else{
      return FALSE;
    }
  }

  public function det_user($n_uri5){
    return $this->db->from('pengguna')
                    ->where('id_user',$n_uri5)
                    ->get();
  }

  public function det_book($n_uri4){
    return $this->db->from('buku')
                    ->where('id_buku',$n_uri4)
                    ->get();
  }

  public function add_book($n_judul,$gl_kode,$n_inp_materi,$name_img){
    $n_check = $this->db->insert('buku',['judul'=>$n_judul,'nobuku'=>$gl_kode,'materi'=>$n_inp_materi,'cover'=>$name_img]);
    if($n_check){
      return TRUE;
    }else{
      return FALSE;
    }
  }

  public function updt_user($n_nama,$n_user,$n_pass,$name_gbr,$n_id){
    $n_check = $this->db->where('id_user',$n_id)
                        ->update('pengguna',['nama'=>$n_nama,'username'=>$n_user,'password'=>$n_pass,'gambar'=>$name_gbr]);
    if($n_check){
      return TRUE;
    }else{
      return FALSE;
    }
  }

  public function updt_user_sec($n_nama,$n_user,$name_gbr,$n_id){
    $n_check = $this->db->where('id_user',$n_id)
                        ->update('pengguna',['nama'=>$n_nama,'username'=>$n_user,'gambar'=>$name_gbr]);
    if($n_check){
      return TRUE;
    }else{
      return FALSE;
    }
  }

  public function updt_user_rd($n_nama,$n_user,$n_pass,$n_id){
    $n_check = $this->db->where('id_user',$n_id)
                        ->update('pengguna',['nama'=>$n_nama,'username'=>$n_user,'password'=>$n_pass]);
    if($n_check){
      return TRUE;
    }else{
      return FALSE;
    }
  }

  public function updt_user_th($n_nama,$n_user,$n_id){
    $n_check = $this->db->where('id_user',$n_id)
                    ->update('pengguna',['nama'=>$n_nama,'username'=>$n_user]);
    if($n_check){
      return TRUE;
    }else{
      return FALSE;
    }
  }

  public function updt_book($n_judul,$n_materi,$name_cover,$n_id){
    $n_check = $this->db->where('id_buku',$n_id)
                        ->update('buku',['judul'=>$n_judul,'materi'=>$n_materi,'cover'=>$name_cover]);
    if($n_check){
      return TRUE;
    }else{
      return FALSE;
    }
  }

  public function updt_book_sec($n_judul,$n_materi,$n_id){
    $n_check = $this->db->where('id_buku',$n_id)
                        ->update('buku',['judul'=>$n_judul,'materi'=>$n_materi]);
    if($n_check){
      return TRUE;
    }else{
      return FALSE;
    }
  }

  public function gt_img_user($n_id){
    return $this->db->get_where('pengguna',['id_user'=>$n_id]);
  }

  public function gt_img_book($n_id){
    return $this->db->get_where('buku',['id_buku'=>$n_id]);
  }

  public function take_materi($n_idbuku){
    return $this->db->get_where('buku',['nobuku'=>$n_idbuku]);
  }

  public function take_nobuku($n_id){
    return $this->db->get_where('buku',['id_buku'=>$n_id]);
  }

  public function hps_menu($nobuk){
    $this->db->delete('menus',['nobuku'=>$nobuk]);
  }
  public function n_update_materi($n_idbuku,$n_materi){
    return $this->db->where('nobuku',$n_idbuku)
                    ->update('buku',['tercapai'=>$n_materi]);
  }

  public function autoid(){
    $query = "select count(nobuku) as LastID FROM buku";
    return $this->db->query($query);
  }
}
