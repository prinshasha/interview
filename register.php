<?php
	
	include('connect.php');
	if(isset($_POST['reg']))
	{
		$name=$_POST['username'];
		$email=$_POST['useremail'];
		$pass=md5($_POST['pass']);
		$cpass=md5($_POST['cpass']);

		$sql=mysqli_query($con,"select * from register where email='$email'");
		if(mysqli_num_rows($sql)>0)
 		{
 			echo '<script>
 			alert("Email is already registered");
 			</script>';
 		}
 		else
 		{
			if($pass==$cpass)
			{
				$insert=mysqli_query($con,"insert into register(name,email,password) values('$name','$email','$pass');");
				if($insert)
				{
					echo '<script>
		 			alert("Registered Successfully");
		 			window.location.href="index.php";
		 			</script>';
				}
			}
			else
			{
				echo '<script>
	 			alert("Password Mismatch!");
	 			</script>';
			}
		}
	}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Register</title>
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

		function checkMail()
		{
			var email=document.getElementById( "UserEmail" ).value;
	
			 if(email)
			 {
			  $.ajax({
			  type: 'post',
			  url: 'checkdata.php',
			  data: {
			   user_email:email,
			  },
			  success: function (response) {
			   $( '#email_status' ).html(response);
			   if(response=="OK")	
			   {
			    return true;	
			   }
			   else
			   {
			    return false;	
			   }
			  }
			  });
			 }
			 else
			 {
			  $( '#email_status' ).html("");
			  return false;
			 }
		}

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
					<h2 className="head">Register</h2>
					<form method="post">
					<input type="text" placeholder="Name" required="required" name="username" className="form-control" /><br />
					<input type="email" placeholder="Email" onKeyUp={checkMail} name="useremail" id="UserEmail" required="required" className="form-control" /><span id="email_status" className="err"></span><br />
					<input type="password" placeholder="Password" required="required" name="pass" id="pass" className="form-control" /><br />
					<input type="password" placeholder="Confirm Password" required="required" name="cpass" id="cpass" onKeyUp={checkpassword} className="form-control" /><span id="pass_status" className="err"></span><br />
					
					<button type="submit" name="reg" className="btn btn-primary center-block btn-block">
					  Register
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
