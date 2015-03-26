
<?php
//recupere les champs du formulaire de contact
$email = Input::get ('email');
$subject = Input::get ('sujet');
$message = Input::get ('message');
$date_time = date("F j, Y, g:i a");
$userIpAddress = Request::getClientIp();
?>

<h1>Vous aveez été contacter par:</h1>

<p>
Adresse e-mail: <?php echo ($email);?>
Sujet: <?php echo ($sujet); ?>
Message: <?php echo ($message);?>
Date: <?php echo($date_time);?>
Adresse IP: <?php echo($userIpAddress);?>
</p>