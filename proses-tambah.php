<?php
include("koneksi.php");
if(isset($_POST['tambah'])){;
    $no_seri=$_POST['no_seri'];
    $merek=$_POST['merek'];
    $jumlah=$_POST['jumlah'];

    $sql="INSERT INTO tb_pendataan(no_seri,merek,jumlah) VALUES('$no_seri','$merek',$jumlah)";
    $query=mysqli_query($koneksi,$sql);
}
else{
    ("akses dilarang");
}
?>