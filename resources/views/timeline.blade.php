<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>VEG A MINUTE</title>
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
                            <div class="col-lg-3 col-md-4 pd-left-none no-pd">
                                <div class="main-left-sidebar no-margin">
                                    <div class="user-data full-width">
                                        <div class="user-profile">
                                            <div class="username-dt">
                                                <div class="usr-pic">
                                                    <img src="Documentation/images/resources/user-pic.png" alt="">
                                                </div>
                                            </div><!--username-dt end-->
                                            <div class="user-specs">
                                                <h3>สมหญิง</h3>
                                                <span>รักผลไม้</span>
                                            </div>
                                        </div><!--user-profile end-->
                                        <ul class="user-fw-status">
                                            <li>
                                                <h4>Following</h4>
                                                <span>34</span>
                                            </li>
                                            <li>
                                                <h4>Followers</h4>
                                                <span>155</span>
                                            </li>
                                            <li>
                                                <a href="{{ route('user-profile')}}" title="">View Profile</a><br>
                                                <a href="{{ route('seller-profile')}}" title="">View Profile (Farmer)</a>
                                            </li>
                                        </ul>
                                    </div><!--user-data end-->
                                    <div class="suggestions full-width">
                                        <div class="sd-title">
                                            <h3>ปฏิทิน</h3>
                                            <i class="la la-ellipsis-v"></i>
                                        </div>

                                        <!--sd-title end-->
                                        <div class="suggestions-list">

                                            <img src="https://scontent.fbkk12-3.fna.fbcdn.net/v/t1.15752-9/78499530_433671007534653_8079929018264059904_n.png?_nc_cat=102&_nc_ohc=DRSvwC1rWI0AQkeD0wo2b5rwDQJfQw01fWOYYhZ5qJC0Le7eXEUq7B8dg&_nc_ht=scontent.fbkk12-3.fna&oh=be23f8ac9e091b8be1ec1c3b126ac5d2&oe=5E495909" alt="" href="calender.php"> <center><a href="{{ route('calender')}}">Visit</a></center>
                                        </div><!--suggestions-list end-->
                                    </div><!--suggestions end-->
                                    <div class="tags-sec full-width">
                                        <div class="cp-sec">


                                            <img src="" alt="">
                                            <center>เวท อะ มินิท</center><p><img src="https://scontent.fbkk12-1.fna.fbcdn.net/v/t1.0-9/78067499_2679466222109470_965113725897932800_n.jpg?_nc_cat=101&_nc_ohc=Kuygy0rH9N4AQno_Ycdyhuu2po3PjmC28iuG5euT4p0FYzDTsp2cegYjg&_nc_ht=scontent.fbkk12-1.fna&oh=5fae3b6bb998959473980065c96b94bd&oe=5E8B4C0B" alt=""></p>
                                        </div>
                                        <ul>
                                            <li><a href="#" title="">Help Center</a></li>
                                            <li><a href="#" title="">About</a></li>
                                            <li><a href="#" title="">Privacy Policy</a></li>
                                            <li><a href="#" title="">Community Guidelines</a></li>
                                            <li><a href="#" title="">Cookies Policy</a></li>
                                            <li><a href="#" title="">Career</a></li>
                                            <li><a href="#" title="">Language</a></li>
                                            
                                        </ul>
                                        
                                    </div><!--tags-sec end-->
                                </div><!--main-left-sidebar end-->
                            </div>
                            <div class="col-lg-6 col-md-8 no-pd">
                                <div class="main-ws-sec">
                                    <div class="post-topbar">
                                        <div class="user-picy">
                                            <img src="Documentation/images/resources/user-pic.png" alt="">
                                        </div>
                                        <div class="post-st">
                                            <ul>
                                                
                                                <li><a class="post-jb active" href="#" title="">โพสสินค้า</a></li>
                                            </ul>
                                        </div><!--post-st end-->
                                    </div><!--post-topbar end-->
                                    <div class="posts-section">
                                        <div class="post-bar">
                                            <div class="post_topbar">
                                                <div class="usy-dt">
                                                    <img src="Documentation/images/resources/us-pic.png" alt="">
                                                    <div class="usy-name">
                                                        <a href="{{ route('farm')}}"><h3>สวนผลไม้ดี</h3></a>
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
                                                    
                                                </ul>
                                                <ul class="bk-links">
                                                    <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                                    <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="job_descp">
                                                <a href="{{ route('product')}}"><h3>สตอเบอร์รี่พันธ์ดี</h3></a>
                                                <ul class="job-dt">
                                                    <li><a href="#" title="">รอผลผลิต</a></li>
                                                    <li><span>30 / Day</span></li>
                                                </ul>
                                                <span><img src="https://static.airmosphere.net/upload/images/users/646/post/1870/58ff6c498a7b9_646.jpeg" alt=""></span>
                                                <p> <a href="#" title="">view more</a></p>
                                                <ul class="skill-tags">
                                                    <li><a href="#" title="">สตอเบอร์รี่</a></li>
                                                    <li><a href="#" title="">ส้ม</a></li>
                                                    <li><a href="#" title="">มะม่วง</a></li>
                                                    <li><a href="#" title="">ลำไย</a></li>
                                                    <li><a href="#" title="">มะพร้าว</a></li>   
                                                </ul>
                                            </div>
                                            <div class="job-status-bar">
                                                <ul class="like-com">
                                                    <li>
                                                        <a href="#"><i class="fas fa-heart"></i> Like</a>
                                                        <img src="Documentation/images/liked-img.png" alt="">
                                                        <span>25</span>
                                                    </li> 
                                                    <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
                                                </ul>
                                                <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                                            </div>
                                        </div><!--post-bar end-->
                                        <div class="top-profiles">
                                            <div class="pf-hd">
                                                <h3>Top Profiles</h3>
                                                <i class="la la-ellipsis-v"></i>
                                            </div>
                                            <div class="profiles-slider">
                                                <div class="user-profy">
                                                    <img src="Documentation/images/resources/user1.png" alt="">
                                                    <h3>สมหญิง</h3>
                                                    <span>รักส้ม</span>
                                                    <ul>
                                                        <li><a href="#" title="" class="followw">Follow</a></li>
                                                        <li><a href="#" title="" class="envlp"><img src="Documentation/images/envelop.png" alt=""></a></li>
                                                        <li><a href="#" title="" class="hire">hire</a></li>
                                                    </ul>
                                                    <a href="#" title="">View Profile</a>
                                                </div><!--user-profy end-->
                                                <div class="user-profy">
                                                    <img src="Documentation/images/resources/user2.png" alt="">
                                                    <h3>สมชาย</h3>
                                                    <span>รักองุ่น</span>
                                                    <ul>
                                                        <li><a href="#" title="" class="followw">Follow</a></li>
                                                        <li><a href="#" title="" class="envlp"><img src="Documentation/images/envelop.png" alt=""></a></li>
                                                        <li><a href="#" title="" class="hire">hire</a></li>
                                                    </ul>
                                                    <a href="#" title="">View Profile</a>
                                                </div><!--user-profy end-->
                                                <div class="user-profy">
                                                    <img src="Documentation/images/resources/user3.png" alt="">
                                                    <h3>สมหมาย</h3>
                                                    <span>รักผัก</span>
                                                    <ul>
                                                        <li><a href="#" title="" class="followw">Follow</a></li>
                                                        <li><a href="#" title="" class="envlp"><img src="Documentation/images/envelop.png" alt=""></a></li>
                                                        <li><a href="#" title="" class="hire">hire</a></li>
                                                    </ul>
                                                    <a href="#" title="">View Profile</a>
                                                </div><!--user-profy end-->
                                                <div class="user-profy">
                                                    <img src="Documentation/images/resources/user1.png" alt="">
                                                    <h3>สมปอง</h3>
                                                    <span>รักผลไม้</span>
                                                    <ul>
                                                        <li><a href="#" title="" class="followw">Follow</a></li>
                                                        <li><a href="#" title="" class="envlp"><img src="Documentation/images/envelop.png" alt=""></a></li>
                                                        <li><a href="#" title="" class="hire">hire</a></li>
                                                    </ul>
                                                    <a href="#" title="">View Profile</a>
                                                </div><!--user-profy end-->
                                                <div class="user-profy">
                                                    <img src="Documentation/images/resources/user2.png" alt="">
                                                    <h3>สมรักษ์</h3>
                                                    <span>รักโลก</span>
                                                    <ul>
                                                        <li><a href="#" title="" class="followw">Follow</a></li>
                                                        <li><a href="#" title="" class="envlp"><img src="Documentation/images/envelop.png" alt=""></a></li>
                                                        <li><a href="#" title="" class="hire">hire</a></li>
                                                    </ul>
                                                    <a href="#" title="">View Profile</a>
                                                </div><!--user-profy end-->
                                                <div class="user-profy">
                                                    <img src="Documentation/images/resources/user3.png" alt="">
                                                    <h3>สมใจ</h3>
                                                    <span>อยากกินส้มมมมากๆ</span>
                                                    <ul>
                                                        <li><a href="#" title="" class="followw">Follow</a></li>
                                                        <li><a href="#" title="" class="envlp"><img src="Documentation/images/envelop.png" alt=""></a></li>
                                                        <li><a href="#" title="" class="hire">hire</a></li>
                                                    </ul>
                                                    <a href="#" title="">View Profile</a>
                                                </div><!--user-profy end-->
                                            </div><!--profiles-slider end-->
                                        </div><!--top-profiles end-->
                                        


                                        <div class="post-bar">
                                            <div class="post_topbar">
                                                <div class="usy-dt">
                                                    <img src="Documentation/images/resources/us-pic.png" alt="">
                                                    <div class="usy-name">
                                                        <h3>ไร่ชา2000</h3>
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
                                                    
                                                </ul>
                                                <ul class="bk-links">
                                                    <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                                    <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                                    <li><a href="#" title="" class="bid_now">Bid Now</a></li>
                                                </ul>
                                            </div>
                                            <div class="job_descp">
                                                <h3>ไร่ชา2000</h3>
                                                <ul class="job-dt">
                                                    <li><a href="{{ route('book')}}" title="">พร้อมเก็บเกี่ยว</a></li>
                                                    <li><span>$30 / Kg.</span></li>
                                                </ul>
                                                <span><img src="http://www.thaiticketmajor.com/imgUpload/images/tea003.jpg" alt=""></span>
                                                <p> <a href="#" title="">view more</a></p>

                                                <ul class="skill-tags">
                                                    <li><a href="#" title="">ชา</a></li>
                                                    <li><a href="#" title="">ชาเขียว</a></li>
                                                    <li><a href="#" title="">ชาขาว</a></li>
                                                    <li><a href="#" title="">ชาดำ</a></li>
                                                    <li><a href="#" title=""></a></li>  
                                                </ul>
                                            </div>
                                            <div class="job-status-bar">
                                                <ul class="like-com">
                                                    <li>
                                                        <a href="#"><i class="fas fa-heart"></i> Like</a>
                                                        <img src="Documentation/images/liked-img.png" alt="">
                                                        <span>25</span>
                                                    </li> 
                                                    <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
                                                </ul>
                                                <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                                            </div>
                                        </div><!--post-bar end-->
                                        <div class="posty">
                                            <div class="post-bar no-margin">
                                                <div class="post_topbar">
                                                    <div class="usy-dt">
                                                        <img src="Documentation/images/resources/us-pc2.png" alt="">
                                                        <div class="usy-name">
                                                            <h3>สวนจงรักษ์ผลไม้</h3>
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
                                                    <h3>ส้มเขียวหวาน</h3>
                                                    <ul class="job-dt">
                                                        <li><a href="#" title="">พร้อมเก็บเกี่ยว</a></li>
                                                        <li><span>$30 / hr</span></li>
                                                    </ul>
                                                    <span><img src="https://pbs.twimg.com/media/DWXRbATVQAAFHYp.jpg" alt=""></span>
                                                    <p>ส้มรสหวานมาลองชิม 
                                                        <br><a href="#" title="">view more</a></p>
                                                    <ul class="skill-tags">
                                                        <li><a href="#" title="">ส้ม</a></li>
                                                        <li><a href="#" title="">ส้มหวาน</a></li>
                                                        <li><a href="#" title="">ส้มจี๊ด</a></li>
                                                        <li><a href="#" title="">ส้มเขียวหวาน</a></li>
                                                        <li><a href="#" title="">ส้ม</a></li>   
                                                    </ul>
                                                </div>
                                                <div class="job-status-bar">
                                                    <ul class="like-com">
                                                        <li>
                                                            <a href="#"><i class="fas fa-heart"></i> Like</a>
                                                            <img src="Documentation/images/liked-img.png" alt="">
                                                            <span>25</span>
                                                        </li> 
                                                        <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
                                                    </ul>
                                                    <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                                                </div>
                                            </div><!--post-bar end-->
                                            <div class="comment-section">
                                                <a href="#" class="plus-ic">
                                                    <i class="la la-plus"></i>
                                                </a>
                                                <div class="comment-sec">
                                                    <ul>
                                                        <li>
                                                            <div class="comment-list">
                                                                <div class="bg-img">
                                                                    <img src="Documentation/images/resources/bg-img1.png" alt="">
                                                                </div>
                                                                <div class="comment">
                                                                    <h3>จัสติน</h3>
                                                                    <span><img src="Documentation/images/clock.png" alt=""> 3 min ago</span>
                                                                    <p>สั่ง50กิโลกรับ มีถึงไหมครับ</p>
                                                                    <a href="#" title="" class="active"><i class="fa fa-reply-all"></i>Reply</a>
                                                                </div>
                                                            </div><!--comment-list end-->
                                                            <ul>
                                                                <li>
                                                                    <div class="comment-list">
                                                                        <div class="bg-img">
                                                                            <img src="Documentation/images/resources/bg-img2.png" alt="">
                                                                        </div>
                                                                        <div class="comment">
                                                                            <h3>สวนจงรักษ์ผลไม้</h3>
                                                                            <span><img src="Documentation/images/clock.png" alt=""> 3 min ago</span>
                                                                            <p>สวัสดีค่ะคุณจัสติน 50กิโลกรัมเราพร้อมส่งได้ค่ะ </p>
                                                                            <a href="#" title=""><i class="fa fa-reply-all"></i>Reply</a>
                                                                        </div>
                                                                    </div><!--comment-list end-->
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <div class="comment-list">
                                                                <div class="bg-img">
                                                                    <img src="Documentation/images/resources/bg-img3.png" alt="">
                                                                </div>
                                                                
                                                            </div><!--comment-list end-->
                                                        </li>
                                                    </ul>
                                                </div><!--comment-sec end-->
                                                <div class="post-comment">
                                                    <div class="cm_img">
                                                        <img src="Documentation/images/resources/bg-img4.png" alt="">
                                                    </div>
                                                    <div class="comment_box">
                                                        <form>
                                                            <input type="text" placeholder="Post a comment">
                                                            <button type="submit">Send</button>
                                                        </form>
                                                    </div>
                                                </div><!--post-comment end-->
                                            </div><!--comment-section end-->
                                        </div><!--posty end-->
                                        <div class="process-comm">
                                            <div class="spinner">
                                                <div class="bounce1"></div>
                                                <div class="bounce2"></div>
                                                <div class="bounce3"></div>
                                            </div>
                                        </div><!--process-comm end-->
                                    </div><!--posts-section end-->
                                </div><!--main-ws-sec end-->
                            </div>

                            <div class="col-lg-3 pd-right-none no-pd">
                                <div class="right-sidebar">
                                    
                                    <div class="widget widget-jobs">
                                        <div class="sd-title">
                                            <h3>Top Farm</h3>
                                            <i class="la la-ellipsis-v"></i>
                                        </div>
                                        <div class="jobs-list">
                                            <div class="job-info">
                                                <div class="job-details">
                                                    <h3>ฟามร์มที่1</h3>
                                                    <p>...รายละเอียด....</p>
                                                </div>
                                                <div class="hr-rate">
                                                    <span>เชียงใหม่</span>
                                                </div>
                                            </div><!--job-info end-->
                                            <div class="job-info">
                                                <div class="job-details">
                                                    <h3>ฟาร์มที่2</h3>
                                                    <p>...รายละเอียด....</p>
                                                </div>
                                                <div class="hr-rate">
                                                    <span>เชียงราย</span>
                                                </div>
                                            </div><!--job-info end-->
                                            <div class="job-info">
                                                <div class="job-details">
                                                    <h3>ฟาร์มที่3</h3>
                                                    <p>...รายละเอียด....</p>
                                                </div>
                                                <div class="hr-rate">
                                                    <span>แม่ฮ่องสอน</span>
                                                </div>
                                            </div><!--job-info end-->
                                            <div class="job-info">
                                                <div class="job-details">
                                                    <h3>ฟาร์มที่4</h3>
                                                    <p>...รายละเอียด....</p>
                                                </div>
                                                <div class="hr-rate">
                                                    <span>เชียงใหม่</span>
                                                </div>
                                            </div><!--job-info end-->
                                            <div class="job-info">
                                                <div class="job-details">
                                                    <h3>ฟาร์มที่4</h3>
                                                    <p>...รายละเอียด....</p>
                                                </div>
                                                <div class="hr-rate">
                                                    <span>ลำพูน</span>
                                                </div>
                                            </div><!--job-info end-->
                                        </div><!--jobs-list end-->
                                    </div><!--widget-jobs end-->
                                    <div class="widget widget-jobs">
                                        <div class="sd-title">
                                            <h3>สินค้าขายดี</h3>
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
                                            </div><!--job-info end-->
                                            <div class="job-info">
                                                <div class="job-details">
                                                    <h3>ส้ม</h3>
                                                    <p>ที่่หวานที่สุด</p>
                                                </div>
                                                <div class="hr-rate">
                                                    <span>..</span>
                                                </div>
                                            </div><!--job-info end-->
                                            <div class="job-info">
                                                <div class="job-details">
                                                    <h3>แตงโม</h3>
                                                    <p>แดงสดน่ากิน</p>
                                                </div>
                                                <div class="hr-rate">
                                                    <span>..</span>
                                                </div>
                                            </div><!--job-info end-->
                                        </div><!--jobs-list end-->
                                    </div><!--widget-jobs end-->
                                    <div class="widget suggestions full-width">
                                        <div class="sd-title">
                                            <h3>ฟาร์มที่คุณอาจสนใจ</h3>
                                            <i class="la la-ellipsis-v"></i>
                                        </div><!--sd-title end-->
                                        <div class="suggestions-list">
                                            <div class="suggestion-usd">
                                                <img src="Documentation/images/resources/s1.png" alt="">
                                                <div class="sgt-text">
                                                    <h4>สวนมะม่วง</h4>
                                                    <span>พร้อมส่ง</span>
                                                </div>
                                                <span><i class="la la-plus"></i></span>
                                            </div>
                                            <div class="suggestion-usd">
                                                <img src="Documentation/images/resources/s2.png" alt="">
                                                <div class="sgt-text">
                                                    <h4>สวนส้ม</h4>
                                                    <span>พร้อมจอง</span>
                                                </div>
                                                <span><i class="la la-plus"></i></span>
                                            </div>
                                            <div class="suggestion-usd">
                                                <img src="Documentation/images/resources/s3.png" alt="">
                                                <div class="sgt-text">
                                                    <h4>ไร่ข้าวโพด</h4>
                                                    <span>พร้อมส่ง</span>
                                                </div>
                                                <span><i class="la la-plus"></i></span>
                                            </div>
                                            <div class="suggestion-usd">
                                                <img src="Documentation/images/resources/s4.png" alt="">
                                                <div class="sgt-text">
                                                    <h4>ไร่อ้อย</h4>
                                                    <span>พร้อมส่ง</span>
                                                </div>
                                                <span><i class="la la-plus"></i></span>
                                            </div>
                                            <div class="suggestion-usd">
                                                <img src="Documentation/images/resources/s5.png" alt="">
                                                <div class="sgt-text">
                                                    <h4>สวนลำไย</h4>
                                                    <span>พร้อมจอง</span>
                                                </div>
                                                <span><i class="la la-plus"></i></span>
                                            </div>
                                            <div class="suggestion-usd">
                                                <img src="Documentation/images/resources/s6.png" alt="">
                                                <div class="sgt-text">
                                                    <h4>ฟาร์มผักกาดที่ใหญ่ที่สุด</h4>
                                                    <span>พร้อมจอง</span>
                                                </div>
                                                <span><i class="la la-plus"></i></span>
                                            </div>
                                            <div class="view-more">
                                                <a href="#" title="">View More</a>
                                            </div>
                                        </div><!--suggestions-list end-->
                                    </div>
                                </div><!--right-sidebar end-->
                            </div>
                        </div>
                    </div><!-- main-section-data end-->
                </div> 
            </div>
        </main>




        

        <div class="post-popup job_post">
            <div class="post-project">
                <h3>โพสสินค้า</h3>
                <div class="post-project-fields">
                    <form>
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" name="title" placeholder="ชื่อสินค้า">
                            </div>
                            <div class="col-lg-6">
                                <div class="inp-field">
                                    <select>
                                        <option>พร้อมส่ง</option>
                                        <option>พร้อมจอง</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="price-br">
                                    <input type="text" name="price1" placeholder="ราคา">
                                    <i class="la la-dollar"></i>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-br">
                                    <input type="text" name="date" placeholder="วันเก็บเกี่ยว">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-br">
                                    <input type="text" name="date" placeholder="วันส่ง">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-br">
                                    
                                    <input type="file" name="file" placeholder="รูป" id="file">
                                </div>
                            </div>

                            
                            <div class="col-lg-12">
                                <textarea name="description" placeholder="รายละเอียดสินค้าเพิ่มเติม"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <ul>
                                    
                                    <li><button class="active" type="submit" value="post">Post</button></li>
                                    <li><a href="#" title="">Cancel</a></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div><!--post-project-fields end-->
                <a href="#" title=""><i class="la la-times-circle-o"></i></a>
            </div><!--post-project end-->
        </div><!--post-project-popup end-->



        <div class="chatbox-list">
            <div class="chatbox">
                <div class="chat-mg">
                    <a href="#" title=""><img src="Documentation/images/resources/usr-img1.png" alt=""></a>
                    <span>2</span>
                </div>
                <div class="conversation-box">
                    <div class="con-title mg-3">
                        <div class="chat-user-info">
                            <img src="Documentation/images/resources/us-img1.png" alt="">
                            <h3>จัสติน <span class="status-info"></span></h3>
                        </div>
                        <div class="st-icons">
                            <a href="#" title=""><i class="la la-cog"></i></a>
                            <a href="#" title="" class="close-chat"><i class="la la-minus-square"></i></a>
                            <a href="#" title="" class="close-chat"><i class="la la-close"></i></a>
                        </div>
                    </div>
                    <div class="chat-hist mCustomScrollbar" data-mcs-theme="dark">
                        <div class="chat-msg">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                            <span>Sat, Aug 23, 1:10 PM</span>
                        </div>
                        <div class="date-nd">
                            <span>Sunday, August 24</span>
                        </div>
                        <div class="chat-msg st2">
                            <p>Cras ultricies ligula.</p>
                            <span>5 minutes ago</span>
                        </div>
                        <div class="chat-msg">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                            <span>Sat, Aug 23, 1:10 PM</span>
                        </div>
                    </div><!--chat-list end-->
                    <div class="typing-msg">
                        <form>
                            <textarea placeholder="Type a message here"></textarea>
                            <button type="submit"><i class="fa fa-send"></i></button>
                        </form>
                        <ul class="ft-options">
                            <li><a href="#" title=""><i class="la la-smile-o"></i></a></li>
                            <li><a href="#" title=""><i class="la la-camera"></i></a></li>
                            <li><a href="#" title=""><i class="fa fa-paperclip"></i></a></li>
                        </ul>
                    </div><!--typing-msg end-->
                </div><!--chat-history end-->
            </div>
            <div class="chatbox">
                <div class="chat-mg">
                    <a href="#" title=""><img src="Documentation/images/resources/usr-img2.png" alt=""></a>
                </div>
                <div class="conversation-box">
                    <div class="con-title mg-3">
                        <div class="chat-user-info">
                            <img src="Documentation/images/resources/us-img1.png" alt="">
                            <h3>John Doe <span class="status-info"></span></h3>
                        </div>
                        <div class="st-icons">
                            <a href="#" title=""><i class="la la-cog"></i></a>
                            <a href="#" title="" class="close-chat"><i class="la la-minus-square"></i></a>
                            <a href="#" title="" class="close-chat"><i class="la la-close"></i></a>
                        </div>
                    </div>
                    <div class="chat-hist mCustomScrollbar" data-mcs-theme="dark">
                        <div class="chat-msg">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                            <span>Sat, Aug 23, 1:10 PM</span>
                        </div>
                        <div class="date-nd">
                            <span>Sunday, August 24</span>
                        </div>
                        <div class="chat-msg st2">
                            <p>Cras ultricies ligula.</p>
                            <span>5 minutes ago</span>
                        </div>
                        <div class="chat-msg">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                            <span>Sat, Aug 23, 1:10 PM</span>
                        </div>
                    </div><!--chat-list end-->
                    <div class="typing-msg">
                        <form>
                            <textarea placeholder="Type a message here"></textarea>
                            <button type="submit"><i class="fa fa-send"></i></button>
                        </form>
                        <ul class="ft-options">
                            <li><a href="#" title=""><i class="la la-smile-o"></i></a></li>
                            <li><a href="#" title=""><i class="la la-camera"></i></a></li>
                            <li><a href="#" title=""><i class="fa fa-paperclip"></i></a></li>
                        </ul>
                    </div><!--typing-msg end-->
                </div><!--chat-history end-->
            </div>
            <div class="chatbox">
                <div class="chat-mg bx">
                    <a href="#" title=""><img src="Documentation/images/chat.png" alt=""></a>
                    <span>2</span>
                </div>
                <div class="conversation-box">
                    <div class="con-title">
                        <h3>Messages</h3>
                        <a href="#" title="" class="close-chat"><i class="la la-minus-square"></i></a>
                    </div>
                    <div class="chat-list">
                        <div class="conv-list active">
                            <div class="usrr-pic">
                                <img src="Documentation/images/resources/usy1.png" alt="">
                                <span class="active-status activee"></span>
                            </div>
                            <div class="usy-info">
                                <h3>John Doe</h3>
                                <span>Lorem ipsum dolor <img src="Documentation/images/smley.png" alt=""></span>
                            </div>
                            <div class="ct-time">
                                <span>1:55 PM</span>
                            </div>
                            <span class="msg-numbers">2</span>
                        </div>
                        <div class="conv-list">
                            <div class="usrr-pic">
                                <img src="Documentation/images/resources/usy2.png" alt="">
                            </div>
                            <div class="usy-info">
                                <h3>John Doe</h3>
                                <span>Lorem ipsum dolor <img src="Documentation/images/smley.png" alt=""></span>
                            </div>
                            <div class="ct-time">
                                <span>11:39 PM</span>
                            </div>
                        </div>
                        <div class="conv-list">
                            <div class="usrr-pic">
                                <img src="Documentation/images/resources/usy3.png" alt="">
                            </div>
                            <div class="usy-info">
                                <h3>John Doe</h3>
                                <span>Lorem ipsum dolor <img src="Documentation/images/smley.png" alt=""></span>
                            </div>
                            <div class="ct-time">
                                <span>0.28 AM</span>
                            </div>
                        </div>
                    </div><!--chat-list end-->
                </div><!--conversation-box end-->
            </div>
        </div><!--chatbox-list end-->

    </div><!--theme-layout end-->

</body>
</html>