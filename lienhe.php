
<div class="row page_margin_top_section">
								<h4 class="box_header">
									Liên hệ với chúng tôi
								</h4>
								<p class="padding_top_30">Chúng tôi rất vui lòng khi tiếp nhận các ý kiến phản hồi, những mong muốn của bạn, những tin tức từ bạn. Những thông tin từ bạn sẽ giúp chúng tôi hoàn thiện hơn, thông tin nhanh chóng hơn</p>
							<?php 
						if (isset($_POST['name']) ==true){
						$ht=htmlentities(trim(strip_tags($_POST['name'])),ENT_QUOTES,'utf-8');
						$m=htmlentities(trim(strip_tags($_POST['email'])),ENT_QUOTES,'utf-8');
						$td=htmlentities(trim(strip_tags($_POST['subject'])),ENT_QUOTES,'utf-8');
						$nd=htmlentities(trim(strip_tags($_POST['message'])),ENT_QUOTES,'utf-8');
						$nd= nl2br($nd);
						$loi="";
							$cap = $_POST['cap'];
							if ($cap!= $_SESSION['captcha_code']) $loi.="Bạn nhập chữ không đúng với hình<br>";

						if ($ht=="") $loi.="Bạn chưa nhập họ tên<br>";
						if ($m=="") $loi.="Bạn chưa nhập email<br>";
						if ($nd=="") $loi.="Bạn chưa nhập nội dung liên hệ<br>";
						else if (strlen($nd)<=10) $loi.="Nội dung liên hệ quá ngắn<br>";
						if ($loi==""){
						   $to ="minh.ng2419@sinhvien.hoasen.edu.vn";
						   $from="minh072710@gmail.com";
						   $pass="nguyengiaminh";
						   $topText="Họ tên: {$ht}<br>Email: {$m}<br>Tiêu đề: {$td}" ;
						   $nd = $topText."<br>Nội dung:<hr>".$nd;		
						   $error="";
						   $t->GuiMail($to, $from,$fromName="Minh Đẹp Trai ",$td,$nd,$from,$pass,$error);
						   if ($error!="") $loi=$error;
						   else {
							   $_SESSION['camon'] ="Cảm ơn bạn. Ý kiến đã được ghi nhận";
							   echo "<script>document.location='/news/lien-he/';</script>";
							   exit();
						   }
						}
						}
						?>
						<div id="thongbaoLH" style="background:#ccc;color:red; padding:20px; text-align:center;line-height:150%; margin-top:10px">
						<?php 
							if ($loi!="") echo $loi;
							if (isset($_SESSION['camon'])==true) {
								echo $_SESSION['camon'] ; unset($_SESSION['camon']); }
							?>
						</div>
						<?php if (isset($_SESSION['camon'])==false) {?>


								<form class="contact_form margin_top_15" id="contact_form" method="post" action="">
									<fieldset class="column column_1_3">
										<div class="block">
											<input class="text_input" name="name" type="text" value="<?php if (isset($_POST['name']) ) echo $_POST['name']?>" placeholder="Họ tên của bạn">
										</div>
									</fieldset>
									<fieldset class="column column_1_3">
										<div class="block">
											<input class="text_input" name="email" type="text" value="<?php if (isset($_POST['email']) ) echo $_POST['email']?>" placeholder="Email của bạn">
										</div>
									</fieldset>
									<fieldset class="column column_1_3">
										<div class="block">
											<input class="text_input" name="subject" type="text" value="<?php if (isset($_POST['subject']) ) echo $_POST['subject']?>" placeholder="Tiêu đề">
										</div>
									</fieldset>
									<fieldset>
										<div class="block">
											<textarea name="message" placeholder="Nội dung liên hệ"><?php if (isset($_POST['message']) ) echo $_POST['message']?></textarea>
										</div>
									</fieldset>
									&nbsp;
									<fieldset>
									<div class="block">
									 <img src="captcha.php" align="left" height="46"> &nbsp; 
									 <input class="text_input" name="cap" placeholder="Nhập chữ trong hình" value="<?php if (isset($_POST['cap'])) echo $_POST['cap']?>" >
									</div>
									</f
									><fieldset>
										<input type="hidden" name="action" value="contact_form" />
										<input type="submit" name="submit" value="GỬI LIÊN HỆ" class="more active">
									</fieldset>
								</form>
	<?php } ?>
							</div>
						</div>