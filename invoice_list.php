<?php
include_once "base.php";

$sql= "select * from `invoices` order by date";

// order by date 由舊到新牌資料(電腦計秒由累積秒數少的排到秒數多的)
// order by date desc 由心道舊排列(電腦計秒由累積秒數多的排到秒數少的)
$rows=$pdo->query($sql)->fetchall();

foreach($rows as $row){
    // echo $row['code'].$row['number']."<br>";
}

?>
<table class="table text-center">
    <tr>
        <td>發票號碼</td>
        <td>消費日期</td>
        <td>消費金額</td>
        <td>操作</td>
    </tr>
    <?php
    foreach($rows as $row ){

    ?>
    <tr>
        <td><?=$row['code'].$row['number'];?></td>
        <td><?=$row['date'];?></td>
        <td><?=$row['payment'];?></td>
        <td>
        <button class="btn btn-sm btn-primary"> <a class="text-light" href="?do=edit_invoice&id=<?=$row['id'];?>"> 
        編輯
        </a></button>
        <button class="btn btn-sm btn-danger"><a class="text-light" href="?do=del_invoice&id=<?=$row['id'];?>">
        刪除
        </a></button>

        </td>
    </tr>
    <?php

}
    ?>

</table>
