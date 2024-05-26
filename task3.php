<?php
$tan = [1,2,3];
echo $tan[0];
?>

<?php
$nizi = [
    ["松下",29,"男性"],
    ["高田",25,"男性"],
    ["岡田",25,"女性"]
];
echo '私の名前は'.$nizi[0][0];
echo 'です。年齢は'.$nizi[0][1].'歳';
echo $nizi[0][2].'です。';
?>

<?php
$ren = [
    "name" => "田中",
    "age" => 24,
    "codelang" => "HTML"
];
echo $ren ["name"];
?>