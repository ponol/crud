<?php
include("config.php");
if (isset($_POST['simpan'])) :

    $nim = $_POST['nim'];
    $nama_mhs = $_POST['nama_mhs'];
    $angkatan = $_POST['angkatan'];
    $kode_prodi = $_POST['kode_prodi'];

    $sql = "INSERT INTO mhs (nim, nama_mhs, angkatan, kode_prodi) VALUES ('
$nim', '$nama_mhs', '$angkatan', '$kode_prodi')";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        header('location: admin.php?hal=dataMhs');
    } else {
?>
        <h1 align="center">Data gagal diinput</h1>
        <meta http=equiv="refresh" content="1; url=admin.php?hal=tambahMhs" />
<?php
    }
else :
    die("akses halaman ini melalui Admin");
endif;