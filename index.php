<?php
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");
if (isset($_GET['slackusername'])) {
    $slackusername = $_GET['slackusername'];
    $backend = $_GET['backend'];
    $age = $_GET['age'];
    $bio = $_GET['bio'];
} else {
    $slackusername = "Blaze";
    $backend = "true";
    $age = "30";
    $bio = "PHP backend developer";
}

settype($slackusername, "string");

settype($age, "integer");
settype($bio, "string");


$myArr = array("slackUsername : $slackusername", "backend : $backend", "Age : $age", "Bio : $bio");

$myJSON = json_encode($myArr);

echo $myJSON;
?>
