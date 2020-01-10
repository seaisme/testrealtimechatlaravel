
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>VEG A MINUTE - Help Center</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="" />
</head>


<body>	

	<div class="wrapper">		

		@include('navbar');

		<main>
			<div class="main-section">
				<div class="container">
					<div class="main-section-data">
						<div class="row">
							<div class="col-lg-3 col-md-12">
								<div class="filter-secs">
									<div class="filter-heading">
										<h3>ศูนย์ความช่วยเหลือ</h3>
									</div>
									<div class="paddy help-paddy">
										<div class="filter-dd">
											<div class="filter-ttl filter--tt2">
												<a href="#">คำถามที่พบบ่อย</a>
											</div>
										</div>
										<div class="filter-dd">
											<div class="filter-ttl filter--tt2">
												<a href="#">การใช้งาน VEG A MINUTE</a>
											</div>
										</div>
										<div class="filter-dd">
											<div class="filter-ttl filter--tt2">
												<a href="#">การจัดการบัญชีของคุณ</a>
											</div>
										</div>
										<div class="filter-dd">
											<div class="filter-ttl filter--tt2">
												<a href="#">ความเป็นส่วนตัวและความปลอดภัย</a>
											</div>
										</div>
										<div class="filter-dd">
											<div class="filter-ttl accountnone filter--tt2">
												<a href="#">นโยบายการรายงาน</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						       <!--รอข้อมูล -->
						       <div class="col-lg-9">
						       <div class="tab-content" id="nav-tabContent">
						    <div class="tab-pane fade show active" id="nav-acc" role="tabpanel" aria-labelledby="nav-acc-tab">
									<div class="acc-setting" >
										<h3>คำถามที่พบบ่อย</h3> 
										<form>
											<div class="dropdown">
												<br><a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>วิธีลงขายสินค้า</b></a>
												<div class="dropdown-menu">
                                                       <a href="#" class="dropdown-item top--1 ">รอนะจ้ะ</a>
                                                </div>
											</div><br>
											<div class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">ฉันจะซื้อสินค้าหรือจองสินค้าได้อย่างไร</a>
												<div class="cpp-fiel">
														<div class="dropdown-menu">
                                                       <a href="#" class="dropdown-item top--1 ">รอนะจ้ะ</a>
                                                </div>
												</div>
											</div><br>
											<div class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">ฉันจะรีเซ็ตรหัสผ่านของฉันได้อย่างไร</a>
													<div class="dropdown-menu">
                                                       <a href="#" class="dropdown-item top--1 ">รอนะจ้ะ</a>
                                                </div>
											</div><br>
											<div class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">ชื่อใดบ้างที่ใช้ได้บน VEG A MINUTE</a>
													<div class="dropdown-menu">
                                                       <a href="#" class="dropdown-item top--1 ">รอนะจ้ะ</a>
                                                </div>
											</div><br>
											
										</form>
									</div>
								</div>
							</div>
						</div>
						</div>
					</div>
				</div> 
			</div>
		</main>




		<div class="post-popup pst-pj">
			<div class="post-project">
				<h3>Post a project</h3>
				<div class="post-project-fields">
					<form>
						<div class="row">
							<div class="col-lg-12">
								<input type="text" name="title" placeholder="Title">
							</div>
							<div class="col-lg-12">
								<div class="inp-field">
									<select>
										<option>Category</option>
										<option>Category 1</option>
										<option>Category 2</option>
										<option>Category 3</option>
									</select>
								</div>
							</div>
							<div class="col-lg-12">
								<input type="text" name="skills" placeholder="Skills">
							</div>
							<div class="col-lg-12">
								<div class="price-sec">
									<div class="price-br">
										<input type="text" name="price1" placeholder="Price">
										<i class="la la-dollar"></i>
									</div>
									<span>To</span>
									<div class="price-br">
										<input type="text" name="price1" placeholder="Price">
										<i class="la la-dollar"></i>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<textarea name="description" placeholder="Description"></textarea>
							</div>
							<div class="col-lg-12">
								<ul>
									<li><button class="active" type="submit" value="post">Post</button></li>
									<li><a href="#" title="">Cancel</a></li>
								</ul>
							</div>
						</div>
					</form>
				</div>
				<a href="#" title=""><i class="la la-times-circle-o"></i></a>
			</div>
		</div>

		<div class="post-popup job_post">
			<div class="post-project">
				<h3>Post a job</h3>
				<div class="post-project-fields">
					<form>
						<div class="row">
							<div class="col-lg-12">
								<input type="text" name="title" placeholder="Title">
							</div>
							<div class="col-lg-12">
								<div class="inp-field">
									<select>
										<option>Category</option>
										<option>Category 1</option>
										<option>Category 2</option>
										<option>Category 3</option>
									</select>
								</div>
							</div>
							<div class="col-lg-12">
								<input type="text" name="skills" placeholder="Skills">
							</div>
							<div class="col-lg-6">
								<div class="price-br">
									<input type="text" name="price1" placeholder="Price">
									<i class="la la-dollar"></i>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="inp-field">
									<select>
										<option>Full Time</option>
										<option>Half time</option>
									</select>
								</div>
							</div>
							<div class="col-lg-12">
								<textarea name="description" placeholder="Description"></textarea>
							</div>
							<div class="col-lg-12">
								<ul>
									<li><button class="active" type="submit" value="post">Post</button></li>
									<li><a href="#" title="">Cancel</a></li>
								</ul>
							</div>
						</div>
					</form>
				</div>
				<a href="#" title=""><i class="la la-times-circle-o"></i></a>
			</div>
		</div>


	</div>
	<footer>
			<div class="footy-sec mn no-margin">
				<div class="container">
					<ul>
				
					</ul>
					
				</div>
			</div>
		</footer>
</body>
</html>