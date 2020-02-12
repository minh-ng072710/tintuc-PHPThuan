<?php 
$Ten_KhongDau = $_GET['Ten_KhongDau'];
$idLT = $t->LayidLT($Ten_KhongDau);

$pageSize = PAGEGINATION_PERPAGE ; 
if (isset($_GET['pageNum'])) $pageNum = $_GET['pageNum'];
settype($pageNum, "int"); 
if ($pageNum<=0) $pageNum=1;
$totalRows=0;
$offset = PAGEGINATION_OFFSET;
$kq=$t->TinTrongLoai($idLT,$pageNum,$pageSize,$totalRows);

?>
<div class="page_header clearfix ">
					<div class="page_header_left">
						<h1 class="page_title"><?=$t->LayTenLoaiTin($idLT);?> </h1>
					</div>
					<div class="page_header_right">
						<ul class="bread_crumb">
							<li>
								<a title="Home" href="home.html">
									Trang chủ  
								</a>
							</li>
							<li class="separator icon_small_arrow right_gray">
								&nbsp;
							</li>
							<li>
								<?=$t->LayTenLoaiTin($idLT);?>
							</li>
						</ul>
					</div>
				</div>
<ul class="blog big">
	
						<?php while ($row=$kq->fetch_assoc()) {?>
						
							<li class="post tintrongloai">
										<a href="bv/<?=$row['TieuDe_KhongDau'];?>.html" title="<?=$row['TieuDe']?> ">
											<img src='<?=$row['urlHinh']?>' alt='img' onerror="this.src='/news/defaultImg.jpg'">
										</a>
										<div class="post_content">
											<h2 class="with_number">
												<a href="post.html" title="<?=$row['TieuDe']?> "><?=$row['TieuDe']?> </a>
												<a class="comments_number" href="post.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>
											</h2>
											<ul class="post_details">
												
												<li class="date">
												<?=date( 'd/m/Y', strtotime($row['Ngay']) )?> 
												</li>
											</ul>
											<p><?=$row['TomTat']?></p>
											
										</div>
									</li>
									
									<?php } ?>
								</ul>
<style>
.blog.big .tintrongloai .tieude { font-size:20px}
.blog.big .tintrongloai img {height:200px;width:250px;border:1px solid #aaa}
.blog.big .tintrongloai .post_details { margin-top:0px; float:right}
.blog.big .tintrongloai .post_content p { margin-top:0px; padding:0; text-align:justify; font-size:17px; height:155px; overflow:hidden}
.blog.big .post_content {width:420px; margin-left:10px}
.blog.big .post_details li.date {padding: 8px 10px; background:#ddd;}
h1.page_title {font-size:28px; text-transform: uppercase; margin:0}
.page_header_right {float:none; width:100%;}


</style>
<div class="page_margin_top_section">&nbsp;</div>
<?php if ($totalRows>$pageSize) {?>
<?php
	$totalPages = ceil($totalRows/$pageSize);
	$from = $pageNum - $offset;	
	$to = $pageNum + $offset;
	if ($from <=0) { $from = 1;   $to = $offset*2; }
	if ($to > $totalPages) $to = $totalPages;
	$pagePrev= $pageNum - 1;
	$pageNext= $pageNum + 1;
?>

<ul class="pagination clearfix page_margin_top_section">
								<?php //Hiện link tới trang đầu, trang trước?>
								<?php if ($pageNum>1) {?>
								<li>
								   <a href="cat/<?=$Ten_KhongDau?>/<?=$j?>/">Đầu</a>
								</li>
								<li>
								   <a href="cat/<?=$Ten_KhongDau?>/<?=$pagePrev?>">Trước</a>
								</li>
								<?php } //if ($pageNum>1?>
	
						<?php for($j = $from; $j <= $to; $j++) {?>
							   <?php if ($j!=$pageNum) {?> 
								<li>
								<a href="cat/<?=$Ten_KhongDau?>/<?=$j?>/"><?=$j?></a>
								</li>
							   <?php } else {?>
								<li  class="selected">
								<a href="cat/<?=$Ten_KhongDau?>/<?=$j?>/"><?=$j?></a>
								</li>
							   <?php } //if ($j?>   
							<?php } //for?>


								
								</li>
								<?php if ($pageNum<$totalPages) {?>
								<li>
								<a href= "cat/<?=$Ten_KhongDau?>/<?=$pageNext?>/">Sau</a>
								</li>
								<li>
								<a href="cat/<?=$Ten_KhongDau?>/<?=$totalPages?>/">Cuối</a>
								</li>
								<?php } //if ($pageNum<$totalPages) ?>

	
							</ul>
<?php } ?>