<div class=" nv_index">
  <div class="container-fluid padding pos-relative mar-top-200">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header">
      <p class="padding"><span><strong>CI</strong></span>TUTORIAL <p>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding  in-container" >
      <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
        <?php
        $n_get_param = $this->uri->segment(3);
        if($n_get_param!=''){
          $n_hide = 'hide';
          $n_hide_2 = '';
        }else{
          $n_hide = '';
          $n_hide_2 = 'hide';
        }
         ?>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 login  <?php echo $n_hide; ?>">
          <div class="padding text-center txt-title"> LOGIN AKUN</div>
          <?php
          echo form_open_multipart('Nc_front/login');
          $n_inpt_1 = ['name'=>'username','placeholder'=>'Username','required'=>'required','class'=>'form-control'];
          $n_inpt_2 = ['name'=>'password','type'=>'password','placeholder'=>'Password','required'=>'required','class'=>'form-control'];
          ?>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding mar-top-1"><?php echo form_input($n_inpt_1); ?></div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding mar-top-2"><?php echo form_input($n_inpt_2); ?></div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding mar-top-1"><?php echo form_submit('enter_login','login',['class'=>'btn']);
          echo anchor('Nc_front/index/'.$n_param='register','REGISTER');?></div>
          <?php echo form_close();?>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 register bg-abu <?php echo $n_hide_2; ?>">
          <div class="padding text-center txt-title">REGISTRASI AKUN </div>
          <?php
          echo form_open('Nc_front/login');
          $n_inpt_1 = ['name'=>'nama','placeholder'=>'Nama lengkap','required'=>'required','class'=>'form-control'];
          $n_inpt_2 = ['name'=>'username','placeholder'=>'Username','required'=>'required','class'=>'form-control'];
          $n_inpt_3 = ['name'=>'password','placeholder'=>'Password','required'=>'required','class'=>'form-control'];
          ?>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding mar-top-1"><?php echo form_input($n_inpt_1); ?></div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding mar-top-2"><?php echo form_input($n_inpt_2); ?></div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding mar-top-2"><?php echo form_input($n_inpt_3); ?></div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding mar-top-1"><?php echo form_submit('enter_register','register',['class'=>'btn']);
          echo anchor('Nc_front/','LOGIN');?></div>
          <?php echo form_close();?>
        </div>
      </div>
      <div class="col-lg-3 col-md-5 col-sm-6 col-xs-12 txt-left no-padding " >
        <div class="col-lg-12 padding blckqt">
      <blockquote>Kumpulan tutorial
      dari berbagai ebook dengan berbagai konsep dan di buat dengan menerapkan tampilan yang sederhana dan mudah dimengerti
    </blockquote>
    </div>
    <div class="col-lg-12 blckqt padding">
  <blockquote>Copyright &copy; 2017 nico lahara</blockquote>
</div>
  </div>
  </div>
  </div>
</div>
