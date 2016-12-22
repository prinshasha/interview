<?php
	include('connect.php');
	$id=$_GET['id'];
	if(isset($_POST['changepwd']))
	{
		$pass=md5($_POST['pass']);
		$cpass=md5($_POST['cpass']);
		if($pass==$cpass)
		{
			$update=mysqli_query($con,"update register set password='$pass' where regid='$id'");
			if($update)
			{
				echo '<script>
	 			alert("Password Changed! Login to continue!");
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
 			alert("Password Mismatch");
 			</script>';
		}
	}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Reset Password</title>
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

    	function checkpassword()
		{
			var pass=document.getElementById( "pass" ).value;
			var cpass=document.getElementById( "cpass" ).value;
			if(pass==cpass)
			{
				$( '#pass_status' ).html("");
			}
			else
			{
				$( '#pass_status' ).html("Password should be same as above");
			}
		}

		function Form()
		{
			return(
				<div className="col-sm-4 col-sm-offset-4 border">
					<h2 className="head">Reset Password</h2>
					<form method="post">
					<input type="password" placeholder="New Password" required="required" name="pass" id="pass" className="form-control" /><br />
					<input type="password" placeholder="Confirm New Password" required="required" name="cpass" id="cpass" onKeyUp={checkpassword} className="form-control" /><span id="pass_status" className="err"></span><br />
					
					<button type="submit" name="changepwd" className="btn btn-primary center-block btn-block">
					  Change Password
					</button><br /><br />
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
