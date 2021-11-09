
  <?php if(!defined('BASEPATH')) exit('no file allowed'); ?>
  <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 padding bg-putih box-shadow_2">
      <pre class="prettyprint linenums f-20 microsoft">
        $query=”select nama from mahasiswa limit 1”;
        $hasil=$this->db->query(“$query”);
        $hasilnya=$hasil->row();
        echo $hasilnya->nama;
      </pre>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mar-2 no-pad">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding bg-putih box-shadow_2 microsoft f-20">
        <p class="padding bg-dark text-center">Hasil</p>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <?php
        foreach ($n_data as $n_row ) {
          echo $n_data->nama."<br><br>";
        }
         ?>
       </div>
       </div>
    </div>
  </div>
