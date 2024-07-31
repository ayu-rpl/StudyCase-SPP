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
            <h1>Update Data SPP<h1>
        </div>

        <div class="section-body">
            <div class="row offset-4">
                <div class="col-6">

                    <div class="card">
                        <div class="card-header">
                            <h4>Update Data SPP</h4>
                        </div>

                        <?php
                        include '../koneksi.php';
                        $IdSPP = $_GET['id_spp'];
                        $query_mysql = mysqli_query($koneksi, "SELECT * from spp WHERE id_spp=$IdSPP");
                        $data = mysqli_fetch_array($query_mysql); { ?>

                            <div class="card-body">
                                <form method="POST" action="action-create.php" class="needs-validation" novalidate="">
                                    <div class="form-group">
                                        <label for="IdSPP">ID SPP</label>
                                        <input id="IdSPP" type="text" class="form-control" name="IdSPP" value="<?php echo $data['id_spp']; ?>" readonly>
                                        <div class="invalid-feedback">
                                            Please fill in your email
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="Nominal" class="control-label">Nominal</label>
                                        </div>
                                        <input id="Nominal" type="text" class="form-control" name="Nominal" value="<?php echo $data['nominal']; ?>">
                                        <div class="invalid-feedback">
                                            please fill in your password
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="Tahun" class="control-label">Tahun</label>
                                        </div>
                                        <input id="Tahun" type="text" class="form-control" name="Tahun" value="<?php echo $data['tahun']; ?>">
                                        <div class="invalid-feedback">
                                            please fill in your password
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="Keterangan" class="control-label">Keterangan</label>
                                        </div>
                                        <input id="Keterangan" type="text" class="form-control" name="Keterangan" value="<?php echo $data['keterangan']; ?>">
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

<?php require('../template/footer.php'); } ?>