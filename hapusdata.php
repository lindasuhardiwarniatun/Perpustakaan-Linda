<?php

require('koneksi.php');

$idMhi = $_GET["idMhi"];

$hapus = "DELETE FROM tbl_lindawardani WHERE idMhi = $idMhi";

$hapusdata = mysqli_query($koneksi, $hapus);
$aksihapusdata = mysqli_affected_rows($koneksi);

if($aksihapusdata > 0){
    echo "<script>
    alert('Data Berhasil dihapus');
    document.location.href = 'tampildata.php';
    </script>";

}else{
    echo "<script>
    alert('Data Gagal dihapus');
    document.location.href = 'tampildata.php';
    </script>";
}

?>