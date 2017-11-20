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
        text-align: center;
    }
    #header {
      width : 80%;
      margin: 0 auto;
      font-size: 350%;
      color: #483D8B;
      text-align: left;
    }
    #main {
      width : 80%;
      margin: 0 auto;
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
    .inputarea {
      width: 80%;
      height: 10%;
      font-size: 50%;
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
          <img src="{{asset('image/fuu_logo.jpg')}}" /></br>
          <div style="padding: 1%; margin-bottom: 1%; border: 1px dotted #333333;">
            サイト名　<?php echo $store; ?>
          </div>
          <div style="background-color:#191970;">
            <div style="color:#ffffff;">
         ご利用金額入力
            </div>
          </div>
          </br>
       </div>
        <div id="main">
          <form action= "/<?php echo $id; ?>/conform_credit" method="post">
          <table BORDER="1" CELLSPACING="0" CELLPADDING="0" width=100%>
              <tr align="left">
                <th bgcolor="#add8e6">店舗名<br /></th>
                <td><?php echo $store; ?></td>
              </tr>
              <tr align="left">
                <th bgcolor="#add8e6">ご利用金額<br /></th>
                <td><input class = "inputarea" type = "text" name = "money" value = ""/> 円</br>（※ 半角数値入力）</td>
              </tr>
          </table>
            <input type = "hidden" name = "id" value = "<?php echo $id; ?>"/>
            <input type = "hidden" name = "clientip" value = "<?php echo $clientip; ?>"/></br>
            <input class="submitbutton" type = "submit" value = "決済開始"/>
         </form></br>
         <div style="padding: 10px; margin-bottom: 10px; border: 1px dotted #333333; text-align: left; text">
         <u>オンライン決済に関するお問合せ窓口</u></br>
         contact@diamond-production.net</br>
         TEL:03-6869-3903</br>
        </div>
        </div>
     </div>
  </body>

</html>
