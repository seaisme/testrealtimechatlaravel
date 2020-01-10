<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>VEG A MINUTE - Purchase</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" type="text/css" href="Documentation/css/ket.css">
</head>

<body>
    <div class="modal" id="applyjob">
        <div class="modal-dialog modal-lg">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="text-light text-center">Place a Bid</h3>
                </div>
                <div class="modal-body">
                    <div class="notice">
                        <span class="text-danger">Note:</span><span>Freelancer project fee will only be changed when you get awarded and accept the project.</span>
                    </div>
                    <div class="innerbody">
                        <h3>Bids :</h3>
                        <div class="paydel">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-12">
                                    <h4>Paid to you :</h4>                                    
									  <div class="place-bid-form">
									  <form>                                      
										  <div class="form-row align-items-center">
											<div class="col-auto">
											  <label class="sr-only" for="inlineFormInputGroup">Username</label>
											  <div class="input-group mb-2">
												<div class="input-group-prepend">
												  <div class="input-group-text">$</div>
												</div>
												<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="500">
												<div class="input-group-prepend">
												  <div class="input-group-text">USD</div>
												</div>
											  </div>
											</div>
										  </div>
										</form>
									</div>
                                </div>
								<div class="col-xl-6 col-lg-6 col-md-12">
                                    <h4>Delivery in :</h4>
									<div class="place-bid-form delivery">
									  <form>                                      
									  <div class="form-row align-items-center">
										<div class="col-auto">
										  <label class="sr-only" for="inlineFormInputGroup">Username</label>
										  <div class="input-group mb-2">
											<div class="input-group-prepend">
											  <div class="input-group-text">Days</div>
											</div>
											<select id="exampleFormControlSelect1" class="form-control">
											<option>10</option>
											<option>20</option>
											<option>30</option>
											<option>40</option>
										  </select>
										  </div>
										</div>
									  </div>
									</form>
									</div>
                                </div>
                            </div>
                        </div>
                        <p>Freelancer Project Fee :<b> $55.56 USD</b></p>
                        <p>Your Bid : <b>$555.56 USD</b></p>
                    </div>
                    <div class="beatcompitation">
                        <h3>Super charge your bid and beat your competition!</h3>
                    </div>
                    <div class="sponser">
                        <p><i class="la la-check"></i>Sponser my bid! Be the first did seen by the employer.</p>
                        <h2>$3.99 USD</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rhoncus mauris sit amet leo feugiat mollis. Nam pharetra velit in viverra finibus.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="place-bid-btn">Place a Bid</button>
                    <button>Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper">
        @include('navbar');
        <!--header end-->
        <main>


            <div class="main-section">
                <div class="container">
                    <div class="main-section-data">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="bids-detail">
                                    <div class="row">
                                        <div class="col-12">
<!-- Tab links -->
<div class="tab">                               
  <button class="tablinks active" onclick="openCity(event, 'payment')">ที่ต้องชำระ</button>
  <button class="tablinks" onclick="openCity(event, 'transport')">ที่ต้องจัดส่ง</button>
  <button class="tablinks" onclick="openCity(event, 'get')">ที่ต้องได้รับ</button>
  <button class="tablinks" onclick="openCity(event, 'success')">สำเร็จแล้ว</button>
</div>
<!-- Tab links -->

<!-- Tab content -->
<!-- Payment -->
<div id="payment" class="tabcontent">
  <table class="table table-striped" align="center">
    <thead>
      <tr align="center">
        <th>สินค้า</th>
        <th>ปริมาณ</th>
        <th>ราคา</th>
        <th>ค่าจัดส่งสินค้า</th>
        <th>รวม</th>
        <th>ลบสินค้า</th>
      </tr>
    </thead>
    <tbody>
      <tr align="center">
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>Doe</td>
        <td>Doe</td>
        <td><img src="assets/img/cancel.png"></td>
      </tr>
    </tbody>
    <thead>
      <tr align="center">
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th><strong>ยอดรวม . บาท</strong></th>
        <th></th>
      </tr>
    </thead>
  </table>

  <div class="row" align="center">
    <div class="col-9"></div>
    <div class="col-3"><a href="upload"><button type="button" class="btn btn-primary"><img src="assets/basket.png"> ชำระสินค้า</button></a></div>
  </div>
</div>
<!-- Payment -->

<!-- transport -->
<div id="transport" class="tabcontent">
  <table class="table" align="center">
    <thead>
      <tr align="center">
        <th>สินค้า</th>
        <th>ปริมาณ</th>
        <th>ราคา</th>
        <th>ค่าจัดส่งสินค้า</th>
        <th>ยอดรวม</th>
      </tr>
    </thead>
    <tbody>
      <tr align="center">
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>Doe</td>
        <td>Doe</td>
      </tr>
    </tbody>
    <thead>
      <tr align="center">
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th><strong>ยอดรวม . บาท</strong></th>
      </tr>
    </thead>
  </table>
</div>
<!-- transport -->

<!-- get -->
<div id="get" class="tabcontent">
  <table class="table table-striped" align="center">
    <thead>
      <tr align="center">
        <th>สินค้า</th>
        <th>ปริมาณ</th>
        <th>เลขพัสดุ</th>
        <th>การจัดส่ง</th>
        <th>ยอดรวม</th>
      </tr>
    </thead>
    <tbody>
      <tr align="center">
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>Doe</td>
        <td>Doe</td>
      </tr>
    </tbody>
    <thead>
      <tr align="center">
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th><strong>ยอดรวม . บาท</strong></th>
      </tr>
    </thead>
  </table>
</div>
<!-- get -->

<!-- success -->
<div id="success" class="tabcontent">
  <table class="table table-striped" align="center">
    <thead>
      <tr align="center">
        <th>สินค้า</th>
        <th>ปริมาณ</th>
        <th>เลขพัสดุ</th>
        <th>การจัดส่ง</th>
        <th>ยอดรวม</th>
        <th>ได้รับสินค้า</th>
      </tr>
    </thead>
    <tbody>
      <tr align="center">
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>Doe</td>
        <td>Doe</td>
        <td><img src="assets/img/correct.png"></td>
      </tr>
    </tbody>
    <thead>
      <tr align="center">
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th><strong>ยอดรวม . บาท</strong></th>
        <th></th>
      </tr>
    </thead>
  </table>
</div>
<!-- success -->

<script>
   function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                           
              
        </div>
        <!--post-project-popup end-->
    </div>
    <!--theme-layout end-->
</body>

</html>