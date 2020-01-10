<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>VEG A MINUTE - Upload</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" type="text/css" href="Documentation/css/pay.css">
</head>

<body>
    <!-- <div class="modal" id="applyjob">
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
    </div> -->
    <div class="wrapper">
            @include('navbar');
        <main>


            <div class="main-section">
                <div class="container">
                    <div class="main-section-data">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="bids-detail">
                                    <div class="row">
                                        <div class="col-12">
<div align="center" class="container">
<h1 style="font-size: 20px;">สลิปการชำระเงิน</h1>
   <br />
   @if (count($errors) > 0)
    <div class="alert alert-danger">
     Upload Validation Error<br><br>
     <ul>
       @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif
   @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   <img src="images/{{ Session::get('path') }}" width="300" />
   @endif
   <form method="post" action="{{url('/uploadfile')}}" enctype="multipart/form-data">
    {{ csrf_field() }}

 <div class="form-group">
    <input type="file" class="form-control-file border" name="select_file">
    </div>
    <button type="submit" class="btn btn-primary">ยืนยันการชำระเงิน</button>
  </form>
</div> 
</div>

        </div>
        <!--post-project-popup end-->
    </div>
    <!--theme-layout end-->
</body>

</html>