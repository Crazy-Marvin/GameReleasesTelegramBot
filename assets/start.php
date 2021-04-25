<?php
if($text == "/start") {
    $selectUser = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `user_id` = $userId");
    if($rowUser = mysqli_fetch_assoc($selectUser)) {
        function keyboardStart($chatId, $text) {
            $keyboard = '&reply_markup={"keyboard":[["🎮 PC", "🎮 XBOX"],["🎮 PS4", "🎮 SWITCH"],["🎮 ANDROID", "🎮 IOS"]],"resize_keyboard":true}';
            $url = $GLOBALS[website]."/sendMessage?chat_id=$chatId&parse_mode=HTML&text=".urlencode($text).$keyboard;
            file_get_contents($url);
        }
        keyboardStart($chatId, "Hi, welcome to the Game Releases Bot. 🕹\nPlease choose your desidered platform(s) and I will send you a message at 11pm if a new release should be available.\nThe source code is available on <b>GitHub</b>\nEnjoy! 🍿\nhttps://github.com/Crazy-Marvin/GameReleasesTelegramBot.");
    } else {
        $insert_user = mysqli_query($mysqli, "INSERT INTO `halmpwct_game`.`users` (`user_id`, `pc`, `xbox`, `ps4`, `switch`, `android`, `ios`) VALUES ('$userId', '❌', '❌', '❌', '❌', '❌', '❌')");
        function keyboardStart($chatId, $text) {
            $keyboard = '&reply_markup={"keyboard":[["🎮 PC", "🎮 XBOX"],["🎮 PS4", "🎮 SWITCH"],["🎮 ANDROID", "🎮 IOS"]],"resize_keyboard":true}';
            $url = $GLOBALS[website]."/sendMessage?chat_id=$chatId&parse_mode=HTML&text=".urlencode($text).$keyboard;
            file_get_contents($url);
        }
        keyboardStart($chatId, "Hi, welcome to the Game Releases Bot. 🕹\nPlease choose your desidered platform(s) and I will send you a message at 11pm if a new release should be available.\nThe source code is available on <b>GitHub</b>\nEnjoy! 🍿\nhttps://github.com/Crazy-Marvin/GameReleasesTelegramBot.");
    }
}
?>