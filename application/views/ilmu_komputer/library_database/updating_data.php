<?php if(!defined('BASEPATH')) exit('no file allowed');  ?>
<div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
  <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 padding bg-putih border">
    <pre class="prettyprint linenums f-17 microsoft">
      - $this->db->update();
        //Fungsi : Untuk update data
      - $data=array(
        'nim'=>'$nim',
        'nama'=>'$nama',
        'kota'=>'$kota');
      - $this->db->where('id',$id);
      - $this->db->update('mahasiswa',$data);
        // Sama dengan : update mahasiswa set nim=”$nim”,nama=”$nama”,kota=”$kota”
        // where id=”$id”;

        // Atau dapat juga dengan menggunakan object.
      - Class kelasku {
          var $nim=”$vnim”,
          var $nama=”$vnama”,
          var $kota=”$vkota”;
          }
      - $object = new kelasku;
      - $this->db->where ('id',$id);
      - $this->db->update (“mahasiswa”,$object);
    </pre>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mar-2 no-pad">
    <?php
    if($this->uri->segment(4)==''){
      $n_hide='hide';
      $n_hide_2='';
    }else{
      $n_hide='';
      $n_hide_2='hide';
    }
     ?>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding bg-putih border <?php echo $n_hide_2; ?>">
      <p class="padding bg-dark text-center">Hasil</p>
      <?php
      foreach ($n_edit as $n_row ) {
        ?>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding calibri">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 no-padding">
        <?php
        echo"
        $n_row->nama<br>
        $n_row->alamat<br>
        $n_row->telp<br>
        $n_row->kota<br>
        ";
        ?>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 no-padding">
        <?php
        echo anchor('BK00001/menu/updating_data/'.$n_row->id,'<span class="glyphicon glyphicon-edit"></span> &nbsp; Edit',['class'=>'btn btn-warning btn-sm col-lg-3 text-center form-control']);
         ?>
      </div>
      </div>
        <?php
      }
      ?>

  </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding bg-putih border mar-2 <?php echo $n_hide; ?>">
      <p class="padding bg-dark text-center">Form Edit</p>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding ">
      <?php
      echo form_open('BK00001/updated');
      $n_data_1 = ['name'=>'nama','class'=>'form-control','placeholder'=>'Nama','value'=>$n_update->nama];
      $n_data_2 = ['name'=>'alamat','class'=>'form-control mar-top-2','placeholder'=>'Alamat','value'=>$n_update->alamat];
      $n_data_3 = ['name'=>'telp','class'=>'form-control mar-top-2','placeholder'=>'Telp','value'=>$n_update->telp];
      $n_data_4 = ['name'=>'kota','class'=>'form-control mar-top-2','placeholder'=>'Kota','value'=>$n_update->kota];
      $n_data_5 = ['name'=>'id','class'=>'form-control mar-top-2','type'=>'hidden','value'=>$this->uri->segment(4)];
      echo form_input($n_data_1);
      echo form_input($n_data_2);
      echo form_input($n_data_3);
      echo form_input($n_data_4);
      echo form_input($n_data_5);
      ?>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mar-top-1">
        <?php
        echo form_submit('enter','Ubah',['class'=>'btn btn-primary form-control']);
        echo form_close();
        ?>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mar-top-1">
        <?php echo anchor('BK00001/menu/updating_data','Cancel',['class'=>'btn btn-warning form-control']); ?>
      </div>
     </div>
    </div>
  </div>
</div>
