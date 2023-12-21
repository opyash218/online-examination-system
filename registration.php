<?php
include('connection.php');
if(isset($_POST['submit']))
{

$stud_name=$_POST['stud_name'];
$email=$_POST['email'];
$password=md5($_POST['password']);


$notitype='Create Account';
$reciver='Admin';
$sender=$email;

 
    
$sql ="INSERT INTO stud_table(stud_name,email, password, status) VALUES(:stud_name, :email, :password, 1)";
$query= $dbh -> prepare($sql);
$query-> bindParam(':stud_name', $stud_name, PDO::PARAM_STR);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);


// $query-> bindParam(':image', $image, PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script type='text/javascript'>alert('Registration Sucessfull!');</script>";
echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
}
else 
{
$error="Something went wrong. Please try again";
}

}

?>




<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">  
	    <title>Login</title>
        <meta name="description" content="">
        <meta name="author" content="templatemo">
       
	    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
	    <link href=".css/css/font-awesome.min.css" rel="stylesheet">
	    <link href="css/css/bootstrap.min.css" rel="stylesheet">
	 <link href="css/css/style.css" rel="stylesheet">
	    

	</head>
	<body class="light-gray-bg">
		<div class="templatemo-content-widget templatemo-login-widget white-bg">
			<header class="text-center">
	         
	          <h1 style="color: #057a8d;;"><b>User Registration</b> </h1>
	        </header>
	        <form  method="post" nctype="multipart/form-data" name="regform" onSubmit="return validate();" class="templatemo-login-form">
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        		
		              	<input type="text" class="form-control" name="stud_name" placeholder="User Name">           
		          	</div>	
	        	</div>
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        		
		              	<input type="text" class="form-control" name="email" placeholder="E-Mail"> 

		          	</div>	
	        	</div>
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>	        		
		              	<input type="password" class="form-control" name="password" placeholder="password">           
		          	</div>	
	        	</div>	 

	             	
	          	
				<div class="form-group">
					<button name="submit" type="submit" class="templatemo-blue-button width-100"style="background-color: #057a8d;; border-radius: 20px;">Register</button>
				</div>

	        </form>
		</div>
		<div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">
			<p>Already a member? <strong><a href="login.php" class="blue-text" style="color: #057a8d;;">Sign in now!</a></strong></p>
		</div>

			<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>