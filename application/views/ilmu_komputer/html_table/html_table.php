<?php if(!defined('BASEPATH')) exit('no file allowed'); ?>
<div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 padding bg-putih border">
      <pre class="prettyprint linenums f-17 microsoft">
          //Library ini membuat tabel secara otomatis dari data yang anda retrieve.
          //Contoh :
        - $this->load->library(“table”);
        - $data=array(
                array(“Nim”,”Nama”,”Kota”),
                array(“090012”,”Andi”,”Jakarta”),
                array(“090014”,”Umar”,”Jakarta”),
                array(“090013”,”Udin”,”Semarang”));
        - echo $this->table->generate($data);
          //Menampilkan tabel dari data yang di peroleh dari database. Contoh nya adalah sbb :
        - $this->load->library(“table”);
        - $query=$this->db->query(“select * from mahasiswa”);
        - echo $this->table->generate($query);
      </pre>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mar-2 no-pad">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding bg-putih border">
        <p class="padding bg-dark text-center">Hasil 1</p>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding ">
        <?php echo $this->table->generate($n_data_1); ?>
      </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding bg-putih border mar-top-2">
        <p class="padding bg-dark text-center">Hasil 2</p>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding ">
        <?php echo $this->table->generate($n_data); ?>
      </div>
      </div>
    </div>
</div>
