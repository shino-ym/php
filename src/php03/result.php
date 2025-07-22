<?php

// phpのコード全体は「正解かどうかチェックする」ためのもの

require_once('config/status_codes.php');

$answer_code = htmlspecialchars($_POST['answer_code'], ENT_QUOTES);
//index.phpで選ばれた回答を$_POST['answer_code']で取得。htmlspecialcharsで無害化。それが$answer_codeになる。
// これがないと、回答画面のステータスコードや説明の内容が送信されない；

$option = htmlspecialchars($_POST['option'], ENT_QUOTES);
// index.phpで選ばれた回答を$_POST['option']で取得。htmlspecialcharsで無害化。それが$optionになる。
// これがないと、indexとの紐付けができないため、「404」「503」などのボタンを押して回答ボタンを押しても、回答ページに飛ばない。

if (!$option) {
    header('Location: index.php');
// !$optionの「！」は、「〜じゃない」という意味。（!true ➡️ false / !false ➡️ true という感じ）
// header('Location: index.php')もし何も選ばずに回答を押したら、このページじゃなくて、index.phpに移動して！という意味。
// これがなかったら、無選択のまま回答を押したらエラーが出る。
}
foreach ($status_codes as $status_code) {
    // たくさんのステータスコードの情報が入ったリストから、１つずつ順番に取りだして、それぞれの情報を$status_codeに入れている。
    if ($status_code['code'] === $answer_code) {
        // その中のcodeとユーザーの答え$answer_codeが完全に一致しているかチェック✅
        $code = $status_code['code'];
        // 一致したら、$codeに代入
        $description = $status_code['description'];
        // そのコードの説明を$descriptionに代入
    }
}

$result = $option === $code;
// 「$option と $code が完全一致するか確認する」
// 同じなら、$resultにtrueが入る。違ったら$resultにfalseが入る


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
    <link rel="stylesheet" href="css/result.css">
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
    <div class="result__content"><!-- 回答画面全体の箱 -->
        <div class="result">
        <?php if ($result): ?>
        <!-- if文のルールは、if(条件)がtrueの時に実行  -->
        <!-- もし$result = $option === $code;(true)なら？-->
        <h2 class="result__text--correct">正解</h2>
        <!-- class="result__text--correctでクラス分けされてるので、色をつけることができる -->
        <?php else: ?>
        <!-- じゃあ、そうじゃなかったら？ -->
        <h2 class="result__text--incorrect">不正解</h2>
        <?php endif; ?>
        <!-- ここで条件終わり -->
        </div>
        <div class="answer-table"><!-- 答えの表全体を囲むボックス -->
        <table class="answer-table__inner">
        <!-- 実際の表(テーブル)の枠組み -->
        <tr class="answer-table__row">
            <th class="answer-table__header">ステータスコード</th>
            <!-- 表の見出し -->
            <td class="answer-table__text">
            <!-- ステータスコードの中身の文章-->
            <?php echo $code ?>
            <!-- その中身にphpで$codeを表示 -->
            <!-- foreachで取り出した値を、後で画面に表示している。 -->
            </td>
        </tr>
        <tr class="answer-table__row">
            <th class="answer-table__header">説明</th>
            <td class="answer-table__text">
            <?php echo $description ?>
        </td>
        </tr>
        </table>
        </div>
    </div>
</main>
</body>

</html>
