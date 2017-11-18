<!--SuccessOK!-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>ご利用金額入力</title>
    <style type="text/css">
      #site-box {
          width : 100%;
          font-family: "ＭＳ 明朝",sans-serif;
      }
      #header {
        text-align: center;
        font-size: 350%;
        color: #483D8B;
      }
      #main {
        width : 80%;
        text-align: center;
        font-size: 350%;
        color: #483D8B;
      }
      #footer {

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
     </style>
   </head>
   <body>
     <div id="site-box">
        <div id="header">
         クレジット決済</br>
         店舗名：<?php echo $store; ?>
        </div>
        <div id="main">
          ご利用金額入力
          <h2>サンプル決済</br>（クレジット）</h2></br>
          <form action= "/<?php echo $id; ?>/conform_credit" method="POST">
            決済金額を入力して下さい。
            <input type = "text" name = "money" value = ""/>
            <input type = "submit" value = "決済開始"/>
          </form>
        </div>
     </div>
  </body>

</html>
