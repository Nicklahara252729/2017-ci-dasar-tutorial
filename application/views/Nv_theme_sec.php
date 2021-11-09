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
<body>
  <?php echo $n_contents; ?>
  <script src="<?php echo base_url(); ?>asset/js/prettify.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/jquery-2.1.4.js"></script>
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
  	</script>

</body>
</html>
