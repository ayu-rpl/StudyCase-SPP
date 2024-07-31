<?php
if(isset($_POST['Submit'])){
    $IdPetugas = $_POST['IdPetugas'];
    $Username = $_POST['Username'];
    $Password = md5($_POST['Password']);
    $NamaKelas = $_POST['NamaKelas'];
    $Level = $_POST['Level'];

    include "../koneksi.php";
    $query_mysql = mysqli_query($koneksi, "INSERT INTO petugas(id_petugas,username,password,nama_kelas,level) VALUES('$IdPetugas','$Username','$Password','$NamaPetugas','$Level')");

    if($query_mysql){
        echo "<script>alert('Data Petugas berhasil ditambahkan'); window.location.href='read.php'</script>";
    } else {
        echo "<script>alert('Data Petugas berhasil ditambahkan'); window.location.href='read.php'</script>";
    }
}
?>