<?php
//撰寫新增消費發票的程式碼
//將發票的號碼及相關資訊寫入資料庫


// foreach($_POST as $key => $value){
// // echo "欄位". $key."==值".$value."<br>";
// $tmp[]=$key;


// }
include_once "../base.php";


// $dsn="mysql:host=localhost;dbname=invoice;charset=utf8";
// $pdo=new PDO ($dsn,'root','');


echo "<pre>";
print_r(array_keys($_POST));
echo "</pre>";

$sql="insert into invoices (`".implode("`,`",array_keys($_POST))."`) values ('".implode("','",$_POST)."')";

echo $sql;
$pdo->exec($sql);

echo "新增完成";

header("location:../index.php?do=invoice_list");

?>