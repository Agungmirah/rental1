<?php
include('../../conf/config.php');
$id = $_GET['Id'];
$query = mysqli_query($koneksi, "DELETE FROM rent_form WHERE Id='$id'");
header('location:../index.php?page=datapelanggan');
?>