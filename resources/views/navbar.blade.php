<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>VEG A MINUTE - Index</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" type="text/css" href="Documentation/css/animate.css">
	<link rel="stylesheet" type="text/css" href="Documentation/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Documentation/css/line-awesome.css">
	<link rel="stylesheet" type="text/css" href="Documentation/css/line-awesome-font-awesome.min.css">
	<link href="Documentation/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="Documentation/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="Documentation/css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" type="text/css" href="Documentation/lib/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="Documentation/lib/slick/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="Documentation/css/style.css">
	<link rel="stylesheet" type="text/css" href="Documentation/css/responsive.css">
</head>

<body>

<header>
    <div class="container">
        <div class="header-data">
            <div class="logo">
                <a href="{{ route('timeline')}}" title=""><img src="Documentation/images/logo.png" alt=""></a>
            </div><!--logo end-->
            <div class="search-bar">
                <form>
                    <input type="text" name="search" placeholder="Search...">
                    <button type="submit"><i class="la la-search"></i></button>
                </form>
            </div><!--search-bar end-->
            <nav>
                <ul>
                    <li>
                        <a href="{{ route('timeline')}}" title="">
                            <span><img src="Documentation/images/icon1.png" alt=""></span>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('user-profile')}}" title="">
                            <span><img src="Documentation/images/iconprofile.png" alt=""></span>
                            Profiles
                        </a>
                        <!--
                        <ul>
                            <li><a href="#" title="">User Profile</a></li>
                            <li><a href="my-profile-feed.html" title="">my-profile-feed</a></li>
                        </ul>
                        -->
                    </li>
                    <li>
                        <a href="#" title="">
                            <span><img src="Documentation/images/icon4.png" alt=""></span>
                            Follow
                        </a>
                    </li>
                    <li>
                    <a href="#" title="" class="not-box-openm">
                            <span><img src="Documentation/images/icon6.png" alt=""></span>
                            Messages
                        </a>
                        <div class="notification-box msg" id="message">
                            <div class="nt-title">
                                <h4>Setting</h4>
                                {{-- <a href="#" title="">Clear all</a> --}}
                            </div>
                            <div class="nott-list">
                                <div class="notfication-details">
                                      <div class="noty-user-img">
                                          <img src="Documentation/images/resources/ny-img1.png" alt="">
                                      </div>
                                      <div class="notification-info">
                                          <h3><a href="messages.html" title="">Jassica William</a> </h3>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
                                          <span>2 min ago</span>
                                      </div><!--notification-info -->
                                  </div>
                                  <div class="notfication-details">
                                  <div class="view-all-nots">
                                      <a href="{{ route('message')}}" title="">View All Messsages</a>
                                  </div>
                            </div><!--nott-list end-->
                        </div><!--notification-box end-->
                    </li>
                    <li>
                        <a href="#" title="" class="not-box-open">
                            <span><img src="Documentation/images/icon7.png" alt=""></span>
                            Notification
                        </a>
                        <div class="notification-box noti" id="notification">
                            <div class="nt-title">
                                <h4>Setting</h4>
                                <a href="#" title="">Clear all</a>
                            </div>
                            <div class="nott-list">
                                <div class="notfication-details">
                                      <div class="noty-user-img">
                                          <img src="Documentation/images/resources/ny-img1.png" alt="">
                                      </div>
                                      <div class="notification-info">
                                          <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                          <span>2 min ago</span>
                                      </div><!--notification-info -->
                                  </div>
                                  <div class="notfication-details">
                                      <div class="noty-user-img">
                                          <img src="Documentation/images/resources/ny-img2.png" alt="">
                                      </div>
                                      <div class="notification-info">
                                          <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                          <span>2 min ago</span>
                                      </div><!--notification-info -->
                                  </div>
                                  <div class="notfication-details">
                                      <div class="noty-user-img">
                                          <img src="Documentation/images/resources/ny-img3.png" alt="">
                                      </div>
                                      <div class="notification-info">
                                          <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                          <span>2 min ago</span>
                                      </div><!--notification-info -->
                                  </div>
                                  <div class="notfication-details">
                                      <div class="noty-user-img">
                                          <img src="Documentation/images/resources/ny-img2.png" alt="">
                                      </div>
                                      <div class="notification-info">
                                          <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                          <span>2 min ago</span>
                                      </div><!--notification-info -->
                                  </div>
                                  <div class="view-all-nots">
                                      <a href="#" title="">View All Notification</a>
                                  </div>
                            </div><!--nott-list end-->
                        </div><!--notification-box end-->
                    </li>
                    <li>
                        <a href="{{ route('ket')}}" title="" class="not-box-open">
                            <span><img src="Documentation/images/iconcart.png" alt=""></span>
                            Carts
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('help-center')}}" title="" class="not-box-open">
                            <span><img src="Documentation/images/iconfaq.png" alt=""></span>
                            Help
                        </a>

                                
                    </li>
                </ul>
            </nav><!--nav end-->
            <div class="menu-btn">
            </div><!--menu-btn end-->
            <div class="user-account">
                <div class="user-info">
                    <br><i class="la la-sort-down"></i>
                </div>
                <div class="user-account-settingss" id="users">
                    <h3>Setting</h3>
                    <ul class="us-links">
                        <li><a href="{{ route('account-setting')}}" title="">Setting</a></li>
                        <li><a href="#" title="">Activities</a></li>
                    </ul>
                    <h3 class="tc"><a href="{{ route('index')}}" title="">Logout</a></h3>
                </div><!--user-account-settingss end-->
            </div>
        </div><!--header-data end-->
    </div>
</header><!--header end-->	

<script type="text/javascript" src="Documentation/js/jquery.min.js"></script>
<script type="text/javascript" src="Documentation/js/popper.js"></script>
<script type="text/javascript" src="Documentation/js/bootstrap.min.js"></script>
<script type="text/javascript" src="Documentation/js/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="Documentation/lib/slick/slick.min.js"></script>
<script type="text/javascript" src="Documentation/js/scrollbar.js"></script>
<script type="text/javascript" src="Documentation/js/script.js"></script>

</body>
</html>