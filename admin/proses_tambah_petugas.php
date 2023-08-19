<?php
if($_POST){
	$nama=$_POST['nama'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$level=$_POST['level'];


	if(empty($nama)){
		echo"<script>alert('NAMA TIDAK BOLEH KOSONG !'); location.href='tambah_petugas.php';</script>";
	} else{
		include"../koneksi.php";
		$insert=mysqli_query($conn, "insert into user (nama, username, password, level) value('".$nama."', '".$username."','".$password."','".$level."')" );
		if($insert){
			echo "<script>alert('Sukses menambahkan petugas'); location.href='tampil_petugas.php';</script>";
		} else{
			echo "<script>alert('Gagal menambahkan petugas'); location.href='tambah_petugas.php';</script>";
		}
	}
}

?>