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
							<div class="col-lg-9">
								<div class="main-ws-sec">
									<div class="user-tab-sec rewivew">
										<h3>สมปอง รักยิ่ง</h3>
										<div class="star-descp">
											<span>หาผักหาผลไม้กินเล่น</span>
										</div>
										<!--star-descp end-->
										<div class="tab-feed st2 settingjb">
											<ul>
												<li data-tab="portfolio-dd" class="active">
													<a href="#" title="">
														<img src="Documentation/images/ic3.png" alt="">
														<span>รูปภาพ</span>
													</a>
												</li>
											</ul>
										</div><!-- tab-feed end-->
									</div>
									<!--user-tab-sec end-->
									<div class="product-feed-tab current" id="portfolio-dd">
										<div class="portfolio-gallery-sec">
											<a href="my-profile-feed.html" title="">
												<img src="Documentation/images/ic1.png" alt="">
											</a>
											<h3 class="mt-1 ml-2">Portfolio</h3>
											<div class="portfolio-btn">
												<a href="#" title=""><i class="fas fa-plus-square"></i> Add Portfolio</a>
											</div>
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
							
						</div>
					</div><!-- main-section-data end-->
				</div>
			</div>
		</main>

		<footer>
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