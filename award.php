
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>發票對獎</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

</body>
</html> -->

<?php
include_once "base.php";

$inv_id=$_GET['id'];
// echo "select * from invoices where id='$inv_id'";
$invoice=$pdo->query ("select * from invoices where id='$inv_id'")->fetch();
$number=$invoice['number'];

// echo "<pre>";
// print_r($invoice);
// echo"</pre>"

//找出獎號
// 1.確認期數:分析目前發票日期
// 2.得到期數資料後:撈出該期開獎號碼


$date=$invoice['date'];
// 用explode('-',$date)取得日期資料鎮列,陣列第二個元素就是月份
// 月份可以推算期數,有騎術就可以找開獎號碼
// $array=explode('-',$date)
// $month=$array[1]
// $period=ceil($month/2)
$year=explode('-',$date)[0];
$period=ceil(explode('-',$date)[1]/2);
// echo "select * from award_numbers where year='$year' && period='$period'";
$awards=$pdo->query("select * from award_numbers where year='$year' && period='$period'")->fetchall();

// echo "<pre>";
// print_r($awards);
// echo "</pre>";

$all_res=-1;

foreach($awards as $award){
    switch($award['type']){
        case 1:
            //特別號=我的發票號碼
            
            
            if($award['number']==$number){
                echo "<br>號碼=".$number."<br>";
                echo "<br>中了特別獎<br>";
                $all_res=1;
            }
        break;
        case 2:
            
            if($award['number']==$number){
                echo "<br>號碼=".$number."<br>";
                echo "中了特獎<br>";
                $all_res=1;
            }

        break;
        case 3:
            $res=-1;
            for($i=5;$i>=0;$i--){
                $target=mb_substr($award['number'],$i,(8-$i),'utf8');
                $mynumber=mb_substr($number,$i,(8-$i),'utf8');

                if($target==$mynumber){
                    
                    $res=$i;
                }else{
                    break;
                    //continue
                }
            }
            //判斷最後中的獎項
            if($res!=-1){
                echo "<br>號碼=".$number."<br>";
                echo "中了{$awardStr[$res]}獎<br>";
                $all_res=1;
            }
        break;
        case 4:
            if($award['number']==mb_substr($number,5,3,'utf8')){
                echo "<br>號碼=".$number."<br>";
                $all_res=1;
                echo "中了增開六獎";
            }
        break;
    }
}

if($all_res==-1){
    echo "很可惜，都沒有中";
}

?>

