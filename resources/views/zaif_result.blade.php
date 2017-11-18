<?php
use google\appengine\api\mail\Message;
//作成したインボイスを識別するためのID
$invoiceId = $_POST['invoiceId'];
//決済完了日時。unixtime
$settled = $_POST['settled'];
//決済対象金額（送信された金額）
$amount = $_POST['amount'];
//Bitcoinによる請求額（bitcoinによる決済時のみ）
$btc = $_POST['btc'];
//BitcoinまたMonacoinの決済用支払先アドレス
$address = $_POST['address'];
//設定された利用者ID(こちらに利用者のメールアドレスを格納)
$buyerId = $_POST['buyerId'];

$date = date( "Y/m/d" , $settled ) ;

mb_language("Japanese");
mb_internal_encoding("UTF-8");

//利用者へメール送信

try {
    $message = new Message();
    $message->setSender('contact@diamond-production.net');
    $message->addTo($buyerId);
    $message->setSubject('ビットコイン決済完了通知');
    $message->setTextBody('ビットコイン決済が完了しました。\nまたのご利用をお待ちしております。\n決済完了日時：' . $date . "\n決済金額：" . $amount . "\nBitcoinによる請求額：" . $btc;);
    $message->send();
    echo 'Mail Sent';
} catch (InvalidArgumentException $e) {
    echo 'There was an error';
}

$to      = $buyerId;
$subject = 'ビットコイン決済完了通知';
$message = 'ビットコイン決済が完了しました。\nまたのご利用をお待ちしております。\n決済完了日時：' . $date . "\n決済金額：" . $amount . "\nBitcoinによる請求額：" . $btc;
$headers = 'From: contact@diamond-production.net' . "\r\n";
mb_send_mail($to, $subject, $message, $headers);
?>
