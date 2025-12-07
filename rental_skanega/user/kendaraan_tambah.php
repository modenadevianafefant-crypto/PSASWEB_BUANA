<?php include 'header.php'; ?>

<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Tambah Kendaraan</h3>
        </div>
        <div class="panel-body">

            <form method="post" action="kendaraan_aksi.php">

                <div class="form-group">
                    <label>Nomor Kendaraan</label>
                    <input type="text" name="nomor" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Nama Kendaraan</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Tipe Kendaraan</label>
                    <input type="text" name="tipe" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Harga Per Hari</label>
                    <input type="number" name="harga" class="form-control" required>
                </div>

                <input type="submit" value="Simpan" class="btn btn-primary">

            </form>

        </div>
    </div>
</div>
