<!--SuccessOK!-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>ビットコイン決済のご案内</title>
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
      margin: 0 auto;
      text-align: center;
      font-size: 250%;
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
    .submitbutton {
      width: 30%;
      height: 10%;
      font-size: 50%;
    }
     </style>
   </head>
   <body>
     <div id="site-box">
       <div id="header">
       <div style="background-color:#191970;">
         <div style="color:#ffffff;">
      ビットコイン決済のご案内
         </div>
       </div>
     </div>
        <div id="main">
          ご利用明細にはTC / TCM / TCOT / TELECOM / TMCのいずれかで記載されます。※ご利用サイト名は記載されません。
        </br></br><a href = "/fuuticket_kiyaku">利用規約をご確認下さい</a></br></br>
          <form action= "/<?php echo $id; ?>/zaif_post" method="POST">
            <input type = "hidden" name = "amount" value = "<?php echo $amount; ?>"/>
            <input type = "hidden" name = "buyerId" value = "<?php echo $buyerId; ?>"/>
            <input type = "hidden" name = "merchantName" value = "<?php echo $merchantName; ?>"/>
            <input type = "hidden" name = "id" value = "<?php echo $id; ?>"/>
            <input class="btn btn-success" type = "submit" value = "ビットコイン決済へ"/>
          </form>
        </div>

        </div>

     </div>
  </body>

</html>
