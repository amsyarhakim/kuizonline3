<?php
//SETUP PANGKALAN DATA
//TIDAK PERLU UBAH
$host="localhost";
$user = "root";
//BIARKAN KOSONG JIKA GUNA XAMPP
$password="";
//NAMA P.DATA-BOLEH UBAH 
$database="kuizonline3";
//////////////////////
$hubung=mysqli_connect($host,$user,$password,$database);
if(mysqli_connect_errno()) {
echo "Proses sambung ke pangkalan data gagal";
exit();
}
//////////////////////
//PENETAPAN SISTEM ANDA
$lencana="lencana.png";
$subjek="SEJARAH TINGKATAN 4";
$nama_sekolah="SMK CHERAS KL<BR>
JALAN YAAKOB LATIF,<BR>
56000 BANDAR TUN RAZAK,<BR>
KUALA LUMPUR.";
$nama_sistem="SISTEM PENILAIAN KENDIRI";
$motto_sistem="FORMAT:SOALAN MCQ/TF";
$footer="Self Monitoring Learning System";
$logo="logo.png";
?>