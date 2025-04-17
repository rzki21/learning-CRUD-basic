<?php 
$host = "localhost"; // atau alamat IP server databasse
$user = "root" ;// isi dengan username database
$pass = "" ;//isi dengan passord database
$dbname = "crud"; // nama database yang anda buat

//Koneksi ke db 
$conn = new mysqli($host. $user, $pass, $dbname);

//cek koneksi
if ($conn->connect_error) {
    die("Koneksi ke db Gagal:" . $conn->connect_error);
}


#Koneksi ke database menggunakan mysqli
#penjelasan untuk cek koneksi, jadi cek koneksi hanya memberikan nilai gagal jika kita salah/gagal mengkonfigurasi database ke file config.php ini.
?>
