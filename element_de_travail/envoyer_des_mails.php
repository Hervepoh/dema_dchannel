<?php
if(isset($_POST['mailform'])){
	if(!empty($_POST['nom']) AND !empty($_POST['email']) AND !empty($_POST['message'])){
		$header="MIME-Version: 1.0\r\n";
		$header.='From:"demagroup.com"<support@demagroup.com>'."\n";
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';

		$message='
				<div align="center">
					<img src="http://www.primfx.com/mailing/banniere.png"/>
					<br />
					<u>Nom de l expéditeur</u>  '.$_POST['nom'].'
					<br/>
					<u>mail de l expéditeur</u>  '.$_POST['email'].'
					<br>
					<br>

					<img src="http://www.primfx.com/mailing/separation.png"/>
				</div>
		';

		mail("epohherve63@gmail.com", "Contact-Mon site!", $message, $header);
		$msg="message envoyé";

	}else {
		$msg="Tous les champs doivent etre completé";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>	

<h2>Nous Contactez</h2>
<form method="POST" action="" role="form">
	<input type="text" name="nom" placeholder="Saisir votre nom" value="<?php if (isset($_POST['nom'])) {echo ($_POST['nom']); }?>"><br><br>
	<input type="email" name="email" placeholder="Saisir votre email"  value="<?php if (isset($_POST['email'])) {echo ($_POST['email']); }?>"><br><br>
	<textarea name="message" placeholder="Nous laissez un messsage "></textarea><br><br>
	<input type="submit" value="envoyer!" name="mailform"/>
</form>
<?php
	if(isset($msg)){
		echo($msg);
	}
?>
</body>
</html>