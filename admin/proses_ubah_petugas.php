<?php
if($_POST){
    $id_user = $_POST['id_user'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];
    
    if(empty($nama)){
        echo "<script>alert('nama Petugas tidak boleh kosong');location.href='ubah_user.php';</script>";
 
    } else {
        include "../koneksi.php";
        if(empty($username)){
            $update=mysqli_query($conn,"update user set nama='".$nama."',username='".$username."', password='".$password."', level='".$level."' where id_user = '".$id_user."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update petugas');location.href='tampil_petugas.php';</script>";
            } else {
                echo "<script>alert('Gagal update petugas');location.href='ubah_petugas.php?id_user=".$id_user."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update user set nama='".$nama."',username='".$username."', password='".$password."', level='".$level."' where id_user = '".$id_user."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update Petugas');location.href='tampil_petugas.php';</script>";
            } else {
                echo "<script>alert('Gagal update Petugas');location.href='ubah_petugas.php?id_user".$id_user."';</script>";
            }
        }
	}
}