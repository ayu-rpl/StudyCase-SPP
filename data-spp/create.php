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
            <h1>Tambah Data SPP<h1>
        </div>

        <div class="section-body">
            <div class="row offset-4">
                <div class="col-6">

                    <div class="card">
                            <div class="card-header">
                                <h4>Input Data SPP</h4>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="action-create.php" class="needs-validation" novalidate="">
                                    <div class="form-group">
                                        <label for="IdSPP">ID SPP</label>
                                        <input id="IdSPP" type="text" class="form-control" name="IdSPP" tabindex="1" required autofocus>
                                        <div class="invalid-feedback">
                                            Please fill in your email
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="Nominal" class="control-label">Nominal</label>
                                        </div>
                                        <input id="Nominal" type="text" class="form-control" name="Nominal" tabindex="2" required>
                                        <div class="invalid-feedback">
                                            please fill in your password
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="Tahun" class="control-label">Tahun</label>
                                        </div>
                                        <input id="Tahun" type="text" class="form-control" name="Tahun" tabindex="2" required>
                                        <div class="invalid-feedback">
                                            please fill in your password
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="Keterangan" class="control-label">Keterangan</label>
                                        </div>
                                        <input id="Keterangan" type="text" class="form-control" name="Keterangan" tabindex="2" required>
                                        <div class="invalid-feedback">
                                            please fill in your password
                                        </div>
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