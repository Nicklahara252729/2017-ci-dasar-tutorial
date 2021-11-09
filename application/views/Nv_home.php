<div class="container-fluid no-padding header-home">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding ">
    <div class="container">
      <div class="col-lg-3 col-md-3 wrap-merek " >
        <img src="<?php echo base_url(); ?>asset/img/logo.png" class="img-responsive">
      </div>
      <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12  mar-top-1 ">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding cari">
        <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 " >
        <?php
        echo form_open('Nc_front/home/',['method'=>'get']);
        $n_inpt = ['name'=>'sch','placeholder'=>'Search','class'=>'form-control','type'=>'search'];
        echo form_input($n_inpt);
        echo form_close();
         ?>
       </div>
       <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2" >
         <span class="glyphicon glyphicon-search"></span>
       </div>
       </div>
     </div>

     <div class="col-lg-offset-1  col-lg-3 col-md-3 wrap-merek" >
       <img src="<?php echo base_url(); ?>asset/img/konsumen.png" class="img-user"> &nbsp;&nbsp;&nbsp;
      <?php echo anchor('Nc_front/logout','LOGOUT',['class'=>'btn btn-sm btn-warning']); ?>
     </div>
    </div>
  </div>
</div>

<div class="container-fluid padding bg-abu">
    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 no-padding microsoft">
      <?php
      echo anchor('Nc_front/home','<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding h-70 f-20 text-center pad-20 bg-dark">
              <span class="glyphicon glyphicon-book"></span>
          </div>
      </div>');

      echo anchor('Nc_front/home/user','<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding h-70 f-20 text-center pad-20 bg-dark">
              <span class="glyphicon glyphicon-user"></span>
          </div>
      </div>');
      ?>
    </div>

    <?php
    $n_uri_3 = $this->uri->segment(3);
    $n_uri_4 = $this->uri->segment(4);
    if(isset($n_uri_3)){
      if($n_uri_3=='user'){
      $n_hide = 'hide';
      $n_hide3 = 'hide';
      $n_hide_2 = '';
    }elseif($n_uri_3=='edit_buku'){
        $n_hide ='hide';
        $n_hide_2 = 'hide';
        $n_hide3 = '';
    }
    }else{
      $n_hide = '';
      $n_hide_2 = 'hide';
      $n_hide3 = 'hide';
    }
     ?>
    <div class="col-lg-6 col-md-4 col-sm-12 col-xs-12 mar-2 bg-putih padding ">
      <div class="rows">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding  <?php echo $n_hide; ?>">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <img src="<?php echo base_url(); ?>asset/img/tambah_buku.png" class="img-responsive mar-center">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding mar-top-2">
          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12  padding crud">
            <?php
            echo form_open_multipart('Nc_front/tambah_buku');
            $n_inpt_1 = ['name'=>'judul','placeholder'=>'Judul Buku','required'=>'required','class'=>'form-control'];
            $n_inpt_2 = ['name'=>'jumlah_materi','placeholder'=>'Jumlah Materi','required'=>'required','class'=>'form-control mar-top-2'];
            echo form_input($n_inpt_1);
            echo form_input($n_inpt_2);
             ?>
             <label for="cover_buku" class="btn btn-warning mar-top-2">Cover Buku</label>
             <input type="file" name="sampul_buku" id="cover_buku" class="hide">
             <?php
             echo form_reset('reset_add_buku','Cancel',['class'=>'btn btn-danger mar-top-2']);
             echo form_submit('enter_add_buku','Tambah',['class'=>'btn btn-primary mar-top-2']);
             echo form_close();
              ?>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mar-2">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img-cover-add no-padding">
                  <img id="preview-image" src="#" alt=" " class="img-cover-prev">
              </div>
          </div>
        </div>
      </div>
      </div>

      <div class="rows">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding  <?php echo $n_hide3; ?>">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <img src="<?php echo base_url(); ?>asset/img/editbuku.png" class="img-responsive mar-center">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding mar-top-2">
          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12  padding crud">
            <?php
            echo form_open_multipart('Nc_front/edit_buku');
            $n_inpt_1 = ['name'=>'judul_edit','placeholder'=>'Judul Buku','required'=>'required','class'=>'form-control','value'=>$det_book->judul];
            $n_inpt_2 = ['name'=>'jumlah_materi_edit','placeholder'=>'Jumlah Materi','required'=>'required','class'=>'form-control mar-top-2','value'=>$det_book->materi];
            echo form_input($n_inpt_1);
            echo form_input($n_inpt_2);
            echo form_hidden('id_edt_book',$det_book->id_buku);
             ?>
             <label for="edt_cover" class="btn btn-warning mar-top-2">Cover Buku</label>
             <input type="file" name="edt_sampul_buku" id="edt_cover" class="hide">
             <?php
             echo anchor('Nc_front/home','Cancel',['class'=>'btn btn-danger mar-top-2 mar-r-5']);
             echo form_submit('enter_edit_buku','Update',['class'=>'btn btn-primary mar-top-2']);
             echo form_close();
              ?>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mar-2">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img-cover-add no-padding">
                  <img id="preview-image" src="#" alt=" " class="img-cover-prev">
              </div>
          </div>
        </div>
      </div>
      </div>

      <div class="rows">
        <div class="col-lg-12 <?php echo $n_hide_2; ?>">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <img src="<?php echo base_url(); ?>asset/img/user.png" class="img-responsive mar-center">
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding mar-top-2 max-h-300 over-auto">
            <table class="table">
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Option</th>
              </tr>
              <?php
              $no= 1;
              foreach ($pengguna as $n_user) {
                ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $n_user->nama; ?></td>
                  <td><?php echo $n_user->username; ?></td>
                  <td width=140>
                    <?php
                    echo anchor('Nc_front/del_user/'.$n_user->id_user,'<span class="glyphicon glyphicon-remove"></span>',['class'=>'btn btn-danger btn-sm'])."&nbsp;&nbsp;";
                    echo anchor('Nc_front/home/user/upt_user/'.$n_user->id_user,'<span class="glyphicon glyphicon-edit"></span>',['class'=>'btn btn-warning btn-sm'])."&nbsp;&nbsp;";
                    echo anchor('Nc_front/home/user/det_user/'.$n_user->id_user,'<span class="glyphicon glyphicon-eye-open"></span>',['class'=>'btn btn-primary btn-sm']);
                    ?>
                  </td>
                </tr>
                <?php
                $no++;
              }
               ?>
            </table>
          </div>
        </div>
      </div>
    </div>
    <?php
    $uri4 = $this->uri->segment(4);
    if($uri4!=''){
      if($uri4=='upt_user'){
        $hide3='';
        $hide = 'hide';
        $hide2 = 'hide';
      }elseif($uri4=='det_user'){
        $hide3='hide';
        $hide = '';
        $hide2 = 'hide';
      }elseif($uri4==(0<=$uri4)){
        $hide3='hide';
        $hide = 'hide';
        $hide2 = '';
      }
    }else{
      $hide2 = '';
      $hide ='hide';
      $hide3='hide';
    }
     ?>
<!--- profil user--->
    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 mar-2 <?php echo $hide2; ?>" >
      <div class="rows">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
            <img src="<?php echo base_url(); ?>asset/img/backdrop.png" class="img-responsive img-backdrop">
            <img src="<?php echo base_url(); ?>asset/img/konsumen.png" class="img-profil">
            <?php echo anchor('Nc_front/home/user_update/','<span class="glyphicon glyphicon-plus"></span>',['class'=>'btn-primary edt']); ?>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding microsoft mar-top-1">
          <blockquote class="bg-putih">
            - <span class="capitalize">Nico Gawa Lahara</span><br>
            - niclahara
          </blockquote>
        </div>
      </div>
    </div>

<!--- detail user-->
    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 mar-2 <?php echo $hide; ?>" >
      <div class="rows">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
            <img src="<?php echo base_url(); ?>asset/img/backdrop.png" class="img-responsive img-backdrop">
            <img src="<?php echo base_url(); ?>uploads/gambar/<?php echo $det_user->gambar; ?>" class="img-profil">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding microsoft mar-top-1">
          <blockquote class="bg-putih">
            - <span class="capitalize"><?php echo $det_user->nama; ?></span><br>
            - <?php echo $det_user->username; ?>
          </blockquote>
        </div>
      </div>
    </div>

<!--- edit user-->
    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 mar-2 <?php echo $hide3; ?>" >
      <div class="rows">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding calibri f-15 bg-putih bor-l-s-5 bor-col-gray">
          <?php
          echo form_open_multipart('Nc_front/edt_user');
          $n_inpt_1 = ['name'=>'nama_edt','placeholder'=>'Nama Lengkap','class'=>'form-control','required'=>'required','value'=>$det_user->nama];
          $n_inpt_2 = ['name'=>'username_edt','placeholder'=>'Username','class'=>'form-control mar-top-1','required'=>'required','value'=>$det_user->username];
          $n_inpt_3 = ['name'=>'password_edt','placeholder'=>'Password','class'=>'form-control mar-top-1'];
          echo form_input($n_inpt_1);
          echo form_input($n_inpt_2);
          echo form_password($n_inpt_3);
          echo form_reset('reset_edt_buku','Cancel',['class'=>'btn btn-danger mar-top-1']);
          echo form_submit('enter_edt_buku','Update',['class'=>'btn btn-primary mar-top-1']);
          ?>
          <input type="hidden" name="id_upt_usr" value="<?php echo $this->uri->segment(5); ?>">
          <label for="gambar-edt" class="btn btn-warning mar-top-1">Image Profile</label>
          <input type="file" name="img_edit" id="gambar-edt" class="hide">
          <?php
          echo form_close();
           ?>
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 w-h-90 bg-kuning no-padding mar-top-1 bg-img-pic bor-radius-50">
               <img id="preview-image2" src="#" alt=" " class="img-cover-prev bor-radius-50">
           </div>


        </div>
      </div>
    </div>

</div>

<div class="container padding">
  <?php
  foreach($n_books as $n_rows){
    ?>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mar-top-2 padding ">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding box-shadow_2 bor-bot-orange no-bor-radius">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding ">
          <img src="<?php echo base_url(); ?>uploads/cover/<?php echo $n_rows->cover ?>" class="img-responsive">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding microsoft bg-dark">
          <blockquote class="no-pad-top no-pad-bot no-margin">
            <strong><?php echo $n_rows->judul; ?></strong><br>
            Materi Belajar : <?php echo $n_rows->materi; ?><br>

          </blockquote>
          <p class="text-center mar-top-1 bor-top-solid"><span class="f-13 calibri text col-putih ">Tersedia <?php echo $n_rows->tercapai ?> / <?php echo $n_rows->materi; ?> </span></p>
          <?php
           $jummat = $n_rows->materi;
           $mat    = $n_rows->tercapai;
           $n_hsl  = (100/$jummat)*$mat ;
              ?>
          <div class="progress" id="progres">

            <div class="progress-bar progress-bar-striped active" role="progressbar" style="width:<?php echo $n_hsl?>%" >
                </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" class="bg-putih">
              <?php echo anchor('Nc_front/home/edit_buku/'.$n_rows->id_buku,'<span class="glyphicon glyphicon-edit"></span>',['class'=>'btn btn-warning form-control']); ?>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
              <?php echo anchor('Nc_front/del_buku/'.$n_rows->id_buku,'<span class="glyphicon glyphicon-remove"></span>',['class'=>'btn btn-danger form-control']); ?>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
              <?php echo anchor('Nc_front/book/'.$n_rows->nobuku,'<span class="glyphicon glyphicon-folder-open"></span>',['class'=>'btn btn-primary form-control']); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
  }
   ?>

</div>
