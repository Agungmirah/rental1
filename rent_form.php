<?php

   $connection = mysqli_connect('localhost','root','','rent_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $rent = $_POST['rent'];
      $motorcycle = $_POST['motorcycle'];
      $start = $_POST['start'];
      $time_start = $_POST['time_start'];
      $end = $_POST['end'];
      $time_end = $_POST['time_end'];
      $ktp = $_POST['ktp'];


      $request = " insert into rent_form(name, phone, address, location, rent, motorcycle, start, time_start, end, time_end, ktp) values('$name','$phone','$address','$location','$rent','$motorcycle','$start','$time_start','$end','$time_end','$ktp') ";
      mysqli_query($connection, $request);

      header('location:rent.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>