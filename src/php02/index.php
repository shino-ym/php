<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Clock</title>
    <link rel="stylesheet" href="css/sanitize.css"><!-- デザインごとのディフォルトスタイルをリセット。どのブラウザでも見た目を揃えるためのcss -->
    <link rel="stylesheet" href="css/common.css"><!-- ヘッダーフッターボタンなどのページ全体で使う共通スタイル -->
    <link rel="stylesheet" href="css/index.css"><!-- ←このページ専用スタイル。topページ用の細かいデザイン -->
</head>

<body>
    <header class="header"><!-- ページ上部のヘッダー部分。ここにロゴやナビゲーションを書く -->
        <div class="header__inner"><!-- ヘッダーの内側の箱。レイアウトを整えるために使う -->
            <a class="header__logo" href="/php02/index.php"><!-- クリックすると、/php02/index.phpへ飛ぶ -->
                World Clock
            </a>
        </div>
    </header>

    <main>
        <div class="search-form__content">検索フォームの全体をまとめる箱。デザインやレイアウトを整える。
        <div class="search-form__heading">
            <h2 class="search-form__content-title">日本と世界の時間を比較</h2>
        </div>
        <form class="search-form" action="result.php" method="get">
            <!-- ①search-form:cssでフォーム全体のデザインを調整するための名前
            ②action="result.php"：フォームの送信先ファイル。ユーザーが検索したらresult.phpにデータが送られる
            ③method="get"：urlの末尾にデータをつける。検索は「GET」が一般的 -->
            <div class="search-form__item">
                <!-- 都市の選択部分を入れてる箱 -->
                <select class="search-form__item-select" name="city">
                    <!-- 都市を選ぶプルダウンセレクトボックス -->
                    <!-- name="city"：フォーム送信時にデータが「city」というなまえで送られる -->
                    <option value="シドニー">シドニー</option>
                    <option value="上海">上海</option>
                    <option value="モスクワ">モスクワ</option>
                    <option value="ロンドン">ロンドン</option>
                    <option value="ヨハネスブルグ">ヨハネスブルグ</option>
                    <option value="ニューヨーク">ニューヨーク</option>
                </select>
            </div>
            <div class=search-form__button><!--ボタン部分を入れる箱-->
                <button class="search-form__button-submit" type="submit">検索
                    <!-- button class="search-form__button-submit"検索用ボタン専用のcssデザイン用クラス -->
                     <!-- type="submit"：これを押すと、フォームがresult.phpに送信される（27行目のaction先へ実行される） -->
                </button>
            </div>
        </form>
    </main>
</body>
</html>

