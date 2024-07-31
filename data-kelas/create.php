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
            <h1>Tambah Data Kelas<h1>
        </div>

        <div class="section-body">
            <div class="row offset-4">
                <div class="col-6">

                    <div class="card">
                        <div class="card-header">
                            <h4>Input Data Kelas</h4>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="action-create.php" class="needs-validation" novalidate="">
                                <div class="form-group">
                                    <label for="IdKelas">ID Kelas</label>
                                    <input id="IdKelas" type="text" class="form-control" name="IdKelas" tabindex="1" required autofocus>
                                    <div class="invalid-feedback">
                                        Please fill in your email
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="NamaKelas" class="control-label">Nama Kelas</label>
                                    </div>
                                    <input id="NamaKelas" type="text" class="form-control" name="passNamaKelasword" tabindex="2" required>
                                    <div class="invalid-feedback">
                                        please fill in your password
                                    </div>
                                </div>

                                <div class="form-group">
                                    <select class="form-control" aria-label="select" id="KompetensiKeahlian" name="KompetensiKeahlian">
                                        <option selected>Pilih Kompetensi Keahlian</option>
                                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                        <option value="Desain Pemodelan dan Informasi Bangunan">Desain Pemodelan dan Informasi Bangunan</option>
                                        <option value="Teknik Audio Video">Teknik Audio Video</option>
                                        <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
                                        <option value="Teknik dan Bisnis Sepeda Motor">Teknik dan Bisnis Sepeda Motor</option>
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