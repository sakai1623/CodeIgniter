<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>JS TEST</title>
  </head>
  <script type="text/javascript">
    function nibai(x,z) {
      var y = x * z;
      return y;
    }

    function handan(shadanki){
        if(shadanki == 1){
           document.getElementById("kekka").innerHTML = "止まる";
        } else {
           document.getElementById("kekka").innerHTML = "進む";
        }
    }
  </script>
  <body>

    <div style="background-color:#bfbfbf;margin-bottom:20px;">
      <script type="text/javascript">
          document.write("1.りんご<br>2.みかん<br>3.バナナ");
      </script>
    </div>


    <div style="background-color:#bfbfbf;margin-bottom:20px;">
      <div>アラート</div>
      <input type="button" value="クリック！" onclick="alert('ボタンがクリックされました。')">
    </div>


    <div style="background-color:#bfbfbf;margin-bottom:20px;">
      <input type="button" value="ボタン" onmouseover="this.value='マウスオーバー'" onmouseout="this.value='マウスアウト'">
    </div>


    <div style="background-color:#bfbfbf;margin-bottom:20px;">
      <input type="button" value="ボタン" onmousedown="this.value='マウスダウン'" onmouseup="this.value='マウスアップ'">
    </div>


    <div style="background-color:#bfbfbf;margin-bottom:20px;">
      <input type="button" value="ボタン" onclick="this.value='クリック'" ondblclick="this.value='ダブルクリック'">
    </div>

    <div style="background-color:#bfbfbf;margin-bottom:20px;">
      <a href="http://www.google.com/" onclick="return false">リンクできない</a>
    </div>


    <div style="background-color:#bfbfbf;margin-bottom:20px;">
      メールアドレス：<input type="text" oncopy="alert('コピー禁止！'); return false" oncut="alert('カットも禁止！'); return false"><br>
      メールアドレス（確認用）：<input type="text" onpaste="alert('ペースト禁止！'); return false">
    </div>


    <div style="background-color:#bfbfbf;margin-bottom:20px;">
      <a href="http://www.youtube.com/">
        <img style="width:25%;" src="/images/youtube.jpg" onmouseover="src='/images/youtube_instant.jpg'" onmouseout="src='/images/youtube_mono.jpg'">
      </a>
    </div>


    <div style="background-color:#bfbfbf;margin-bottom:20px;">
      <input type="text" id="num">
      ＊
      <input type="text" id="bai">
      <input type="button" value="2倍にする" onclick="alert(nibai(num.value,bai.value))">
    </div>


    <div style="background-color:#bfbfbf;margin-bottom:20px;">
      <input type="text" id="judge">
      <input type="button" value="判断" onclick="handan(judge.value)">
      <div id="kekka">ここに結果を表示します</div>
    </div>


  </body>
</html>