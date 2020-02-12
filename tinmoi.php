<ul class="blog column column_1_2">
<?php while($row = $kq->fetch_assoc() ) { ?>
									<li class="post tinmoinhat">
										<a href="bv/<?=$row['TieuDe_KhongDau'];?>.html" title=<?=$row['TieuDe']?>>
											<img src=<?=$row['urlHinh']?> onerror="this.src='/news/defaultImg.jpg'" alt='img'>
										</a>
										<h2 class="with_number">
											<a href="bv/<?=$row['TieuDe_KhongDau'];?>.html" title=<?=$row['TieuDe']?>><?=$row['TieuDe']?></a>
											<a class="comments_number" href="post_small_image.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>
										</h2>
										<ul class="post_details">
											<li class="category"><a href="category_world.html" title=<?=$row['TenLT']?>><?=$row['TenLT']?></a></li>
											<li class="date">
												<?=date( 'd/m/Y', strtotime($row['Ngay']) )?>
											</li>
										</ul>
										<p><?=$row['TomTat']?></p>
										
									</li>
									<?php } ?>
								</ul>
                                <style>
								.tinmoinhat .with_number a {
 height: 48px; overflow: hidden; 
 font-size: 20px; line-height: 24px; 
}
.tinmoinhat .post_details { 
margin-top:0; text-transform:uppercase; 
}
.tinmoinhat .post_details+p {
    height: 65px; padding:0; 
    font-size:16px;
    overflow: hidden; 
    text-align: justify;
}
.tinmoinhat a.comments_number {
    padding-bottom:0; 
    height: 38px; 
}
.tinmoinhat h2 {margin-top:5px;}
.tinmoinhat a img { 
    height:200px; 
    border: 1px solid #aaa;
}

								</style>
