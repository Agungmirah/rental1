<?php
include('../../conf/config.php');
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM blacklist WHERE id='$id'");
header('location:../index.php?page=datablacklist');
?>