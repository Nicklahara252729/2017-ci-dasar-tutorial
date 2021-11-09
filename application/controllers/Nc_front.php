<?php
if(!defined('BASEPATH')) exit('no file allowed');
class Nc_front extends CI_Controller{
  public function __construct(){
    parent::__construct();
  }

  public function index(){
    $this->nl_theme->load('nv_theme_sec','Nv_index');
  }

  public function home(){
    $n_uri3 = $this->uri->segment(3);
    $n_uri4 = $this->uri->segment(4);
    $n_uri5 = $this->uri->segment(5);
    if(isset($_GET['sch'])){
      $search = $this->input->get('sch');
      $n_cord['n_books'] = $this->Nm_front_lib->search($search)->result();
    }else{
      if(isset($n_uri4)){
          $n_cord['det_user'] = $this->Nm_front_lib->det_user($n_uri5)->row();
      }
      if(isset($n_uri3)){
        if($n_uri3=='edit_buku'){
          $n_cord['det_book'] = $this->Nm_front_lib->det_book($n_uri4)->row();
        }
      }
      $n_cord['n_books'] = $this->Nm_front_lib->books()->result();
    }
      $n_cord['pengguna'] = $this->Nm_front_lib->users()->result();
      $this->nl_theme->load('nv_theme_sec','Nv_home',$n_cord);
  }

  public function book(){
    $n_nobuk =$this->uri->segment(3);
    $n_id = $this->uri->segment(4);
    if($n_id!=''){
      $n_cord['show_data'] = $this->Nm_front_lib->take_menu($n_id)->row();
    }
    $n_cord['info_book'] = $this->Nm_front_lib->info_book($n_nobuk)->row();
    $n_cord['n_menu'] = $this->Nm_front_lib->menu($n_nobuk);
    $this->nl_theme->load('Nv_theme','Nv_front',$n_cord);
  }

  public function del_user(){
    $n_id = $this->uri->segment(3);
    $n_hsldel = $this->Nm_front_lib->hps_user($n_id);
    if($n_hsldel==TRUE){
      redirect('Nc_front/home/user');
    }else{
      echo "fail";
    }
  }

  public function n_tambah_menu(){
    $n_nama_menu = $this->input->post('nama_menu');
    $n_kunci     = $this->input->post('kunci');
    $n_folder    = $this->input->post('folder');
    $n_file      = $this->input->post('file');
    $n_no        = $this->input->post('no');
    $n_idbuku    = $this->input->post('id_buku');
    $n_cord      = $this->Nm_front_lib->take_materi($n_idbuku)->row();
    $n_materi    = $n_cord->tercapai + 1;
    $n_masuk     = $this->Nm_front_lib->n_tambah_menu($n_nama_menu,$n_kunci,$n_folder,$n_file,$n_no,$n_idbuku);
    if($n_masuk==1){
      $this->Nm_front_lib->n_update_materi($n_idbuku,$n_materi);
      redirect(site_url('Nc_front/book/'.$n_idbuku));
    }else{
      echo "fail";
    }
  }

  public function edit_menu(){
    if(isset($_POST['enter_menu'])){
        $n_id     = $this->input->post('id');
        $n_no     = $this->input->post('no');
        $n_menu   = $this->input->post('menu');
        $n_kunci  = $this->input->post('kunci');
        $n_folder = $this->input->post('folder');
        $n_file   = $this->input->post('file');
        $n_buku   = $this->input->post('buku');
        $n_result = $this->Nm_front_lib->edit_menu($n_id,$n_no,$n_menu,$n_kunci,$n_folder,$n_file);
        if($n_result==TRUE){
          redirect(site_url('Nc_front/book/'.$n_buku));
        }else{
          echo"fail";
        }
    }
  }

  public function del_buku(){
    $n_id = $this->uri->segment(3);
    $n_cord = $this->Nm_front_lib->take_nobuku($n_id)->row();
    $nobuk = $n_cord->nobuku;
    $n_hsldel = $this->Nm_front_lib->hps_buku($n_id);
    if($n_hsldel==TRUE){
      $this->Nm_front_lib->hps_menu($nobuk);
      redirect('Nc_front/home');
    }else{
      echo"fail";
    }
  }

  public function tambah_buku(){
    $config['upload_path'] = './uploads/cover';
    $config['allowed_types'] = 'gif|jpg|png';
    /*$config['max_size']     = '100';
    $config['max_width'] = '1024';
    $config['max_height'] = '768';*/
    $n_judul = $this->input->post('judul');
    $n_inp_materi = $this->input->post('jumlah_materi');
    $idauto = $this->Nm_front_lib->autoid()->row();
    $gl_number = $idauto->LastID + 1;
    switch(strlen($gl_number)){
    case 1 : $gl_kode = "BK0000".$gl_number; break;
    case 2 : $gl_kode = "BK000".$gl_number; break;
    case 3 : $gl_kode = "BK00".$gl_number; break;
    case 4 : $gl_kode = "BK0".$gl_number; break;
        default :$gl_kode = $gl_number;
      }
    $this->load->library('upload', $config);
    $n_upld = $this->upload->do_upload('sampul_buku');
    if($n_upld){
      $hasil = $this->upload->data();
      $name_img = $hasil['file_name'];
      $n_hsl = $this->Nm_front_lib->add_book($n_judul,$gl_kode,$n_inp_materi,$name_img);
      if($n_hsl==TRUE){
        redirect('Nc_front/home');
      }else{
        echo"fail insert";
      }
    }else{
      echo "fail";
    }
  }

  public function edt_user(){
    $n_id   = $this->input->post('id_upt_usr');
    $n_nama = $this->input->post('nama_edt');
    $n_user = $this->input->post('username_edt');
    $n_pass = sha1($this->input->post('password_edt'));
    //$n_img  = $this->input->post('img_edit');
    if($_FILES['img_edit']['name']!=''){
      $config['upload_path'] = './uploads/gambar';
      $config['allowed_types'] = 'gif|jpg|png';
      /*$config['max_size']     = '100';
      $config['max_width'] = '1024';
      $config['max_height'] = '768';*/
      $this->load->library('upload', $config);
      $n_uptd = $this->upload->do_upload('img_edit');
      if($n_uptd){
        $hasil = $this->upload->data();
        $name_gbr = $hasil['file_name'];
        $n_gt  = $this->Nm_front_lib->gt_img_user($n_id)->row();
        if($n_pass!=''){
            $n_hsl = $this->Nm_front_lib->updt_user($n_nama,$n_user,$n_pass,$name_gbr,$n_id);
        }else{
            $n_hsl = $this->Nm_front_lib->updt_user_sec($n_nama,$n_user,$name_gbr,$n_id);
        }
        $n_pic = $n_gt->gambar;
        if($n_hsl==TRUE){
          $unlink = unlink("uploads/gambar/".$n_pic);
          redirect('Nc_front/home/user');
        }else{
          echo"fail update";
        }
      }else{
        echo "totality fail";
      }
    }else{
      if($n_pass!=''){
          $n_hsl = $this->Nm_front_lib->updt_user_rd($n_nama,$n_user,$n_pass,$n_id);
      }else{
          $n_hsl = $this->Nm_front_lib->updt_user_th($n_nama,$n_user,$n_id);
      }

      if($n_hsl==TRUE){
        redirect('Nc_front/home/user');
      }else{
        echo"totality fail";
      }
    }
  }

  public function edit_buku(){
    $n_id   = $this->input->post('id_edt_book');
    $n_judul = $this->input->post('judul_edit');
    $n_materi = $this->input->post('jumlah_materi_edit');
    if($_FILES['edt_sampul_buku']['name']!=''){
      $config['upload_path'] = './uploads/cover';
      $config['allowed_types'] = 'gif|jpg|png';
      /*$config['max_size']     = '100';
      $config['max_width'] = '1024';
      $config['max_height'] = '768';*/
      $this->load->library('upload', $config);
      $n_uptd_book = $this->upload->do_upload('edt_sampul_buku');
      if($n_uptd_book){
        $hasil = $this->upload->data();
        $name_cover = $hasil['file_name'];
        $n_gtt  = $this->Nm_front_lib->gt_img_book($n_id)->row();
        $n_hsl = $this->Nm_front_lib->updt_book($n_judul,$n_materi,$name_cover,$n_id);
        $n_pict = $n_gtt->cover;
        if($n_hsl==TRUE){
          $unlink = unlink("uploads/cover/".$n_pict);
          redirect('Nc_front/home');
        }else{
          echo"fail update";
        }
      }else{
        echo "totality fail";
      }
    }else{
          $n_hsl = $this->Nm_front_lib->updt_book_sec($n_judul,$n_materi,$n_id);
      if($n_hsl==TRUE){
        redirect('Nc_front/home');
      }else{
        echo"totality fail";
      }
    }
  }
}
