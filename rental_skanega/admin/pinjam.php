<?php
include 'header.php';
include '../koneksi.php';
?>

<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Data Pinjam</h4>
        </div>
        <div class="panel-body">

            <a href="pinjam_tambah.php" class="btn btn-primary btn-sm">Tambah Pinjam Baru</a>
            <br><br>

            <table class="table table-bordered table-striped">
                <tr>
                    <th>No</th>
                    <th>Id Pinjam</th>
                    <th>Tanggal Pinjam</th>
                    <th>User</th>
                    <th>Kendaraan</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>
                    <th>Opsi</th>
                </tr>

                <?php
                    $data = mysqli_query($koneksi,"select * from user, pinjam where pinjam.user_id=user.user_id order by pinjam_id desc limit 10");
                    $no = 1;
                    while ($d=mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['pinjam_id']; ?></td>
                        <td><?php echo $d['tgl_pinjam']; ?></td>
                        <td><?php echo $d['user_id']; ?></td>
                        <td><?php echo $d['kendaraan_nomor']; ?></td>
                        <td><?php echo $d['tgl_kembali']; ?></td>
                        <td>
                        <?php
                        if ($d['pinjam_status'] == 1) {
                            echo "<div class='label label-warning'>READY</div>";
                        } elseif ($d['pinjam_status'] == 2) {
                            echo "<div class='label label-success'>DIPINJAM</div>";
                        }
                        ?>
                        </td>
                        <td>
                            <a href="pinjam_edit.php?id=<?php echo $d['pinjam_id']; ?>" 
                               class="btn btn-info btn-sm">Edit</a>

                            <a href="pinjam_hapus.php?id=<?php echo $d['pinjam_id']; ?>" 
                               class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>

            </table>
        </div>
    </div>
</div>
