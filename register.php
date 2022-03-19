<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: minsida.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
		$kön=$_POST['kön'];
	$födelsedatum=$_POST['födelsedatum'];
	$gatuadress=$_POST['gatuadress'];
	$postnummer=$_POST['postnummer'];
	$ord=$_POST['ord'];
	$mobilnummer=$_POST['mobilnummer'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);
$datum=$_POST['datum'];
	$namnförtydligange=$_POST['namnförtydligange'];
	
	
	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, kön,födelsedatum,gatuadress,postnummer,ord,mobilnummer,email,password,datum,namnförtydligange)
					VALUES ('$username', '$kön','$födelsedatum','$gatuadress','$postnummer','$ord','$mobilnummer', '$email', '$password','$datum','$namnförtydligange')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! Använder registrering slutförd.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Något gick fel.')</script>";
			}
		} else {
			echo "<script>alert('Woops! E-post fänns redan.')</script>";
		}
		
	} else {
		echo "<script>alert('Lösenord matchar inte.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/minsidaregister.css">

	<style>
	body {
    width: 100%;
    min-height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(img/bg.jpg);
    background-position: center;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
}
	
		</style>




	<title>Bli Medlem</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Bli Medlem</p>
			<div class="input-group">
				<input type="text" placeholder="förnamn och efternamn" name="username" value="<?php echo $username; ?>" required>
			</div>
	<div class="input-group">
				<input type="text" placeholder="Kön" name="kön" value="<?php echo $kön; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="födelsedatum (dd.mm.åååå)" name="födelsedatum" value="<?php echo $födelsedatum; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Gatuadress" name="gatuadress" value="<?php echo $gatuadress; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Postnummer" name="postnummer" value="<?php echo $postnummer; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="ord" name="ord" value="<?php echo $ord; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Mobilnummer" name="mobilnummer" value="<?php echo $mobilnummer; ?>" required>
			</div>

			<div class="input-group">
				<input type="email" placeholder="E-Post" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Lösenord" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Bekräfta Lösenord" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
 			<div class="input-group">
				<input type="text" placeholder="Dagens Datum (dd.mm.åååå)" name="datum" value="<?php echo $datum;  ?>" required>
			</div>
			 <div class="input-group">
				<input type="text" placeholder="Namnförtydligange" name="namnförtydligange" value="<?php echo $namnförtydligange; ?>" required>
			</div>
			<div class="form-group">
			<div class="form-check">
			<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
			<label class="form-check-label" for="invalidCheck">
			Härmed accepterar jag att ovanstående uppgifter läggs i föreningens medlemsregister och att jag därmed blir medlem.
			</label>
			</div>
			</div><br>

			<div class="input-group">
				<button name="submit" class="btn">Skicka</button>
			</div>
			<p class="login-register-text">Har ett konto? <a href="minsida.php">Logga in Här</a>.</p>
		</form>
	</div>
</body>
</html>