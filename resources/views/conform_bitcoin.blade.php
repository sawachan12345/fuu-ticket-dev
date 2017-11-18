<!--SuccessOK!-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php

<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>クレジット決済のご案内</title>
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
         クレジット決済のご案内</br>
         店舗名：<?php echo $store; ?>
        </div>
        <div id="main">
          <h2>ビットコイン決済のご案内</h2></br>
          <form action= "/<?php echo $id; ?>/zaif_post" method="POST">
            <input type = "hidden" name = "amount" value = "<?php echo $amount; ?>"/></br>
            <input type = "hidden" name = "buyerId" value = "<?php echo $buyerId; ?>"/></br>
            <input type = "hidden" name = "merchantName" value = "<?php echo $store; ?>"/></br>
             </div></br></br>
             <input class="btn btn-success" type = "submit" value = "決済ページ"/>
          </form>
        </div>
     </div>
  </body>

</html>
