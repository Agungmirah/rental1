<?php
include('../conf/config.php');
$nama = $_GET['name'];
$phone = $_GET['phone'];
$address = $_GET['address'];
$alasan= $_GET['alasan'];
$ktp = $_GET['gambar'];
$query = mysqli_query($koneksi, "INSERT INTO blacklist (id, nama, phone, address,alasan, ktp ) 
VALUES('','$nama','$phone','$address','$alasan','$ktp')");
header('location: index.php?page=datablacklist');
?>