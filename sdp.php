<?php
include("inc/konek.php");
koneksi_buka();

$con=mysqli_connect($DB_host,$DB_User,$DB_Pswd,$DB_Nama);
$query = "SELECT max as maxID FROM maxdata";
$hasil = mysqli_query($con,$query);
$data  = mysqli_fetch_array($hasil);
$idMax = $data['maxID'];
$noUrut = (int) substr($idMax, 1, 10);
$noUrut = $idMax;
$noUrut++;
$newID = $noUrut;
$namad=$_POST['firstname'];
$namab=$_POST['lastname'];
$usr=$_POST['username'];
$mail=$_POST['email'];
$cellphone=$_POST['cellphone'];
$ps=$_POST['password_name'];
$psd=md5($ps);
$acv = "NamoraEdwardRudolf";
$finalpassword = md5($acv . md5($psd) . $acv );

// Create connection
$conn = mysqli_connect($DB_host, $DB_User, $DB_Pswd, $DB_Nama);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "insert into user(id,firstname,lastname,username,password,email,cellphone)
        values('$newID','$namad','$namab','$usr','$finalpassword','$mail','$cellphone')";

if (mysqli_query($conn, $sql)) {
  $last_id = mysqli_insert_id($conn);
  echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$b=mysqli_query($conn, "update maxdata set `max`='$last_id' where id='1'");

mysqli_close($conn);

header('location:index1.php'); 
?>