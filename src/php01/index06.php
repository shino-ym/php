<!-- <?php

for ($i = 0; $i < 4; $i++){// $iは０。４以下を１ずつ増やして順番に書いていくよ
echo $i;//0123
}
?> -->

<!-- <?php
for ($i = 1; $i <= 5; $i++){// $iは1。それを５回繰り返す。１ずつ足して。
    echo $i * 2 . '<br />';// $iに２を掛ける→２の倍数になる
}
?> -->
<!-- <?php
$count = 0;

while ($count < 20){
    $count += 1;
    echo $count . '<br />';
}
// カウントは０。でも、先に＋１しておくため、＄counto<20でも、１〜20までカウントされる。もしこれが$counto++なら後から１がプラスされるため１〜19までしかカウントされない
?> -->

<!-- <?php
$count = 0;

while ($count <= 100){// 値は100まで
    if ($count === 20){// もしカウントが２０になったらループを止める
        break;
    }
    if ($count % 3 === 0){// カウントが３の倍数になったらスキップ。＝＝＝０は余りが０かどうかチェックしている。
        $count++;// 次の数字へ
        continue;
    }
    echo $count . '<br />';// ３の倍数なら数字を表示
    $count++;// 表示が終わった後に次の数字に進める。ループの最後に数字を進めるため
}
?> -->

<!-- <?php
$num = 0;

do{
    echo 'num =' . $num . '<br />';
    $num++;
} while ($num < 3);
?> -->

<!-- <?php
$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";//定義

for ($i = 1; $i <= 50; $i++) {
    if ($i % 15 === 0){
        echo "FizzBuzz";
    }else if ($i % 3 === 0){
        echo "Fizz";
    }else if ($i % 5 === 0){
        echo "Buzz";
    }else{
        echo $i;
    }

} 

?> -->

<?php

for ($i = 1; $i < 6; $i++){
    for ($j = 1; $j < 6; $j++){
        echo "⚪️";
    }
    echo '<br />';
}