<!-- 當期發票＞兌獎 -->
<?php
include_once "base.php";

$inv_id=$_GET['id'];
//echo "select * from invoice where id='$inv_id'";
$invoice=$pdo->query("select * from invoices where id='$inv_id'")->fetch();
$number=$invoice['number'];
/* echo "<pre>";
print_r($invoice);
echo "</pre>"; */

//找出獎號
/**
 * 1.確認期數->目前的發票的日期做分析
 * 2.得到期數的資料後->撈出該期的開獎獎號
 * 
 */
$date=$invoice['date'];
//explode('-',$date)取得日期資料的陣列,陣列的第二個元素就是月
//月份就可以推算期數,有了期數及年份就可以找到開獎的號碼
// $array=explode('-',$date)
// $month=$array[1]
// $period=ceil($month/2)
$year=explode('-',$date)[0];
$period=ceil(explode('-',$date)[1]/2);
//echo "select * from award_numbers where year='$year' && period='$period'";
$awards=$pdo->query("select * from award_numbers where year='$year' && period='$period'")->fetchALL();

/* 
echo "<pre>";
print_r($awards);
echo "</pre>"; */

$all_res=-1;

foreach($awards as $award){
    switch($award['type']){
        case 1:
            //特別號=我的發票號碼
            
            
            if($award['number']==$number){
                ?>

        <img src="img/4.gif" class="rounded mx-auto d-block" alt="">
        <br>
        <p style="text-align: center;color:red;font-weight:900;">
        
                <?php
                echo "<br>號碼=".$number."<br>";
                echo "<br>歐買尬!!!特別獎欸<br>
                你就是傳說中的☆↖煞氣.真.歐神.上帝↘☆<br>
                請問有在缺乾女兒/兒子嗎( ͡° ͜ʖ ͡°)<br>";
                $all_res=1;
            }
        break;
        case 2:
            
            if($award['number']==$number){
                ?>

        <img src="img/3.gif" class="rounded mx-auto d-block" alt="">
        <br>
        <p style="text-align: center;color:red;font-weight:900;">


                <?php
                echo "<br>號碼=".$number."<br>";
                echo "天哪特獎!!!<br>拜見歐皇~吾皇萬歲萬萬歲(((ﾟДﾟ;)))<br>";
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
            ?>

        <img src="img/2.gif" class="rounded mx-auto d-block" alt="">
        <br>
        <p style="text-align: center;color:red;font-weight:900;">

                <?php
                echo "<br>號碼=".$number."<br>";
                echo "恭喜老爺~賀喜夫人~中了{$awardStr[$res]}獎!!<br>";
                $all_res=1;
            }
        break;
        case 4:
            if($award['number']==mb_substr($number,5,3,'utf8')){
               ?>

        <img src="img/2.gif" class="rounded mx-auto d-block" alt="">
        <br>
        <p style="text-align: center;color:red;font-weight:900;">

                <?php
                echo "<br>號碼=".$number."<br>";
                $all_res=1;
                echo "恭喜老爺~賀喜夫人~中了增開六獎!!";
            }
        break;
    }
}
?>
<?php
if($all_res==-1){
    ?>
    <img src="img/1.gif" class="rounded mx-auto d-block" alt="">
    <br>
    <p style="text-align: center;">
    <?php
    echo "沒中幫QQ~大家都是非洲人";
    ?>
<?php
}
?>
</p>
<br>
        <div class="text-center">
        <button class="btn btn-sm btn-primary">
                <a class="text-light" href="?do=invoice_list">返回</a>
            </button>
            </div>