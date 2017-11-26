<?php
use \google\appengine\api\mail\Message;

mb_language("Japanese");
mb_internal_encoding("UTF-8");

list($course_name, $course_price) = explode(':', $course);
$subject = "オンライン予約フォームより送信(";
$subject .= $cust_name;
$subject .= "様)";
//利用者へメール送信
try {
    $message = new Message();
    $message->setSender('contact@diamond-production.net');
    $message->addTo($storemail);
    $message->setSubject($subject);
    $message->setTextBody("オンライン予約フォームより送信がありました。\n\n＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊\n店舗名：$merchantName\nお名前：$cust_name\nご連絡先(携帯電話番号)：$cust_tel\nメールアドレス：$cust_mail\n希望予約日：$date\n希望到着時間：$starttime\n希望終了時間：$endtime\nご指名女性：$designatd\nご利用コース名：$course_name\n金額：$course_price\nご利用場所：$place\nご利用場所名：$address\n＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊\n\n\n【決済に関するお問い合わせ】はコチラ\ncontact@diamond-production.net\n");
    $message->send();
} catch (InvalidArgumentException $e) {
    echo 'There was an error';
}
$course_price = str_replace('円', '', $course_price);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>ふうチケ決済</title>
    <style type="text/css">
      body {
        @if(app('env')=='local')
        background-image: url({{asset('image/card_iphone_asi_forPhone.png')}});
        @endif
        @if(app('env')=='production')
        background-image: url({{secure_asset('img/card_iphone_asi_forPhone.png')}});
        @endif
        background-size:cover;
      }
      #site-box {
          width : 100%;
          text-align: center;
          font-family: "ＭＳ 明朝",sans-serif;
        }
        .titlefont {
	         font-size: 350%;
	          color: #000000;
          }
    .subtitlefont {
	      font-size: 400%;
	      color: #000000;
    }
    .normalfont {
	      font-size: 250%;
	      color: #000000;
    }
    .buttonstyle img{
        vertical-align:middle;
    }
    .fuu-style img{
        vertical-align:left;
    }
    </style>
  </head>
<body>
<div id="site-box">
@if(app('env')=='local')
<p class="fuu-style"><img src="{{asset('image/fuu_logo.jpg')}}" /></p>
@endif
@if(app('env')=='production')
<p class="fuu-style"><img src="{{secure_asset('image/fuu_logo.jpg')}}" /></p>
@endif

</br></br></br></br>
<span class="titlefont">ふうチケ決済</span></br></br>
<span class="subtitlefont">お客様のスマホで</br>簡単・便利にオンライン決済</span></br>
<span class="normalfont">ふうチケでは、クレジット決済に加え、</br><b>ビットコイン決済</b>も行えます。</span></br></br></br>

<form action= "/<?php echo $id; ?>/inputted_select" method="post">
  <input type = "hidden" name = "id" value = "<?php echo $id; ?>"/>
  <input type = "hidden" name = "cust_mail" value = "<?php echo $cust_mail; ?>"/>
  <input type = "hidden" name = "amount" value = "<?php echo $course_price; ?>"/>
  <input type = "hidden" name = "merchantName" value = "<?php echo $merchantName; ?>"/>
  <input type = "hidden" name = "clientip" value = "<?php echo $clientip; ?>"/>
@if(app('env')=='local')
  <input class="buttonstyle" type="image" src="{{asset('image/button.gif')}}" />
</form>
<img width="94" height="94" src="{{asset('image/card_jcb_b.gif')}}" />
<img width="94" height="94" src="{{asset('image/card_master_b.gif')}}" />
<img width="94" height="94" src="{{asset('image/card_visa_b.gif')}}" />
<img width="94" height="94" src="{{asset('image/bitcoin-orange-480x480.png')}}" />
@endif
@if(app('env')=='production')
  <input class="buttonstyle" type="image" src="{{secure_asset('image/button.gif')}}" />
</form>
<img width="94" height="94" src="{{secure_asset('image/card_jcb_b.gif')}}" />
<img width="94" height="94" src="{{secure_asset('image/card_master_b.gif')}}" />
<img width="94" height="94" src="{{secure_asset('image/card_visa_b.gif')}}" />
<img width="94" height="94" src="{{secure_asset('image/bitcoin-orange-480x480.png')}}" />
@endif
</div>
</body>

</html>
