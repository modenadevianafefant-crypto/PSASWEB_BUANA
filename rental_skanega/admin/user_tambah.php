<?php 
    include 'header.php';
?>

<div class="container">
    <br><br><br>
    <div class="col-md-5 col-md-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h4>Tambah User Baru</h4>
            </div> 
            <div class="panel-body">
                <form method="POST" action="user_aksi.php">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Masukkan Username">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="password" class="form-control" placeholder="Masukkan Password">
                    </div>
                    <div class="form-group">
                        <label>Nama User</label>
                        <input type="text" name="user_nama" class="form-control" placeholder="Masukkan Nama User">
                    </div>
                    <div class="form-group">
                        <label>Alamat User</label>
                        <input type="text" name="user_alamat" class="form-control" placeholder="Masukkan Alamat User">
                    </div>
                    <div class="form-group">
                        <label>Status User</label>
                        <input type ="form-control" name="user_status" class="form-control" placeholder="Masukkan Status User">
                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </form>
            </div>
        </div>
    </div>
</div>