<?php


$users = file_get_contents('Database/free.txt');
$freeusers = explode("\n", $users);

$videoURLStart = "https://t.me/Mr_Mrs_Krishna/154";


if (preg_match('/^(\/start|\.start|!start)/', $text)) {
    if (in_array($userId, $freeusers)) {
        $caption = "<b>Arank
   Hey  @$username ID <code>$userId</code>

</b><code>Welcome to </code> /cmds <code>button</code>";
        sendVideox($chatId, $videoURLStart, $caption, $keyboard);
    } else {
        reply_tox($chatId,$message_id,$keyboard,"<code>You are not registered, Register first with</code> /register <code> to use me</code>");
    }
}
//=========START END========//
if (preg_match('/^(\/cmds|\.cmds|!cmds)/', $text)) {
  
    $videoUrl = "https://t.me/Mr_Mrs_Krishna/154"; 

    $keyboard2 = json_encode([
        'inline_keyboard' => [
            [
                ['text' => '𝗚𝗔𝗧𝗘𝗦', 'callback_data' => 'gates'],
                ['text' => '𝗧𝗼𝗼𝗹𝘀', 'callback_data' => 'herr'],
                ['text' => '𝗣𝗿𝗶𝗰𝗲', 'callback_data' => 'price'],
            ],
            [
                ['text' => '𝗙𝗶𝗻𝗮𝗹𝗶𝘇𝗲', 'callback_data' => 'finalize'],
            ],
            [
                ['text' => '𝗢𝗳𝗳𝗶𝗰𝗶𝗮𝗹 𝗚𝗿𝗼𝘂𝗽', 'callback_data' => 'channel'],
            ],
        ]
    ]);

    $caption = "<b>𝑾𝒆𝒍𝒄𝒐𝒎𝒆 𝒕𝒐 𝒎𝒚 𝒄𝒐𝒎𝒎𝒂𝒏𝒅 𝒔𝒆𝒄𝒕𝒊𝒐𝒏 $firstname
    
𝑬𝒙𝒑𝒍𝒐𝒓𝒆 𝒎𝒆 𝒎𝒐𝒓𝒆 𝒃𝒚 𝒄𝒍𝒊𝒄𝒌𝒊𝒏𝒈 𝒕𝒉𝒆 𝒃𝒖𝒕𝒕𝒐𝒏𝒔 𝒃𝒆𝒍𝒐𝒘</b>";
    file_get_contents("https://api.telegram.org/bot$botToken/deleteMessage?chat_id=$chatId&message_id=$messageId");

    // Using sendVideo endpoint instead of sendPhoto
    file_get_contents("https://api.telegram.org/bot$botToken/sendVideo?chat_id=$chatId&video=$videoUrl&caption=" . urlencode($caption) . "&parse_mode=HTML&reply_markup=$keyboard2");
}
