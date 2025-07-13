<?php
include("inc/konek.php");
session_start();
koneksi_buka();
if(isset($_POST['username']) && isset($_POST['password']))
{
// username and password sent from Form
$con = mysqli_connect($DB_host,$DB_User,$DB_Pswd,$DB_Nama);
$username=mysqli_real_escape_string($con, $_POST['username']); 
$ps=md5(mysqli_real_escape_string($con, $_POST['password'])); 
$acv = "NamoraEdwardRudolf";
$dacv= md5($acv . md5($ps) . $acv );
$token='1';
$result=mysqli_query($con, "SELECT * FROM user WHERE username='$username' and password='$dacv'") or die(mysqli_error());
$count=mysqli_num_rows($result);

$row=mysqli_fetch_array($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count>0)
{
$_SESSION['namauser']=$row['username'];
$_SESSION['passuser']=$row['password'];
$_SESSION['iduser']=$row['id'];
echo "Congratulation, you have successfuly Logon into system";
header('location:mainmenu.html'); 
}else{
    echo "Your username and/or password is not correct";
    header('location:sign.php');
    return;
}

}
?>
