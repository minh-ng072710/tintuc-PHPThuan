<?php
session_start();
require_once "../Class/quanTriTin.php";
$qt = new quantritin;
$qt-> checkLogin();
$idTL = $_GET['idTL']; settype($idTL,"int");
if($qt->DemTheLoai($idTL)>0){
	die("Thể loại $idTL có chứa tin nên bạn không thể xóa");
	
}
$kq = $qt->TheLoai_Xoa($idTL);
header("location:index.php?p=theloai_ds");
?>
