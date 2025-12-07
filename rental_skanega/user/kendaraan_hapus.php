<?php
    include '../koneksi.php';
    $nomor = $_GET['nomor'];
    mysqli_query($koneksi, "DELETE FROM kendaraan WHERE kendaraan_nomor='$nomor'");
   
    echo "<script>alert('Data akan dihapus?');
        window.location.href='Kendaraan.php'</script>";
?>