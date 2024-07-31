<?php
session_start();
if ($_SESSION['level'] == "") {
    header("location:auth-login-petugas.php?pesan=gagal");
}
?>

<?php require('../template/header.php'); ?>

<?php require('../template/nav.php'); ?>

<?php require('../template/sidebar.php'); ?>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Update Data Petugas<h1>
        </div>

        <div class="section-body">
            <div class="row offset-4">
                <div class="col-6">

                    <div class="card">
                        <div class="card-header">
                            <h4>Update Data Petugas</h4>
                        </div>

                        <?php
                        include '../koneksi.php';
                        $IdPetugas = $_GET['id_petugas'];
                        $query_mysql = mysqli_query($koneksi, "SELECT * from petugas WHERE id_petugas=$IdPetugas");
                        $data = mysqli_fetch_array($query_mysql); { ?>

                            <div class="card-body">
                                <form method="POST" action="action-update.php" class="needs-validation" novalidate="">
                                    <div class="form-group">
                                        <label for="IdPetugas">ID Petugas</label>
                                        <input id="IdPetugas" type="text" class="form-control" name="IdPetugas" value="<?php echo $data['id_petugas']; ?>" readonly>
                                        <div class="invalid-feedback">
                                            Please fill in your email
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="Username" class="control-label">Username</label>
                                        </div>
                                        <input id="Username" type="text" class="form-control" name="Username" value="<?php echo $data['username']; ?>">
                                        <div class="invalid-feedback">
                                            please fill in your password
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="Password" class="control-label">Password</label>
                                        </div>
                                        <input id="Password" type="password" class="form-control" name="Password" value="<?php echo $data['password']; ?>">
                                        <div class="invalid-feedback">
                                            please fill in your password
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="NamaPetugas" class="control-label">Nama Petugas</label>
                                        </div>
                                        <input id="NamaPetugas" type="text" class="form-control" name="NamaPetugas" value="<?php echo $data['nama_petugas']; ?>">
                                        <div class="invalid-feedback">
                                            please fill in your password
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <select class="form-control" aria-label="select" id="Level" name="Level" value="<?php echo $data['level']; ?>">
                                            <option selected>Pilih Level</option>
                                            <option value="admin">Admin</option>
                                            <option value="petugas">Petugas</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" name="Submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Submit
                                        </button>
                                    </div>
                            </div>
                            </form>
                    </div>
                </div>
    </section>
</div>

<?php require('../template/footer.php'); } ?>