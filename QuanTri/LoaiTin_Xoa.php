<?php
session_start();
require_once "../Class/quanTriTin.php";
$qt = new quantritin;
$qt-> checkLogin ();
$idLT = $_GET['idLT']; settype($idLT,"int");
if($qt->DemLoaiTin($idLT)>0){
	die("Loại tin $idLT có chứa tin nên bạn không thể xóa được");

}
$kq = $qt->LoaiTin_Xoa($idLT);
header("location:index.php?p=loaitin_ds");
?>