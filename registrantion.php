<?php
$name=$email=$numberPhone=$birthday=$nameErr=$emailErr=$password=$passwordErr=$numberPhoneErr=$birthdayErr=$product = "";

if ($_SERVER["REQUEST_METHOD"]){
	if (empty($_POST["name"])){
		$nameErr="Name is requested";
	}else {
		$name = test_input($_POST["name"]);
		if (!preg_match("/^[a-zA-Z]*$/",$name)){
			$nameErr = "only letters and white space";
			$name="";
		}
	}
	if (empty($_POST["email"])){
		$emailErr= "email is requested";
	}else{
		$email = test_input($_POST["email"]);
		if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
			$emailErr="Invalid is format";
			$email="";
		}
	}
	if (empty($_POST["numberPhone"])){
		$numberPhonrErr="Number Phone is requested";
	}else{
		$numberPhone= test_input($_POST["numberPhone"]);
		if (!preg_match("/^[0-9]*$/",$numberPhone)){
			$numberPhoneErr = "only number";
			$numberPhone = "";
		}
	}
	if (empty($_POST["birthday"])){
		$birthdayErr = "birthday is requested";
	}else{
		$birthday= test_input($_POST["birthday"]);
		if (!preg_match("/^[0-9]*$/",$birthday)){
			$birthdayErr = "only number";
			$birthday ="";
		}
	}
	if( empty($_POST["password"])){
		$passwordErr = "password is requested";
	}else {
		$password = test_input($_POST["password"]);
		if (!preg_match("/^[a-zA-Z0-9]*$/",$password) ){
			$passwordErr = "Invalid password";
			$password = "";
		}
	}
}
function test_input($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}
session_start();
	
if (!empty($name) && !empty($email) && !empty($password) && !empty($numberPhone) && !empty($birthday)&& $_POST["submit"]){
	 echo $_SESSION["name"]=$name;
	 $_SESSION["email"]=$email;
	 $_SESSION["numberPhone"]=$numberPhone;
	 $_SESSION["birthday"]=$birthday;
	 $_SESSION["password"]=$password;
	 
	}
	if (!empty($_POST["submit"]) && !empty($name) && !empty($email) && !empty($password) && !empty($numberPhone) && !empty($birthday)){
		header("http://localhost:8888/php/btphp/producstList.php");
 	}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
Name: <input type="text" name="name"><span class="error">*<?php echo $nameErr; ?></span><br><br>
Email: <input type="text" name="email"><span class="error">*<?php echo $emailErr; ?></span><br><br>
Password:<input type="password" name="password"><span class="error">*<?php echo $passwordErr ?></span><br><br>
NumberPhone: <input type="text" name="numberPhone"><span class="error">*<?php echo $numberPhoneErr; ?></span><br><br>
Birthday: <input type="text" name="birthday"><span class="error">*<?php echo $birthdayErr ?></span><br><br>
<input type="submit" value="Dangnhap" name="submit">
</form>
</body>
</html>
