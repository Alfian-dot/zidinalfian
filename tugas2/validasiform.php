<?php 
	if (isset($_POST['Register']) && $_POST['Register'] == 'Register') {
		$surname = $_POST['surname'];
		$firstname = $_POST['firstname'];
		$emailaddress = $_POST['emailaddress'];
		$mobilenumber= $_POST['mobilenumber'];
		$password = $_POST['password'];
		$confirmpassword = $_POST['confirmpassword'];

		$errorsurname = $errorfirstname = $erroremailaddress = $errormobilenumber = $errorpassword = $errorconfirmpassword = "";
		//VALIDASI SURNAME
		if (empty($surname)) {
			$errorsurname = "*SURNAME TIDAK BOLEH KOSONG !";
		}
		else {
			if (!preg_match("/^[a-zA-Z ]*$/",$surname)){
				$errorsurname = "*SURNAME TIDAK BOLEH ANGKA !";
			}
		}
		//VALIDASI FIRST NAME
		if (empty($firstname)) {
			$errorfirstname = "*FIRST NAME TIDAK BOLEH KOSONG !";
		}
		else {
			if (!preg_match("/^[a-zA-Z]*$/",$firstname)){
				$errorfirstname = "*FIRST NAME TIDAK BOLEH ANGKA DAN SPASI !";
			}
		}
		//VALIDASI EMAIL
		if (empty($emailaddress)) {
			$erroremailaddress = "*EMAIL TIDAK BOLEH KOSONG !";
		}
		else {
			if (!filter_var($emailaddress, FILTER_VALIDATE_EMAIL)) {
				$erroremailaddress = "*FORMAT EMAIL SALAH !";
			}
		}
		//VALIDASI MOBILE NUMBER
		if (empty($mobilenumber)) {
			$errormobilenumber = "*MOBILE NUMBER TIDAK BOLEH KOSONG !";
		}
		else {
			if (!preg_match("/^[0-9]*$/",$mobilenumber)){
				$errormobilenumber = "*MOBILE NUMBER HARUS ANGKA !";
			}
			else {
				if (!preg_match("/^\d{11,12}$/", $mobilenumber)){
					$errormobilenumber = "*PANJANG NUMBER MIN 11 MAX 12 !";
				}
			}
		}

		//VALIDASI PASSWORD
		if (empty($password)) {
			$errorpassword = "*PASSWORD TIDAK BOLEH KOSONG !";
		}
		else {
			if (!preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z])/",$password)){
				$errorpassword = "*HARUS KOMBINASI HURUF BESAR, KECIL, DAN ANGKA !";
			}
			else {
				if (!preg_match("/^.{8,}$/", $password)){
					$errorpassword = "*PANJANG PASSWORD MINIMAL 8 KARAKTER !";
				}
			}
		}
		//VALIDASI CONFIRM PASSWORD
		if (empty($confirmpassword)) {
			$errorconfirmpassword = "*CONFIRM PASSWORD TIDAK BOLEH KOSONG !";
		}
		
		if ($_POST['confirmpassword'] != $_POST['password']) {
			$errorconfirmpassword = "*CONFIRM PASSWORD TIDAK COCOK !";
		}

		if (empty($errorsurname) and empty($errorfirstname) and empty($erroremailaddress) and empty($errormobilenumber) and empty($errorPassword) and empty($errorconfirmpassword)){
			header("Location: submit.php?sukses=sukses");
		}
		else {
			header("Location: FormHtml.php?pesansurname=$errorsurname&pesanfirstname=$errorfirstname&pesanemailaddress=$erroremailaddress&pesanmobilenumber=$errormobilenumber&pesanpassword=$errorpassword&pesanconfirmpassword=$errorconfirmpassword&surname=$surname&firstname=$firstname&emailaddress=$emailaddress&mobilenumber=$mobilenumber&password=$password&confirmpassword=$confirmpassword");
		}
	}
 ?>