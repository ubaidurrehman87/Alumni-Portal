<?php 

//require_once 'connection/index.php';
$error = false;

if (isset($_POST['login_submit'])) {
  $user   = mysqli_escape_string($connect,$_POST['name_login']);
  $password   = sha1((mysqli_escape_string($connect,$_POST['password_login'])));
  $query	=	"SELECT EXISTS(SELECT * FROM `alumni_portal_representative_accounts` WHERE email_address='".$user."' AND password='".$password."')";
  echo "<pre>";
  print_r($query);
  echo "</pre>";
  exit();
  if(mysqli_query($connect,$query)){
  	echo '';
  	header("Location: admin/index.php");
  }
  else{
  	$error = true;
  }  
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Alumni Portal</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<script type="text/javascript">
	
	function data_toggle1(){
		document.getElementById("data").innerHTML = "Log In ";
		document.getElementById("descript").innerHTML = "Log In and quickly get to know about your batchmates and where they are currently working. Talk to them, share your ideas to work together.You can post Jobs, comment on the posts to suggest and many more.Follow us on FACEBOOK";
		

	}
	function data_toggle2(){
		document.getElementById("data").innerHTML = "Sign UP ";
		document.getElementById("descript").innerHTML = "Sign UP and quickly get to know about your batchmates and where they are currently working. Talk to them, share your ideas to work together.You can post Jobs, comment on the posts to suggest and many more.Follow us on FACEBOOK";
	}
</script>
<style>
ul li:hover{
  text-decoration: none;
}
.red{
	color: red;
	font-weight: bold;
}
</style>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link href="css/logo-nav.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/logo-nav.css" rel="stylesheet">
</head>
<body>

<div class="view full-page-intro" style=" background-repeat: no-repeat; background-size: cover;">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container" style="height: 100px;">
          <!--<img src="img/logo.svg" height="150px" width="150px"/>-->
        <a class="navbar-brand" href="#">
            
          <p class="display-4"> <i style="color:dimgray;font-size:larger;" class="fas fa-graduation-cap"></i> <span class="display-4 font-weight-bold">Al<span style="color:dimgray;">um</span>ni</span> Portal</p>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
      </div>
    </nav>
    <br><br><br><br><br><br><br>
    <!-- Section Two Started -->
        <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
          <div class="container">
            <div class="row wow fadeIn">
              <div class="col-md-6 mb-4 white-text text-center text-md-left">
                <h1 id="data" class="display-4 font-weight-bold info-color-dark">Log In</h1>
                <hr class="hr-light" color="white">
                <p>
                  <strong style="color: white;">It is more than Just a <span class="info-color-dark"> Portal</span></strong>
                </p>
                <p class="mb-4 d-none d-md-block">
                  <strong id="descript" style="color: white;">Log In and quickly get to know about your batchmates and where they are currently working. Talk to them, share your ideas to work together.You can post Jobs, comment on the posts to suggest and many more.Follow us on FACEBOOK</strong>
                </p>
              </div>
              <div class="col-md-6 col-xl-5 mb-4">
                <div class="card">
                  <div class="card-body">
                    
                    <div class="container">
				  	      <nav>
							  <div class="nav nav-tabs" id="nav-tab" role="tablist">
							    <a onclick="data_toggle1()" class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
							    Login</a>
							    <a onclick="data_toggle2()" class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Sign Up</a>
							  </div>
							</nav>
							<div class="tab-content" id="nav-tabContent">
								  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
								  	<h3>Login</h3>
								      <!-- Login TAB  -->
								                    
								        <form method="POST" action="index.php">
								          <div class="md-form">
								             <i class="fas fa-at prefix grey-text"></i>
								             <input type="email" name="name_login" id="name_login" required="" class="form-control">
								             <label for="materialFormRegisterEmailEx">Your email</label>
								          </div>
													
								          <div class="md-form">
								            <i class="fa fa-lock prefix grey-text"></i>
								            <input type="password" name="password_login" id="password_login" required="" class="form-control">
								            <label for="">Your password</label>
								          </div>
													<Label>Choose one</Label>
													<div class="md-form" align="center">
													
														<div class="btn-group btn-group-toggle" data-toggle="buttons">
																<label class="btn btn-secondary active">
																	<input type="radio" required="" name="options" id="option1" autocomplete="off"> Alumnus
																</label> 
																
																<label class="btn btn-secondary">
																	<input type="radio" required="" name="options" id="option2" autocomplete="off"> Representative
																</label>
															</div>
															
													</div>	
								          <?php if($error==true){echo "<p style='color:red;'>Wrong Credentials</p>";}?>
								          <div class="text-center mt-4">
								           <button class="btn btn-primary" type="submit" name="login_submit" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#myModal">Login</button>
								            </div>
														
								       </form>
								  </div>
								  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
								  	<h3>Sign Up</h3>
							            <form>
							                <div class="md-form">
							                    <i class="fas fa-user-graduate prefix grey-text"></i>
							                    <select class="form-control">
							                        <option selected="" disabled="">Select one</option>
							                        <option>Fast National University</option>
							                        <option>IQRA University</option>
							                        <option>Intitute of Business Administration</option>
							                        <option>UBIT</option>
							                        <option>University of Karachi</option>
							                        
							                    </select>
							                    
							                    <label for="">Choose Your University name</label><br>
							                    <a style="text-decoration:underline;">Don't find your university here?</a>
							                </div>
							                <div class="md-form">
							                    <i class="fa fa-user prefix grey-text"></i>
							                    <input type="text" id="materialFormRegisterNameEx" class="form-control">
							                    <label for="">Your name</label>
							                </div>
							                <div class="md-form">
							                    <i class="fas fa-at prefix grey-text"></i>
							                    <input type="email" id="materialFormRegisterEmailEx" class="form-control">
							                    <label for="">Your email</label>
							                </div>
							                <div class="md-form">
							                    <i class="fa fa-exclamation-triangle prefix grey-text"></i>
							                    <input type="email" id="materialFormRegisterConfirmEx" class="form-control">
							                    <label for="">Confirm your email</label>
							                </div>
							                <div class="md-form">
							                    <i class="fa fa-lock prefix grey-text"></i>
							                    <input type="password" id="materialFormRegisterPasswordEx" class="form-control">
							                    <label for="">Your password</label>
							                </div>
							                <div class="md-form">
							                    <i class="fa fa-exclamation-triangle prefix grey-text"></i>
							                    <input type="password" id="a" class="form-control">
							                    <label for="">Confirm Your password</label>
							                </div>
							                <div class="form-check">
							                    <input class="form-check-input" type="checkbox" id="defaultCheck12">
							                    <label for="defaultCheck12" class="grey-text">Accept the
							                        <a href="#" class="blue-text"> Terms and Conditions</a>
							                    </label>
							                </div>
							                <div class="text-center mt-4">
							                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal">Register</button>
							                    
							                </div>
							            </form>
								  </div>
							</div>
   					</div>


          <!--CONTAINER ENDS HERE-->
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
    </body>
</html>
<script type="text/javascript">
function UniExistence(){
    alert("This seems like your University administration has not availed this portal yet! \n Sorry for inconvenience! ");
}
</script>



<div class="demo"></div>
head