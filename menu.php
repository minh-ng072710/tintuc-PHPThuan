<div class="menu_container sticky style_3  clearfix">
				<nav>
							
				<ul class="sf-menu">
					
					<li class="selected">
						<a href="#" title="{Trang_Chu}">
						{Trang_Chu}
						</a>
						
					</li>
			
					
					
					
					
					<?php $kq = $t->ListTheLoai($lang);	?>
					<?php while ($rowTL = $kq->fetch_assoc() ) {?>

					<li class="submenu">
						<a href="#" title="<?=$rowTL['TenTL']?>">
							<?=$rowTL['TenTL']?>
						</a>
						<ul>
                        <?php $kq1 = $t->ListLoaiTinTrong1TheLoai($rowTL['idTL']);?>
						<?php while ($rowLT = $kq1->fetch_assoc() ) {?>

							<li>
								<a href="cat/<?=$rowLT['Ten_KhongDau'];?>/" title="<?=$rowLT['Ten']?>">
									<?=$rowLT['Ten']?>
								</a>
							</li>
							<?php }?>
						</ul>
					</li>
					<?php }?>
				</ul>
				</nav>
				<div class="mobile_menu_container">
					<a href="#" class="mobile-menu-switch">
						<span class="line"></span>
						<span class="line"></span>
						<span class="line"></span>
					</a>
					<div class="mobile-menu-divider"></div>
					<nav>
					<ul class="mobile-menu">
						<li class="submenu selected">
							<a href="home.html" title="Home">
								Home
							</a>
							<ul>
								<li>
									<a href="home.html" title="Home Style 1">
										Home Style 1
									</a>
								</li>
								<li>
									<a href="home_2.html" title="Home Style 2">
										Home Style 2
									</a>
								</li>
								<li>
									<a href="home_3.html" title="Home Style 3">
										Home Style 3
									</a>
								</li>
								<li>
									<a href="home_4.html" title="Home Style 3">
										Home Style 4
									</a>
								</li>
								<li>
									<a href="home_5.html" title="Home Style 5">
										Home Style 5
									</a>
								</li>
								<li>
									<a href="home_6.html" title="Home Style 6">
										Home Style 6
									</a>
								</li>
								<li class="selected">
									<a href="home_7.html" title="Home Style 7">
										Home Style 7
									</a>
								</li>
							</ul>
						</li>
						<li class="submenu">
							<a href="about.html" title="Pages">
								Pages
							</a>
							<ul>
								<li>
									<a href="about.html" title="About Style 1">
										About Style 1
									</a>
								</li>
								<li>
									<a href="about_2.html" title="About Style 2">
										About Style 2
									</a>
								</li>
								<li>
									<a href="default.html" title="Default">
										Default
									</a>
								</li>
								<li>
									<a href="404.html" title="404 Not Found">
										404 Not Found
									</a>
								</li>
							</ul>
						</li>
						<li class="submenu">
							<a href="post.html" title="Post Formats">
								Post Formats
							</a>
							<ul>
								<li>
									<a href="post.html" title="Post Default">
										Post Default
									</a>
								</li>
								<li>
									<a href="post_gallery.html" title="Post Gallery">
										Post Gallery
									</a>
								</li>
								<li>
									<a href="post_small_image.html" title="Post Small Image">
										Post Small Image
									</a>
								</li>
								<li>
									<a href="post_video.html" title="Post Video YouTube">
										Post Video Youtube
									</a>
								</li>
								<li>
									<a href="post_video_2.html" title="Post Video Vimeo">
										Post Video Vimeo
									</a>
								</li>
								<li>
									<a href="post_soundcloud.html" title="Post Soundcloud">
										Post Soundcloud
									</a>
								</li>
								<li>
									<a href="post_review.html" title="Post Review Style 1">
										Post Review Style 1
									</a>
								</li>
								<li>
									<a href="post_review_2.html" title="Post Review Style 2">
										Post Review Style 2
									</a>
								</li>
								<li>
									<a href="post_quote.html" title="Post Quote Style 1">
										Post Quote Style 1
									</a>
								</li>
								<li>
									<a href="post_quote_2.html" title="Post Quote Style 2">
										Post Quote Style 2
									</a>
								</li>
							</ul>
						</li>
						<li class="submenu">
							<a href="blog.html" title="Blog">
								Blog
							</a>
							<ul>
								<li>
									<a href="blog_small_slider.html" title="Blog Small Slider">
										Blog Small Slider
									</a>
								</li>
								<li class="submenu">
									<a href="blog.html" title="Blog 1 column">
										Blog 1 Column
									</a>
									<ul>
										<li>
											<a href="blog.html" title="Blog With Right Sidebar">
												Blog With Right Sidebar
											</a>
										</li>
										<li>
											<a href="blog_left_sidebar.html" title="Blog With Left Sidebar">
												Blog With Left Sidebar
											</a>
										</li>
									</ul>
								</li>
								<li class="submenu">
									<a href="blog_2_columns.html" title="Blog 2 columns">
										Blog 2 Columns
									</a>
									<ul>
										<li>
											<a href="blog_2_columns.html" title="Right Sidebar">
												Right Sidebar
											</a>
										</li>
										<li>
											<a href="blog_2_columns_left_sidebar.html" title="Left Sidebar">
												Left Sidebar
											</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="blog_3_columns.html" title="Blog 3 Columns">
										Blog 3 Columns
									</a>
								</li>
								<li>
									<a href="search.html?s=Maecenas+Mauris" title="Search Page Template">
										Search Page Template
									</a>
								</li>
							</ul>
						</li>
						<li class="submenu">
							<a href="authors.html" title="Authors">
								Authors
							</a>
							<ul>
								<li>
									<a href="authors.html" title="Authors List">
										Authors List
									</a>
								</li>
								<li>
									<a href="author.html" title="Author Single">
										Author Single
									</a>
								</li>
							</ul>
						</li>
						<li class="submenu">
							<a href="category_health.html" title="Categories">
								Categories
							</a>
							<ul>
								<li>
									<a href="category_health.html" title="Health">
										Health
									</a>
								</li>
								<li>
									<a href="category_science.html" title="Science">
										Science
									</a>
								</li>
								<li>
									<a href="category_sports.html" title="Sports">
										Sports
									</a>
								</li>
								<li>
									<a href="category_world.html" title="World">
										World
									</a>
								</li>
								<li>
									<a href="category_lifestyle.html" title="Lifestyle">
										Lifestyle
									</a>
								</li>
							</ul>
						</li>
						<li class="submenu">
							<a href="contact.html" title="Contact">
								Contact
							</a>
							<ul class="expand_left_contact">
								<li>
									<a href="contact.html" title="Contact Style 1">
										Contact Style 1
									</a>
								</li>
								<li>
									<a href="contact_2.html" title="Contact Style 2">
										Contact Style 2
									</a>
								</li>
							</ul>
						</li>
					</ul>
					</nav>
				</div>
			</div>
            <style>
			.sf-menu li a {font-size:16px;}
			</style>