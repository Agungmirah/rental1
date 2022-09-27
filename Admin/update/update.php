<?php
include('../../conf/config.php');
$id   =$_GET['id'];
$name = $_GET['name'];
$phone = $_GET['phone'];
$address = $_GET['address'];
$alasan = $_GET['alasan'];
$ktp = $_GET['ktp'];
$query = mysqli_query($koneksi, "UPDATE blacklist SET name='$name', phone='$phone', address='$address', alasan='$alasan',ktp='$ktp'");
header('Location: ../index.php?page=datablacklist');
?>