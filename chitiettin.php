<style>
.post.single .noidungtin .content_box {width:100%; margin-left:0; margin-top:20px;}
h1.post_title {font-size:32px; }
.post.single h3.excerpt {font-size:24px; letter-spacing:1px; text-align:justify}
 .tintieptheo a img { height:150px}
.post.single .text {font-size:20px; text-align:justify}
fieldset.column { margin:0; width: 50% }
#comment_form fieldset:nth-child(3) {	text-align:right!important;}
#thongbaoYK {padding: 15px; background:#aaa; text-align:center; line-height:200%; font-size:20px}
</style>
<?php 
$TieuDe_KhongDau = $_GET['TieuDe_KhongDau'];
$idTin = $t->LayidTin($TieuDe_KhongDau);
$row = $t->ChiTietTin($idTin);
$t->CapNhatSolanXemTin($idTin);
?>

<div class="row page_margin_top">
						<div class="column column_2_3">
							<div class="row">
								<div class="post single">
									<h1 class="post_title">
										<?=$row['TieuDe']?>
									</h1>
									<ul class="post_details clearfix">
										<li class="detail category"> <a href="category_health.html" title="<?=$row['Ten']?>"><?=$row['Ten']?></a></li>
										<li class="detail date"><?=date( 'd/m/Y', strtotime($row['Ngay']) )?> </li>
										
										<li class="detail views"><?=$row['SoLanXem']?> lần xem</li>
										
									</ul>
									
									
									<div class="post_content noidungtin  clearfix">
										<div class="content_box">
											<h3 class="excerpt"><?=$row['TomTat']?></h3>
											<div class="text">
												<?=$row['Content']?>
											</div>
										</div>
										
									</div>
								</div>
							</div>
							<div class="row page_margin_top">
								<div class="share_box clearfix">
									<label>Share:</label>
									<ul class="social_icons clearfix">
										<li>
											<a target="_blank" title="" href="http://facebook.com/QuanticaLabs" class="social_icon facebook">
												&nbsp;
											</a>
										</li>
										<li>
											<a target="_blank" title="" href="https://twitter.com/QuanticaLabs" class="social_icon twitter">
												&nbsp;
											</a>
										</li>
										<li>
											<a title="" href="mailto:contact@pressroom.com" class="social_icon mail">
												&nbsp;
											</a>
										</li>
										<li>
											<a title="" href="#" class="social_icon skype">
												&nbsp;
											</a>
										</li>
										<li>
											<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon envato">
												&nbsp;
											</a>
										</li>
										<li>
											<a title="" href="#" class="social_icon instagram">
												&nbsp;
											</a>
										</li>
										<li>
											<a title="" href="#" class="social_icon pinterest">
												&nbsp;
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="row page_margin_top">
								<ul class="taxonomies tags left clearfix">
									<li>
										<a href="#" title="People">PEOPLE</a>
									</li>
									<li>
										<a href="#" title="Sport">SPORT</a>
									</li>
								</ul>
								<ul class="taxonomies categories right clearfix">
									<li>
										<a href="category_health.html" title="HEALTH">HEALTH</a>
									</li>
								</ul>
							</div>
							<div class="row page_margin_top_section">
								<h4 class="box_header">Tin Tiếp Thep</h4>
								<div class="horizontal_carousel_container page_margin_top">
									<ul class="blog horizontal_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
                                    <?php $kq = $t->TinCuCungLoai($idTin, $lang, 8);?>
                                     <?php while ($row = $kq->fetch_assoc()) {?>
                                     <style>
                                    
                                     </style>
										<li class="post tintieptheo">
                                       
											<a href="index.php?p=detail&idTin=<?=$row['idTin'];?>" title="<?=$row['TieuDe']?> ">
												<img src='<?=$row['urlHinh']?> ' alt='img' onerror="this.src='/news/defaultImg.jpg'">
											</a>
											<h5><a href="post.html" title="<?=$row['TieuDe']?> "><?=$row['TieuDe']?> </a></h5>
											<ul class="post_details simple">
												
												<li class="date">
												<?=date( 'd/m/Y', strtotime($row['Ngay']) )?> 
												</li>
											</ul>
										</li>
										<?php } ?>
										
									
									</ul>
								</div>
							</div>
							<div class="row page_margin_top_section">
								<h4 class="box_header">Ý Kiến Bạn Đọc</h4>
							<?php 
						$loi="";
						if (isset($_POST['name']) ==true) { 
							$hoten = $_POST['name'];
							$email = $_POST['email'];
							$noidung = $_POST['message'];
							$idTin = $_POST['idTin']; 
							$kq= $t->LuuYKien($idTin, $hoten, $email, $noidung, $loi);
							if ($loi=="") { 
								//$url= $_SERVER['PHP_SEFT'];
									$url='index.php?p=detail&idTin='.$idTin;		
								$_SESSION['thongbao']="Cảm ơn bạn, ý kiến đã được ghi nhận";
								echo "<script>document.location='{$url}';</script>";
								exit();
							}
						}
					?>
					<div id="thongbaoYK" style="background: #ccc; color:red; text-align:center;line-height:150%; margin-top:10px">
					<?php 
						if ($loi!="") echo "<script> alert('{$loi}')</script>";
						if (isset($_SESSION['thongbao'])==true) {echo $_SESSION['thongbao'] ; 
						unset($_SESSION['thongbao']); }
					?>
					</div>

								<form class="comment_form margin_top_15" id="comment_form" method="post" action="">
									<fieldset class="column column_1_3">
										<input class="text_input" name="name" type="text" value="<?=(isset($_POST['name']))?$_POST['name']:''?>" placeholder="Họ tên của bạn">
									</fieldset>
									<fieldset class="column column_1_3">
										<input class="text_input" name="email" type="text" value="<?=(isset($_POST['email']))?$_POST['email']:''?>" placeholder="Email của bạn">
									</fieldset>
									
									<fieldset>
										<textarea name="message"  placeholder="Ý kiến của bạn"><?=(isset($_POST['message']))?$_POST['message']:''?></textarea>
									</fieldset>
									<fieldset>
										<input type="submit" value="GỬI Ý KIẾN" class="more active">
										<a href="#cancel" id="cancel_comment" title="Cancel reply">Cancel reply</a>
									</fieldset>
                                    <input type="hidden" name="idTin" value="<?=$idTin?>">
								</form>
							</div>
							<div class="row page_margin_top_section">
								<?php $kq= $t->LayCacYKienCua1Tin($idTin); ?>
								<h4 class="box_header"> <?=$kq->num_rows; ?> ý kiến</h4>	
								
								<ul id="comments_list">
									<?php while ($row= $kq->fetch_assoc() ) {?>
									<li class="comment clearfix" id="comment-1">
										<div class="comment_author_avatar">
											&nbsp;
										</div>
										<div class="comment_details">
											<div class="posted_by clearfix">
												<h5><a class="author" href="#" title="<?=$row['HoTen']?>"><?=$row['HoTen']?></a></h5>
												<abbr title="22 July 2014" class="timeago"><?=date( 'd/m/Y H:i:s', strtotime($row['Ngay']) )?> </abbr>
											</div>
											<p>
												<?=$row['NoiDung']?>
											</p>
											
										</div>
									</li>
									<?php } ?>
								</ul>
								<ul class="pagination page_margin_top_section">
									<li class="left">
										<a href="#" title="">&nbsp;</a>
									</li>
									<li class="selected">
										<a href="#" title="">
											1
										</a>
									</li>
									<li>
										<a href="#" title="">
											2
										</a>
									</li>
									<li>
										<a href="#" title="">
											3
										</a>
									</li>
									<li class="right">
										<a href="#" title="">&nbsp;</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="column column_1_3">
							<div class="tabs no_scroll clearfix">
								<ul class="tabs_navigation clearfix">
									<li>
										<a href="#sidebar-most-read" title="Most Read">
											Most Read
										</a>
										<span></span>
									</li>
									<li>
										<a href="#sidebar-most-commented" title="Commented">
											Commented
										</a>
										<span></span>
									</li>
								</ul>
								<div id="sidebar-most-read">
									<ul class="blog rating page_margin_top clearfix">
										<li class="post">
											<a href="post.html" title="Nuclear Fusion Closer to Becoming a Reality">
												<img src='images/samples/510x187/image_12.jpg' alt='img'>
											</a>
											<div class="post_content">
												<span class="number animated_element" data-value="6 257"></span>
												<h5><a href="post.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>
												<ul class="post_details simple">
													<li class="category"><a href="category_health.html" title="HEALTH">HEALTH</a></li>
												</ul>
											</div>
										</li>
										<li class="post">
											<div class="post_content">
												<span class="number animated_element" data-value="5 062"></span>
												<h5><a href="post_soundcloud.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>
												<ul class="post_details simple">
													<li class="category"><a href="category_world.html" title="WORLD">WORLD</a></li>
												</ul>
											</div>
										</li>
										<li class="post">
											<div class="post_content">
												<span class="number animated_element" data-value="4 778"></span>
												<h5><a href="post_quote.html" title="Seeking the Right Chemistry, Drug Makers Hunt for Mergers">Seeking the Right Chemistry, Drug Makers Hunt for Mergers</a></h5>
												<ul class="post_details simple">
													<li class="category"><a href="category_sports.html" title="SPORTS">SPORTS</a></li>
												</ul>
											</div>
										</li>
										<li class="post">
											<div class="post_content">
												<span class="number animated_element" data-value="754"></span>
												<h5><a href="post_small_image.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a></h5>
												<ul class="post_details simple">
													<li class="category"><a href="category_science.html" title="SCIENCE">SCIENCE</a></li>
												</ul>
											</div>
										</li>
										<li class="post">
											<div class="post_content">
												<span class="number animated_element" data-value="52"></span>
												<h5><a href="post.html" title="Syrian Civilians Trapped for Months Continue to be Evacuated">Syrian Civilians Trapped for Months Continue to be Evacuated</a></h5>
												<ul class="post_details simple">
													<li class="category"><a href="category_science.html" title="SCIENCE">SCIENCE</a></li>
												</ul>
											</div>
										</li>
									</ul>
									<a class="more page_margin_top" href="#">SHOW MORE</a>
								</div>
								<div id="sidebar-most-commented">
									<ul class="blog rating page_margin_top clearfix">
										<li class="post">
											<a href="post.html" title="Nuclear Fusion Closer to Becoming a Reality">
												<img src='images/samples/510x187/image_02.jpg' alt='img'>
											</a>
											<div class="post_content">
												<span class="number animated_element" data-value="70"></span>
												<h5><a href="post.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>
												<ul class="post_details simple">
													<li class="category"><a href="category_health.html" title="HEALTH">HEALTH</a></li>
												</ul>
											</div>
										</li>
										<li class="post">
											<div class="post_content">
												<span class="number animated_element" data-value="62"></span>
												<h5><a href="post.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>
												<ul class="post_details simple">
													<li class="category"><a href="category_world.html" title="WORLD">WORLD</a></li>
												</ul>
											</div>
										</li>
										<li class="post">
											<div class="post_content">
												<span class="number animated_element" data-value="30"></span>
												<h5><a href="post.html" title="Seeking the Right Chemistry, Drug Makers Hunt for Mergers">Seeking the Right Chemistry, Drug Makers Hunt for Mergers</a></h5>
												<ul class="post_details simple">
													<li class="category"><a href="category_sports.html" title="SPORTS">SPORTS</a></li>
												</ul>
											</div>
										</li>
										<li class="post">
											<div class="post_content">
												<span class="number animated_element" data-value="25"></span>
												<h5><a href="post_quote_2.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a></h5>
												<ul class="post_details simple">
													<li class="category"><a href="category_science.html" title="SCIENCE">SCIENCE</a></li>
												</ul>
											</div>
										</li>
										<li class="post">
											<div class="post_content">
												<span class="number animated_element" data-value="4"></span>
												<h5><a href="post.html" title="Syrian Civilians Trapped for Months Continue to be Evacuated">Syrian Civilians Trapped for Months Continue to be Evacuated</a></h5>
												<ul class="post_details simple">
													<li class="category"><a href="category_science.html" title="SCIENCE">SCIENCE</a></li>
												</ul>
											</div>
										</li>
									</ul>
									<a class="more page_margin_top" href="#">SHOW MORE</a>
								</div>
							</div>
							<h4 class="box_header page_margin_top_section">Latest Posts</h4>
							<div class="vertical_carousel_container clearfix">
								<ul class="blog small vertical_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
									<li class="post">
										<a href="post_gallery.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">
											<span class="icon small gallery"></span>
											<img src='images/samples/100x100/image_06.jpg' alt='img'>
										</a>
										<div class="post_content">
											<h5>
												<a href="post_gallery.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>
											</h5>
											<ul class="post_details simple">
												<li class="category"><a href="category_health.html" title="HEALTH">HEALTH</a></li>
												<li class="date">
													10:11 PM, Feb 02
												</li>
											</ul>
										</div>
									</li>
									<li class="post">
										<a href="post.html" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">
											<img src='images/samples/100x100/image_12.jpg' alt='img'>
										</a>
										<div class="post_content">
											<h5>
												<a href="post.html" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">Syrian Civilians Trapped For Months Continue To Be Evacuated</a>
											</h5>
											<ul class="post_details simple">
												<li class="category"><a href="category_world.html" title="WORLD">WORLD</a></li>
												<li class="date">
													10:11 PM, Feb 02
												</li>
											</ul>
										</div>
									</li>
									<li class="post">
										<a href="post.html" title="Built on Brotherhood, Club Lives Up to Name">
											<img src='images/samples/100x100/image_02.jpg' alt='img'>
										</a>
										<div class="post_content">
											<h5>
												<a href="post.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>
											</h5>
											<ul class="post_details simple">
												<li class="category"><a href="category_sports.html" title="SPORTS">SPORTS</a></li>
												<li class="date">
													10:11 PM, Feb 02
												</li>
											</ul>
										</div>
									</li>
									<li class="post">
										<a href="post_soundcloud.html" title="Nuclear Fusion Closer to Becoming a Reality">
											<img src='images/samples/100x100/image_13.jpg' alt='img'>
										</a>
										<div class="post_content">
											<h5>
												<a href="post_soundcloud.html" title="Nuclear Fusion Closer to Becoming a Reality">Nuclear Fusion Closer to Becoming a Reality</a>
											</h5>
											<ul class="post_details simple">
												<li class="category"><a href="category_science.html" title="SCIENCE">SCIENCE</a></li>
												<li class="date">
													10:11 PM, Feb 02
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
							<h4 class="box_header page_margin_top_section">Top Authors</h4>
							<ul class="authors rating clearfix">
								<li class="author">
									<a class="thumb" href="author.html" title="Debora Hilton">
										<img src='images/samples/Team_100x100/image_01.jpg' alt='img'>
										<span class="number animated_element" data-value="34"></span>
									</a>
									<div class="details">
										<h5><a href="author.html" title="Debora Hilton">Debora Hilton</a></h5>
										<h6>EDITOR</h6>
									</div>
								</li>
								<li class="author">
									<a class="thumb" href="author.html" title="Anna Shubina">
										<img src='images/samples/Team_100x100/image_02.jpg' alt='img'>
										<span class="number animated_element" data-value="25"></span>
									</a>
									<div class="details">
										<h5><a href="author.html" title="Anna Shubina">Anna Shubina</a></h5>
										<h6>EDITOR</h6>
									</div>
								</li>
								<li class="author">
									<a class="thumb" href="author.html" title="Liam Holden">
										<img src='images/samples/Team_100x100/image_03.jpg' alt='img'>
										<span class="number animated_element" data-value="9"></span>
									</a>
									<div class="details">
										<h5><a href="author.html" title="Liam Holden">Liam Holden</a></h5>
										<h6>PUBLISHER</h6>
									</div>
								</li>
								<li class="author">
									<a class="thumb" href="author.html" title="Heather Dale">
										<img src='images/samples/Team_100x100/image_04.jpg' alt='img'>
										<span class="number animated_element" data-value="2"></span>
									</a>
									<div class="details">
										<h5><a href="author.html" title="Heather Dale">Heather Dale</a></h5>
										<h6>ILLUSTRATOR</h6>
									</div>
								</li>
							</ul>
							<h4 class="box_header page_margin_top_section">Most Commented</h4>
							<div class="vertical_carousel_container clearfix">
								<ul class="blog small vertical_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
									<li class="post">
										<a href="post_gallery.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">
											<span class="icon small gallery"></span>
											<img src='images/samples/100x100/image_06.jpg' alt='img'>
										</a>
										<div class="post_content">
											<h5>
												<a href="post_gallery.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>
											</h5>
											<ul class="post_details simple">
												<li class="category"><a href="category_health.html" title="HEALTH">HEALTH</a></li>
												<li class="date">
													10:11 PM, Feb 02
												</li>
											</ul>
										</div>
									</li>
									<li class="post">
										<a href="post_quote.html" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">
											<img src='images/samples/100x100/image_12.jpg' alt='img'>
										</a>
										<div class="post_content">
											<h5>
												<a href="post_quote.html" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">Syrian Civilians Trapped For Months Continue To Be Evacuated</a>
											</h5>
											<ul class="post_details simple">
												<li class="category"><a href="category_world.html" title="WORLD">WORLD</a></li>
												<li class="date">
													10:11 PM, Feb 02
												</li>
											</ul>
										</div>
									</li>
									<li class="post">
										<a href="post_small_image.html" title="Built on Brotherhood, Club Lives Up to Name">
											<img src='images/samples/100x100/image_02.jpg' alt='img'>
										</a>
										<div class="post_content">
											<h5>
												<a href="post_small_image.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>
											</h5>
											<ul class="post_details simple">
												<li class="category"><a href="category_sports.html" title="SPORTS">SPORTS</a></li>
												<li class="date">
													10:11 PM, Feb 02
												</li>
											</ul>
										</div>
									</li>
									<li class="post">
										<a href="post.html" title="Nuclear Fusion Closer to Becoming a Reality">
											<img src='images/samples/100x100/image_13.jpg' alt='img'>
										</a>
										<div class="post_content">
											<h5>
												<a href="post.html" title="Nuclear Fusion Closer to Becoming a Reality">Nuclear Fusion Closer to Becoming a Reality</a>
											</h5>
											<ul class="post_details simple">
												<li class="category"><a href="category_science.html" title="SCIENCE">SCIENCE</a></li>
												<li class="date">
													10:11 PM, Feb 02
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
							<h4 class="box_header page_margin_top_section">Featured Videos</h4>
							<div class="horizontal_carousel_container big page_margin_top">
								<ul class="blog horizontal_carousel visible-1 autoplay-0 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
									<li class="post">
										<a href="post_video.html" title="Struggling Nuremberg Sack Coach Verbeek">
											<span class="icon video"></span>
											<img src='images/samples/330x242/image_03.jpg' alt='img'>
										</a>
										<h5 class="with_number">
											<a href="post_video.html" title="Struggling Nuremberg Sack Coach Verbeek">Struggling Nuremberg Sack Coach Verbeek</a>
											<a class="comments_number" href="post_video.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>
										</h5>
										<ul class="post_details simple">
											<li class="category"><a href="category_sports.html" title="SPORTS">SPORTS</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
									</li>
									<li class="post">
										<a href="post_video_2.html" title="Built on Brotherhood, Club Lives Up to Name">
											<span class="icon video"></span>
											<img src='images/samples/330x242/image_14.jpg' alt='img'>
										</a>
										<h5 class="with_number">
											<a href="post_video_2.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>
											<a class="comments_number" href="post_video_2.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>
										</h5>
										<ul class="post_details simple">
											<li class="category"><a href="category_sports.html" title="SPORTS">SPORTS</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
									</li>
									<li class="post">
										<a href="post_video.html" title="New Painkiller Rekindles Addiction Concerns">
											<span class="icon video"></span>
											<img src='images/samples/330x242/image_04.jpg' alt='img'>
										</a>
										<h5 class="with_number">
											<a href="post_video.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a>
											<a class="comments_number" href="post_video.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>
										</h5>
										<ul class="post_details simple">
											<li class="category"><a href="category_sports.html" title="SPORTS">SPORTS</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
									</li>
								</ul>
							</div>
							<h4 class="box_header page_margin_top_section">Categories</h4>
							<ul class="taxonomies columns clearfix page_margin_top">
								<li>
									<a href="category_world.html" title="WORLD">WORLD</a>
								</li>
								<li>
									<a href="category_health.html" title="HEALTH">HEALTH</a>
								</li>
								<li>
									<a href="category_sports.html" title="SPORTS">SPORTS</a>
								</li>
								<li>
									<a href="category_science.html" title="SCIENCE">SCIENCE</a>
								</li>
								<li>
									<a href="category_lifestyle.html" title="LIFESTYLE">LIFESTYLE</a>
								</li>
							</ul>
							<h4 class="box_header page_margin_top_section">Tags</h4>
							<ul class="taxonomies clearfix page_margin_top">
								<li>
									<a href="#" title="Business">BUSINESS</a>
								</li>
								<li>
									<a href="#" title="Education">EDUCATION</a>
								</li>
								<li>
									<a href="#" title="Family">FAMILY</a>
								</li>
								<li>
									<a href="#" title="Film">FILM</a>
								</li>
								<li>
									<a href="#" title="Food">FOOD</a>
								</li>
								<li>
									<a href="#" title="Garden">GARDEN</a>
								</li>
								<li>
									<a href="#" title="People">PEOPLE</a>
								</li>
								<li>
									<a href="#" title="Sport">SPORT</a>
								</li>
							</ul>
						</div>
					</div>