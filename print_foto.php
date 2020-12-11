<?php 
include('../koneksi.php');
	session_start();
if(!isset($_SESSION['userr'])){
	header('location:login.php');
}else{
	$id=$_GET['id'];
	$query=$MyCon->query("SELECT * FROM surat_masuk WHERE no_agenda_masuk='$id'");
	$row=$query->fetch_object();

}	echo "<img src='gambar_suratkeluar/$row->cetak_srtmsk'>";
	
?>

	<script type="text/javascript">
 		window.print();
 	</script>