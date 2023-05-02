<?php

require_once 'requires.php';
require_once '/home/perromlp/www/project/data/data.php';


/* This is the code that is executed when the user sends the command `/start` or `.start` or `?start` or `#start` or `/start@` to the bot. */
if ($text == '/start' || $text == ".start" || $text == "?start" || $text == "#start" || $text == "/start@NarutoPrimeChkBot") {

    $keyboard = json_encode([
         "inline_keyboard" => [
            [
                ["text" => "⚜️𝙂𝘼𝙏𝙀𝙎⚜️", "callback_data" => "so"],
                ["text" => "🔰𝙋𝙀𝙍𝙁𝙄𝙇🔰", "callback_data" => "info"],
            ],
            [
                ["text" => "𝗖𝗲𝗿𝗿𝗮𝗿📛", "callback_data" => "exit"],
            ]
        ]
    ]);

$starttime = microtime(true);
    $SQL = "SELECT * FROM `administrar` WHERE id=".$user_id;
    $CONSULTA = mysqli_query(mysqlcon(),$SQL);
    $json_array = [];


    while ($row = mysqli_fetch_assoc($CONSULTA)) {
    $json_array[] = $row;
    }

    $final2 = json_encode($json_array);

    $plan =anicap($final2, '"plan":"','"');
    mysqli_close(mysqlcon());
    $SQL = "SELECT * FROM `administrar` WHERE plan=".$plan;
    if(empty($plan)){
        $content = ['chat_id' => $chat_id, 'text' => "𝗢𝗵𝗵 𝘃𝗮𝗹𝗹𝗮, 𝘁𝘂 𝗻𝗼 𝗲𝘀𝘁𝗮𝘀 𝗲𝗻 𝗺𝗶 𝗯𝗮𝘀𝗲 𝗱𝗲 𝗱𝗮𝘁𝗼𝘀 𝗽𝗼𝗿 𝗳𝗮𝘃𝗼𝗿 𝘂𝘀𝗮 /register", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
            $m1  = SendMessage($content);
            exit();
    }
$mytime = 'time1';
    $content = ['chat_id' => $chat_id,'video'=> 'https://media.giphy.com/media/G5lFWxoTzfSzZPxo6Y/giphy.gif','caption' => "<b><i>Hello @$username welcome to Liderin Checker. I hope and have an excellent day</i></b>", 'reply_to_message_id' => $msg_id,  'reply_markup' => $keyboard,'parse_mode' => 'HTML'];
    $m3 = sendvideo($content);

}

$update = json_decode(file_get_contents("php://input"), true);

$chatId = $update["message"]["chat"]["id"];

/* This is the code that is executed when the user sends the command `/cmds` or `.cmds` or `?cmds` or `#cmds` or `/cmds@` to the bot. */
if (strpos($text,'/cmds') === 0) {
$sql = "SELECT * FROM `authorize` WHERE chats=".$chat_id;
    $cs = mysqli_query(mysqlcon(),$sql);
    $raw = mysqli_fetch_assoc($cs);
    $chats = $raw['chats'];

    if($chats != $chat_id and $ctype == "supergroup"){
        $content = ['chat_id' => $chat_id, 'text' => "$group_not_allowed", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
        exit();
    }else{
          $SQL = "SELECT * FROM `administrar` WHERE id=".$user_id;
    $CONSULTA = mysqli_query(mysqlcon(),$SQL);
    $json_array = [];


    while ($row = mysqli_fetch_assoc($CONSULTA)) {
    $json_array[] = $row;
    }

    $final2 = json_encode($json_array);

    $plan =anicap($final2, '"plan":"','"');
    mysqli_close(mysqlcon());
    $SQL = "SELECT * FROM `administrar` WHERE plan=".$plan;
    if(empty($plan)){
        $content = ['chat_id' => $chat_id, 'text' => "𝗢𝗵𝗵 𝘃𝗮𝗹𝗹𝗮, 𝘁𝘂 𝗻𝗼 𝗲𝘀𝘁𝗮𝘀 𝗲𝗻 𝗺𝗶 𝗯𝗮𝘀𝗲 𝗱𝗲 𝗱𝗮𝘁𝗼𝘀 𝗽𝗼𝗿 𝗳𝗮𝘃𝗼𝗿 𝘂𝘀𝗮 /register", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
            $m1  = SendMessage($content);
            exit();
    }
    }

    $keyboard = json_encode([
       "inline_keyboard" => [
                [
                    ["text" => "🔱𝗖𝗵𝗮𝗿𝗴𝗲𝗱🔱", "callback_data" => "charge"],
                    ["text" => "🧩𝗔𝘂𝘁𝗵🧩", "callback_data" => "auth"],
 
                ],
                [
                    ["text" => "𝘼𝙩𝙧𝙖𝙨 ↩️", "callback_data" => "home"],
                   // ["text" => "𝗖𝗹𝗼𝘀𝗲", "callback_data" => "end"]
                ]
            ]
        ]);

    $content = ['chat_id' => $chat_id,'video'=> 'https://media.giphy.com/media/KmqxlCZgIUWe3z4yRD/giphy.gif','caption' => "<b> | 𝗘𝘀𝘁𝗮 𝗲𝘀 𝗹𝗮 𝘀𝗲𝗰𝗰𝗶𝗼𝗻 𝗱𝗲 𝗰𝗼𝗺𝗮𝗻𝗱𝗼𝘀 𝗽𝗼𝗿 𝗳𝗮𝘃𝗼𝗿 𝗱𝗮𝗹𝗲 𝗰𝗹𝗶𝗰𝗸 𝗮 𝗮𝗹𝗴𝘂𝗻𝗮𝘀 𝗱𝗲 𝗲𝘀𝘁𝗮𝘀 𝗼𝗽𝗰𝗶𝗼𝗻𝗲𝘀 𝗽𝗮𝗿𝗮 𝗺𝗮𝘀 𝗶𝗻𝗳𝗼𝗿𝗺𝗮𝗰𝗶𝗼𝗻​ ᴄʜᴀᴛ ɪᴅ: <code>$chat_id</code> | <code>$user_id</code></b>", 'reply_to_message_id' => $msg_id,  'reply_markup' => $keyboard,'parse_mode' => 'HTML'];
    $m1 = sendvideo($content);
}


/* This is the code that is executed when the user clicks on the "Return" button. */
if ($data == "home" || $data == "return") {
    if ($callbackfrom != $callbackuserid) {
        $content = ['callback_query_id' => $callbackid, 'text' => "❌Genera tu propio menu❌", "show_alert" => true];
        answerCallbackQuery($content);
    } else {
      
         $keyboard = json_encode([
         "inline_keyboard" => [
            [
                ["text" => "⚜️𝗚𝘼𝙏𝙀𝙎⚜️", "callback_data" => "so"],
                ["text" => "🔰𝗣𝙀𝙍𝙁𝙄𝙇🔰", "callback_data" => "info"],
            ],
            [
                ["text" => "𝗖𝗲𝗿𝗿𝗮𝗿📛", "callback_data" => "exit"],
            ]
        ]
    ]);


      $content = ['chat_id' => $callbackchatid,'php'=> 'mikazausers.alwaysdata.net/project/start.mp4','caption' => "<b><i>Hello @$callbackusername welcome to Liderin Checker. I hope and have an excellent day</i></b>", 'message_id' => $callbackmessageid, 'reply_markup' => $keyboard, 'parse_mode' => 'HTML'];


        EditCaption($content);
    }
}


/* This is the code that is executed when the user clicks on the "Gates" button. */
if ($data == "so") {
    if ($callbackfrom != $callbackuserid) {
        $content = ['callback_query_id' => $callbackid, 'text' => "❌Genera tu propio menu❌", "show_alert" => true];
        answerCallbackQuery($content);
    } else {
        $keyboard = json_encode([

        "inline_keyboard" => [
                [
                  ["text" => "⚜️𝗚𝘼𝙏𝙀𝙎⚜️", "callback_data" => "gates"],

                  ["text" => "🔘𝗧𝙊𝙊𝙇𝙎🔘", "callback_data" => "tools"],
                ],
                [
                    ["text" => "𝘼𝙩𝙧𝙖𝙨 ↩️", "callback_data" => "home"],
                   // ["text" => "𝗖𝗹𝗼𝘀𝗲", "callback_data" => "end"]
                ]
            ]
        ]);
        $content = ['chat_id' => $callbackchatid,'photo'=> 'xtrachkbot.alwaysdata.net/project/th.jpeg','caption' => "<b>| 𝗘𝘀𝘁𝗮 𝗲𝘀 𝗹𝗮 𝘀𝗲𝗰𝗰𝗶𝗼𝗻 𝗱𝗲 𝗰𝗼𝗺𝗮𝗻𝗱𝗼𝘀 𝗽𝗼𝗿 𝗳𝗮𝘃𝗼𝗿 𝗱𝗮𝗹𝗲 𝗰𝗹𝗶𝗰𝗸 𝗮 𝗮𝗹𝗴𝘂𝗻𝗮𝘀 𝗱𝗲 𝗲𝘀𝘁𝗮𝘀 𝗼𝗽𝗰𝗶𝗼𝗻𝗲𝘀 𝗽𝗮𝗿𝗮 𝗺𝗮𝘀 𝗶𝗻𝗳𝗼𝗿𝗺𝗮𝗰𝗶𝗼𝗻 ᴄʜᴀᴛ ɪᴅ: <code>$callbackchat_id</code> | <code>$chatId</code></b>", 'message_id' => $callbackmessageid, 'reply_markup' => $keyboard, 'parse_mode' => 'HTML'];
        EditCaption($content);
    }
}

if ($data == "gates") {
    if ($callbackfrom != $callbackuserid) {
        $content = ['callback_query_id' => $callbackid, 'text' => "❌Genera tu propio menu❌", "show_alert" => true];
        answerCallbackQuery($content);
    } else {
        $keyboard = json_encode([

        "inline_keyboard" => [
                [
                    ["text" => "🔱𝗖𝗵𝗮𝗿𝗴𝗲𝗱🔱", "callback_data" => "charge"],
                    ["text" => "🧩𝗔𝘂𝘁𝗵🧩", "callback_data" => "auth"],
 
                ],
                [
                    ["text" => "𝘼𝙩𝙧𝙖𝙨 ↩️", "callback_data" => "so"],
                   // ["text" => "𝗖𝗹𝗼𝘀𝗲", "callback_data" => "end"]
                ]
            ]
        ]);
        $content = ['chat_id' => $callbackchatid,'photo'=> 'xtrachkbot.alwaysdata.net/project/th.jpeg','caption' => "<b> | 𝗘𝘀𝘁𝗮 𝗲𝘀 𝗹𝗮 𝘀𝗲𝗰𝗰𝗶𝗼𝗻 𝗱𝗲 𝗰𝗼𝗺𝗮𝗻𝗱𝗼𝘀 𝗽𝗼𝗿 𝗳𝗮𝘃𝗼𝗿 𝗱𝗮𝗹𝗲 𝗰𝗹𝗶𝗰𝗸 𝗮 𝗮𝗹𝗴𝘂𝗻𝗮𝘀 𝗱𝗲 𝗲𝘀𝘁𝗮𝘀 𝗼𝗽𝗰𝗶𝗼𝗻𝗲𝘀 𝗽𝗮𝗿𝗮 𝗺𝗮𝘀 𝗶𝗻𝗳𝗼𝗿𝗺𝗮𝗰𝗶𝗼𝗻 ᴄʜᴀᴛ ɪᴅ: <code>$chat_id</code> | <code>$user_id</code></b>", 'message_id' => $callbackmessageid, 'reply_markup' => $keyboard, 'parse_mode' => 'HTML'];
        EditCaption($content);
    }
}


/* This is the code that is executed when the user clicks on the "Gates Charge" button. */
if ($data == "charge") {
    if ($callbackfrom != $callbackuserid) {
        $content = ['callback_query_id' => $callbackid, 'text' => "❌Genera tu propio menu❌", "show_alert" => true];
        answerCallbackQuery($content);
    } else {
        $keyboard = json_encode([
            "inline_keyboard" => [
                [
                    ["text" => "𝘼𝙩𝙧𝙖𝙨 ↩️", "callback_data" => "gates"],
                  
                  //  ["text" => "Next", "callback_data" => "charge2"],
                ]
            ]
        ]);

        /*$content = ['chat_id' => $callbackchatid, 'text' => $charge, 'message_id' => $callbackmessageid, 'reply_markup' => $keyboard, 'parse_mode' => 'HTML'];
        EditMessageText($content);*/
        $content = ['chat_id' => $callbackchatid,'photo'=> 'xtrachkbot.alwaysdata.net/project/th.jpeg','caption' => $charge, 'message_id' => $callbackmessageid, 'reply_markup' => $keyboard, 'parse_mode' => 'HTML'];
        EditCaption($content);
    }
}

/* This is the code that is executed when the user clicks on the "Gates Auth" button. */
if ($data == "auth") {
    if ($callbackfrom != $callbackuserid) {
        $content = ['callback_query_id' => $callbackid, 'text' => "❌Genera tu propio menu❌", "show_alert" => true];
        answerCallbackQuery($content);
    } else {
        $keyboard = json_encode([
            "inline_keyboard" => [
                [
                    ["text" => "𝘼𝙩𝙧𝙖𝙨 ↩️", "callback_data" => "gates"],
         //           ["text" => "Home", "callback_data" => "home"],
                ]
            ]
        ]);


$content = ['chat_id' => $callbackchatid,'photo'=> 'xtrachkbot.alwaysdata.net/project/th.jpeg','caption' => $auth, 'message_id' => $callbackmessageid, 'reply_markup' => $keyboard, 'parse_mode' => 'HTML'];
        EditCaption($content);
    }
}


if ($data == "mass") {
    if ($callbackfrom != $callbackuserid) {
        $content = ['callback_query_id' => $callbackid, 'text' => "❌Genera tu propio menu❌", "show_alert" => true];
        answerCallbackQuery($content);
    } else {
        $keyboard = json_encode([
            "inline_keyboard" => [
                [
                    ["text" => "𝘼𝙩𝙧𝙖𝙨 ↩️", "callback_data" => "gates"],
                  //  ["text" => "", "callback_data" => "auth"],
                  //  ["text" => "Home", "callback_data" => "return"],
                ]
            ]
        ]);

        
$content = ['chat_id' => $callbackchatid,'photo'=> 'xtrachkbot.alwaysdata.net/project/th.jpeg','caption' => $mass, 'message_id' => $callbackmessageid, 'reply_markup' => $keyboard, 'parse_mode' => 'HTML'];
        EditCaption($content);
    }
}


/* This is the code that is executed when the user clicks on the "3D Check" button. */
if ($data == "3d") {
    if ($callbackfrom != $callbackuserid) {
        $content = ['callback_query_id' => $callbackid, 'text' => "❌Genera tu propio menu❌", "show_alert" => true];
        answerCallbackQuery($content);
    } else {
        $keyboard = json_encode([
            "inline_keyboard" => [
                [
                    ["text" => "Gates Auth", "callback_data" => "auth"],
                    ["text" => "Gates Charge", "callback_data" => "charge"],
                    ["text" => "Return", "callback_data" => "return"],
                ]
            ]
        ]);

        /*$content = [
            'chat_id' => $callbackchatid,
            'text' => $gates3d,
            'message_id' => $callbackmessageid,
            'reply_markup' => $keyboard,
            'parse_mode' => 'HTML'
        ];*/
$content = ['chat_id' => $callbackchatid,'photo'=> 'xtrachkbot.alwaysdata.net/project/th.jpeg','caption' => $gates3d, 'message_id' => $callbackmessageid, 'reply_markup' => $keyboard, 'parse_mode' => 'HTML'];
        EditCaption($content);
        
    }
}


/* This is the code that is executed when the user clicks on the "Tools" button. */
if ($data == "tools") {
    if ($callbackfrom != $callbackuserid) {
        $content = ['callback_query_id' => $callbackid, 'text' => "❌Genera tu propio menu❌", "show_alert" => true];
        answerCallbackQuery($content);
    } else {
        $keyboard = json_encode([
            "inline_keyboard" => [
                [
                    ["text" => "𝘼𝙩𝙧𝙖𝙨 ↩️", "callback_data" => "so"],

                ]
            ]
        ]);

        /*$content = [
            'chat_id' => $callbackchatid,
            'text' => ,
            'message_id' => $callbackmessageid,
            'reply_markup' => $keyboard,
            'parse_mode' => 'HTML'
        ];
        EditMessageText($content);*/
$content = ['chat_id' => $callbackchatid,'photo'=> 'xtrachkbot.alwaysdata.net/project/th.jpeg','caption' => $herramientas, 'message_id' => $callbackmessageid, 'reply_markup' => $keyboard, 'parse_mode' => 'HTML'];
        EditCaption($content);
    }
}


/* The code that is executed when the user clicks on the "Info" button. */
if ($data == "info") {
    if ($callbackfrom != $callbackuserid) {
        $content = ['callback_query_id' => $callbackid, 'text' => "❌Genera tu propio menu❌", "show_alert" => true];
        answerCallbackQuery($content);
    } else {
        $keyboard = json_encode([
            "inline_keyboard" => [
                [
                    ["text" => "𝘼𝙩𝙧𝙖𝙨 ↩️", "callback_data" => "return"],
  
                ]
            ]
        ]);

       /* $content = [
            'chat_id' => $callbackchatid,
            'text' => $informacion,
            'message_id' => $callbackmessageid,
            'reply_markup' => $keyboard,
            'parse_mode' => 'HTML'
        ];
        EditMessageText($content);*/
$content = ['chat_id' => $callbackchatid,'photo'=> 'xtrachkbot.alwaysdata.net/project/th.jpeg','caption' => $informacion, 'message_id' => $callbackmessageid, 'reply_markup' => $keyboard, 'parse_mode' => 'HTML'];
        EditCaption($content);
    }
}

/* This is the code that is executed when the user clicks on the "Finalize" button. */
if ($data == "exit") {
    if ($callbackfrom != $callbackuserid) {
        $content = ['callback_query_id' => $callbackid, 'text' => "❌Genera tu propio menu❌", "show_alert" => true];
        answerCallbackQuery($content);
    } else {
       /* $content = [
            'chat_id' => $callbackchatid,
            'text' => "𝑮𝒐𝒐𝒅𝒃𝒚𝒆! <a href='t.me/$callbackusername'>$callbackfname</a>.",
            'message_id' => $callbackmessageid,
            'reply_markup' => $keyboard,
            'disable_web_page_preview' => true,
            'parse_mode' => 'HTML'
        ];*/
        $keyboard = json_encode([
            "inline_keyboard" => [
                [
                    ["text" => "OPEN AGAIN 🔃", "callback_data" => "home"],
  
                ]
            ]
        ]);

        $content = ['chat_id' => $callbackchatid,'photo'=> 'xtrachkbot.alwaysdata.net/project/th.jpeg','caption' => "𝐌𝐞𝐧𝐮 𝐜𝐞𝐫𝐫𝐚𝐝𝐨 𝐧𝐨𝐬 𝐯𝐞𝐦𝐨𝐬 𝐞𝐧 𝐥𝐚 𝐩𝐫𝐨𝐱𝐢𝐦𝐚 𝐬𝐞𝐬𝐢𝐨𝐧! <a href='t.me/$callbackusername'>$callbackfname</a>.", 'message_id' => $callbackmessageid, 'reply_markup' => $keyboard,'disable_web_page_preview' => true, 'parse_mode' => 'HTML'];
        EditCaption($content);
    }
}
