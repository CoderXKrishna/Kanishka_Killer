<?php
if (preg_match('/\/register/', $message)) {
    // Load the existing users.
    $users = file_get_contents('Database/free.txt');
    $freeusers = explode("\n", $users);

    // Check if the user has already registered.
    if (in_array($userId, $freeusers)) {
        $response = 'User already registered ❌';
    } else {
        // If not, add the user to the file.
        $file = fopen('Database/free.txt', 'a');
        fwrite($file, $userId . "\n");
        fclose($file);

        $response = 'Nice now u are register from nowards iam yours❤😉 !Now click /start';
    }

    // Send the response.
    reply_tox($chatId, $message_id, $keyboard, $response);
}
?>
