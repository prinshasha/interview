<?php
	include('connect.php');
	if(isset($_POST['login']))
	{
		$email=$_POST['email'];
		$pass=md5($_POST['password']);

		$sql=mysqli_query($con,"select * from register where email='$email' and password='$pass'");
		if(mysqli_num_rows($sql)>0)
 		{
 			if($row=mysqli_fetch_array($sql))
 			{
 				session_start();
 				$_SESSION['lid']=$row['regid'];

 				echo '<script>
	 			window.location.href="home.php";
	 			</script>';
 			}
 		}
 		else
 		{
 			echo '<script>
 			alert("Login failed! Username or Password is Incorrect!");
 			</script>';
 		}
	}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/react.js"></script>
    <script src="js/react-dom.js"></script>
    <script src="js/babel.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
    <div id="root"></div>
    <script type="text/babel">

		function Form()
		{
			return(
				<div className="col-sm-4 col-sm-offset-4 border">
					<h2 className="head">Login</h2>
					<form method="post">
					<input type="email" placeholder="Email" name="email" required="required" className="form-control" /><br />
					<input type="password" placeholder="Password" name="password" required="required" className="form-control" /><br />
					
					<button type="submit" className="btn btn-primary center-block btn-block" name="login">
					  Login
					</button><br />
					<div className="col-sm-6">
						<a href="register.php">Create Account</a><br /><br />
					</div>
					<div className="col-sm-6">
						<a href="forgotpwd.php">Forgot Password</a><br /><br />
					</div>
				  </form>
			  </div>
			);
		}

		ReactDOM.render(
		  <Form />,
		  document.getElementById('root')
		);

    </script>
  </body>
</html>
