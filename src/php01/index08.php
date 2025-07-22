<!-- <?php
$people = array('Taro', 'Jiro', 'Saburo');

var_dump($people);

echo $people[0];
?> -->
<?php
$people = array (
    'person1' => 'Taro',
    'person2' => 'Jiro',
    'person3' => 'Saburo'
);
foreach ($people as $person => $name){
    print $person . "は" . $name . "です" . '<br />';
}
?>
<?php
// foreachで多次元配置
$people = [
  ['Taro', 25, 'men'],
  ['Jiro', 20, 'men'],
  ['hanako', 16, 'women']
];
// 一人ずつデータを取り出すイメージ

foreach ($people as $person) {
  echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')'. '<br />';
}
// $person[0]=名前、$person[1]=年齢、$person[3]=性別。一人書いたら、次を書くというぐるぐる回していく。
?>

