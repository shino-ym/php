<?php

require_once('config/status_codes.php');
// index.phpに１回だけconfigフォルダに入ったstatus_codes.phpを読み込む。
// status_codesはquestionの部分に入るステータスコードのリストが入っている。
// 読み込むことによって、$status_codesが使えるようになる。

$random_indexes = array_rand($status_codes, 4);
// 3行目はただ順番でしか表示されないため、『array_rand()』を使って、ランダムで出てくるようにする。
// ($status_codes, 4)は、$status_codesの中から４つのキーを選ぶよという意味。
// $status_codes=[
// それを、$random_indexesとして変換。

foreach ($random_indexes as $index) {
    // $indexは、$random_indexesの中から1個ずつ取り出したもの。
    // foreachはその1個ずつを取りだして「欲しいものか？」を調べるもの。順番や数が変わっても自動で探してくれる。複数のリストから1個を見つける時にはこれ。
    // 意味：$random_indexes に入ってる4つのキーを順番に取り出す。
    $options[] = $status_codes[$index];
    // そのキーに対応する値を$status_codesから取得して、$options[]に入れる
}
// ↑この時はまだ正解は決まってない。ただ、４つ選択肢を選んだだけ。
// ↓その４つの中からランダムで１つ選んで、「これが正解」と決める。
$question = $options[mt_rand(0, 3)];
// $random_indexesで選んだ４つをまとめて、$optionsという新しい配列を作った。
// $optionの中は４つなので、配列は０〜３。
// mt_rand(最小値,最大値)は指定した範囲の中からランダムな整数を１つ作る関数

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Code Quiz</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <header class="header">
        <div class="header__inner">
        <a class="header__logo" href="/">
            Status Code Quiz
        </a>
        </div>
    </header>
    <main>
        <div class="quiz__content"><!-- クイズの全体をまとめる箱 -->
        <div class="question"><!-- 問題を書かれている箱 -->
            <p class="question__text">Q. 以下の内容に当てはまるステータスコードを選んでください</p>
            <p class="question__text">
                <?php echo $question['description'] ?>
            </p>
        </div>
        
        <!-- データ送信はformタグを使う -->
        <form class="quiz-form" action="result.php" method="post">
            <!-- クイズフォームをresult.phpに送る。送り方はpost-->
            <!-- postは大きなデータも送れる。urlに表示されない。-->
            <!-- getはデータをurlにくっつけて送る。urlからデータが見える。検索などの小さなデータ向け -->
            <input type="hidden" name="answer_code" value="<?php echo $question['code'] ?>">
            <!-- type="hidden"にすることで、画面には出てこないけど、フォームのデータとして送信される。もし、ここが"text"だった場合、画面にも表示される-->
            <!-- nameはラベル。これがないと、サーバーに送ってもどれに振り分ければいいかわからなくなって捨てられる。 -->
            <!--⚠️すでにphpで正解は決まっているから、その時点でphpで選ばれた答えがここに埋め込まれる  -->

            <div class="quiz-form__item"><!-- 選択肢全体を囲む箱 -->
            <?php foreach ($options as $option) : ?>
                <!-- phpの繰り返し処理 -->
                <!-- ランダムに４つ選ばれた箱（$options)の中から1個($option)を1個ずつ順番に取りだして処理する。-->
                <div class="quiz-form__group"> <!-- １つ１つの選択肢を囲む小さな箱 -->
                <input class="quiz-form__radio" id="<?php echo $option['code'] ?>" type="radio" name="option" value="<?php echo $option['code'] ?>">
                <!-- type="radio" ➡️ １つだけ選べるボタン -->
                <!-- name="option" ➡️ ４つのボタンは「option」という名前でグループ化されている。 -->
                <!-- id="<php echo $option['code']> ➡️それぞれのボタンの識別コード。例えば、「404」や「502」$option=status_codeの中の「code」と紐づいている -->
                <!-- value="echo $option['code'] ➡️このボタンが選ばれたら送信される -->
                <!-- <input>タグは、入力フォームの部品を作るタグ -->
                <label class="quiz-form__label" for="<?php echo $option['code'] ?>"><!-- ボタンの説明（ラベル）を表示する部分。 -->
                    <?php echo $option['code'] ?>
                    <!-- 上のidと紐づいて、ラベルをクリックするとボタンが選ばれる -->
                    <!-- この部分がなくなると、ボタンの「404」や「502」などの表記が消える -->
                </label>
                </div>
            <?php endforeach; ?>
            <!-- phpの繰り返し処理の終わり。この中身が４回繰り返されて、４つのラジオボタントラベルが生成される -->
            </div>
            <div class="quiz-form__button"><!-- 送信ボタンを囲む箱 -->
            <button class="quiz-form__button-submit" type="submit">
                回答
            </button>
            <!-- button class="search-form__button-submit"クイズフォームボタンのcssデザイン用クラス -->
            <!-- type="submit"：これを押すと、フォームがresult.phpに送信される（59行目のaction先へ実行される） -->
            </div>
        </form>
        </div>
    </main>
</body>

</html>
