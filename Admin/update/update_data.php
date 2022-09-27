<?php
include('../../conf/config.php');
$id   =$_GET['Id'];
$name = $_GET['name'];
$phone = $_GET['phone'];
$address = $_GET['address'];
$where_to = $_GET['location'];
$How_many_rent = $_GET['rent'];
$start = $_GET['start'];
$time_start = $_GET['time_start'];
$end = $_GET['end'];
$time_end = $_GET['time_end'];
$query = mysqli_query($koneksi, "UPDATE rent_form SET name='$name', phone='$phone', address='$address', location='$where_to', rent='$How_many_rent', start='$start', time_start='$time_start', end='$end', time_end='$time_end'");
header('Location: ../index.php?page=datapelanggan');
?>