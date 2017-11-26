<!--SuccessOK!-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>オンライン予約</title>
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
      font-size: 120%;
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
         オンライン予約
            </div>
          </div>
       </div>
        <div id="main">
          <form action= "/<?php echo $id; ?>/inputted_start" method="post">
          <table BORDER="1" CELLSPACING="0" CELLPADDING="0" width=100%>
              <tr align="left">
                <th bgcolor="#add8e6">店舗名<br /></th>
                <td><?php echo $store; ?></td>
              </tr>
              <tr align="left">
                <th bgcolor="#add8e6">お名前<br /></th>
                <td><input class = "inputarea" type = "text" name = "cust_name" value = ""/></td>
              </tr>
              <tr align="left">
                <th bgcolor="#add8e6">ご連絡先(携帯電話番号)<br /></th>
                <td><input class = "inputarea" type = "text" name = "cust_tel" value = ""/></td>
              </tr>
              <tr align="left">
                <th bgcolor="#add8e6">メールアドレス<br /></th>
                <td><input class = "inputarea" type = "text" name = "cust_mail" value = ""/></td>
              </tr>
              <tr align="left">
                <th bgcolor="#add8e6">ご利用日時<br /></th>
                <?php
                $startdate  = mktime(0, 0, 0, date("m")  , date("d")+1, date("Y"));
                $enddate  = mktime(0, 0, 0, date("m")  , date("d")+2, date("Y")); ?>
                <td>２日先までの予約をして頂くことが可能です。</br>
                  <input type = "date" name = "date" min = "<?php echo date('Y\-m\-d',$startdate); ?>" max = "<?php echo date('Y\-m\-d',$enddate); ?>" value = ""/>
                到着時間<input type = "time" name = "starttime" min = <?php echo $reservation_start ?> max = <?php echo $reservation_end ?> step = "60" value = ""/>
                から<input type = "time" name = "endtime" min = <?php echo $reservation_start ?> max = <?php echo $reservation_end ?> step = "60" value = ""/>
                までを希望</br></br>※当日のご予約は賜われません。お電話でのご予約をお願い申し上げます。
                </td>
              </tr>
              <tr align="left">
                <th bgcolor="#add8e6">ご指名女性<br /></th>
                <td><input class = "inputarea" type = "text" name = "designatd" value = ""/>
                </br>※ご指名がない場合はフリーとご入力下さい。
                </td>
              </tr>
              <tr align="left">
                <th bgcolor="#add8e6">ご利用コース<br /></th>
                <td><select name="course">
                  <?php
                    foreach( $course as $key1 => $val1 ){
                      echo "<optgroup label=\"" , $key1 , "\">";
                      foreach( $val1 as $val2 ){
                        echo "<option value=\"" , $val2 , "\">" , $val2 , "</option>";
                      }
                      echo "</optgroup>";
                    }
                   ?>
                </select></td>
              </tr>
              <tr align="left">
                <th bgcolor="#add8e6">ご利用場所<br /></th>
                  <td>ご利用場所の種類をチェックして下さい。</br>
                    <input type = "radio" name = "place" value = "ホテル"/>ホテル
                    <input type = "radio" name = "place" value = "自宅"/>自宅
                    <input type = "radio" name = "place" value = "お待ち合わせ"/>お待ち合わせ
                  </br>ご利用場所名をご入力下さい。</br>
                    <input class = "inputarea" type = "text" name = "address" value = ""/>
                  </td>
              </tr>
          </table>
           <input type = "hidden" name = "merchantName" value = "<?php echo $store; ?>"/></br>
           <input type = "hidden" name = "storemail" value = "<?php echo $storemail; ?>"/></br>
           <input type = "hidden" name = "id" value = "<?php echo $id; ?>"/>
           <input type = "hidden" name = "clientip" value = "<?php echo $clientip; ?>"/>
          <input class="submitbutton" type = "submit" value = "予約内容を送信し、決済へ進む"/>
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
