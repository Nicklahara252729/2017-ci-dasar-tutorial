
<?php
if(!defined('BASEPATH')) exit('no file allowed');
echo form_open('BK00001/menu/membuat_form_dengan_ci');
?>
<div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
  <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 padding bg-putih box-shadow_2">
    <pre class="prettyprint linenums microsoft f-20">
      function jumlah()
      {
        $angka1=$this->input->post('angka1');
        $angka2=$this->input->post('angka2');
        $hasil=$angka1+$angka2;
        echo "Hasil nya adalah : $hasil";
        echo "<br />".anchor("form/index","Kembali");
      }
    </pre>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mar-2 no-pad">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding bg-putih box-shadow_2">
      <p class="padding bg-dark text-center">Membuat Form Input Dengan  CI</p>
          <?php
          $n_data1 = ['name'=>'n_angka1','class'=>'form-control','required'=>'required'];
           ?>
      <div class="rows">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">Angka 1 :</div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding"><?php echo form_input($n_data1); ?></div>
      </div>
         <?php
         $n_data2 = ['name'=>'n_angka2','class'=>'form-control','required'=>'required'];
          ?>
      <div class="rows">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">Angka 1 :</div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding"><?php echo form_input($n_data2); ?></div>
      </div>
      <div class="rows">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 padding"><?php echo form_submit('mysubmit','oke',['class'=>'btn btn-primary btn-sm form-control']); ?></div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 padding"><?php echo form_reset('myreset','Clear',['class'=>'btn btn-danger btn-sm form-control']); ?></div>
      </div>
        <?php echo form_close(); ?>
      </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding bg-putih box-shadow_2 microsoft mar-top-2">
      <p class="padding bg-dark text-center f-20">Hasil</p>
      <p class="padding f-20"><?php echo"Hasilnya adalah : ".$hasil; ?></p>
    </div>
  </div>
</div>
