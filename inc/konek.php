<?php
    $DB_Nama="bursakopi";
	$DB_User="rootKopi";
	$DB_Pswd="ipoKasruB";
	$DB_host="localhost";
	
	//fungsi membuat koneksi ke mysql
	function koneksi_buka(){
		mysqli_connect("localhost","rootKopi","ipoKasruB","bursaKopi");
	}
	//fungsi menutup koneksi ke mysql
	function koneksi_tutup(){
		mysqli_close(mysqli_connect("localhost","rootKopi","ipoKasruB","bursaKopi"));
	}
	//fungsi koneksi
	function koneksi(){
		mysqli_connect("localhost","rootKopi","ipoKasruB","bursaKopi");
	}
	
?>
