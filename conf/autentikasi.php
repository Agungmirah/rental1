<?php
session_start();
include ('config.php');
$username=$_POST['username'];
$password=$_POST['password'];

$query = mysqli_query($koneksi,"SELECT * FROM user where username='$username' AND password='$password'");
if(mysqli_num_rows($query)==1){
header('location:../admin/index.php');
$user = mysqli_fetch_array($query);
$_SESSION['nama'] = $user['nama'];
$_SESSION['level'] = $user['level'];

}
else{
    header('location:../home.php');
}
?>