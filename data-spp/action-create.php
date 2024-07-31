<?php
if(isset($_POST['Submit'])){
    $IdSPP = $_POST['IdSPP'];
    $Nominal = $_POST['Nominal'];
    $Tahun = $_POST['Tahun'];
    $Keterangan = $_POST['Keterangan'];

    include "../koneksi.php";
    $query_mysql = mysqli_query($koneksi, "INSERT INTO spp(id_spp,nominal,tahun,keterangan) VALUES('$IdSPP','$Nominal','$Tahun','$Keterangan')");

    if($query_mysql){
        echo "<script>alert('Data SPP berhasil ditambahkan'); window.location.href='read.php'</script>";
    } else {
        echo "<script>alert('Data SPP berhasil ditambahkan'); window.location.href='read.php'</script>";
    }
}
?>