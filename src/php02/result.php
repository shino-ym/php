
<!-- result.phpファイルは、index.phpファイルのラジオボタンで選択した都市の画像と時間が表示されるページになる -->
<?php

require_once('functions/search_city_time.php');
// cities.phpファイル → search_city_time.phpファイル → result.phpファイル（これで、検索結果が出るresult.phpにcityデータが読み込まれたことになる。
// 一度だけ、functionsの中のsearch_city_time.php'を読み込む。
// phpは関数やclassを同じ名前で2回使ってはいけないというルールがある。そこで、1回だけ読み込むという命令をする。
$tokyo = searchCityTime('東京');
// search_city_time.phpファイルに関数を作成して東京の時間とそれ以外の国時間を表示できるようにする。

$city = htmlspecialchars($_GET['city'], ENT_QUOTES);
//検索で選ばれた都市名を$_GET['city']で取得。htmlspecialcharsで無害化。それが$cityになる。
$comparison = searchCityTime($city);
// 5行目で読み込まれたsearch_city_time.phpファイルの中に、「searchCityTime($city)」という箱とその中身が定義されている。その箱が『$comparison』になる。
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Clock</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">
</head>

<body>
    <header class="header">
        <div class="header__inner">
        <a class="header__logo" href="/php02/index.php">
            World Clock
        </a>
        </div>
    </header>

    <main>
        <div class="result__content">
        <div class="result-cards">
        <div class="result-card">
            <div class="result-card__img-wrapper">
                <img class="result-card__img" src="img/<?php echo $tokyo['img']?>" alt="国旗">  <!-- echo $tokyo['img']でなぜjapan.jpgが取れるのか？$tokyo = searchCityTokyo(東京)で定義されているから。$tokyoは連想配列で、その中に'img'=> 'japan.jpg'が入っている-->

            </div>
            <div class="result-card__body"><!-- カードの中身をまとめる部分。画像以外の文字など入れる場所 -->
                <p class="result-card__city">
                <?php echo $tokyo['name']?><!-- 連想配列の$tokyoから'name'だけ取り出す -->
                </p>
                <p class="result-card__time">
                <?php echo $tokyo['time']?><!-- 連想配列の$tokyoから'time'だけ取り出す -->
                </p>
            </div>
            </div>
            <div class="result-card">
            <div class="result-card__img-wrapper">
                <img class="result-card__img" src="img/<?php echo $comparison['img']?>" alt="国旗">
                <!-- $comparison = searchCityTime($city);の中で検索された結果が、ここでimgとして出てくる -->
            </div>
            <div class="result-card__body">
                <p class="result-card__city">
                <?php echo $comparison['name']?><!-- 検索されたものを連想配列の中からから当てはまるcityの'name'だけ取り出す -->
                </p>
                <p class="result-card__time">
                <?php echo $comparison['time']?><!-- 検索されたものを連想配列の中からから当てはまるcityの'time'だけ取り出す -->
                </p>
            </div>
            </div>
        </div>
        </div>
    </main>
</body>

</html>
