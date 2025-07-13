<?php
include("inc/konek.php");
koneksi_buka();

$con=mysqli_connect($DB_host,$DB_User,$DB_Pswd,$DB_Nama);
if(!empty($_POST["email"])) {
$result = mysqli_query($con, "SELECT count(*) FROM user WHERE email='" . $_POST["email"] . "'");
$row = mysqli_fetch_row($result);
$user_count = $row[0];
if($user_count>0) echo "<span style='color: #D60202;'> email had been used.</span>";
else echo "<span style='color: #2FC332;'> email available.</span>";
}
?>