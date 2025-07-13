<?php
include("inc/konek.php");
koneksi_buka();

$con=mysqli_connect($DB_host,$DB_User,$DB_Pswd,$DB_Nama);
if(!empty($_POST["username"])) {
$result = mysqli_query($con, "SELECT count(*) FROM user WHERE username='" .$_POST["username"]. "'");
$row = mysqli_fetch_row($result);
$user_count = $row[0];
if($user_count>0) echo "<span style='color: #D60202;'> Username not available.</span>";
else echo "<span style='color: #2FC332;'> Username available.</span>";
}
?>