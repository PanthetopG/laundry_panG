<?php

    include "../koneksi.php";
    $id_transaksi = $_GET['id_transaksi'];
    $update=mysqli_query($conn,"update transaksi set status='Diambil', dibayar='dibayar' where id_transaksi='".$id_transaksi."'") or die (mysqli_error($conn));
    header('location:tampil_transaksi.php');

?>