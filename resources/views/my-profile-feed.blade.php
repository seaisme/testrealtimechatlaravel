<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>WorkWise Html Template</title>
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
			<div class="add-pic-box">
				<div class="container">
					<div class="row no-gutters">
						<div class="col-lg-12 col-sm-12">
							<input type="file" id="file">
							<label for="file">เปลี่ยนรูป</label>
						</div>
					</div>
				</div>
			</div>
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
											<div class="add-dp" id="OpenImgUpload">
												<input type="file" id="file">
												<label for="file"><i class="fas fa-camera"></i></label>
											</div>
										</div>
										<!--user-pro-img end-->
										<div class="user_pro_status">
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
									<div class="user-tab-sec rewivew">
										<h3>สมปอง รักยิ่ง</h3>
										<div class="star-descp">
											<span>หาผักหาผลไม้กินเล่น</span>
										</div>
										<!--star-descp end-->
										<div class="tab-feed st2 settingjb">
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
												<li data-tab="saved-jobs">
													<a href="#" title="">
														<img src="Documentation/images/ic4.png" alt="">
														<span>จอง</span>
													</a>
												</li>
												<li data-tab="my-bids">
													<a href="#" title="">
														<img src="Documentation/images/ic5.png" alt="">
														<span>ซื้อ</span>
													</a>
												</li>
												<li data-tab="portfolio-dd">
													<a href="#" title="">
														<img src="Documentation/images/ic3.png" alt="">
														<span>รูปภาพ</span>
													</a>
												</li>
												<li data-tab="rewivewdata">
													<a href="#" title="">
														<img src="Documentation/images/review.png" alt="">
														<span>รีวิว</span>
													</a>
												</li>
												<li data-tab="payment-dd">
													<a href="#" title="">
														<img src="Documentation/images/ic6.png" alt="">
														<span>ชำระเงิน</span>
													</a>
												</li>

											</ul>
										</div><!-- tab-feed end-->
									</div>
									<!--user-tab-sec end-->
									<div class="product-feed-tab" id="saved-jobs">
										<ul class="nav nav-tabs" id="myTab" role="tablist">
											<li class="nav-item">
												<a class="nav-link active" id="contact-tab" data-toggle="tab" href="#applied" role="tab"
													aria-controls="applied" aria-selected="false">ผลิตภัณฑ์ที่จอง</a>
											</li>
										</ul>
										<div class="tab-content" id="myTabContent">
											<div class="tab-pane fade show active" id="applied" role="tabpanel" aria-labelledby="applied-tab">
												<div class="post-bar">
													<div class="p-all saved-post">
														<div class="usy-dt">
															<img src="Documentation/images/resources/us-pic.png" alt="">
															<div class="usy-name">
																<h3>ฟาร์ม ลุงสม</h3>
																<div class="epi-sec epi2">
																	<ul class="descp descptab bklink">
																		<li><img src="Documentation/images/icon8.png" alt=""><span>Epic Coder</span></li>
																		<li><img src="Documentation/images/icon9.png" alt=""><span>India</span></li>
																	</ul>
																</div>
															</div>
															<div class="wordpressdevlp">
																<h2>มะพร้าว</h2>

																<p><i class="la la-clock-o"></i>โพสเมื่อ 30 ธันวาคม 2562</p>
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
													<ul class="savedjob-info saved-info">
														<li>
															<h3>กิโลกรัม</h3>
															<p>10</p>
														</li>
														<li>
															<h3>สถาณะ</h3>
															<p>รอผลผลิต</p>
														</li>
														<li>
															<h3>ราคา (บาท)</h3>
															<p>600 - 700</p>
														</li>
														<li>
															<h3>วันที่พร้อมส่ง</h3>
															<p>25 มีนาคม 2563</p>
														</li>
														<div class="devepbtn saved-btn">
															<a class="clrbtn" href="#">ไปยังฟาร์ม</a>
															<a class="clrbtn" href="#">ส่งข้อความ</a>
															<a href="#">
																<i class="far fa-trash-alt"></i>
															</a>
														</div>
													</ul>
												</div>
											</div>
											<!-- <div class="tab-pane fade" id="cadidates" role="tabpanel" aria-labelledby="cadidates-tab">
												<div class="post-bar">
													<div class="post_topbar applied-post">
														<div class="usy-dt">
															<img src="Documentation/images/resources/us-pic.png" alt="">
															<div class="usy-name">
																<h3>John Doe</h3>
																<div class="epi-sec epi2">
																	<ul class="descp descptab bklink">
																		<li><img src="Documentation/images/icon8.png" alt=""><span>Epic Coder</span></li>
																		<li><img src="Documentation/images/icon9.png" alt=""><span>India</span></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="ed-opts">
															<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
															<ul class="ed-options">
																<li><a href="#" title="">Edit Post</a></li>
																<li><a href="#" title="">Accept</a></li>
																<li><a href="#" title="">Unbid</a></li>
																<li><a href="#" title="">Close</a></li>
																<li><a href="#" title="">Hide</a></li>
															</ul>
														</div>
														<div class="job_descp noborder">
															<div class="star-descp review profilecnd">
																<ul class="bklik">
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star-half-o"></i></li>
																	<a href="#" title="">5.0 of 5 Reviews</a>
																</ul>
															</div>
															<div class="devepbtn appliedinfo noreply">
																<a class="clrbtn" href="#">Accept</a>
																<a class="clrbtn" href="#">View Profile</a>
																<a class="clrbtn" href="#">Message</a>
																<a href="#">
																	<i class="far fa-trash-alt"></i>
																</a>
															</div>
														</div>
													</div>
												</div>
												<div class="post-bar">
													<div class="post_topbar  applied-post">
														<div class="usy-dt">
															<img src="Documentation/images/resources/us-pic.png" alt="">
															<div class="usy-name">
																<h3>John Doe</h3>
																<div class="epi-sec epi2">
																	<ul class="descp descptab bklink">
																		<li><img src="Documentation/images/icon8.png" alt=""><span>Epic Coder</span></li>
																		<li><img src="Documentation/images/icon9.png" alt=""><span>India</span></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="ed-opts">
															<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
															<ul class="ed-options">
																<li><a href="#" title="">Edit Post</a></li>
																<li><a href="#" title="">Accept</a></li>
																<li><a href="#" title="">Unbid</a></li>
																<li><a href="#" title="">Close</a></li>
																<li><a href="#" title="">Hide</a></li>
															</ul>
														</div>
														<div class="job_descp noborder">
															<div class="star-descp review profilecnd">
																<ul class="bklik">
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star-half-o"></i></li>
																	<a href="#" title="">5.0 of 5 Reviews</a>
																</ul>
															</div>
															<div class="devepbtn appliedinfo noreply">
																<a class="clrbtn" href="#">Accept</a>
																<a class="clrbtn" href="#">View Profile</a>
																<a class="clrbtn" href="#">Message</a>
																<a href="#">
																	<i class="far fa-trash-alt"></i>
																</a>
															</div>
														</div>
													</div>
												</div>
												<div class="post-bar">
													<div class="post_topbar applied-post">
														<div class="usy-dt">
															<img src="Documentation/images/resources/us-pic.png" alt="">
															<div class="usy-name">
																<h3>John Doe</h3>
																<div class="epi-sec epi2">
																	<ul class="descp descptab bklink">
																		<li><img src="Documentation/images/icon8.png" alt=""><span>Epic Coder</span></li>
																		<li><img src="Documentation/images/icon9.png" alt=""><span>India</span></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="ed-opts">
															<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
															<ul class="ed-options">
																<li><a href="#" title="">Edit Post</a></li>
																<li><a href="#" title="">Accept</a></li>
																<li><a href="#" title="">Unbid</a></li>
																<li><a href="#" title="">Close</a></li>
																<li><a href="#" title="">Hide</a></li>
															</ul>
														</div>
														<div class="job_descp noborder">
															<div class="star-descp review profilecnd">
																<ul class="bklik">
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star-half-o"></i></li>
																	<a href="#" title="">5.0 of 5 Reviews</a>
																</ul>
															</div>
															<div class="devepbtn appliedinfo noreply">
																<a class="clrbtn" href="#">Accept</a>
																<a class="clrbtn" href="#">View Profile</a>
																<a class="clrbtn" href="#">Message</a>
																<a href="#">
																	<i class="far fa-trash-alt"></i>
																</a>
															</div>
														</div>
													</div>
												</div>
											</div> -->
										</div>
									</div>
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
											<!--post-bar end-->
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

									<div class="product-feed-tab" id="my-bids">
										<ul class="nav nav-tabs bid-tab" id="myTab" role="tablist">
											<li class="nav-item">
												<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
													aria-controls="home" aria-selected="true">ประวัติการซื้อ</a>
											</li>
										</ul>
										<div class="tab-content" id="myTabContent">
											<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
												<div class="post-bar">
													<div class="p-all saved-post">
														<div class="usy-dt">
															<img src="Documentation/images/resources/us-pic.png" alt="">
															<div class="usy-name">
																<h3>ฟาร์ม ลุงสม</h3>
																<div class="epi-sec epi2">
																	<ul class="descp descptab bklink">
																		<li><img src="Documentation/images/icon8.png" alt=""><span>Epic Coder</span></li>
																		<li><img src="Documentation/images/icon9.png" alt=""><span>India</span></li>
																	</ul>
																</div>
															</div>
															<div class="wordpressdevlp">
																<h2>มะพร้าว</h2>

																<p><i class="la la-clock-o"></i>โพสเมื่อ 30 ธันวาคม 2562</p>
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
													<ul class="savedjob-info saved-info">
														<li>
															<h3>กิโลกรัม</h3>
															<p>10</p>
														</li>
														<li>
															<h3>สถาณะ</h3>
															<p>รอผลผลิต</p>
														</li>
														<li>
															<h3>ราคา (บาท)</h3>
															<p>600 - 700</p>
														</li>
														<li>
															<h3>วันที่พร้อมส่ง</h3>
															<p>25 มีนาคม 2563</p>
														</li>
														<div class="devepbtn saved-btn">
															<a class="clrbtn" href="#">ไปยังฟาร์ม</a>
															<a class="clrbtn" href="#">ส่งข้อความ</a>
															<a href="#">
																<i class="far fa-trash-alt"></i>
															</a>
														</div>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<!--product-feed-tab end-->

									<div class="product-feed-tab" id="info-dd">
										<div class="user-profile-ov">
											<h3><a href="#" title="" class="overview-open">ใบอณุญาติฟาร์ม</a> <a href="#" title=""
													class="overview-open"><i class="fa fa-pencil"></i></a></h3>
											<p>บลาๆ บลาๆบลาๆบลาๆบลาๆบลาๆบลาๆบลาๆบลาๆ</p>
										</div>
										<!--user-profile-ov end-->
										<div class="user-profile-ov st2">
											<h3><a href="#" title="" class="exp-bx-open">ข้อมูลฟาร์ม </a><a href="#" title=""
													class="exp-bx-open"><i class="fa fa-pencil"></i></a> <a href="#" title=""
													class="exp-bx-open"><i class="fa fa-plus-square"></i></a></h3>
											<h4>ที่อยู่ฟาร์ม <a href="#" title=""><i class="fa fa-pencil"></i></a></h4>
											<p>บลาๆบลาๆบลาๆบลาๆบลาๆบลาๆบลาๆบลาๆบลาๆบลาๆ</p>
											<h4>แผนที่ <a href="#" title=""><i class="fa fa-pencil"></i></a></h4>
											<p>บลาๆบลาๆบลาๆบลาๆบลาๆบลาๆบลาๆ</p>
											<h4>ติดต่อ <a href="#" title=""><i class="fa fa-pencil"></i></a></h4>
											<p class="no-margin">บลาๆบลาๆบลาๆบลาๆบลาๆบลาๆบลาๆ</p>
										</div>
										<!--user-profile-ov end-->
										<div class="user-profile-ov">
											<h3><a href="#" title="" class="skills-open">แท็ก</a> <a href="#" title=""
													class="skills-open"><i class="fa fa-pencil"></i></a> <a href="#"><i
														class="fa fa-plus-square"></i></a></h3>
											<ul>
												<li><a href="#" title="">แตงโม</a></li>
												<li><a href="#" title="">มะพร้าว</a></li>
												<li><a href="#" title="">ส้มโอ</a></li>
												<li><a href="#" title="">มะยม</a></li>
												<li><a href="#" title="">มะละกอ</a></li>
												<li><a href="#" title="">ละมุด</a></li>
												<li><a href="#" title="">แตงไท</a></li>
												<li><a href="#" title="">น้อยหน่า</a></li>
											</ul>
										</div>
										<!--user-profile-ov end-->
									</div>
									<!--product-feed-tab end-->
									<div class="product-feed-tab" id="rewivewdata">
										<section></section>



										<div class="posts-section">
											<div class="post-bar reviewtitle">
												<h2>Reviews</h2>
											</div>
											<!--post-bar end-->
											<div class="post-bar ">
												<div class="post_topbar">
													<div class="usy-dt">
														<img src="Documentation/images/resources/bg-img3.png" alt="">
														<div class="usy-name">
															<h3>Rock William</h3>
															<div class="epi-sec epi2">
																<ul class="descp review-lt">
																	<li><img src="Documentation/images/icon8.png" alt=""><span>Epic Coder</span></li>
																	<li><img src="Documentation/images/icon9.png" alt=""><span>India</span></li>
																</ul>
															</div>
														</div>
													</div>
												</div>

												<div class="job_descp mngdetl">
													<div class="star-descp review">
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star-half-o"></i></li>
														</ul>
														<a href="#" title="">5.0 of 5 Reviews</a>
													</div>
													<div class="reviewtext">
														<p>Lorem ipsum dolor sit amet, adipiscing elit. Nulla luctus mi et porttitor ultrices</p>
														<hr>
													</div>

													<div class="post_topbar post-reply">
														<div class="usy-dt">
															<img src="Documentation/images/resources/bg-img4.png" alt="">
															<div class="usy-name">
																<h3>John Doe</h3>
																<div class="epi-sec epi2">
																	<p><i class="la la-clock-o"></i>3 min ago</p>
																	<p class="tahnks">Thanks :)</p>
																</div>
															</div>
														</div>
													</div>
													<div class="post_topbar rep-post rep-thanks">
														<hr>
														<div class="usy-dt">
															<img src="Documentation/images/resources/bg-img4.png" alt="">
															<input class="reply" type="text" placeholder="Reply">
															<a class="replybtn" href="#">Send</a>

														</div>
													</div>

												</div>
											</div>
											<!--post-bar end-->
											<div class="post-bar post-thanks">
												<div class="post_topbar">
													<div class="usy-dt">
														<img src="Documentation/images/resources/bg-img1.png" alt="">
														<div class="usy-name">
															<h3>Jassica William</h3>
															<div class="epi-sec epi2">
																<ul class="descp review-lt">
																	<li><img src="Documentation/images/icon8.png" alt=""><span>Epic Coder</span></li>
																	<li><img src="Documentation/images/icon9.png" alt=""><span>India</span></li>
																</ul>
															</div>
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

												<div class="job_descp mngdetl">
													<div class="star-descp review">
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star-half-o"></i></li>
														</ul>
														<a href="#" title="">5.0 of 5 Reviews</a><br><br>
														<p>Awesome Work, Thanks John!</p>
														<hr>
													</div>
													<div class="post_topbar rep-post">
														<div class="usy-dt">
															<img src="Documentation/images/resources/bg-img4.png" alt="">

															<input class="reply" type="text" placeholder="Reply">
															<a class="replybtn" href="#">Send</a>

														</div>
													</div>
												</div>
											</div>
											<!--post-bar end-->
										</div>
										<!--posts-section end-->
									</div>
									<!--product-feed-tab end-->
									<div class="product-feed-tab" id="my-bids">
										<div class="posts-section">
											<div class="post-bar">
												<div class="post_topbar">
													<div class="usy-dt">
														<img src="Documentation/images/resources/us-pic.png" alt="">
														<div class="usy-name">
															<h3>John Doe</h3>
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
													<ul class="descp">
														<li><img src="Documentation/images/icon8.png" alt=""><span>Frontend Developer</span></li>
														<li><img src="Documentation/images/icon9.png" alt=""><span>India</span></li>
													</ul>
													<ul class="bk-links">
														<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
														<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
														<li><a href="#" title="" class="bid_now">Bid Now</a></li>
													</ul>
												</div>
												<div class="job_descp">
													<h3>Simple Classified Site</h3>
													<ul class="job-dt">
														<li><span>$300 - $350</span></li>
													</ul>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut
														ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a>
													</p>
													<ul class="skill-tags">
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
												<div class="job-status-bar">
													<ul class="like-com">
														<li>
															<a href="#"><i class="la la-heart"></i> Like</a>
															<img src="Documentation/images/liked-img.png" alt="">
															<span>25</span>
														</li>
														<li><a href="#" title="" class="com"><img src="Documentation/images/com.png" alt=""> Comment 15</a></li>
													</ul>
													<a><i class="la la-eye"></i>Views 50</a>
												</div>
											</div>
											<!--post-bar end-->
											<div class="post-bar">
												<div class="post_topbar">
													<div class="usy-dt">
														<img src="Documentation/images/resources/us-pic.png" alt="">
														<div class="usy-name">
															<h3>John Doe</h3>
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
													<ul class="descp">
														<li><img src="Documentation/images/icon8.png" alt=""><span>Frontend Developer</span></li>
														<li><img src="Documentation/images/icon9.png" alt=""><span>India</span></li>
													</ul>
													<ul class="bk-links">
														<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
														<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
														<li><a href="#" title="" class="bid_now">Bid Now</a></li>
													</ul>
												</div>
												<div class="job_descp">
													<h3>Ios Shopping mobile app</h3>
													<ul class="job-dt">
														<li><span>$300 - $350</span></li>
													</ul>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut
														ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a>
													</p>
													<ul class="skill-tags">
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
												<div class="job-status-bar">
													<ul class="like-com">
														<li>
															<a href="#"><i class="la la-heart"></i> Like</a>
															<img src="Documentation/images/liked-img.png" alt="">
															<span>25</span>
														</li>
														<li><a href="#" title="" class="com"><img src="Documentation/images/com.png" alt=""> Comment 15</a></li>
													</ul>
													<a><i class="la la-eye"></i>Views 50</a>
												</div>
											</div>
											<!--post-bar end-->
											<div class="post-bar">
												<div class="post_topbar">
													<div class="usy-dt">
														<img src="Documentation/images/resources/us-pic.png" alt="">
														<div class="usy-name">
															<h3>John Doe</h3>
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
													<ul class="descp">
														<li><img src="Documentation/images/icon8.png" alt=""><span>Frontend Developer</span></li>
														<li><img src="Documentation/images/icon9.png" alt=""><span>India</span></li>
													</ul>
													<ul class="bk-links">
														<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
														<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
														<li><a href="#" title="" class="bid_now">Bid Now</a></li>
													</ul>
												</div>
												<div class="job_descp">
													<h3>Simple Classified Site</h3>
													<ul class="job-dt">
														<li><span>$300 - $350</span></li>
													</ul>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut
														ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a>
													</p>
													<ul class="skill-tags">
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
												<div class="job-status-bar">
													<ul class="like-com">
														<li>
															<a href="#"><i class="la la-heart"></i> Like</a>
															<img src="Documentation/images/liked-img.png" alt="">
															<span>25</span>
														</li>
														<li><a href="#" title="" class="com"><img src="Documentation/images/com.png" alt=""> Comment 15</a></li>
													</ul>
													<a><i class="la la-eye"></i>Views 50</a>
												</div>
											</div>
											<!--post-bar end-->
											<div class="post-bar">
												<div class="post_topbar">
													<div class="usy-dt">
														<img src="Documentation/images/resources/us-pic.png" alt="">
														<div class="usy-name">
															<h3>John Doe</h3>
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
													<ul class="descp">
														<li><img src="Documentation/images/icon8.png" alt=""><span>Frontend Developer</span></li>
														<li><img src="Documentation/images/icon9.png" alt=""><span>India</span></li>
													</ul>
													<ul class="bk-links">
														<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
														<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
														<li><a href="#" title="" class="bid_now">Bid Now</a></li>
													</ul>
												</div>
												<div class="job_descp">
													<h3>Ios Shopping mobile app</h3>
													<ul class="job-dt">
														<li><span>$300 - $350</span></li>
													</ul>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut
														ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a>
													</p>
													<ul class="skill-tags">
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
												<div class="job-status-bar">
													<ul class="like-com">
														<li>
															<a href="#"><i class="la la-heart"></i> Like</a>
															<img src="Documentation/images/liked-img.png" alt="">
															<span>25</span>
														</li>
														<li><a href="#" title="" class="com"><img src="Documentation/images/com.png" alt=""> Comment 15</a></li>
													</ul>
													<a><i class="la la-eye"></i>Views 50</a>
												</div>
											</div>
											<!--post-bar end-->
											<div class="process-comm">
												<a href="#" title=""><img src="Documentation/images/process-icon.png" alt=""></a>
											</div>
											<!--process-comm end-->
										</div>
										<!--posts-section end-->
									</div>
									<!--product-feed-tab end-->
									<div class="product-feed-tab" id="portfolio-dd">
										<div class="portfolio-gallery-sec">
											<h3>Portfolio</h3>
											<div class="portfolio-btn">
												<a href="#" title=""><i class="fas fa-plus-square"></i> Add Portfolio</a>
											</div>
											<div class="gallery_pf">
												<div class="row">
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="Documentation/images/resources/pf-img1.jpg" alt="">
															<a href="my-profile-albums.html" title=""><img src="Documentation/images/all-out.png" alt=""></a>
														</div>
														<p class="name_albums">ผักโว้ย</p>
														<!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="Documentation/images/resources/pf-img2.jpg" alt="">
															<a href="my-profile-albums.html" title=""><img src="Documentation/images/all-out.png" alt=""></a>
														</div>
														<p class="name_albums">ผักโว้ย</p>
														<!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="Documentation/images/resources/pf-img3.jpg" alt="">
															<a href="my-profile-albums.html" title=""><img src="Documentation/images/all-out.png" alt=""></a>
														</div>
														<p class="name_albums">ผักโว้ย</p>
														<!--gallery_pt end-->
													</div>

												</div>
											</div>
											<!--gallery_pf end-->
										</div>
										<!--portfolio-gallery-sec end-->
									</div>
									<!--product-feed-tab end-->
									<div class="product-feed-tab" id="payment-dd">
										<div class="billing-method">
											<ul>
												<li>
													<h3>Add Billing Method</h3>
													<a href="#" title=""><i class="fa fa-plus-circle"></i></a>
												</li>
												<li>
													<h3>See Activity</h3>
													<a href="#" title="">View All</a>
												</li>
												<li>
													<h3>Total Money</h3>
													<span>$0.00</span>
												</li>
											</ul>
											<div class="lt-sec">
												<img src="Documentation/images/lt-icon.png" alt="">
												<h4>All your transactions are saved here</h4>
												<a href="#" title="">Click Here</a>
											</div>
										</div>
										<!--billing-method end-->
										<div class="add-billing-method">
											<h3>Add Billing Method</h3>
											<h4><img src="Documentation/images/dlr-icon.png" alt=""><span>With workwise payment protection , only pay for
													work delivered.</span></h4>
											<div class="payment_methods">
												<h4>Credit or Debit Cards</h4>
												<form>
													<div class="row">
														<div class="col-lg-12">
															<div class="cc-head">
																<h5>Card Number</h5>
																<ul>
																	<li><img src="Documentation/images/cc-icon1.png" alt=""></li>
																	<li><img src="Documentation/images/cc-icon2.png" alt=""></li>
																	<li><img src="Documentation/images/cc-icon3.png" alt=""></li>
																	<li><img src="Documentation/images/cc-icon4.png" alt=""></li>
																</ul>
															</div>
															<div class="inpt-field pd-moree">
																<input type="text" name="cc-number" placeholder="">
																<i class="fa fa-credit-card"></i>
															</div>
															<!--inpt-field end-->
														</div>
														<div class="col-lg-6">
															<div class="cc-head">
																<h5>First Name</h5>
															</div>
															<div class="inpt-field">
																<input type="text" name="f-name" placeholder="">
															</div>
															<!--inpt-field end-->
														</div>
														<div class="col-lg-6">
															<div class="cc-head">
																<h5>Last Name</h5>
															</div>
															<div class="inpt-field">
																<input type="text" name="l-name" placeholder="">
															</div>
															<!--inpt-field end-->
														</div>
														<div class="col-lg-6">
															<div class="cc-head">
																<h5>Expiresons</h5>
															</div>
															<div class="rowwy">
																<div class="row">
																	<div class="col-lg-6 pd-left-none no-pd">
																		<div class="inpt-field">
																			<input type="text" name="f-name" placeholder="">
																		</div>
																		<!--inpt-field end-->
																	</div>
																	<div class="col-lg-6 pd-right-none no-pd">
																		<div class="inpt-field">
																			<input type="text" name="f-name" placeholder="">
																		</div>
																		<!--inpt-field end-->
																	</div>
																</div>
															</div>
														</div>
														<div class="col-lg-6">
															<div class="cc-head">
																<h5>Cvv (Security Code) <i class="fa fa-question-circle"></i></h5>
															</div>
															<div class="inpt-field">
																<input type="text" name="l-name" placeholder="">
															</div>
															<!--inpt-field end-->
														</div>
														<div class="col-lg-12">
															<button type="submit">Continue</button>
														</div>
													</div>
												</form>
												<h4>Add Paypal Account</h4>
											</div>
										</div>
										<!--add-billing-method end-->
									</div>
									<!--product-feed-tab end-->
								</div>
								<!--main-ws-sec end-->
							</div>
							<div class="col-lg-3">
								<div class="right-sidebar">
									<div class="message-btn">
										<a href="profile-account-setting.html" title=""><i class="fas fa-cog"></i> ตั้งค่า</a>
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
						<li><a href="help-center.html" title="">Help Center</a></li>
						<li><a href="about.html" title="">About</a></li>
						<li><a href="#" title="">Privacy Policy</a></li>
						<li><a href="#" title="">Community Guidelines</a></li>
						<li><a href="#" title="">Cookies Policy</a></li>
						<li><a href="#" title="">Career</a></li>
						<li><a href="forum.html" title="">Forum</a></li>
						<li><a href="#" title="">Language</a></li>
						<li><a href="#" title="">Copyright Policy</a></li>
					</ul>
					<p><img src="Documentation/images/copy-icon2.png" alt="">Copyright 2019</p>
					<img class="fl-rgt" src="Documentation/images/logo2.png" alt="">
				</div>
			</div>
		</footer>
		<!--footer end-->

		<div class="overview-box" id="overview-box">
			<div class="overview-edit">
				<h3>Overview</h3>
				<span>5000 character left</span>
				<form>
					<textarea></textarea>
					<button type="submit" class="save">Save</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div>
			<!--overview-edit end-->
		</div>
		<!--overview-box end-->


		<div class="overview-box" id="experience-box">
			<div class="overview-edit">
				<h3>Experience</h3>
				<form>
					<input type="text" name="subject" placeholder="Subject">
					<textarea></textarea>
					<button type="submit" class="save">Save</button>
					<button type="submit" class="save-add">Save & Add More</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div>
			<!--overview-edit end-->
		</div>
		<!--overview-box end-->

		<div class="overview-box" id="education-box">
			<div class="overview-edit">
				<h3>Education</h3>
				<form>
					<input type="text" name="school" placeholder="School / University">
					<div class="datepicky">
						<div class="row">
							<div class="col-lg-6 no-left-pd">
								<div class="datefm">
									<input type="text" name="from" placeholder="From" class="datepicker">
									<i class="fa fa-calendar"></i>
								</div>
							</div>
							<div class="col-lg-6 no-righ-pd">
								<div class="datefm">
									<input type="text" name="to" placeholder="To" class="datepicker">
									<i class="fa fa-calendar"></i>
								</div>
							</div>
						</div>
					</div>
					<input type="text" name="degree" placeholder="Degree">
					<textarea placeholder="Description"></textarea>
					<button type="submit" class="save">Save</button>
					<button type="submit" class="save-add">Save & Add More</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div>
			<!--overview-edit end-->
		</div>
		<!--overview-box end-->

		<div class="overview-box" id="location-box">
			<div class="overview-edit">
				<h3>Location</h3>
				<form>
					<div class="datefm">
						<select>
							<option>Country</option>
							<option value="pakistan">Pakistan</option>
							<option value="england">England</option>
							<option value="india">India</option>
							<option value="usa">United Sates</option>
						</select>
						<i class="fa fa-globe"></i>
					</div>
					<div class="datefm">
						<select>
							<option>City</option>
							<option value="london">London</option>
							<option value="new-york">New York</option>
							<option value="sydney">Sydney</option>
							<option value="chicago">Chicago</option>
						</select>
						<i class="fa fa-map-marker"></i>
					</div>
					<button type="submit" class="save">Save</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div>
			<!--overview-edit end-->
		</div>
		<!--overview-box end-->

		<div class="overview-box" id="skills-box">
			<div class="overview-edit">
				<h3>Skills</h3>
				<ul>
					<li><a href="#" title="" class="skl-name">HTML</a><a href="#" title="" class="close-skl"><i
								class="la la-close"></i></a></li>
					<li><a href="#" title="" class="skl-name">php</a><a href="#" title="" class="close-skl"><i
								class="la la-close"></i></a></li>
					<li><a href="#" title="" class="skl-name">css</a><a href="#" title="" class="close-skl"><i
								class="la la-close"></i></a></li>
				</ul>
				<form>
					<input type="text" name="skills" placeholder="Skills">
					<button type="submit" class="save">Save</button>
					<button type="submit" class="save-add">Save & Add More</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div>
			<!--overview-edit end-->
		</div>
		<!--overview-box end-->

		<div class="overview-box" id="create-portfolio">
			<div class="overview-edit">
				<h3>สร้างอัลบั้ม</h3>
				<form>
					<input type="text" name="pf-name" placeholder="ชื่ออัลบั้ม">
					<input type="text" name="pf-name" placeholder="กิโลกรัม">
					<input type="text" name="pf-name" placeholder="ราคา (บาท) / กิโลกรัม">
					<input type="date" name="pf-name" placeholder="วันที่พร้อมส่ง">
					<input type="text" name="pf-name" placeholder="สถาณะ">
					
					<div class="file-submit">
						<input type="file" id="file">
						<label for="file">เลือกรูปภาพ</label>
					</div>
					<div class="pf-img">
						<img src="Documentation/images/resources/np.png" alt="">
					</div>
					<input type="text" name="website-url" placeholder="htp://www.example.com">
					<button type="submit" class="save">บันทึก</button>
					<button type="submit" class="cancel">ยกเลิก</button>
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