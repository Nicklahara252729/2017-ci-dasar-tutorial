<!doctype html>
<html lang="en">
<head>
  <title>Tutorial CI Dasar</title>
  <?php
   echo link_tag('asset/css/bootstrap.css');
   echo link_tag('asset/css/N_default.css');
   echo link_tag('asset/css/prettify.css');
   echo link_tag('asset/css/customize.css');
   ?>
   <link href="<?php echo base_url(); ?>/asset/img/nicklahara.png" rel="shortcut icon">
</head>
<body class="bg-abu">
  <div class="container-fluid no-padding header-home">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding ">
      <div class="container">
        <div class="col-lg-3 col-md-3 wrap-merek " >
          <img src="<?php echo base_url(); ?>asset/img/logo.png" class="img-responsive">
        </div>
        <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12  mar-top-1 icon-menu">
          <p class="text-center">
          <?php
          echo anchor('Nc_front/home','<span class="glyphicon glyphicon-home"></span>',['class'=>'col-putih f-20'])."&nbsp;&nbsp;&nbsp;&nbsp;";
          $n_uri_1 = $this->uri->segment(1);
          $n_uri_3 = $this->uri->segment(3);
          if($n_uri_1!='Nc_front'){
              echo anchor('Nc_front/book/'.$n_uri_1,'<span class="glyphicon glyphicon-th"></span>',['class'=>'col-putih f-20']);
          }else{
              echo anchor('Nc_front/book/'.$n_uri_3,'<span class="glyphicon glyphicon-th"></span>',['class'=>'col-putih f-20']);
          }

           ?>
         </p>
       </div>

       <div class="col-lg-offset-1  col-lg-3 col-md-3 wrap-merek" >
         <img src="<?php echo base_url(); ?>asset/img/konsumen.png" class="img-user"> &nbsp;&nbsp;&nbsp;
        <?php echo anchor('Nc_front/logout','LOGOUT',['class'=>'btn btn-sm btn-warning']); ?>
       </div>
      </div>
    </div>
  </div>

  <div class="container-fluid mar-top-2 no-padding mar-bot-2">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding bg-dark box-shadow_2">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
          <img src="<?php echo base_url(); ?>uploads/cover/<?php echo $info_book->cover; ?>" class="img-cover-prev">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding microsoft">
          <blockquote class="no-pad-top no-pad-bot no-margin">
            <strong><?php echo $info_book->judul; ?></strong><br>
            Materi Belajar : <?php echo $info_book->materi ?><br>

          </blockquote>
          <?php
           $jummat = $info_book->materi;
           $mat    = $info_book->tercapai;
           $n_hsl  = (100/$jummat)*$mat ;
              ?>
          <p class="text-center mar-top-1 bor-top-solid"><span class="f-15 arial text col-putih ">Tersedia <?php echo $info_book->tercapai; ?> / <?php  echo $info_book->materi; ?> </span></p>
          <div class="progress" id="progres">
            <div class="progress-bar progress-bar-striped active" role="progressbar" style="width:<?php echo $n_hsl; ?>%" >
                </div>
          </div>
        </div>
      </div>
    </div>
    <?php echo $n_contents; ?>
  </div>
  <script src="<?php echo base_url(); ?>asset/js/jquery-2.1.4.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/prettify.js"></script>
  <script>
  		function previewImage(input) {

  			if (input.files && input.files[0]) {
  				var fileReader = new FileReader();
  				var imageFile = input.files[0];

  				if(imageFile.type == "image/png" || imageFile.type == "image/jpeg") {
  					fileReader.readAsDataURL(imageFile);

  					fileReader.onload = function (e) {
  						$('#preview-image').attr('src', e.target.result);

  					}
  				}
  				else {
  					alert("your file is not image");
  				}
  			}
  		}

  		$("[name='sampul_buku']").change(function(){

  			previewImage(this);
  		});

      function previewImage2(input) {

  			if (input.files && input.files[0]) {
  				var fileReader = new FileReader();
  				var imageFile = input.files[0];

  				if(imageFile.type == "image/png" || imageFile.type == "image/jpeg") {
  					fileReader.readAsDataURL(imageFile);

  					fileReader.onload = function (e) {
  						$('#preview-image2').attr('src', e.target.result);

  					}
  				}
  				else {
  					alert("your file is not image");
  				}
  			}
  		}

  		$("[name='img_edit']").change(function(){

  			previewImage2(this);
  		});

  	</script>

</body>
</html>
