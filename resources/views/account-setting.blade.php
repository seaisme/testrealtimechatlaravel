
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>VEG A MINUTE - Account Setting</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
</head>


<body>	

	<div class="wrapper">	
		@include('navbar');


		<section class="profile-account-setting">
			<div class="container">
				<div class="account-tabs-setting">
					<div class="row">
						<div class="col-lg-3">
							<div class="acc-leftbar">

								<div class="nav nav-tabs" id="nav-tab" role="tablist">
									<div class="filter-heading">
										<h3>ตั้งค่าบัญชีทัวไป</h3>
									</div>
								    <a class="nav-item nav-link active" id="nav-acc-tab" data-toggle="tab" href="#nav-acc" role="tab" aria-controls="nav-acc" aria-selected="true">ตั้งค่าบัญชีผู้ใช้</a>
								    <a class="nav-item nav-link" id="nav-password-tab" data-toggle="tab" href="#nav-password" role="tab" aria-controls="nav-password" aria-selected="false">เปลี่ยนรหัสผ่าน</a>	   
								    <a class="nav-item nav-link" id="nav-address-tab" data-toggle="tab" href="#nav-address" role="tab" aria-controls="nav-address" aria-selected="false">ที่อยู่</a>
								  </div>
							</div>
						</div>
						<div class="col-lg-9">
							<div class="tab-content" id="nav-tabContent">
								<div class="tab-pane fade show active" id="nav-acc" role="tabpanel" aria-labelledby="nav-acc-tab">
									<div class="acc-setting" >
										<h3>ตั้งค่าบัญชีผู้ใช้</h3>
										<form>
											<div class="cp-field col-lg-6">
												<h5>ชื่อ</h5>
												<div class="cpp-fiel">
													<input type="text" name="names" >	
												</div>
											</div>
											<div class="cp-field col-lg-6">
												<h5>นามสกุล</h5>
												<div class="cpp-fiel">
													<input type="text" name="last-names" >	
												</div>
											</div>
											<div class="cp-field ">
												<h5>อีเมล</h5>
												<div class="cpp-fiel">
													<input type="text" name="email" >	
												</div>
											</div>
											<div class="cp-field ">
												<h5>ยืนยันอีเมล</h5>
												<div class="cpp-fiel">
													<input type="text" name="confirm-email" >	
												</div>
											</div>
											<div class="save-stngs">
												<ul>
													<li><button type="submit">ยืนยัน</button></li>
													<li><button type="submit">ยกเลิก</button></li>
												</ul>
											</div>
										</form>
									</div>
								</div>
							
							  	<div class="tab-pane fade" id="nav-password" role="tabpanel" aria-labelledby="nav-password-tab">
							  		<div class="acc-setting">
										<h3>เปลี่ยนรหัสผ่าน</h3>
										<form>
											<div class="cp-field">
												<h5>รหัสผ่านเก่า</h5>
												<div class="cpp-fiel">
													<input type="text" name="old-password" >	
												</div>
											</div>
											<div class="cp-field">
												<h5>รหัสผ่านใหม่</h5>
												<div class="cpp-fiel">
													<input type="text" name="new-password" >	
												</div>
											</div>
											<div class="cp-field">
												<h5>ยืนยันรหัสผ่าน</h5>
												<div class="cpp-fiel">
													<input type="text" name="repeat-password" >	
												</div>
											</div>
											<div class="save-stngs pd2">
												<ul>
													<li><button type="submit">ยืนยัน</button></li>
													<li><button type="submit">ยกเลิก</button></li>
												</ul>
											</div>
										</form>
									</div>
							  	</div>
							  	<div class="tab-pane fade" id="nav-address" role="tabpanel" aria-labelledby="nav-address-tab">
							  		<div class="acc-setting">
										<h3>ที่อยู่</h3>
										<form>
											<div class="cp-field col-lg-6">
												<h5>ชื่อ</h5>
												<div class="cpp-fiel">
													<input type="text" name="old-address" >	
												</div>
											</div>
											<div class="cp-field col-lg-6">
												<h5>นามสกุล</h5>
												<div class="cpp-fiel">
													<input type="text" name="old-password" >	
												</div>
											</div>
											<div class="cp-field">
												<h5>เบอร์โทร</h5>
												<div class="cpp-fiel">
													<input type="address" name="Telephone-number">
											</div>
											</div>
											<div class="cp-field">
												<h5>ที่อยู่</h5>
												<div class="cpp-fiel">
													<input type="address" name="address">
											    </div>
											</div>
											<div class="cp-field col-lg-6">
												<h5>ตำบล</h5>
												<div class="cpp-fiel">
													<input type="address" name="district">
												</div>
											</div>
											<div class="cp-field col-lg-6">
												<h5>อำเภอ</h5>
												<div class="cpp-fiel">
													<input type="address" name="district">
												</div>
											</div>
											<div class="cp-field col-lg-6">
												<h5>จังหวัด</h5>
												<div class="cpp-fiel">
													<input type="address" name="province">
												</div>
											</div>
												<div class="cp-field col-lg-6">
												<h5>รหัสไปรษณีย์</h5>
												<div class="cpp-fiel">
													<input type="address" name="postcode">
												</div>
											</div>
											<div class="save-stngs pd3">
												<ul>
													<li><button type="submit">ยืนยัน</button></li>
													<li><button type="submit">ยกเลิก</button></li>
												</ul>
											</div>
										</form>
									</div>
							  	</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<footer>
			<div class="footy-sec mn no-margin">
				<div class="container">
					<ul>
						
					</ul>
					
				</div>
			</div>
		</footer>

	</div>



</body>
</html>