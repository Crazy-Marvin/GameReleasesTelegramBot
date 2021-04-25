<?php
$botToken = "";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents('php://input');
$update = json_decode($update, True);

$config = [
    'mysql_host' => '',
    'mysql_user' => '',
    'mysql_password' => '',
    'mysql_db' => ''
];

$mysqli = new mysqli(
    $config['mysql_host'],
    $config['mysql_user'],
    $config['mysql_password'],
    $config['mysql_db']
);

$mysqli->query("set names utf8mb4_general_ci");

$text = $update['message']['text'];
$chatId = $update['message']['chat']['id'];
$userId = $update['message']['from']['id'];

function sendMessage($chatId, $text) {
    $url = $GLOBALS[website]."/sendMessage?chat_id=$chatId&parse_mode=HTML&text=".urlencode($text);
    file_get_contents($url);
}

include "/var/www/html/game/assets/start.php";
include "/var/www/html/game/assets/commands.php";
?>
