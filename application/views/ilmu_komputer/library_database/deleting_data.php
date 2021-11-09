<?php if(!defined('BASEPATH')) exit('no file allowed');  ?>
<div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
  <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 padding bg-putih border">
    <pre class="prettyprint linenums f-17 microsoft">
      - $this->db->delete()
        // Fungsi : Menghapus data di dalam query
        // contoh :
      - $this->db->delete(“mahasiswa”,array('id'->$id));
        // Sama dengan : delete mahasiswa where id=”$id”
    </pre>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mar-2 no-pad">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding bg-putih border">
      <p class="padding bg-dark text-center">Hasil</p>
      <?php
      foreach ($n_data as $n_row ) {
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
      <?php echo anchor('BK00001/menu/deleting_data/'.$n_row->id,'<span class="glyphicon glyphicon-remove"></span> &nbsp; Hapus',['class'=>'btn btn-danger btn-sm col-lg-3 text-center form-control']); ?>
    </div>

  </div>
  <?php }
   ?>
    </div>
  </div>
</div>
