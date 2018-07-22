<?php

include "koneksi.php";

// file submit.php
// menangkap data yang dikirimkan dari file tambah.php mwnggunakan method = POST

$Nama = $_POST['nama'];
$jenis_kelamin = $_POST['Jenis_kelamin'];
$hp = $_POST['HP'];
$email = $_POST['Email'];
$Nominal = $_POST['nominal'];
$Metode = $_POST['metode'];

// perintah SQL
if((!empty($Nama))  && (!empty($hp)) && (!empty($email)) && (!empty($Nominal)) && (!empty($Metode)))
{

$query="INSERT INTO donatur VALUES ('$Nama',' $jenis_kelamin','$hp','$email','$Nominal','$Metode') " ;

$hasil=mysql_query($query);

  echo '<script language="javascript">
              alert ("Registrasi Berhasil Di Lakukan. Silahkan Cek Email Anda");
              window.location="donasi.php";
              </script>';
              exit();
}
else {
		echo '<script language="javascript">
              alert ("Silahkan isi data dengan benar");
              window.location="donasi.php";
              </script>';
              exit();
}	

?>
