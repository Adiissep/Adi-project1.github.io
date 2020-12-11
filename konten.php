<?php
if(isset($_GET['page'])){
	include 'koneksi.php';
    $hal=$_GET['page'];

    if ($hal=="1"){
        include '../admin/dashboard.php';
        echo "Selamat Datang" ;
    }
    //buku
    elseif ($hal=="2") {
    	include '../admin/s_masuk.php';
    }
	elseif ($hal=="3") {
    	include '../admin/s_keluar.php';
    }
    elseif ($hal=="4") {
        include '../admin/s_jeniss.php';
    }
    elseif ($hal=="5") {
        include '../admin/disposisi.php';
    }
    elseif ($hal=="6") {
        include '../admin/d_petugas.php';
    }
    elseif ($hal=="7") {
        include '../admin/divisi.php';
    }
    elseif ($hal=="1") {
        include '../petugas/dashboard.php';
    }
    elseif ($hal=="2") {
        include '../petugas/s_masuk.php';
    }
    elseif ($hal=="3") {
        include '../petugas/s_keluar.php';
    }
    elseif ($hal=="4") {
        include '../petugas/profil.php';
    }
    elseif ($hal=="8") {
        include '../admin/profil.php';
    }
    elseif ($hal=="6_SA") {
        include '../admin/d_petugasSA.php';
    }
    else {
	echo "Kesalahan Page";
    }
                          }
?>