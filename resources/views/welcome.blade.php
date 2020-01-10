<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>VEG A MINUTE - Log in</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" type="text/css" href="Documentation/css/animate.css">
	<link rel="stylesheet" type="text/css" href="Documentation/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Documentation/css/line-awesome.css">
	<link rel="stylesheet" type="text/css" href="Documentation/css/line-awesome-font-awesome.min.css">
	<link href="Documentation/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="Documentation/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="Documentation/lib/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="Documentation/lib/slick/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="Documentation/css/style.css">
	<link rel="stylesheet" type="text/css" href="Documentation/css/responsive.css">
</head>


<body class="sign-in">
	

	<div class="wrapper">		

		<div class="sign-in-page">
			<div class="signin-popup">
				<div class="signin-pop">
					<div class="row">
						<div class="col-lg-6">
							<div class="cmp-info">
								<div class="cm-logo">
									<center><div style="font-size:30px;">VEG A MINUTE</div></center>
								</div><!--cm-logo end-->	
								<img src="Documentation/images/logologin.png" alt="">			
							</div><!--cmp-info end-->
						</div>
						<div class="col-lg-6">
							<div class="login-sec">
								<ul class="sign-control">
									<li data-tab="tab-1" class="current"><a href="#" title="">Sign in</a></li>				
									<li data-tab="tab-2"><a href="#" title="">Sign up</a></li>				
								</ul>			
								<div class="sign_in_sec current" id="tab-1">
									
									<h3>Sign in</h3>
									<form >
										@csrf
										<div class="row">
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
												<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail">
													<i class="la la-user"></i>
													@error('email')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
													@enderror
												</div><!--sn-field end-->
											</div>
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
												<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
													<i class="la la-lock"></i>
													@error('password')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
													@enderror
												</div>
											</div>
											<div class="col-lg-12 no-pdd">
												<div class="checky-sec">
													<div class="fgt-sec">
														<input type="checkbox" name="cc" id="c1">
														<label for="c1">
															<span></span>
														</label>
														<small>Remember me</small>
													</div><!--fgt-sec end-->
													<a href="#" title="">Forgot Password?</a>

												</div>
											</div>
											<div class="col-lg-12 no-pdd">
											<a href="{{ route('timeline')}}"><button type="submit" class="btn btn-default">Log In</button></a>
                        					<input type="hidden" name="_token" value="{{ Session::token() }}">
											</div>
										</div>
									</form>
									
								</div><!--sign_in_sec end-->
								<div class="sign_in_sec" id="tab-2">
									<div class="signup-tab">
										<i class="fa fa-long-arrow-left"></i>
										<h2>sombeehurn@eieiza.com</h2>
										<ul>
											<li data-tab="tab-3" class="current"><a href="#" title="">User</a></li>
											<li data-tab="tab-4"><a href="#" title="">Farmer</a></li>
										</ul>
									</div><!--signup-tab end-->	
									<div class="dff-tab current" id="tab-3">
										<form>
											<div class="row">
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="name" placeholder="Full Name">
														<i class="la la-user"></i>
													</div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="email" placeholder="E-mail Your">
														<i class="la la-user"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="password" name="password" placeholder="Password">
														<i class="la la-lock"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="checky-sec st2">
														<div class="fgt-sec">
															<input type="checkbox" name="cc" id="c2">
															<label for="c2">
																<span></span>
															</label>
															<small>Yes, I understand and agree to the VEG A MINUTE Terms & Conditions.</small>
														</div><!--fgt-sec end-->
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<a href="{{ route('timeline')}}"><button type="submit" value="submit">Get Started</button></a>
												</div>
											</div>
										</form>
									</div><!--dff-tab end-->
									<div class="dff-tab" id="tab-4">
										<form method="post">
											<div class="row">
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="name" name="name" placeholder="Full Name" id="first_name" value="{{ Request::old('name') }}">
														<i class="la la-lock"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="email" name="email" placeholder="E-mail" id="first_name" value="{{ Request::old('email') }}">
														<i class="la la-lock"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="password" name="password" placeholder="Password">
														<i class="la la-lock"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="checky-sec st2">
														<div class="fgt-sec">
															<input type="checkbox" name="cc" id="c3">
															<label for="c3">
																<span></span>
															</label>
															<small>Yes, I understand and agree to the VEG A MINUTE Terms & Conditions.</small>
														</div><!--fgt-sec end-->
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<button type="submit" value="submit">Get Started</button>
												</div>
											</div>
										</form>
									</div><!--dff-tab end-->
								</div>		
							</div><!--login-sec end-->
						</div>
					</div>		
				</div><!--signin-pop end-->
			</div><!--signin-popup end-->
			<div class="footy-sec">
				<div class="container">
				
				</div>
			</div><!--footy-sec end-->
		</div><!--sign-in-page end-->


	</div><!--theme-layout end-->



<script type="text/javascript" src="Documentation/js/jquery.min.js"></script>
<script type="text/javascript" src="Documentation/js/popper.js"></script>
<script type="text/javascript" src="Documentation/js/bootstrap.min.js"></script>
<script type="text/javascript" src="Documentation/lib/slick/slick.min.js"></script>
<script type="text/javascript" src="Documentation/js/script.js"></script>
</body>
</html>