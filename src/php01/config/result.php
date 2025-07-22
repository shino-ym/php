<?php
$my_name = htmlspecialchars($_POST['my_name'], ENT_QUOTES);
$email = htmlspecialchars($_POST['email'], ENT_QUOTES);
$choices = htmlspecialchars($_POST['choices'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);

echo "私の名前は、" . $my_name . "<br />";
echo "メールアドレスは" . $email ."です" . "<br />";
echo "ご希望の商品は、" . $choices . "<br />";
echo "注文数は、" . $number;
?>

