<?php
use \google\appengine\api\mail\Message;

$date = date( "Y/m/d" , $settled ) ;

mb_language("Japanese");
mb_internal_encoding("UTF-8");

//利用者へメール送信

try {
    $message = new Message();
    $message->setSender('contact@diamond-production.net');
    $message->addTo($buyerId);
    $message->setSubject('ビットコイン決済完了通知');
    $message->setTextBody("ビットコイン決済が完了しました。\n\n＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊\n決済完了日時：$date\n決済金額：$amount\nBitcoinによる請求額：$btc\n決済用支払先アドレス：$address\n＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊\n\n\n今後ともよろしくお願い申し上げます。\n\n【決済に関するお問い合わせ】はコチラ\ncontact@diamond-production.net\n");
    $message->send();
    echo 'Mail Sent';
} catch (InvalidArgumentException $e) {
    echo 'There was an error';
}
?>
