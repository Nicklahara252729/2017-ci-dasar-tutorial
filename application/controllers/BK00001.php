<?php
if(!defined('BASEPATH')) exit('no file allowed');
class BK00001 extends CI_Controller{
  function __construct(){
    parent::__construct();
  }

  function menu(){
      $n_nobuk =$this->uri->segment(1);
      $n_id = $this->uri->segment(4);
      $n_hasil['info_book'] = $this->Nm_front_lib->info_book($n_nobuk)->row();
      $n_key = $this->uri->segment(3);
      $n_cord = $this->Nm_front_lib->get_one($n_key)->row_array();
      if($n_cord['folder']=='ilmu_komputer/membuat_form'){
        if(isset($_POST['mysubmit'])){
          $n_angka1 = $this->input->post('n_angka1');
          $n_angka2 = $this->input->post('n_angka2');
          $n_hasil['hasil'] = $n_angka1 + $n_angka2;
        }else{
          $n_hasil['hasil'] ="";
        }
         $this->nl_theme->load('nv_theme','ilmu_komputer/membuat_form/nv_form',$n_hasil);
      }elseif($n_cord['folder']=='ilmu_komputer/library_database'){
        if($n_key=='query_standard_dengan_hasil_multiple'){
          $n_hasil['n_data'] = $this->BK00001_lib->selection_one()->result();
          $n_hasil['n_data_num'] = $this->BK00001_lib->selection_one();
          $this->nl_theme->load('nv_theme','ilmu_komputer/library_database/query_standard_dengan_hasil_multiple',$n_hasil);
        }elseif($n_key=='query_standard_dengan_hasil_multiple_2'){
          $n_hasil['n_dat'] = $this->BK00001_lib->selection_one()->result();
          $n_hasil['n_data_num'] = $this->BK00001_lib->selection_one();
          $this->nl_theme->load('nv_theme','ilmu_komputer/library_database/query_standard_dengan_hasil_multiple_2',$n_hasil);
        }elseif($n_key=='query_dengan_hasil_tunggal'){
          $n_hasil['n_data']= $this->BK00001_lib->selection_two()->row();
          $this->nl_theme->load('nv_theme','ilmu_komputer/library_database/query_dengan_hasil_tunggal',$n_hasil);
        }elseif($n_key=='query_bindings'){
          $n_hasil['n_data'] = $this->BK00001_lib->selection_three()->result();
          $this->nl_theme->load('nv_theme','ilmu_komputer/library_database/query_bindings',$n_hasil);
        }elseif($n_key=='selecting_data'){
          $n_hasil['n_data'] = $this->BK00001_lib->selecting_data_one()->row();
          $n_hasil['n_data_2'] = $this->BK00001_lib->selecting_data_two()->result();
          $n_id = 7;
          $n_limit = 1;
          $n_offset = 0;
          $n_hasil['n_data_3'] = $this->BK00001_lib->selecting_data_three($n_id,$n_limit,$n_offset)->result();
          $n_hasil['n_data_4'] = $this->BK00001_lib->selecting_data_four()->result();
          $n_hasil['n_data_5'] = $this->BK00001_lib->selecting_data_five()->result();
          $n_hasil['n_data_6'] = $this->BK00001_lib->selecting_data_six()->result();
          $n_hasil['n_data_7'] = $this->BK00001_lib->selecting_data_seven()->result();
          $n_hasil['n_data_8'] = $this->BK00001_lib->selecting_data_eight()->result();
          $n_hasil['n_data_9'] = $this->BK00001_lib->selecting_data_nine()->result();
          $this->nl_theme->load('nv_theme','ilmu_komputer/library_database/selecting_data',$n_hasil);
        }elseif($n_key=='inserting_data'){
          $n_hasil['n_tampil'] = $this->BK00001_lib->selecting_data_one()->result();
          $this->nl_theme->load('nv_theme','ilmu_komputer/library_database/inserting_data',$n_hasil);
        }elseif($n_key=='updating_data'){
          $n_id = $this->uri->segment(4);
          $n_hasil['n_edit'] = $this->BK00001_lib->updating()->result();
          $n_hasil['n_update'] = $this->BK00001_lib->update($n_id)->row();
          $this->nl_theme->load('nv_theme','ilmu_komputer/library_database/updating_data',$n_hasil);
        }elseif($n_key=='deleting_data'){
          if($this->uri->segment(4)!=''){
            $n_id = $this->uri->segment(4);
            $n_act = $this->BK00001_lib->deleting_data($n_id);
            if($n_act==TRUE){
              redirect(site_url('BK00001/menu/deleting_data'));
            }else{
              echo"fail";
            }
          }
          $n_hasil['n_data']= $this->BK00001_lib->updating()->result();
          $this->nl_theme->load('nv_theme','ilmu_komputer/library_database/deleting_data',$n_hasil);
        }
      }elseif($n_cord['folder']=='ilmu_komputer/library_email'){
          $this->nl_theme->load('nv_theme','ilmu_komputer/library_email/send_mail',$n_hasil);
      }elseif($n_cord['folder']=='ilmu_komputer/library_upload'){
          $this->nl_theme->load('nv_theme','ilmu_komputer/library_upload/upload_file',$n_hasil);
      }elseif($n_cord['folder']=='ilmu_komputer/pagination'){
          $this->nl_theme->load('nv_theme','ilmu_komputer/pagination/pagination',$n_hasil);
      }elseif($n_cord['folder']=='ilmu_komputer/html_table'){
        $this->load->library('table');
        $n_hasil['n_data_1']=array(
        array('Nim','Nama','Kota'),
        array('090012','Andi','Jakarta'),
        array('090014','Umar','Jakarta'),
        array('090013','Udin','Semarang'));
        $this->load->library('table');
        $n_hasil['n_data']=$this->db->query('select * from mahasiswa');
        $this->nl_theme->load('nv_theme','ilmu_komputer/html_table/html_table',$n_hasil);
      }elseif($n_cord['folder']=='ilmu_komputer/library_session'){
        if($n_key=='menyimpan_session'){
          $this->nl_theme->load('nv_theme','ilmu_komputer/library_session/menyimpan_session',$n_hasil);
        }
      }
      else{
        echo"fail";
      }
  }

  function updated(){
    $n_id = $this->input->post('id');
    $n_nama = $this->input->post('nama');
    $n_alamat = $this->input->post('alamat');
    $n_telp = $this->input->post('telp');
    $n_kota = $this->input->post('kota');
    $n_hasil = $this->BK00001_lib->updated($n_nama,$n_alamat,$n_telp,$n_kota,$n_id);
    if($n_hasil==TRUE){
      redirect(site_url('BK00001/menu/updating_data'));
    }else{
      echo"fail";
    }
  }



  function add_mahasiswa(){
    $n_nama = $this->input->post('nama');
    $n_alamat = $this->input->post('alamat');
    $n_telp = $this->input->post('telp');
    $n_kota = $this->input->post('kota');
    $n_inserting = $this->BK00001_lib->add_mahasiswa($n_nama,$n_alamat,$n_telp,$n_kota);
    if($n_inserting==TRUE){
      redirect(site_url('BK00001/menu/inserting_data'));
    }else{
      echo"fail";
    }
  }
}
