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
            <h1>Update Data Kelas<h1>
        </div>

        <div class="section-body">
            <div class="row offset-4">
                <div class="col-6">

                    <div class="card">
                        <div class="card-header">
                            <h4>Update Data Kelas</h4>
                        </div>

                        <?php
                        include '../koneksi.php';
                        $IdKelas = $_GET['id_kelas'];
                        $query_mysql = mysqli_query($koneksi, "SELECT * from kelas WHERE id_kelas=$IdKelas");
                        $data = mysqli_fetch_array($query_mysql); { ?>

                            <div class="card-body">
                                <form method="POST" action="action-update.php" class="needs-validation" novalidate="">
                                    <div class="form-group">
                                        <label for="IdKelas">ID Kelas</label>
                                        <input id="IdKelas" type="text" class="form-control" name="IdKelas" value="<?php echo $data['id_kelas']; ?>" readonly>
                                        <div class="invalid-feedback">
                                            Please fill in your email
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="NamaKelas" class="control-label">Nama Kelas</label>
                                        </div>
                                        <input id="NamaKelas" type="text" class="form-control" name="NamaKelas" value="<?php echo $data['nama_kelas']; ?>">
                                        <div class="invalid-feedback">
                                            please fill in your password
                                        </div>
                                    </div>

                                    <div class="form-group">

                                        <select class="form-control" aria-label="select" id="KompetensiKeahlian" name="KompetensiKeahlian" value="<?php echo $data['kompetensi_keahlian']; ?>">
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

<?php require('../template/footer.php'); } ?>