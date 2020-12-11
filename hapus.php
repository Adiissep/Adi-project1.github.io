<?php
include ('koneksi.php');
if (isset($_GET['del'])) {
	$del = $_GET['del'];
	switch ($del) {
		//Untuk Bagian Admin
		case 'petugas':
		$kode=$_GET['btn_hapus'];
		$hapus=$MyCon->query("DELETE FROM petugas WHERE id_petugas='$kode'");
        if(!$hapus)
        {
           echo$MyCon->error;
        }
        else {
            echo "<script type='text/javascript'> alert ('Data Berhasil Dihapus');"
                 ."window.location='../arsip/admin/d_petugas.php?page=6&&dp=default';</script>";
        } 
			break;
		case 'divisi';
		$kode=$_GET['btn_hapus1'];
		$hapus=$MyCon->query("DELETE FROM divisi WHERE id_div='$kode'");
       	if(!$hapus)
        {
           echo$MyCon->error;
        }
       	else {
            echo "<script type='text/javascript'> alert ('Data Berhasil Dihapus');"
                 ."window.location='../arsip/admin/divisi.php?page=7&&dv=default';</script>";
        }
        break;
		case 'profil':
		$kode=$_GET['btn_hapus2'];
		$hapus=$MyCon->query("DELETE FROM petugas WHERE id_petugas='$kode'");
		if(!$hapus){
		echo$MyCon->error;
		}
		else {
		echo "<script type='text/javascript'> alert ('Data Berhasil Dihapus');"
                 ."window.location='../admin/profil.php';</script>";
		}
		break;
		case 'jeniss':
			$kode=$_GET['btn_hapus3'];
		$hapus=$MyCon->query("DELETE FROM jenis_surat WHERE id_jenis='$kode'");
       	if(!$hapus) {
           echo$MyCon->error;
        }
       	else {
            echo "<script type='text/javascript'> alert ('Data Berhasil Dihapus');"
                 ."window.location='../arsip/admin/s_jeniss.php?page=4&&js=default';</script>";
        } 
		break;
		case 'sm':
			$kode=$_GET['btn_hapus4'];
		$hapus=$MyCon->query("DELETE FROM surat_masuk WHERE no_agenda_masuk='$kode'");
       	if(!$hapus) {
           echo$MyCon->error;
        }
       	else {
            echo "<script type='text/javascript'> alert ('Data Berhasil Dihapus');"
                 ."window.location='../arsip/admin/s_masuk.php?page=2&&sm=default';</script>";
        } 
		break;
		case 'sk':
			$kode=$_GET['btn_hapus5'];
		$hapus=$MyCon->query("DELETE FROM surat_keluar WHERE no_agenda_keluar='$kode'");
       	if(!$hapus) {
           echo$MyCon->error;
        }
       	else {
            echo "<script type='text/javascript'> alert ('Data Berhasil Dihapus');"
                 ."window.location='../arsip/admin/s_keluar.php?page=3&&sk=default';</script>";
        } 
		break;		
		case 'sm1':
			$kode=$_GET['btn_hapus7'];
		$hapus=$MyCon->query("DELETE FROM surat_masuk WHERE no_agenda_masuk='$kode'");
       	if(!$hapus) {
           echo$MyCon->error;
        }
       	else {
            echo "<script type='text/javascript'> alert ('Data Berhasil Dihapus');"
                 ."window.location='../arsip/petugas/s_masuk.php?page=2';</script>";
        } 
		break;
		case 'sk1':
			$kode=$_GET['btn_hapus8'];
		$hapus=$MyCon->query("DELETE FROM surat_keluar WHERE no_agenda_keluar='$kode'");
       	if(!$hapus) {
           echo$MyCon->error;
        }
       	else {
            echo "<script type='text/javascript'> alert ('Data Berhasil Dihapus');"
                 ."window.location='../arsip/petugas/s_keluar.php?page=3';</script>";
        } 
		break;
		case 'profil':
		//Untuk Bagian Petugas
			$kode=$_GET['btn_hapus10'];
		$hapus=$MyCon->query("DELETE FROM petugas WHERE id_petugas='$kode'");
		if(!$hapus){
		echo$MyCon->error;
		}
		else {
		echo "<script type='text/javascript'> alert ('Data Berhasil Dihapus');"
                 ."window.location='../admin/profil.php';</script>";
		}
		break;

		default:
			# code...
		break;
	}
}


        
?> 

