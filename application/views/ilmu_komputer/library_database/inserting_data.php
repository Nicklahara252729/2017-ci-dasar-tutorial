<?php if(!defined('BASEPATH')) exit('no file allowed'); ?>
<div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
  <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 padding bg-putih border">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mar-top-2">
    <pre class="prettyprint linenums f-17 microsoft">
      $this->db->insert();
        //Fungsi : Untuk menginsert data ke dalam sebuah tabel.
        //Kita dapat menggunakan data yang akan di insert berupa array atau object.
        //Contoh, menggunakan array :
      $data=array(
      'nim'=>'0811500292',
      'nama'=>'naula',
      'kota'=>'takengon');
      $this->db->insert('mahasiswa',$data);

        //Contoh menggunakan Object :
      class kelasku
      { var $nim=”0811500292”,
      var $nama=”naula”,
      var $kota=”takengon”}
      $obj=new kelasku;
      $this->db->insert(“mahasiswa”,$obj);
        //Kedua contoh di atas sama dengan perintah :
        //insert into mahasiswa (nim,nama,kota) values('0811500292','takengon','takengon');

      - $this->db->set();
        // Fungsi : Fungsi ini mengambil data untuk di lakukan perintah insert dan update.
        // Contoh :
      - $this->db->set('nama',$nama);
      - $this->db->insert('mahasiswa');
        // Sama dengan : insert into mahasiswa (nama) values ('{$nama}');
    </pre>
  </div>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding bg-putih border mar-top-2 microsoft f-17">
    <p class="padding bg-dark text-center f-20">Hasil</p>
    <ul class="nav">
    <?php
    foreach($n_tampil as $n_row){
      echo"
      <li>$n_row->nama</li>
      <li>$n_row->alamat</li>
      <li>$n_row->telp</li>
      <li>$n_row->kota<br><br></li>";
    }
     ?>
     </ul>
  </div>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mar-2 ">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding bg-putih border">
    <p class="padding bg-dark text-center">Form Insert</p>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <?php
    echo form_open('BK00001/add_mahasiswa');
    $n_data = ['name'=>'nama','class'=>'form-control','required'=>'required','placeholder'=>'Nama'];
    $n_data_2 = ['name'=>'alamat','class'=>'form-control mar-top-2','required'=>'required','placeholder'=>'Alamat'];
    $n_data_3 = ['name'=>'telp','class'=>'form-control mar-top-2','required'=>'required','placeholder'=>'Telp'];
    $n_data_4 = ['name'=>'kota','class'=>'form-control mar-top-2','required'=>'required','placeholder'=>'Kota'];
    echo form_input($n_data);
    echo form_input($n_data_2);
    echo form_input($n_data_3);
    echo form_input($n_data_4);
    echo form_submit('enter','Simpan',['class'=>'btn btn-primary mar-top-2 btn-sm form-control mar-bot-2']);
    echo form_close();
    ?>
  </div>
  </div>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding bg-putih border mar-top-2">
  <p class="padding bg-dark text-center">Form Insert Using Set</p>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <?php
  echo form_open('BK00001/add_mahasiswa');
  $n_data = ['name'=>'nama','class'=>'form-control','required'=>'required','placeholder'=>'Nama'];
  $n_data_2 = ['name'=>'alamat','class'=>'form-control mar-top-2','required'=>'required','placeholder'=>'Alamat'];
  $n_data_3 = ['name'=>'telp','class'=>'form-control mar-top-2','required'=>'required','placeholder'=>'Telp'];
  $n_data_4 = ['name'=>'kota','class'=>'form-control mar-top-2','required'=>'required','placeholder'=>'Kota'];
  echo form_input($n_data);
  echo form_input($n_data_2);
  echo form_input($n_data_3);
  echo form_input($n_data_4);
  echo form_submit('enter','Simpan',['class'=>'btn btn-primary mar-top-2 btn-sm form-control mar-bot-2']);
  echo form_close();
  ?>
</div>
  </div>
  </div>
</div>
