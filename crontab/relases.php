<?php
require_once "/var/www/html/game/index.php";

$i = 0;

$selectUsersPC = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `pc` = "✔️"");
$numUsersPC = mysqli_num_rows($selectUsersPC);

while ($i <= $numUsersPC) {
    $rowUsersPC = mysqli_fetch_assoc($selectUsersPC);
    $recordUserIdPC = $rowUsersPC["user_id"];
    $filePC = file_get_contents("var/www/html/game/pc.text");
    sendMessage($recordUserIdPC, "🔔 [NEW GAME]:\n$filePC");
}

$selectUsersXBOX = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `xbox` = "✔️"");
$numUsersXBOX = mysqli_num_rows($selectUsersXBOX);

while ($i <= $numUsersXBOX) {
    $rowUsersXBOX = mysqli_fetch_assoc($selectUsersXBOX);
    $recordUserIdXBOX = $rowUsersXBOX["user_id"];
    $fileXBOX = file_get_contents("var/www/html/game/xbox.text");
    sendMessage($recordUserIdXBOX, "🔔 [NEW GAME]:\n$fileXBOX");
}

$selectUsersSWITCH = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `switch` = "✔️"");
$numUserSWITCH = mysqli_num_rows($selectUsersSWITCH);

while ($i <= $numUsersSWITCH) {
    $rowUsersSWITCH = mysqli_fetch_assoc($selectUsersSWITCH);
    $recordUserIdSWITCH = $rowUsersSWITCH["user_id"];
    $fileSWITCH = file_get_contents("var/www/html/game/switch.text");
    sendMessage($recordUserIdSWITCH, "🔔 [NEW GAME]:\n$fileSWITCH");
}

$selectUsersPS4 = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `ps4` = "✔️"");
$numUserPS4 = mysqli_num_rows($selectUsersPS4);

while ($i <= $numUsersPS4) {
    $rowUsersPS4 = mysqli_fetch_assoc($selectUsersPS4);
    $recordUserIdPS4 = $rowUsersPS4["user_id"];
    $filePS4 = file_get_contents("var/www/html/game/ps4.text");
    sendMessage($recordUserIdPS4, "🔔 [NEW GAME]:\n$filePS4");
}

$selectUsersANDROID = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `android` = "✔️"");
$numUserANDROID = mysqli_num_rows($selectUsersANDROID);

while ($i <= $numUsersANDROID) {
    $rowUsersANDROID = mysqli_fetch_assoc($selectUsersANDROID);
    $recordUserIdANDROID = $rowUsersANDROID["user_id"];
    $fileANDROID = file_get_contents("var/www/html/game/android.text");
    sendMessage($recordUserIdANDROID, "🔔 [NEW GAME]:\n$fileANDROID");
}

$selectUsersIOS = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `ios` = "✔️"");
$numUserIOS = mysqli_num_rows($selectUsersIOS);

while ($i <= $numUsersIOS) {
    $rowUsersIOS = mysqli_fetch_assoc($selectUsersIOS);
    $recordUserIdIOS = $rowUsersIOS["user_id"];
    $fileIOS = file_get_contents("var/www/html/game/ios.text");
    sendMessage($recordUserIdIOS, "🔔 [NEW GAME]:\n$fileIOS");
}
?>