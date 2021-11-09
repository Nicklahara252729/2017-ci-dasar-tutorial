<?php if(!defined('BASEPATH')) exit('no file allowed'); ?>
<div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 padding bg-putih border">
      <pre class="prettyprint linenums f-17 microsoft">
        Setting upload nya adalah sbb :
        $config['upload_path']='./uploads/'; // Folder penyimpanan file. Musti Write accessible
        $config['allowed_types']='gif|jpg|png';
        $config['max_size']='100';
        $config['max_width']='1024';
        $config['max_height']='768';
        $this->load->library('upload',$config);
        // Jika kita meletakkan library uploading file
        // di dalam file autoload.php, maka syntax di bawah
        // ini yang perlu kita taruh :
        $this->upload->initialize($config);
        $this->upload->do_upload()
        //Fungsi : Untuk melakukan eksekusi uploading file
        //Contoh :

        class Upload extends Controller {
        function Upload()
        {
        parent::Controller();
        $this->load->helper(array('form', 'url'));
        }
        function index()
        {
        $this->load->view('upload_form', array('error' => ' ' ));
        }
        function do_upload()
        {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload())
        {
        $error = array('error' => $this->upload->display_errors());
        $this->load->view('upload_form', $error);
      }
    }
  }

      </pre>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mar-2 no-pad">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding bg-putih border">
        <p class="padding bg-dark text-center">Hasil</p>
      </div>
      </div>
</div>
