<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

</head>
<body>
    <h2>Masukan Nilai yang ingin diulang</h2>

    <form method="post">
        <input type="text" name="nilai" value="">
        <button type="submit">PROSES</button>
    </form>

    <?php

        if(isset($_POST['nilai'])){
            $var =$_POST['nilai'];
            
            if(empty($var)){
                echo 'Harap Masukan Nilai!';
            }else if(!is_numeric($var)){
                echo 'Anda Memasukan '.$var.' harap masukan angka';
            }else{


        for($k=0; $k<=$var;$k++){
            for($j=0;$j<=$var;$j++){
                if($j==$k){
                    echo $k;
                }else{
                    echo "*";
                }
            }echo "<br>";
        }}
    }
    ?>
</body>
</html>