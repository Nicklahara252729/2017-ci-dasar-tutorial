<?php if(!defined('BASEPATH')) exit('no file allowed'); ?>
  <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 padding bg-putih box-shadow_2">
      <pre class="prettyprint linenums f-20 microsoft">
        $query=”select nama,alamat,telp from mahasiswa”;
        $hasil=$this->db->query(“$query”);
        foreach ($hasil as $row)
          {
            echo $row['nama'];
            echo $row['alamat'];
            echo $row['telp'];
          }
        echo “Hasil Nilai :”. $hasil->num_rows();
        // konsep ini tidak efisien intuk CI 3
        // dan tidak berlaku untuk driver CI 3 mysqli
      </pre>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mar-2 no-pad">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding bg-putih box-shadow_2 microsoft f-17">
        <p class="padding bg-dark text-center f-20">Hasil</p>
        <ul class="nav padding">
        <?php
        foreach ($n_dat as $n_row) {
          echo" <li> Nama : ".$n_row->nama."</li>
                <li> Alamat :".$n_row->alamat."</li>
                <li> Telp :".$n_row->telp."</li>
                <li> -------------------------- </li>";
        }
        echo"Hasil nilai : ".$n_data_num->num_rows();
          ?>
        </ul>
      </div>
    </div>
  </div>
