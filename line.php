 <?php
  

function send_LINE($msg){
 $access_token = 'nBbgEtuy+IpLMi4LVL2dmUgdSEf7FYaihDjtCUFm04Rlcsl9lp0zxp9o4lLmU0Su+e+L9Tf/ZyMAIUXss8apH6nI18LDOhZQB2EKenV9ec+4+KHRAFP0eN2biHMrA7Sji9nXSVbWIsoOJgqM35e/wQdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Ufcf11aa61ed6f3c757e5bd59cd8b3cdd',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
