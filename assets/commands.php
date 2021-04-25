<?php
if($text == "🎮 PC") {
    $selectUser = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `user_id` = $userId");
    if($rowUser = mysqli_fetch_assoc($selectUser)) {
        $recordPc = $rowUser["pc"];
        if($recordPc == "❌") {
            $updateUser = mysqli_query($mysqli, "UPDATE `halmpwct_game`.`users` SET `pc` = '✔️' WHERE `users`.`user_id` = $userId");
            sendMessage($chatId, "✔️ Release notifications enabled");
        } else {
            $updateUser = mysqli_query($mysqli, "UPDATE `halmpwct_game`.`users` SET `pc` = '❌' WHERE `users`.`user_id` = $userId");
            sendMessage($chatId, "❌ Release notifications disabled");
        }
    }
}

if($text == "🎮 XBOX") {
    $selectUser = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `user_id` = $userId");
    if($rowUser = mysqli_fetch_assoc($selectUser)) {
        $recordPc = $rowUser["xbox"];
        if($recordPc == "❌") {
            $updateUser = mysqli_query($mysqli, "UPDATE `halmpwct_game`.`users` SET `xbox` = '✔️' WHERE `users`.`user_id` = $userId");
            sendMessage($chatId, "✔️ Release notifications enabled");
        } else {
            $updateUser = mysqli_query($mysqli, "UPDATE `halmpwct_game`.`users` SET `xbox` = '❌' WHERE `users`.`user_id` = $userId");
            sendMessage($chatId, "❌ Release notifications disabled");
        }
    }
}

if($text == "🎮 PS4") {
    $selectUser = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `user_id` = $userId");
    if($rowUser = mysqli_fetch_assoc($selectUser)) {
        $recordPc = $rowUser["ps4"];
        if($recordPc == "❌") {
            $updateUser = mysqli_query($mysqli, "UPDATE `halmpwct_game`.`users` SET `ps4` = '✔️' WHERE `users`.`user_id` = $userId");
            sendMessage($chatId, "✔️ Release notifications enabled");
        } else {
            $updateUser = mysqli_query($mysqli, "UPDATE `halmpwct_game`.`users` SET `ps4` = '❌' WHERE `users`.`user_id` = $userId");
            sendMessage($chatId, "❌ Release notifications disabled");
        }
    }
}

if($text == "🎮 SWITCH") {
    $selectUser = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `user_id` = $userId");
    if($rowUser = mysqli_fetch_assoc($selectUser)) {
        $recordPc = $rowUser["switch"];
        if($recordPc == "❌") {
            $updateUser = mysqli_query($mysqli, "UPDATE `halmpwct_game`.`users` SET `switch` = '✔️' WHERE `users`.`user_id` = $userId");
            sendMessage($chatId, "✔️ Release notifications enabled");
        } else {
            $updateUser = mysqli_query($mysqli, "UPDATE `halmpwct_game`.`users` SET `switch` = '❌' WHERE `users`.`user_id` = $userId");
            sendMessage($chatId, "❌ Release notifications disabled");
        }
    }
}

if($text == "🎮 ANDROID") {
    $selectUser = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `user_id` = $userId");
    if($rowUser = mysqli_fetch_assoc($selectUser)) {
        $recordPc = $rowUser["android"];
        if($recordPc == "❌") {
            $updateUser = mysqli_query($mysqli, "UPDATE `halmpwct_game`.`users` SET `android` = '✔️' WHERE `users`.`user_id` = $userId");
            sendMessage($chatId, "✔️ Release notifications enabled");
        } else {
            $updateUser = mysqli_query($mysqli, "UPDATE `halmpwct_game`.`users` SET `android` = '❌' WHERE `users`.`user_id` = $userId");
            sendMessage($chatId, "❌ Release notifications disabled");
        }
    }
}

if($text == "🎮 IOS") {
    $selectUser = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `user_id` = $userId");
    if($rowUser = mysqli_fetch_assoc($selectUser)) {
        $recordPc = $rowUser["ios"];
        if($recordPc == "❌") {
            $updateUser = mysqli_query($mysqli, "UPDATE `halmpwct_game`.`users` SET `ios` = '✔️' WHERE `users`.`user_id` = $userId");
            sendMessage($chatId, "✔️ Release notifications enabled");
        } else {
            $updateUser = mysqli_query($mysqli, "UPDATE `halmpwct_game`.`users` SET `ios` = '❌' WHERE `users`.`user_id` = $userId");
            sendMessage($chatId, "❌ Release notifications disabled");
        }
    }
}
?>