<?php $kq = $t->TinNgauNhien(3, $lang);?>
<ul class="blog small vertical_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
									<?php while($row = $kq->fetch_assoc() ) { ?>
                                    <li class="post tinngaunhien">
										<a href="bv/<?=$row['TieuDe_KhongDau'];?>.html" title="<?=$row['TieuDe']?>">
											<span class="icon small gallery"></span>
											<img src='<?=$row['urlHinh']?>' onerror="this.src='/news/defaultImg.jpg'" alt='img'>
										</a>
										<div class="post_content">
											<h5>
												<a href="bv/<?=$row['TieuDe_KhongDau'];?>.html" title="<?=$row['TieuDe']?>"><?=$row['TieuDe']?></a>
											</h5>
											<ul class="post_details simple">
												<li class="category"><a href="category_health.html" title="<?=$row['TenLT']?> "><?=$row['TenLT']?> </a></li>
												<li class="date">
													<?=date( 'd/m/Y', strtotime($row['Ngay']) )?> 
												</li>
											</ul>
										</div>
									</li>
									
									<?php } ?>
									
								</ul>
                                <style>
								.tinngaunhien {margin-bottom:20px;}
.tinngaunhien img {   width:90px!important; height:80px!important; border:1px solid #aaa;
}
</style>