<?php
//共通に使う関数を記述
//XSS対応（ echoする場所で使用！それ以外はNG ）

// 0.関数を設定
function h($str){
  return htmlspecialchars($str, ENT_QUOTES); //外で使うためにreturnを設定
}

?>
