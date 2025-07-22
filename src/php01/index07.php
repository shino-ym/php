<!-- <?php
function outputNumber($a)
{
  echo "引数の値は" . $a . "です";
  return;
}

outputNumber(2);
?> -->

<!-- <?php
function outputHello()
{
  echo "Hello world";
}

outputHello(); 
?>// ① -->

<?php
function exam($score1, $score2, $score3)
{
  $total = $score1 + $score2 + $score3;
  if ($total > 120){
    echo "合計点は" . $total . "点なので合格です";
  } else{
    echo "合計点は" . $total . "点なので不合格です";
  }
}
echo (exam(80, 60, 90));// この数字はテストの時だけ！本番は自動化にする必要あり
?>

<!-- 三角形・四角形・台形の面積を求める関数 -->
<!-- <?php

function getSquareArea ($base, $height){
  return $base + $height;
}
function getTriangleArea ($base, $height){
  return $base * $height / 2;
}
function getTrapezoidArea ($upperBase, $lowBase,$height){
  return ($upperBase + $lowBase) * $height /2;
}

echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);
?>-->

