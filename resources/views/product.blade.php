
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>VEG A MINUTE - Product</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
</head>


<body>
	
	<div class="wrapper">	

		@include('navbar');

		<div class="search-sec">
			<div class="container">
				<div class="search-box">
					<form>
						<input type="text" name="search" placeholder="ค้นหาสินค้าที่ต้องการ">
						<button type="submit">ค้นหา</button>
					</form>
				</div><!--search-box end-->
			</div>
		</div><!--search-sec end-->


		<main>
			<div class="main-section">
				<div class="container">
					<div class="main-section-data">
						<div class="row">
							<div class="col-lg-3">
								<div class="filter-secs">
									<div class="filter-heading">
										<h3>Filters</h3>
										<a href="#" title="">Clear all filters</a>
									</div><!--filter-heading end-->
									<div class="paddy">
										<div class="filter-dd">
											<div class="filter-ttl">
												<h3>ประเภทผลไม้</h3>
												<a href="#" title="">Clear</a>
											</div>
											<form class="job-tp">
												<select>
													<option>กรุณาเลือก</option>
													<option>ฤดูหนาว</option>
													<option>ฤดูร้อน</option>
													<option>ฤดูฝน</option>
												</select>
												<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
											</form>
										</div>
										<div class="filter-dd">
											<div class="filter-ttl">
												<h3>ราคา กิโลกรัม / บาท</h3>
												<a href="#" title="">Clear</a>
											</div>
											<div class="rg-slider">
													<input class="rn-slider slider-input" type="hidden" value="5,50" />
											</div>
											<div class="rg-limit">
												<h4>1</h4>
												<h4>100+</h4>
											</div><!--rg-limit end-->
										</div>
									</div>
								</div><!--filter-secs end-->
							</div>
							<div class="col-lg-6">
								<div class="main-ws-sec">
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
													<li><a href="#" title="" class="bid_now">พร้อมขาย</a></li>
												</ul>
											</div>
											<div class="job_descp">
												<h3>มะพร้าวน้ำหอม</h3>
												<ul class="job-dt">
													<li><span>300 บาท / กิโลกรัม</span></li>
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
										</div><!--post-bar end-->
									</div><!--posts-section end-->
								</div><!--main-ws-sec end-->
							</div>
							<div class="col-lg-3">
								<div class="right-sidebar">
									<div class="widget widget-jobs">
										<div class="sd-title">
											<h3>Top farm</h3>
											<i class="la la-ellipsis-v"></i>
										</div>
										<div class="jobs-list">
											<div class="job-info">
												<div class="job-details">
													<h3>ฟาร์มลุงสมหมาย บ้านใต้</h3>
												</div>
											</div><!--job-info end-->
											<div class="job-info">
												<div class="job-details">
													<h3>ฟาร์มป้าสมศรี บ้านเหนือ</h3>
												</div>
											</div><!--job-info end-->
										</div><!--jobs-list end-->
									</div><!--widget-jobs end-->
									<div class="widget widget-jobs">
										<div class="sd-title">
											<h3>สิ้นค้าขายดี</h3>
											<i class="la la-ellipsis-v"></i>
											</div>
											<div class="jobs-list">
												<div class="job-info">
													<div class="job-details">
														<h3>สตอเบอร์รี่</h3>
														<p>ที่ดีที่สุด</p>
													</div>
													<div class="hr-rate">
														<span>..</span>
													</div>
												</div>
												<!--job-info end-->
												<div class="job-info">
													<div class="job-details">
														<h3>ส้ม</h3>
														<p>ที่่หวานที่สุด</p>
													</div>
													<div class="hr-rate">
														<span>..</span>
													</div>
												</div>
												<!--job-info end-->
												<div class="job-info">
													<div class="job-details">
														<h3>แตงโม</h3>
														<p>แดงสดน่ากิน</p>
													</div>
													<div class="hr-rate">
														<span>..</span>
													</div>
												</div>
											</div><!--job-info end-->
										</div><!--jobs-list end-->
									</div><!--widget-jobs end-->
							</div><!--right-sidebar end-->
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
						<li><a href="#" title=""></a></li>
					</ul>
				</div>
			</div>
		</footer>		

	</div><!--theme-layout end-->
</body>
</html>