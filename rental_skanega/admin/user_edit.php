<?php 
    include 'header.php';
?>

<div class="container">
    <br><br><br>
    <div class="col-md-5 col-md-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h4>Edit User</h4>
            </div> 
            <div class="panel-body">

            <?php
            include '../koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi,"select * from user where user_id='$id'");
            while($d=mysqli_fetch_array($data)){
                ?>

                <form method="POST" action="user_update.php">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $d['user_id']; ?>">

                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Masukkan Username.." value="<?php echo $d['username']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="password" class="form-control" placeholder="Masukkan Password.." value="<?php echo $d['password']; ?>">                    
                    </div>
                    <div class="form-group">
                        <label>Nama User</label>
                        <input type="text" name="user_nama" class="form-control" placeholder="Masukkan Nama User.." value="<?php echo $d['user_nama']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Alamat User</label>
                        <input type="text" name="user_alamat" class="form-control" placeholder="Masukkan Alamat User.." value="<?php echo $d['user_alamat']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Status User</label>
                        <input type="text" name="user_status" class="form-control" placeholder="Masukkan Status User.." value="<?php echo $d['user_status']; ?>">
                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </form>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>