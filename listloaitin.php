<?php $kq = $t->ListLoaiTin($lang);?>
<h4 class="box_header">{Loai_Tin}</h4>
							<ul class="taxonomies columns clearfix page_margin_top">
								<?php while($row = $kq->fetch_assoc() ) { ?>
                                <li>
									<a href="category_world.html" title="<?=$row['TenLT']?> "><?=$row['TenLT']?> </a>
								</li>
				<?php } ?>
							</ul>