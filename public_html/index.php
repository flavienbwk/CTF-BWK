
<html>
  <head>
  	<title>Summer HackCamp</title>
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body>
<?php
    if(!empty($_POST)){
      $host = 'mysql';
      $user = 'root';
      $pass = 'rootpassword';
      $conn = mysqli_connect($host, $user, $pass, "SummerHackCamp");

      if (!$conn) {
          echo "Connection failed: ";
      }else{
        $passwd = md5($_POST['passwd']);
        $query = mysqli_query($conn,"SELECT mail, password FROM users WHERE mail='$_POST[mail]' AND password='$passwd'") or die ("query not executed");
        $reqToArr = mysqli_fetch_assoc($query);

        if (isset($reqToArr["mail"])) {
          echo "<SCRIPT LANGUAGE='JavaScript'>document.location.href='accueil.php?user=" . $reqToArr["mail"] . "';</SCRIPT>";
          }
      }
      mysqli_close($conn);
    }

?>

    <div class="container">
    	<div class="d-flex justify-content-center h-100">


    		<div class="card sign-in-div">
    			<div class="card-header">
    				<h3>Sign In</h3>
    				<div class="d-flex justify-content-end social_icon">
    					<span><i class="fab fa-facebook-square"></i></span>
    					<span><i class="fab fa-google-plus-square"></i></span>
    					<span><i class="fab fa-twitter-square"></i></span>
    				</div>
    			</div>
    			<div class="card-body">
    				<form method="post">
    					<div class="input-group form-group">
    						<div class="input-group-prepend">
    							<span class="input-group-text"><i class="fas fa-user"></i></span>
    						</div>
    						<input type="text" class="form-control" placeholder="mail address" name="mail" required>

    					</div>
    					<div class="input-group form-group">
    						<div class="input-group-prepend">
    							<span class="input-group-text"><i class="fas fa-key"></i></span>
    						</div>
    						<input type="password" class="form-control" placeholder="password" name="passwd" required>
    					</div>
    					<div class="form-group">
                <input type="button" value="Register" class="btn float-left login_btn" style="margin-top:100px;" onclick="changeForm('register')">
    						<input type="submit" value="Login" class="btn float-right login_btn" style="margin-top:100px;">
    					</div>
    				</form>
    			</div>
    		</div>


        <div class="card register-div" style="display:none;">
    			<div class="card-header">
    				<h3>Register</h3>
    				<div class="d-flex justify-content-end social_icon">
    					<span><i class="fab fa-facebook-square"></i></span>
    					<span><i class="fab fa-google-plus-square"></i></span>
    					<span><i class="fab fa-twitter-square"></i></span>
    				</div>
    			</div>
    			<div class="card-body">
    				<form action='#' method="post">
    					<div class="input-group form-group">
    						<div class="input-group-prepend">
    							<span class="input-group-text"><i class="fas fa-user"></i></span>
    						</div>
    						<input type="text" class="form-control" placeholder="mail address" name="mail">
    					</div>
              <div class="input-group form-group">
    						<div class="input-group-prepend">
    							<span class="input-group-text"><i class="fas fa-key"></i></span>
    						</div>
    						<input type="text" class="form-control" placeholder="password" name="passwd">
    					</div>
              <div class="input-group form-group">
    						<div class="input-group-prepend">
    							<span class="input-group-text"><i class="fas fa-key"></i></span>
    						</div>
    						<input type="text" class="form-control" placeholder="confirm password" name="confpasswd">
    					</div>
    					<div class="form-group">
                <input type="submit" value="Register" class="btn float-left login_btn" style="margin-top:46px;">
    						<input type="button" value="Login" class="btn float-right login_btn" style="margin-top:46px;" onclick="changeForm('sign in')">
    					</div>
    				</form>
    			</div>
    		</div>

    	</div>


    	</div>
    </div>
  </body>


  <script type="text/javascript">

     function changeForm(param){
       if(param == "register"){
         $('.sign-in-div').hide()
         $('.register-div').show()
       }else if(param == "sign in"){
         $('.sign-in-div').show()
         $('.register-div').hide()
       }
     }

   </script>


  <style>
      @import url('https://fonts.googleapis.com/css?family=Numans');

      html,body{
      background-image: url('fondCChack.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      height: 100%;
      font-family: 'Numans', sans-serif;
      }

      .container{
      height: 100%;
      align-content: center;
      }

      .card{
      height: 370px;
      margin-top: auto;
      margin-bottom: auto;
      width: 400px;
      background-color: rgba(0,0,0,0.5) !important;
      }

      .social_icon span{
      font-size: 60px;
      margin-left: 10px;
      color: #FFC312;
      }

      .social_icon span:hover{
      color: white;
      cursor: pointer;
      }

      .card-header h3{
      color: white;
      }

      .social_icon{
      position: absolute;
      right: 20px;
      top: -45px;
      }

      .input-group-prepend span{
      width: 50px;
      background-color: #FFC312;
      color: black;
      border:0 !important;
      }

      input:focus{
      outline: 0 0 0 0  !important;
      box-shadow: 0 0 0 0 !important;

      }

      .remember{
      color: white;
      }

      .remember input
      {
      width: 20px;
      height: 20px;
      margin-left: 15px;
      margin-right: 5px;
      }

      .login_btn{
      color: black;
      background-color: #FFC312;
      width: 100px;
      }

      .login_btn:hover{
      color: black;
      background-color: white;
      }

      .links{
      color: white;
      }

      .links a{
      margin-left: 4px;
      }
  </style>
</html>
