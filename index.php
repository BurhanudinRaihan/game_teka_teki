<style>
		body{
			background:url('yaaa.jpg');
			background-repeat:no-repeat;
			background-size:100%;
		}
</style>
<?php
	$soal =[
		"ADA UDANG DIBALIK BATU",
		"BAGAI PINANG DIBELAH DUA",
		"AIR BERIAK TANDA TAK DALAM",
		"ADA ASAP ADA API",
		"BAGAI MUSUH DALAM SELIMUT",
	];

	if (!isset($_GET['index'])) {
		$rand_ind = rand(0, count($soal)-1);
	}else{
		$rand_ind = $_GET['index'];
	}

	if (isset($_GET['jawab'])) {
		$jwbn = $_GET['jawaban'].$_GET['jawab'];
	}else{
		$jwbn = '';
	}

	
	
?>
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
  </head>
  <body>
	<div class="container">
		<h4 class="text-center" style=" color:white; margin-top:5%;">Permainan Tebak Kata</h4>
		<hr>
		<h4 class="text-center" style=" color:white;">Peribahasa</h4>
		<!-- bagian kata -->
		<div class="row">
			<div class="col-12 text-center" style="color:white;">
				<?php
				$arrsoal = str_split($soal[$rand_ind]);
				$jbn = str_split($jwbn);
				foreach ($arrsoal as $soal) {
					if ($soal == ' ') {
						echo " ";
					}else {
						if (in_array($soal, $jbn)) {
							echo $soal;
						}else {
							echo "*";
						}
					}			
				}
				?>
			</div>
		</div>
		<!-- tombol reset -->
		<div class="row justify-content-center ">
			<a href="?" class="btn btn-success">Reset</a>
		</div>
		<br>

		<!-- form/ABCD -->
		<form method="get">
		<div class="row justify-content-center ">
			<input type="hidden" name="index" value="<?= $rand_ind ?>">
			<input type="hidden" name="jawaban" value="<?= $jwbn ?>">
			<?php
				$huruf = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
				$huruf = str_split($huruf);
				$max=0;
				foreach($jbn as $jn){
					if($jn != ''){
						if (!in_array($jn, $arrsoal)) {
							
							echo '<button class="m-1 btn btn-danger">X</button>';
							$max++;

						}
					}
				}
				

				if($max==5){
					?>
					<script>
						alert('GAME OVER, KLIK OK, LALU PILIH RESET UNTUK MENGULANG');
					</script><?php
				}
				
				
				
				?></div>
		<div class="row justify-content-center ">
			<?php
				echo "<br/>";
				foreach($huruf as $h){
					if (!in_array($h, $jbn)) {
						echo '<input type="submit" name="jawab" class="m-1 btn btn-success" value="'.$h.'">';
					}
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