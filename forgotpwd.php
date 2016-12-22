<?php
	include('connect.php');
	if(isset($_POST['forgot']))
	{
		$email=$_POST['email'];
		$sql=mysqli_query($con,"select regid from register where email='$email'");
		if(mysqli_num_rows($sql)>0)
		{
			if($row=mysqli_fetch_array($sql))
			{
				$id=$row['regid'];
			}
			$to=$email;
			$subject="Reset Password";
			$message="Click below link to reset password/n";
			$message.='http://localhost/interview/resetpwd.php?id=$id';
			$send=mail($to,$subject,$message);
			if($send)
			{
				echo '<script>
	 			alert("Check your mail to reset password");
	 			window.location.href="index.php";
	 			</script>';
			}
			else
			{
				echo '<script>
	 			alert("Error Occured in Submission");
	 			</script>';
			}
		}
		else
		{
			echo '<script>
 			alert("Email not Registered");
 			</script>';
		}
	}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Forgot Password</title>
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
					<h2 className="head">Forgot Password</h2><br />
					<form method="post">
					<input type="email" placeholder="Enter Registered Email" required="required" name="email" className="form-control" /><br />

					<button type="submit" name="forgot" className="btn btn-primary center-block btn-block">
					  Confirm
					</button><br />
					<a href="index.php">Login >></a><br /><br />
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
