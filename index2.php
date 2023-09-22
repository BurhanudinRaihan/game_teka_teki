<?php
	$soal =[
		"AMERIKA SERIKAT",
		"INDONESIA",
		"BANGLADESH",
		"MALAYSIA",
		"AUSTRALIA",
		
	];

	if (!isset($_GET['index'])) {
		$randomm = rand(0, count($soal)-1);
	}else{
		$randomm = $_GET['index'];
	}

	if (isset($_GET['jawab'])) {
		$jawbn = $_GET['jawaban'].$_GET['jawab'];
	}else{
		$jawbn = '';
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
    <title>TEBAK NEGARA</title>
	<style type="text/css">
		body{
			background-color: rgb(227, 201, 219);
        }
		h3{
            font-size: 47px;
			font-family: 'patrick hand';
			margin-top : 2%;
            color : purple;
        }
        h4{
            font-size: 40px;
			font-family: 'pulang';
            margin-top: 1%;
            color : black;
        }
	</style>
	</head>
	
  </head>
  <body>
	<div class="container">
		<h4 class="text-center">PERMAINAN TEBAK NAMA NEGARA</h4>
		<hr>
		<h4 class="text-center">TEBAK NEGARA</h4>
		<!-- bagian kata -->
		<div class="row">
			<div class="col-12 text-center">
				<?php
				$arrsoal = str_split($soal[$randomm]);
				$jbn = str_split($jawbn);
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

		<form method="get">
		<div class="row justify-content-center ">
			<input type="hidden" name="index" value="<?= $randomm ?>">
			<input type="hidden" name="jawaban" value="<?= $jawbn ?>">
			
			<?php
				$huruuf = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
				$huruuf = str_split($huruuf);
                $maksimal=0;
				foreach($jbn as $jn){
					if($jn != ''){
						if (!in_array($jn, $arrsoal)) {
							echo '<button class="m-1 btn btn-danger">X</button>';
                            $maksimal++;
						}
					}
				}

                if($maksimal==5){
                    ?>
                    <script>
                        alert('KESEMPATAN KAMU HABIS, SILAHKAN RESET UNTUK MENGULANG');
                    </script><?php
                }
				?></div>
			<div class="row justify-content-center ">
				<?php

				foreach($huruuf as $h){
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