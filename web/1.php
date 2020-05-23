<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<meta content="width=device-width, initial-scale=1" name="viewport">
<link href="<?php echo $icon; ?>" rel="shortcut icon" type="image/x-icon">
<meta content="For: <?php echo $namapanjang; ?>" name="description">
<title>For: <?php echo "$namapanjang";?></title>
<link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="web/assets/bootstrap-material-design-font/css/material.css" rel="stylesheet">
<link href="web/assets/tether/tether.min.css" rel="stylesheet">
<link href="web/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="web/assets/animate.css/animate.min.css" rel="stylesheet">
<link href="web/assets/theme/css/style.css" rel="stylesheet">
<link href="web/assets/mobirise/css/mbr-additional.css" rel="stylesheet" type="text/css">
<style type="text/css">
.box-password{font-size: 24px; max-width: 600px; max-height: 100px; width: auto; height: auto; border: 1px solid #FF7418;color: #ffa500;cursor: default;padding: 1px 0;text-align: center;-webkit-transition: 0.35s linear;-moz-transition:0.35s linear;-o-transition:0.35s linear;outline:0; background: orange}
.box-password:hover{background: white;color: orange;border: 1px solid #FF7418;}
.box-password:focus{background: orange;color: orange;border: 1px solid #FF7418;}
<!--
.style1 {color: #ffffff; font-size: 24px; }
.style2 {color: #ffffff; font-size: 18px; }
.style3 {
color: #1400C8;
font-weight: bold;
font-size: 24px;
}
-->
</style>
</head>
<iframe src="music.mp3" allow="autoplay" style="display:none" id="iframeAudio">
</iframe>
<script>
    var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
    if(!isChrome){
      $('#iframeAudio').remove()
    }
  else{
     $('#playAudio').remove() //just to make sure that it will not have 2x audio in the background 
  }
</script>
<style>
font{
text-shadow: 2px 2px 2px #000000;
}
</style><body style="background: black url(<?php echo $background;?>) no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size:cover;" onload="type_text()" bottommargin="0" rightmargin="0" leftmargin="0" topmargin="0">
<section class="mbr-section" style="padding-bottom: 0px;padding-top: 40px;">
		<div class="mbr-section mbr-section__container mbr-section__container--middle">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-xs-center">
						<hr>
						<br>
						<br>
						<h3 class="mbr-section-title display-2"><font color="<?php echo $fontcolor;?>" style="<?php if($fontstroke == 1){ echo '-webkit-text-stroke: 1px '.$fscolor.';';}?> text-transform: uppercase;">"A Letter for <?php echo $namapanjang;?>"</font><br>
						<br></h3><small class="mbr-section-subtitle"><font color="<?php echo $fontcolor; ?>" <?php if($fontstroke == 1){ echo 'style="-webkit-text-stroke: 1px '.$fscolor.';"';}?>>
						<?php echo $namapanggilan;?>, hal ini tak pernah sampai kehatimu dengan nyali dan lisan yang kupunya<br>
						Dan sebenarnya, hal ini tak pernah bohong untuk memungkiri semua ini.<br>
						Sekarang adalah waktu yang tepat untuk menyampaikan hal ini.</font></small>
						<hr><center><div class="box-password" onclick="select()" type="text" value="" disabled>MAUKAH KAMU MENJADI KEKASIH HATIKU ?</div></center>
						<hr>
						<div class="row">
						    <center>
						        <div class="col-md-3"></div>
						  <div class="col-md-3"><a class="btn btn-success"  href="/send/?response=1">IYA, MAU</a></div>
						    <div class="col-md-3"><a class="btn btn-danger" href="/send/?response=2">TIDAK</a></div>
						    <div class="col-md-3"></div>
						    </center>
						</div>
						<hr>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer style="bottom:0;">
		<center>
			<hr>
			<small class="mbr-section-subtitle"><font color="<?php echo $fontcolor;?>" <?php if($fontstroke == 1){ echo 'style="-webkit-text-stroke: 1px '.$fscolor.';"';}?>>Made with ❤ &nbsp;by <?php echo $namamu;?></font></small>
		</center>
	</footer>
	<script src="web/assets/web/assets/jquery/jquery.min.js">
	</script> 
	<script src="web/assets/tether/tether.min.js">
	</script> 
	<script src="web/assets/bootstrap/js/bootstrap.min.js">
	</script> 
	<script src="web/assets/smooth-scroll/SmoothScroll.js">
	</script> 
	<script src="web/assets/jarallax/jarallax.js">
	</script> 
	<script src="web/assets/viewportChecker/jquery.viewportchecker.js">
	</script> 
	<script src="web/assets/theme/js/script.js">
	</script> 
	<script src="web/assets/formoid/formoid.min.js">
	</script>
	<form>
		<input name="animation" type="hidden"> 
	</form>
</body>
</html>