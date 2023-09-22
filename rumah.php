<?php
$Kalimat = 'Rumah Diah ada di Medan';
$cari = 'Rumah';
if (strstr($Kalimat,$cari)) {
    echo "Kalimat <b>$Kalimat</b> mengandung kata <b>$cari</b>";
} else {
    echo"Kalimat <b>$Kalimat</b> tidak mengandung kata <b>$cari</b>";
}