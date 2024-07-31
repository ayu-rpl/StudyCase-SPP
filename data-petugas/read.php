<?php
session_start();
if($_SESSION['level']==""){
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
            <h1>DATA PETUGAS<h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <a href="create.php" class="btn btn-success">Tambah Data Petugas</a>
                </div>
                <div class="table-responsif">
                    <table class="table table-bordered table-md">
                        <tr>
                            <th>#</th>
                            <th>ID Petugas</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Nama Petugas</th>
                            <th>Level</th>
                            <th>Action</th>
                        </tr>
                        <?php
                        include '../koneksi.php';
                        $query_mysql = mysqli_query($koneksi, "SELECT * from petugas");
                        $nomor = 1;
                        while($data = mysqli_fetch_array($query_mysql)) { ?>
                        <tr>
                            <td><?php echo $nomor++; ?></td>
                            <td><?php echo $data['id_petugas']; ?></td>
                            <td><?php echo $data['username']; ?></td>
                            <td><?php echo $data['password']; ?></td>
                            <td><?php echo $data['nama_petugas']; ?></td>
                            <td><?php echo $data['level']; ?></td>
                            <td style="width: 20%">
                                <a href="update.php?id_petugas=<?php echo $data['id_petugas']; ?>"
                                    class="btn btn-warning my-1">Update</a>
                                <a href="action-delete.php?id_petugas=<?php echo $data['id_petugas']; ?>"
                                    class="btn btn-danger my-1">Delete</a>
                                <a href="#" class="btn btn-secondary my-1">Detail</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>

                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fas fa-chevron-left"></i></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                            </li>
                        </ul>
                    </nav>


                </div>


            </div>
        </div>
    </section>
</div>

<?php require('../template/footer.php'); ?>