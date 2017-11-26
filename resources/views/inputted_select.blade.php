<!--SuccessOK!-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>ふうチケ決済</title>
    <style type="text/css">
      #site-box {
          width : 100%;
          font-family: "ＭＳ 明朝",sans-serif;
          border-width: 1px;
          text-align: center;
      }
      #header {
        font-size: 350%;
        color: #483D8B;
        text-decoration: underline
      }
      #main {
        width : 80%;
        margin: 0 auto;
        text-align: left;
        font-size: 250%;
        color: #483D8B;
      }
      #footer {
        width : 80%;
        margin: 0 auto;
        text-align: center;
        border-style: solid;
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
      .buttonstyle {
          float: left;
          margin-right: 2%;
          margin-left: 2%;
      }
      .buttonstyle2 {
          text-align: center;
          margin: 0 auto;
      }
     </style>
   </head>
   <body>
     <div id="site-box">
        <div id="header">
         オンライン決済のご案内
       </div></br>
        <div id="main">
          ふうチケではクレジットカードとビットコイン両方でのお支払いが可能です！</br>
          お客様のクレジットカード番号や個人情報などは当店には一切通知されませんので「風俗店でクレジットカードを使うのは抵抗がある…」という方も安心してお使い頂けます。
        </br></br>
          @if(app('env')=='local')
          <div class='buttonstyle2'>
          <div class="buttonstyle">
            <form action= "/<?php echo $id; ?>/conform_credit" method="post">
              <input type = "hidden" name = "id" value = "<?php echo $id; ?>"/>
              <input type = "hidden" name = "money" value = "<?php echo $amount; ?>"/>
              <input type = "hidden" name = "merchantName" value = "<?php echo $merchantName; ?>"/>
              <input type = "hidden" name = "clientip" value = "<?php echo $clientip; ?>"/>
              <input type="image" src="{{asset('image/credit_button.gif')}}" />
            </form></br>
          <img width="94" height="94" src="{{asset('image/card_jcb_b.gif')}}" />
          <img width="94" height="94" src="{{asset('image/card_master_b.gif')}}" />
          <img width="94" height="94" src="{{asset('image/card_visa_b.gif')}}" />
          </div>
          <div class="buttonstyle">
          <form action= "/<?php echo $id; ?>/conform_bitcoin" method="post">
            <input type = "hidden" name = "id" value = "<?php echo $id; ?>"/>
            <input type = "hidden" name = "buyerId" value = "<?php echo $cust_mail; ?>"/>
            <input type = "hidden" name = "amount" value = "<?php echo $amount; ?>"/>
            <input type = "hidden" name = "merchantName" value = "<?php echo $merchantName; ?>"/>
            <input type="image" src="{{asset('image/bitcoin_button.gif')}}" />
          </form></br>
          <img width="94" height="94" src="{{asset('image/bitcoin-orange-480x480.png')}}" />
          </div>
          </div>
          @endif
          @if(app('env')=='production')
          <div class='buttonstyle2'>
          <div class="buttonstyle">
            <form action= "/<?php echo $id; ?>/conform_credit" method="post">
              <input type = "hidden" name = "id" value = "<?php echo $id; ?>"/>
              <input type = "hidden" name = "money" value = "<?php echo $amount; ?>"/>
              <input type = "hidden" name = "merchantName" value = "<?php echo $merchantName; ?>"/>
              <input type = "hidden" name = "clientip" value = "<?php echo $clientip; ?>"/>
              <input type="image" src="{{secure_asset('image/credit_button.gif')}}" />
            </form></br>
          <img width="94" height="94" src="{{secure_asset('image/card_jcb_b.gif')}}" />
          <img width="94" height="94" src="{{secure_asset('image/card_master_b.gif')}}" />
          <img width="94" height="94" src="{{secure_asset('image/card_visa_b.gif')}}" />
          </div>
          <div class="buttonstyle">
          <form action= "/<?php echo $id; ?>/conform_bitcoin" method="post">
            <input type = "hidden" name = "id" value = "<?php echo $id; ?>"/>
            <input type = "hidden" name = "buyerId" value = "<?php echo $cust_mail; ?>"/>
            <input type = "hidden" name = "amount" value = "<?php echo $amount; ?>"/>
            <input type = "hidden" name = "merchantName" value = "<?php echo $merchantName; ?>"/>
            <input type="image" src="{{secure_asset('image/bitcoin_button.gif')}}" />
          </form></br>
          <img width="94" height="94" src="{{secure_asset('image/bitcoin-orange-480x480.png')}}" />
          </div>
          </div>
          @endif
        </div></br></br></br></br></br></br></br></br></br></br></br></br><br></br><br></br>
        <div id="footer">
          @if(app('env')=='local')
          <img src="{{asset('image/fuu_logo_mini.png')}}" />
          @endif
          @if(app('env')=='production')
          <img src="{{secure_asset('image/fuu_logo_mini.png')}}" />
          @endif
          </br>
          <u>オンライン決済に関するお問合せ窓口</u></br>
          contact@diamond-production.net</br>
          TEL:03-6869-3903</br>
          <div style="padding: 10px; margin-bottom: 10px; border: 1px dotted #333333;">
            ※お支払回数は一括のみとなります</br>
            ※オンライン決済はお客様に直接カード情報をご入力頂きますので個人情報保護につながります。</br>
            ※不正カード防止システムが導入されている為、不正カード発覚時には警察に連絡させて頂きます。</br>
            ※延長料金・追加オプション等に関しましては現金でのお支払いをお願い致します。
          </div>
        </div>
     </div>
  </body>

</html>
