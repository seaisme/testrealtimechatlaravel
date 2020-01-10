<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>VEG A MINUTE - User Profile</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
</head>


<body>
	<div class="wrapper">
		@include('navbar');
		<!--header end-->


		<section class="cover-sec">
			<img src="Documentation/images/resources/cover-img.jpg" alt="">
		</section>


		<main>
			<div class="main-section">
				<div class="container">
					<div class="main-section-data">
						<div class="row">
							<div class="col-lg-3">
								<div class="main-left-sidebar">
									<div class="user_profile">
										<div class="user-pro-img">
											<img src="Documentation/images/resources/user-pro-img.png" alt="">
										</div>
										<!--user-pro-img end-->
										<div class="user_pro_status">
											<ul class="flw-hr">
												<li><a href="#" title="" class="flww"><i class="la la-plus"></i> Follow</a></li>
												<!-- <li><a href="#" title="" class="hre">Hire</a></li> -->
											</ul>
											<ul class="flw-status">
												<li>
													<span>Following</span>
													<b>34</b>
												</li>
												<li>
													<span>Followers</span>
													<b>155</b>
												</li>
											</ul>
										</div>
										<!--user_pro_status end-->
										<ul class="social_links">
											<li><a href="#" title=""><i class="la la-globe"></i> www.example.com</a></li>
											<li><a href="#" title=""><i class="fa fa-facebook-square"></i> Http://www.facebook.com</a>
											</li>
											<li><a href="#" title=""><i class="fa fa-twitter"></i> Http://www.Twitter.com</a></li>
											<li><a href="#" title=""><i class="fa fa-google-plus-square"></i>
													Http://www.googleplus.com</a></li>
											<li><a href="#" title=""><i class="fa fa-behance-square"></i> Http://www.behance.com</a>
											</li>
											<li><a href="#" title=""><i class="fa fa-pinterest"></i> Http://www.pinterest.com</a></li>
											<li><a href="#" title=""><i class="fa fa-instagram"></i> Http://www.instagram.com</a></li>
											<li><a href="#" title=""><i class="fa fa-youtube"></i> Http://www.youtube.com</a></li>
										</ul>
									</div>
									<!--user_profile end-->
									<div class="suggestions full-width">
										<div class="sd-title">
											<h3>ปฏิทิน</h3>
											<i class="la la-ellipsis-v"></i>
										</div>
										<!--sd-title end-->
										<div class="suggestions-list">

										</div>
										<!--ปฏิทิน end-->
									</div>
									<!--ปฏิทิน end-->
								</div>
								<!--main-left-sidebar end-->
							</div>
							<div class="col-lg-6">
								<div class="main-ws-sec">
									<div class="user-tab-sec">
										<h3>สมปอง รักยิ่ง</h3>
										<div class="star-descp">
											<span>หาผักหาผลไม้กินเล่น</span>
										</div>
										<!--star-descp end-->
										<div class="tab-feed">
											<ul>
												<li data-tab="feed-dd" class="active">
													<a href="#" title="">
														<img src="Documentation/images/ic1.png" alt="">
														<span>ไทม์ไลน์</span>
													</a>
												</li>
												<li data-tab="info-dd">
													<a href="#" title="">
														<img src="Documentation/images/ic2.png" alt="">
														<span>เกี่ยวกับ</span>
													</a>
												</li>
												<li data-tab="portfolio-dd">
													<a href="#" title="">
														<img src="Documentation/images/ic3.png" alt="">
														<span>รูปภาพ</span>
													</a>
												</li>
											</ul>
										</div><!-- tab-feed end-->
									</div>
									<!--user-tab-sec end-->
									<div class="product-feed-tab current" id="feed-dd">
										<div class="posts-section">
											<div class="post-bar">
												<div class="post_topbar">
													<div class="usy-dt">
														<img src="Documentation/images/resources/us-pic.png" alt="">
														<div class="usy-name">
															<h3>ฟา์มลุงสมหมาย บ้านใต้</h3>
															<span><img src="Documentation/images/clock.png" alt="">3 min ago</span>
														</div>
													</div>
													<div class="ed-opts">
														<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
														<ul class="ed-options">
															<li><a href="#" title="">Edit Post</a></li>
															<li><a href="#" title="">Unsaved</a></li>
															<li><a href="#" title="">Unbid</a></li>
															<li><a href="#" title="">Close</a></li>
															<li><a href="#" title="">Hide</a></li>
														</ul>
													</div>
												</div>
												<div class="epi-sec">
													<ul class="bk-links">
														<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
														<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
													</ul>
												</div>
												<div class="job_descp">
													<h3>มะพร้าวน้ำหอม</h3>
													<ul class="job-dt">
														<li><a href="#" title="">รอผลผลิต</a></li>
														<li><span>30 / day</span></li>
													</ul>
													<img src="Documentation/images/veg/coconut.jpg" alt="">
													<ul class="skill-tags mt-2">
														<li><a href="#" title="">มะพร้าว</a></li>
													</ul>
												</div>
												<div class="job-status-bar">
													<ul class="like-com">
														<li>
															<a href="#" class="active"><i class="fas fa-heart"></i> Like</a>
															<img src="Documentation/images/liked-img.png" alt="">
															<span>25</span>
														</li>
														<li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comments 15</a></li>
													</ul>
													<a href="#"><i class="fas fa-eye"></i>Views 50</a>
												</div>
											</div>
											<div class="process-comm">
												<div class="spinner">
													<div class="bounce1"></div>
													<div class="bounce2"></div>
													<div class="bounce3"></div>
												</div>
											</div>
											<!--process-comm end-->
										</div>
										<!--posts-section end-->
									</div>
									<!--product-feed-tab end-->
									<div class="product-feed-tab" id="info-dd">
										<div class="user-profile-ov">
											<h3>Overview</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec
												condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus
												consectetur aliquam lectus commodo viverra. Nunc eu augue nec arcu efficitur faucibus. Aliquam
												accumsan ac magna convallis bibendum. Quisque laoreet augue eget augue fermentum scelerisque.
												Vivamus dignissim mollis est dictum blandit. Nam porta auctor neque sed congue. Nullam rutrum
												eget ex at maximus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget
												vestibulum lorem.</p>
										</div>
										<!--user-profile-ov end-->
										<div class="user-profile-ov st2">
											<h3>Experience</h3>
											<h4>Web designer</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec
												condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus
												consectetur aliquam lectus commodo viverra. </p>
											<h4>UI / UX Designer</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec
												condimentum ipsum commodo id.</p>
											<h4>PHP developer</h4>
											<p class="no-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor
												aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur
												tincidunt. Vivamus consectetur aliquam lectus commodo viverra. </p>
										</div>
										<!--user-profile-ov end-->
										<div class="user-profile-ov">
											<h3>Education</h3>
											<h4>Master of Computer Science</h4>
											<span>2015 - 2018</span>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec
												condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus
												consectetur aliquam lectus commodo viverra. </p>
										</div>
										<!--user-profile-ov end-->
										<div class="user-profile-ov">
											<h3>Location</h3>
											<h4>India</h4>
											<p>151/4 BT Chownk, Delhi </p>
										</div>
										<!--user-profile-ov end-->
										<div class="user-profile-ov">
											<h3>Skills</h3>
											<ul>
												<li><a href="#" title="">HTML</a></li>
												<li><a href="#" title="">PHP</a></li>
												<li><a href="#" title="">CSS</a></li>
												<li><a href="#" title="">Javascript</a></li>
												<li><a href="#" title="">Wordpress</a></li>
												<li><a href="#" title="">Photoshop</a></li>
												<li><a href="#" title="">Illustrator</a></li>
												<li><a href="#" title="">Corel Draw</a></li>
											</ul>
										</div>
										<!--user-profile-ov end-->
									</div>
									<!--product-feed-tab end-->
									<div class="product-feed-tab" id="portfolio-dd">
										<div class="portfolio-gallery-sec">
											<h3>Portfolio/h3>
											<div class="gallery_pf">
												<div class="row">
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="Documentation/images/resources/pf-img1.jpg" alt="">
															<a href="#" title=""><img src="Documentation/images/all-out.png" alt=""></a>
														</div>
														<!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="Documentation/images/resources/pf-img2.jpg" alt="">
															<a href="#" title=""><img src="Documentation/images/all-out.png" alt=""></a>
														</div>
														<!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="Documentation/images/resources/pf-img3.jpg" alt="">
															<a href="#" title=""><img src="Documentation/images/all-out.png" alt=""></a>
														</div>
														<!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="Documentation/images/resources/pf-img4.jpg" alt="">
															<a href="#" title=""><img src="Documentation/images/all-out.png" alt=""></a>
														</div>
														<!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="Documentation/images/resources/pf-img5.jpg" alt="">
															<a href="#" title=""><img src="Documentation/images/all-out.png" alt=""></a>
														</div>
														<!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="Documentation/images/resources/pf-img6.jpg" alt="">
															<a href="#" title=""><img src="Documentation/images/all-out.png" alt=""></a>
														</div>
														<!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="Documentation/images/resources/pf-img7.jpg" alt="">
															<a href="#" title=""><img src="Documentation/images/all-out.png" alt=""></a>
														</div>
														<!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="Documentation/images/resources/pf-img8.jpg" alt="">
															<a href="#" title=""><img src="Documentation/images/all-out.png" alt=""></a>
														</div>
														<!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="Documentation/images/resources/pf-img9.jpg" alt="">
															<a href="#" title=""><img src="Documentation/images/all-out.png" alt=""></a>
														</div>
														<!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="Documentation/images/resources/pf-img10.jpg" alt="">
															<a href="#" title=""><img src="Documentation/images/all-out.png" alt=""></a>
														</div>
														<!--gallery_pt end-->
													</div>
												</div>
											</div>
											<!--gallery_pf end-->
										</div>
										<!--portfolio-gallery-sec end-->
									</div>
									<!--product-feed-tab end-->
								</div>
								<!--main-ws-sec end-->
							</div>
							<div class="col-lg-3">
								<div class="right-sidebar">
									<div class="message-btn">
										<a href="#" title=""><i class="fa fa-envelope"></i> ส่งข้อความ</a>
									</div>
									<div class="widget widget-portfolio">
										<div class="wd-heady">
											<h3>รูปภาพ</h3>
											<img src="Documentation/images/photo-icon.png" alt="">
										</div>
										<div class="pf-gallery">
											<ul>
												<li><a href="#" title=""><img src="Documentation/images/resources/pf-gallery1.png" alt=""></a></li>
												<li><a href="#" title=""><img src="Documentation/images/resources/pf-gallery2.png" alt=""></a></li>
												<li><a href="#" title=""><img src="Documentation/images/resources/pf-gallery3.png" alt=""></a></li>
												<li><a href="#" title=""><img src="Documentation/images/resources/pf-gallery4.png" alt=""></a></li>
												<li><a href="#" title=""><img src="Documentation/images/resources/pf-gallery5.png" alt=""></a></li>
												<li><a href="#" title=""><img src="Documentation/images/resources/pf-gallery6.png" alt=""></a></li>
												<li><a href="#" title=""><img src="Documentation/images/resources/pf-gallery7.png" alt=""></a></li>
												<li><a href="#" title=""><img src="Documentation/images/resources/pf-gallery8.png" alt=""></a></li>
												<li><a href="#" title=""><img src="Documentation/images/resources/pf-gallery9.png" alt=""></a></li>
												<li><a href="#" title=""><img src="Documentation/images/resources/pf-gallery10.png" alt=""></a></li>
												<li><a href="#" title=""><img src="Documentation/images/resources/pf-gallery11.png" alt=""></a></li>
												<li><a href="#" title=""><img src="Documentation/images/resources/pf-gallery12.png" alt=""></a></li>
											</ul>
										</div>
										<!--pf-gallery end-->
									</div>
									<!--widget-portfolio end-->
								</div>
								<!--right-sidebar end-->
							</div>
						</div>
					</div><!-- main-section-data end-->
				</div>
			</div>
		</main>


		<footer>
			<div class="footy-sec mn no-margin">
				<div class="container">
					<ul>
					</ul>
				</div>
			</div>
		</footer>
		<!--footer end-->


		<div class="overview-box" id="create-portfolio">
			<div class="overview-edit">
				<h3>Create Portfolio</h3>
				<form>
					<input type="text" name="pf-name" placeholder="Portfolio Name">
					<div class="file-submit">
						<input type="file" name="file">
					</div>
					<div class="pf-img">
						<img src="Documentation/images/resources/np.png" alt="">
					</div>
					<input type="text" name="website-url" placeholder="htp://www.example.com">
					<button type="submit" class="save">Save</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div>
			<!--overview-edit end-->
		</div>
		<!--overview-box end-->



	</div>
	<!--theme-layout end-->
</body>

</html>