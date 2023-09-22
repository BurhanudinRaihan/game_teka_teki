<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <title>Hangaroo</title>
	<style>
		a.nav-link{
			color:white !important;
		}
		.bg-primary,.btn-primary{
			/*
			background-color:#Cf7bff!important;
			border-color:#Af7bff!important;
			box-shadow:1px 1px 10px gray;*/
		}
		.card{
			box-shadow:1px 1px 10px gray;
		}
	</style>
  </head>
  <body>
	<div class="container">
		<h4 class="text-center">Permainan Tebak Kata</h4>
		<hr>
		<?php
			$peribahasa = [
				'BAGAIKAN PUNGGUK MERINDUKAN BULAN',
				'BAGAIKAN AIR DI DAUN TALAS',
				'KALAH JADI ABU MENANG JADI ARANG',
				'AIR SUSU DIBALAS DENGAN AIR TUBA',
				'DIMANA BUMI DIPIJAK DISITU LANGIT DIJUNJUNG',
				'DUDUK SAMA RENDAH BERDIRI SAMA TINGGI',
			];
			$index = rand(0,count($peribahasa)-1);

		?>	
		<h4 class="text-center">Peribahasa</h4>
		<!-- bagian kata -->
		<div class="row">
			<div class="col-12 text-center">
			<?php
			echo $peribahasa[$index];
			
			?>
			</div>
		</div>
		<!-- tombol reset -->
		<div class="row justify-content-center ">
			<a href="#" class="btn btn-success">Reset</a>
		</div>
		<br>
		<!-- form/ABCD -->
		<form method="get">
		<input type="text" name="index" value="<?=$index?>">
		<div class="row justify-content-center ">
		<?php
			$huruf = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
			$huruf = str_split($huruf);
			foreach($huruf as $h){
				echo '<input type="submit" class="m-1 btn btn-success" value="'.$h.'">';
			}
		?>
		</div>
		</form>
	</div>    
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>	
  </body>
</html>