<!DOCTYPE html>
<HTML lang="ja">
<HEAD>
<TITLE>BMI</TITLE>
<META http-equiv="Content-Type" content="text/html; charset=utf-8" />
</HEAD> 
  <BODY>
    <H2>PHPでBMIを計算</H2>
<?php
  // 定数を定義
const __THIN = 18.5;
const __NORMAL = 25;

  // テキストボックスが空文字('')ならメッセージ
if (($_GET['TALL'] == '') || ($_GET['WEIGHT'] == '')) {
  echo "<P>データが未入力です。<BR />入力画面に戻ってください。</P>";
} else {
  // 身長と体重が入力されていたとき
  $tall = $_GET['TALL'];
  $weight = $_GET['WEIGHT'];
  $bmi = $weight / (($tall / 100) * 2);

    // やせ・普通・ふといを判定する
  if ($bmi < __THIN) {
    $shape = 'やせ型';
    $image = 'thin.jpg';
  } else if ($bmi < __NORMAL) {
    $shape = '普通体型';
    $image = 'normal.jpg';
  } else {
    $shape = '肥満型';
    $image = 'fatness.jpg';
  }
  $bmi = round($bmi, 2);    // BMIを四捨五入
    // IMGタグで画像を指定
  echo "あなたのBMIは " . $bmi . "、《" . $shape .
    "》<IMG src=\"" . $image . "\" width=\"120\"> です。<BR />\n";
}
  // 「戻る」ボタン
echo '<A href="index.html">🔙戻る</A>';
?>
  </BODY>
</HTML>
