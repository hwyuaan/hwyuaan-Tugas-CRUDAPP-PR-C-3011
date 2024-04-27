<?php
$username ='root';
$hostname ='localhost';
$password ='';
$dbaname = 'db_pweb';

// $conn = mysqli_connect ("$hostname","$username","$password","$dbaname");
// if ($conn->connect_error) {
//     die("koneksi database gagal:".$conn->connect_error);
// }
// echo "sukses";


$conn = mysqli_connect($hostname, $username, $password, $dbaname);

if ($conn->connect_error) {
  die("koneksi database gagal:".$conn->connect_error);
}
?>
 