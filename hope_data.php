<?php
include_once "base.php";
// rand()
$codeBase=["AB","FF","GD","KJ","FJ","IY"];
echo "資料產生中.....";
echo date("Y-m-d H:i:s");

for($i=0;$i<10000;$i++){
$code=$codeBase[rand(0,5)];
$number=sprintf("%08d",rand(0,99999999));
// echo str_pad($number,8,'0',str_pad_left)."<br>";

echo $number."<br>";
$payment=rand(1,20000);

$start=strtotime("2020-01-01");
$end=strtotime("2020-12-31");

$date=date("Y-m-d",rand($start,$end));
$period=ceil(explode("-",$date)[1]/2);


$hope=[
    'code'=>$code,
    'number'=>$number,
    'payment'=>$payment,
    'date'=>$date,
    'period'=>$period
];


$sql="insert into invoices(`".implode("`,`",array_keys($hope))."`)value('".implode("','",$hope)."') ";
$pdo->exec($sql);


}

echo "資料產生完成.....";
echo date("Y-m-d H:i:s");

?>