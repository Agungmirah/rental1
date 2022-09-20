<?php
include('../conf/config.php');
$nama = $_GET['name'];
$phone = $_GET['phone'];
$address = $_GET['address'];
$location= $_GET['location'];
$rent = $_GET['rent'];
$motor = $_GET['motorcycle'];
$start = $_GET['start'];
$timestart = $_GET['timestart'];
$end = $_GET['end'];
$timeend = $_GET['timeend'];
$query = mysqli_query($koneksi, "INSERT INTO rent_form (id, name, phone, address, location, rent, motorcycle, start, time_start, end, time_end ) 
VALUES('','$nama','$phone','$address','$location','$rent','$motor','$start','$timestart','$end','$timeend')");
header('location: index.php');
?>