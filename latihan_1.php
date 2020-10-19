<?php
echo "<br>";
$nilai = 83;
echo "Nilai Kamu adalah :"; echo $nilai;
echo "<br>";
echo "<br>";
if($nilai > 86 && $nilai <= 100){
	echo "Selamat…<br> Proses belajarmu sangat baik, tingkatkan terus kemampuan codingnya…";
}elseif ($nilai >71 && $nilai <=85) {
	echo "Selamat…<br> Kamu sudah mulai memahami pemrgraman PHP, tingkatkan terus skil codingmu…";
}elseif ($nilai <= 70){
	echo "Uppsssss…<br> Skill kodingmu perlu diasah ini gaes... <br> Tetap semangat  belajar dan eksplore kemampuan y…";
}else{
	echo "Nilai Salah";
}
?>