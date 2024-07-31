<?php
if(isset($_POST['Submit'])){
    $IdKelas = $_POST['IdKelas'];
    $NamaKelas = $_POST['NamaKelas'];
    $KompetensiKeahlian = $_POST['KompetensiKeahlian'];

    include "../koneksi.php";
    $query_mysql = mysqli_query($koneksi, "INSERT INTO kelas(id_kelas,nama_kelas,kompetensi_keahlian) VALUES('$IdKelas','$NamaKelas','$KompetensiKeahlian')");

    if($query_mysql){
        echo "<script>alert('Data Kelas berhasil ditambahkan'); window.location.href='read.php'</script>";
    } else {
        echo "<script>alert('Data Kelas berhasil ditambahkan'); window.location.href='read.php'</script>";
    }
}
?>