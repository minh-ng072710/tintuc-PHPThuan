<div class="header_top_bar">
					<form class="search" action="" method="get">
					<?php 
                    $tukhoa = (isset($_GET['tukhoa'])==true)? $_GET['tukhoa']:"";	
                    $tukhoa = str_replace( array('"','"') , "", trim(strip_tags($tukhoa)));
                    ?>
                    <input type="hidden" name="p" value="search">
                    <input type="text" name="tukhoa" placeholder="{Tu_Khoa}" value="<?=$tukhoa?>" class="search_input hint">
                    <input type="submit" class="search_submit" value="">
                </form>

					<!--<ul class="social_icons dark clearfix">
					<ul class="social_icons colors clearfix">-->
					<ul class="social_icons clearfix">
						<li>
							<a target="_blank" href="http://facebook.com/QuanticaLabs" class="social_icon facebook" title="facebook">
								&nbsp;
							</a>
						</li>
						<li>
							<a target="_blank" href="https://twitter.com/QuanticaLabs" class="social_icon twitter" title="twitter">
								&nbsp;
							</a>
						</li>
						<li>
							<a href="mailto:contact@pressroom.com" class="social_icon mail" title="mail">
								&nbsp;
							</a>
						</li>
						<li>
							<a href="http://themeforest.net/user/QuanticaLabs/portfolio" class="social_icon envato" title="envato">
								&nbsp;
							</a>
						</li>
						<li>
					<a href="/news/vi/"> <img src="co/vi.png" style="margin:10px;"> </a>
					<a href="/news/en/"> <img src="co/en.png" style="margin:10px;"> </a>
					</li>

					</ul>
					<div class="latest_news_scrolling_list_container">
						<ul>
							<li class="category">{Moi_Nhan}</li>
							<li class="left"><a href="#"></a></li>
							<li class="right"><a href="#"></a></li>
							<li class="posts">
								<ul class="latest_news_scrolling_list">
                                <?php $kq= $t->TinMoiNhan(3,$lang);?>
<?php while ($row = $kq->fetch_assoc() ) {?>

									<li>
										<a href="post.html" title=""><?=$row['TieuDe']?></a>
									</li>
								<?php }?>
								</ul>
							</li>
							<li class="date">
								<abbr title="04 Apr 2014" class="timeago current">04 Apr 2014</abbr>
								<abbr title="04 May 2014" class="timeago">04 May 2014</abbr>
								<abbr title="04 June 2014" class="timeago">04 June 2014</abbr>
							</li>
						</ul>
					</div>
				</div>