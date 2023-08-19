<?php
if($_POST){
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $tlp=$_POST['tlp'];

    if(empty($nama)){
        echo "<script>alert('nama siswa tidak boleh kosong');location.href='tambah_member.php';</script>";
    } else {
        include "../koneksi.php";
        $insert=mysqli_query($conn,"insert into member (nama, jenis_kelamin, alamat,tlp) value ('".$nama."','".$jenis_kelamin."','".$alamat."','".$tlp."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan Member');location.href='tambah_member.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan Member');location.href='tambah_member.php';</script>";
        }
    }
}
?>