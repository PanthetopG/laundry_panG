<?php
if ($_GET['id']){
    include "../koneksi.php";
    $hapus = mysqli_query($conn, "delete from member where id = '".$_GET['id']."'");

    if ($hapus){
        echo"<script>alert('Sukses menghapus data Member');location.href='tampil_member.php'</script>";
    } else {
        echo"<script>alert('Gagal menghapus data Member');location.href='tampil_member.php'</script>";
    }
}
?>
<?php
if ($_GET['id_user']){
    include "../koneksi.php";
    $hapus = mysqli_query($conn, "delete from user where id_user = '".$_GET['id_user']."'");

    if ($hapus){
        echo"<script>alert('Sukses menghapus data petugas');location.href='tampil_petugas.php'</script>";
    } else {
        echo"<script>alert('Gagal menghapus data petugas');location.href='tampil_petugas.php'</script>";
    }
}
?>
<?php
if ($_GET['id_paket']){
    include "../koneksi.php";
    $hapus = mysqli_query($conn, "delete from paket where id_paket = '".$_GET['id_paket']."'");

    if ($hapus){
        echo"<script>alert('Sukses menghapus data Paket');location.href='tampil_Paket.php'</script>";
    } else {
        echo"<script>alert('Gagal menghapus data Paket');location.href='tampil_Paket.php'</script>";
    }
}
?>