<!--SuccessOK!-->
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
<span class="normalfont">ふうチケでは、<b>クレジット決済</b>が行えます。</span></br></br></br>
@if(app('env')=='local')
<p class="buttonstyle"><a href="/<?php echo $id; ?>/t_select"><img src="{{asset('image/button.gif')}}" /></a></p>
<img width="94" height="94" src="{{asset('image/card_jcb_b.gif')}}" />
<img width="94" height="94" src="{{asset('image/card_master_b.gif')}}" />
<img width="94" height="94" src="{{asset('image/card_visa_b.gif')}}" />
@endif
@if(app('env')=='production')
<p class="buttonstyle"><a href="/<?php echo $id; ?>/t_select"><img src="{{secure_asset('image/button.gif')}}" /></a></p>
<img width="94" height="94" src="{{secure_asset('image/card_jcb_b.gif')}}" />
<img width="94" height="94" src="{{secure_asset('image/card_master_b.gif')}}" />
<img width="94" height="94" src="{{secure_asset('image/card_visa_b.gif')}}" />
@endif
</div>
</body>

</html>
