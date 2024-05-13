<?php
include('../../config/config.php');

$tenband = $_POST['tendanhmucband'];
$thutu = $_POST['thutu'];

if(isset($_POST['themdanhmucband'])){
	//them
	$sql_them = "INSERT INTO tbl_band(tenband,thutu) VALUE('".$tenband."','".$thutu."')";
	mysqli_query($mysqli,$sql_them);
	header('Location:../../index.php?action=quanlydanhmucthuonghieu&query=them');

}
elseif(isset($_POST['suadanhmucband'])){
	//sua
	$sql_update = "UPDATE tbl_band SET tenband='".$tenband."',thutu='".$thutu."' WHERE id_band='$_GET[idband]'";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=quanlydanhmucthuonghieu&query=them');
}else{

	$id=$_GET['idband'];
	$sql_xoa = "DELETE FROM tbl_band WHERE id_band='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlydanhmucthuonghieu&query=them');
}

?>