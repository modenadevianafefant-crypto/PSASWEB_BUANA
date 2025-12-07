<?php 
include 'header.php';
include '../koneksi.php';

$nomor = $_GET['nomor'];
$data = mysqli_query($koneksi, "SELECT * FROM kendaraan WHERE kendaraan_nomor='$nomor'");
$d = mysqli_fetch_assoc($data);
?>

<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Edit Kendaraan</h3>
        </div>
        <div class="panel-body">

            <form method="post" action="kendaraan_update.php">

                <input type="hidden" name="nomor_lama" value="<?php echo $d['kendaraan_nomor']; ?>">

                <div class="form-group">
                    <label>Nomor Kendaraan</label>
                    <input type="text" name="nomor" class="form-control" value="<?php echo $d['kendaraan_nomor']; ?>" required>
                </div>

                <div class="form-group">
                    <label>Nama Kendaraan</label>
                    <input type="text" name="nama" class="form-control" value="<?php echo $d['kendaraan_nama']; ?>" required>
                </div>

                <div class="form-group">
                    <label>Tipe Kendaraan</label>
                    <input type="text" name="tipe" class="form-control" value="<?php echo $d['kendaraan_tipe']; ?>" required>
                </div>

                <div class="form-group">
                    <label>Harga Per Hari</label>
                    <input type="number" name="harga" class="form-control" value="<?php echo $d['kendaraan_harga_perhari']; ?>" required>
                </div>

                <input type="submit" value="Update" class="btn btn-primary">

            </form>

        </div>
    </div>
</div>
