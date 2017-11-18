<?php
$amount = Input::post('amount');
$buyerId = Input::post('buyerId');
$merchantName = Input::post('merchantName');

$nonce =  microtime(true) - 1509026602;

$merchantName = mb_convert_encoding($merchantName, 'SJIS', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
$POST_DATA = array(
    'method' => 'createInvoice',
    'key' => 'f6480948-b9c5-475e-b29a-24b9f2c28c2e',
    'md5secret' => '59f089fa1ac1c8b34bc198458a2ffe67',
    'nonce' => $nonce,
    'currency' => 'btc',
    'amount' => $amount,
    'merchantName' => $merchantName,
    'speed' => 'medium',
    'notificationUri' => 'https://test.fuu-ticket.com/zaif_result.php',
    'redirectUri' => 'https://test.fuu-ticket.com',
    'buyerId' => $buyerId
);

$curl = curl_init("https://api.zaif.jp/ecapi");
curl_setopt($curl, CURLOPT_POST, TRUE);
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($POST_DATA));
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE);

//利用者へメール送信
try {
    $message = new Message();
    $message->setSender('contact@diamond-production.net');
    $message->addTo($buyerId);
    $message->setSubject('ビットコイン決済開始通知');
    $message->setTextBody('ビットコイン決済が完了しました。\nまたのご利用をお待ちしております。\n決済完了日時：' . $date . "\n決済金額：" . $amount . "\nBitcoinによる請求額：" . $btc;);
    $message->send();
    echo 'Mail Sent';
} catch (InvalidArgumentException $e) {
    echo 'There was an error';
}

$output = curl_exec($curl);
$output = mb_convert_encoding($output, 'SJIS', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
$array = json_decode($output,true);
$invoiceUri = $array["return"]["invoiceUri"];
header("Location:$invoiceUri");

return;

?>
