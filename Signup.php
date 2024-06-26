<?php
include"config.php";
if(isset($_POST["btnsave"])){
$shift = $_POST["shift"];
$status = $_POST["status"];


$sql ="insert into shift(sh_name,sh_status) values('$shift','$status')";
$query = mysqli_query($conn, $sql);
if($query){
  echo"<script>alert('Insert data success');</script>";
}else{
  echo $sql;
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/font.css" rel="stylesheet" type="text/css" />
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery3.6.js"></script>
   
  </link>
</head>
<body style="background-image: linear-gradient(#ffffff, #f0ca91); width:100%; height:953px;">
  <div class="container grad" >
    <div class="row">
      <div class="col-sm-3">
      </div>
      <div class="col-sm-6 text-center mt-5">
        <img src="./images/logo.png" alt="Logo" width="250" height="250">
      </div>
      <h1 class=" mt-3 ms-1 text-center" style="font-family:'Moul'" >វិទ្យាស្ថាន ពហុបច្ចេកទេសព្រះកុសមៈ</h1>
      
      <div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-4 col-lg-5 col-sm-6 col-12">
					<form action="index.html" class="my-5">
						<div class="border border-dark rounded-4 p-3 mt-5">
							<div class="login-form">
								<a href="index.html" class="mb-4 d-flex justify-content-center">
									<img src="./images/user.png" class="img-fluid login-logo" width="90" height="90" alt="Mercury Admin" />
								</a>
								<div class="mb-3">
									<input type="text" class="form-control" placeholder="ឈ្មោះ គោត្តនា" />
								</div>
								<div class="mb-3">
									<input type="password" class="form-control" placeholder="ពាក្យសម្ងាត់" />
								</div>
								<div class="mb-3">
									<input type="password" class="form-control" placeholder="បញ្ជាក់ពាក្យសម្ងាត់" />
								</div>
								<div class="d-flex align-items-center justify-content-between">
									<div class="form-check m-0">
										<input class="form-check-input" type="checkbox" value="" id="rememberPassword" />
										<label class="form-check-label" for="rememberPassword">ខ្ញុំយល់ព្រមតាមលក្ខខណ្ឌ</label>
									</div>
								</div>
								<div class="d-grid py-3 mt-4">
									<button type="submit" class="btn btn-lg btn-primary">
									<a href="index.php"  class="text-white ">
									ចុះឈ្មោះ
									</button>
								</div>
								
								<div class="text-center pt-4">
									<span>មានគណនីរួចហើយ</span>
									<a href="login.php" class="text-blue text-decoration-underline ms-2">
									ចូល</a>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
      <div class="col-sm-3">
      </div>
  </div>
  </div>
</body>
</html>