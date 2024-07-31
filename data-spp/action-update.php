<?php
if(isset($_POST['Submit'])){
    $IdSPP = $_POST['IdSPP'];
    $Nominal = $_POST['Nominal'];
    $Tahun = $_POST['Tahun'];
    $Keterangan = $_POST['Keterangan'];

    include '../koneksi.php';
    $query_mysql = mysqli_query($koneksi, "UPDATE spp SET nominal='$Nominal',tahun='$Tahun',keterangan='$Keterangan' where id_spp='$IdSPP'");

    if($query_mysql) {
        echo "<script>alert('Data SPP berhasil diupdate'); window.location.href='read.php'</script>";
    } else{
        echo "<script>alert('Data SPP gagal diupdate'); window.location.href='read.php'</script>";
    }
}
?>