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
            <h1>Tambah Data Petugas<h1>
        </div>

        <div class="section-body">
            <div class="row offset-4">
                <div class="col-6">

                    <div class="card">
                        <div class="card-header">
                            <h4>Input Data Petugas</h4>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="action-create.php" class="needs-validation" novalidate="">
                                <div class="form-group">
                                    <label for="IdPetugas">ID Petugas</label>
                                    <input id="IdPetugas" type="text" class="form-control" name="IdPetugas" tabindex="1" required autofocus>
                                    <div class="invalid-feedback">
                                        Please fill in your email
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="Username" class="control-label">Username</label>
                                    </div>
                                    <input id="Username" type="text" class="form-control" name="Username" tabindex="2" required>
                                    <div class="invalid-feedback">
                                        please fill in your password
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="Password" class="control-label">Password</label>
                                    </div>
                                    <input id="Password" type="password" class="form-control" name="Password" tabindex="2" required>
                                    <div class="invalid-feedback">
                                        please fill in your password
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="NamaPetugas" class="control-label">Nama Petugas</label>
                                    </div>
                                    <input id="NamaPetugas" type="text" class="form-control" name="NamaPetugas" tabindex="2" required>
                                    <div class="invalid-feedback">
                                        please fill in your password
                                    </div>
                                </div>

                                <div class="form-group">
                                    <select class="form-control" aria-label="select" id="Level" name="Level">
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

<?php require('../template/footer.php'); ?>