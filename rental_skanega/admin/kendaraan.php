<?php 
include 'header.php';
include '../koneksi.php';
?>

<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Data Kendaraan</h3>
        </div>
        <div class="panel-body">

            <a href="kendaraan_tambah.php" class="btn btn-sm btn-primary">Tambah Kendaraan</a>
            <br><br>

            <table class="table table-bordered table-striped">
                <tr>
                    <th>No</th>
                    <th>Nomor Kendaraan</th>
                    <th>Nama Kendaraan</th>
                    <th>Tipe</th>
                    <th>Harga Per Hari</th>
                    <th>Opsi</th>
                </tr>

                <?php 
                $no = 1;
                $data = mysqli_query($koneksi,"SELECT * FROM kendaraan");
                while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['kendaraan_nomor']; ?></td>
                    <td><?php echo $d['kendaraan_nama']; ?></td>
                    <td><?php echo $d['kendaraan_tipe']; ?></td>
                    <td><?php echo number_format($d['kendaraan_harga_perhari']); ?></td>
                    <td>
                        <a href="kendaraan_edit.php?nomor=<?php echo $d['kendaraan_nomor']; ?>" class="btn btn-sm btn-info Edit">Edit</a>
                        <a href="kendaraan_hapus.php?nomor=<?php echo $d['kendaraan_nomor']; ?>" class="btn btn-sm btn-danger ">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </table>

        </div>
    </div>
</div>
