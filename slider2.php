
<?php $kq = $t->TinNoiBat(4,6,$lang); ?>
<ul class="blog medium">
<?php while ($row = $kq->fetch_assoc() ) { ?>
									<li class="post">
										<a href="bv/<?=$row['TieuDe_KhongDau'];?>.html" title="<?=$row['TieuDe']?>">
											<span class="icon gallery"></span>
											<img class="hinhtinnoibattt" src=<?= $row['urlHinh']?> onerror="this.src='/news/defaultImg.jpg'" alt='img'>
										</a>
										<h5 class="tieudetinnoibattt"><a href="bv/<?=$row['TieuDe_KhongDau'];?>.html" title="<?=$row['TieuDe']?>"><?=$row['TieuDe']?></a></h5>
										<ul class="post_details simple">
											<li class="category"><a href="category_health.html" title="<?=$row['TenLT']?>"><?=$row['TenLT']?></a></li>
											<li class="date">
												<?=date('d/m/Y',strtotime($row['Ngay']))?>
											</li>
                                           
										</ul>
									</li>
									
		 <?php } ?>
								</ul>
<style>
.hinhtinnoibattt { height: 160px; }
.tieudetinnoibattt {height: 45px;  overflow: hidden;}
</style>