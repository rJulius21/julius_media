<?php

$name = "Client name is " . $_POST['name'];
$brand ="Client brand is " . $_POST['brand'];
$website ="Client website is " . $_POST['website'];

$facebook = $_POST['social1'];
$instagram = $_POST['social2'];
$twitter = $_POST['social3'];
$youtube = $_POST['social4'];
$twitch = $_POST['social5'];
$other = $_POST['social6'];
$none = $_POST['social7'];

function facebook() {
  global $facebook;

  if(isset($facebook)){
    $facebook = "Client uses facebook";
  } else {
    $facebook = "Client does NOT use facebook";
  }
}

function instagram() {
  global $instagram;

  if(isset($instagram)){
    $instagram = "Client uses instagram";
  } else {
    $instagram = "Client does NOT use instagram";
  }
}

function twitter() {
  global $twitter;

  if(isset($twitter)){
    $twitter = "Client uses twitter";
  } else {
    $twitter = "Client does NOT use twitter";
  }
}

function youtube() {
  global $youtube; 

  if(isset($youtube)){
    $youtube = "Client uses youtube";
  } else {
    $youtube = "Client does NOT use youtube";
  }
}

function twitch() {
  global $twitch;

  if(isset($twitch)){
    $twitch = "Client uses twitch";
  } else {
    $twitch = "Client does NOT use twitch";
  }
}

function other() {
  global $other;

  if(isset($other)){
    $other = "Client uses other";
  } else {
    $other = "Client does NOT use other";
  }
}

function none() {
  global $none;

  if(isset($none)){
    $none = "Client is not currently using social media";
  } else {
    $none = " ";
  }
}

facebook();
instagram();
twitter();
youtube();
twitch();
other();
none();

$to = "raoulvanhecke@yahoo.com";
$subject = "JULIUS MEDIA INQUERY";
$headers = $_POST['email'];
$message = $name . "\n" . "\n"
         . $brand . "\n" . "\n"
         . $website . "\n" . "\n"
         . $facebook . "\n"  . "\n"
         . $instagram . "\n"  . "\n"
         . $twitter . "\n" . "\n"
         . $youtube . "\n" . "\n"
         . $twitch . "\n" . "\n"
         . $other . "\n" . "\n"
         . $none;

mail($to,$subject,$message,$headers);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Your inquery was sent, <br> thank you!</h1>
  <a href="contact.php">Return to site</a>
</body>
</html>