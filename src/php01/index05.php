<!-- <?php
$a = 5;

if ($a === 5) {// 値と型を両方チェック！
// 数字の5 → ok
// 文字の"５" → NG 今は$aが数値５なので条件はtrue
echo "\$aは5です";
// [\]は変数としてではなく、文字として$aを書きたいから入力！
}

?> -->

<!-- <?php

$a = 7;

if ($a === 5) {
echo "\$aは5です";
}else{
echo "\$aは5以外です";
}
?> -->

<!-- <?php
$a = 7;

if ($a === 5) {
echo "\$aは5です";
}elseif ($a === 7){
echo "\$aは7です";
}else{
echo "\$aは5と7以外です";
}
?> -->

<!-- <?php
$people = "Saburo";

switch ($people){
case "Ichiro":
    echo "一郎です";
    break;
case "Jiro":
    echo "次郎です";
    break;
case "Saburo":
    echo "三郎です";
    break;
default:
    echo "誰でもありません";
    break;
}
?> -->

<!-- <?php
$a = 7;

$b = ($a > 5) ? "TRUE" : "FALSE";
echo $b;

?> -->

<?php
$age = 28;

$Shinobu = ($age > 30) ? "はい" : "いいえ";
echo $Shinobu;
?>

<!-- <?php
$isHungry = true;

$food = $isHungry ? "ラーメンを食べる" : "水だけ飲む";
echo $food;
?> -->
