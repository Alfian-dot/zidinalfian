<!DOCTYPE html>
<html lang = "id">
<head>
	<title>Tugas Mingguan 2</title>
	<link rel="stylesheet" type="text/css" href="FormCss.css">
</head>
	<?php 
		$pesansurname = @$_GET['pesansurname'];
		$pesanfirstname = @$_GET['pesanfirstname'];
		$pesanemailaddress = @$_GET['pesanemailaddress'];
		$pesanmobilenumber = @$_GET['pesanmobilenumber'];
		$pesanpassword = @$_GET['pesanpassword'];
		$pesanconfirmpassword = @$_GET['pesanconfirmpassword'];
		$surname = @$_GET['surname'];
		$firstname = @$_GET['firstname'];
		$emailaddress = @$_GET['emailaddress'];
		$mobilenumber= @$_GET['mobilenumber'];
		$password = @$_GET['password'];
		$confirmpassword = @$_GET['confirmpassword'];

	 ?>
<body style="background-color: white; margin-left: 322px; margin-right: 322px; font-family: Arial; border:5pt solid white;">
		<h1 style="margin-left: 210px;" >Registration Form</h1>
			<div class = "form">
				<fieldset>
					<legend style="font-size: 16pt;">Person Details</legend>
						<form action="validasiform.php" method="POST">
							<table style="font-size: 12pt;">
								<tr>
									<td> <label for="surname"> Surname </label> </td>
									<td> <input id="surname" name= "surname" type="text" size="27" value="<?php echo $surname ?>"/> </td>
									<td style="font-size: 8pt; color : red"> <span> <?php echo $pesansurname?> </span> </td>
								</tr>
								<tr>
									<td> <label for="firstname"> Firstname </label> </td>
									<td> <input id="firstname" name= "firstname" type="text" size="27" value="<?php echo $firstname ?>"/> </td>
									<td style="font-size: 8pt; color : red"> <span> <?php echo $pesanfirstname?> </span> </td>
								</tr>
								<tr>
									<td> <label for="emailaddress"> Email Address </label> </td>
									<td> <input id="emailaddress" name= "emailaddress" type="text" size="27" value="<?php echo $emailaddress ?>"/> </td>
									<td style="font-size: 8pt; color : red"> <span> <?php echo $pesanemailaddress?> </span> </td>
								</tr>
								<tr>
									<td> <label for="mobilenumber"> Mobile Number </label> </td>
									<td> <input id="mobilenumber" name= "mobilenumber" type="text" size="27" value="<?php echo $mobilenumber ?>"/> </td>
									<td style="font-size: 8pt; color : red"> <span> <?php echo $pesanmobilenumber?> </span> </td>
								</tr>
								<tr>
									<td> <label for="password"> Password </label> </td>
									<td> <input id="password" name= "password" type="password" size="27" value="<?php echo $password ?>"/> </td>
									<td style="font-size: 8pt; color : red"> <span> <?php echo $pesanpassword?> </span> </td>
								</tr>
								<tr>
									<td> <label for="confirmpassword"> Confirm Password </label> </td>
									<td> <input id="confirmpassword" name= "confirmpassword" type="password" size="27" value="<?php echo $confirmpassword ?>"/> </td>
									<td style="font-size: 8pt; color : red"> <span> <?php echo $pesanconfirmpassword?> </span> </td>
								</tr>
								<tr>
									<td> </td>
									<td> <input type = "submit" name="Register" value = "Register" style = "padding: 1px 8px"> 
									<input type = "reset" name="reset" value = "Reset" style = "padding: 1px 13px"> </td> 
									<td> </td>
								</tr>
							</table>
						</form>
					</fieldset>
			</div>
</body>
</html>