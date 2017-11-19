<?php
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
    'notificationUri' => 'https://fuu-ticket.com/' . $id . '/zaif_result',
    'buyerId' => $buyerId
);

$curl = curl_init("https://api.zaif.jp/ecapi");
curl_setopt($curl, CURLOPT_POST, TRUE);
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($POST_DATA));
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
//curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE);

$output = curl_exec($curl);
$output = mb_convert_encoding($output, 'SJIS', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
$array = json_decode($output,true);
$invoiceUri = $array["return"]["invoiceUri"];
header("Location:$invoiceUri");
exit();
?>
