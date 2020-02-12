<?php
	require_once "../Class/quanTriTin.php";
	$qt = new quantritin();
	$idTL = $_GET['idTL'];  
	$loaitin = $qt->LoaiTinTrongTheLoai($idTL);
?>
<?php while ($row_loaitin = $loaitin->fetch_assoc()) { ?>
	<option value="<?php echo $row_loaitin['idLT'];?>">
	<?php echo $row_loaitin['Ten'];?> 
</option>
<?php } ?>
