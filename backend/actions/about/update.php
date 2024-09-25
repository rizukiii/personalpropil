<?php 
include "../../app.php";
include "./show.php";

if(isset($_POST['tombol'])){
    $nama = escapeString($_POST['nama']);
    $pekerjaan = escapeString($_POST['pekerjaan']);
    $deskripsi = escapeString($_POST['deskripsi']);
    $fotoSQL ="";

    if($_FILES['foto']['name']){
        $foto = date('y m d h.i.s') . ' - ' . $_FILES['foto']['name'];
        // 2024 9 7 20.14.45
        $file = $_FILES['foto']['tmp_name'];
        $storages = "../../../storages/about";

        if(file_exists($storages . $about->foto)){
            unlink($storages . $about->foto);
        }

        if(move_uploaded_file($file, $storages . $foto)){
            $fotoSQL = ", `foto`='$foto'";
        }

        $query = "UPDATE `tb_about` SET `nama`='$nama',`pekerjaan`='$pekerjaan',`deskripsi`='$deskripsi'$fotoSQL WHERE id=$about->id";

        $result = $connect->query($query);

        if($result){
            echo  "<script>window.location.href='../../pages/about/index.php'</script>";
        }else{
            echo "<script>window.location.href='../../pages/about/edit.php'</script>";
        }

    }
}