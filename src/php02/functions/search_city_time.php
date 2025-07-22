<?php

function searchCityTime($city_name)
{
    require('config/cities.php');// ①まず、search_city_time.phpファイルに cities.phpファイルを読み込む。これによって、cities.phpファイルにある都市データが読み込まれたことになる。②→次はこのsearch_city_time.phpファイルをresult.phpファイルに読み込む

    foreach ($cities as $city) {//$cities（都市リスト）の中から、$city(１つ１つの都市情報)を取り出して、「欲しい都市か？」を調べる。
      // 複数のリストから１つを見つけるときはforeachを使用するのがベスト。

        if ($city['name'] === $city_name) {// 探している都市名と一致するかチェック
        $date_time = new DateTime('', new DateTimeZone($city['time_zone']));
        //date_timeとして、現在時刻を取得。

        $time = $date_time->format('H:i');// $date_timeで得た現在時刻を、時：分の形で＄timeとして表示
        $city['time'] = $time;// 都市データに現在時刻を追加

        return $city;
    }
  }
}
?>
