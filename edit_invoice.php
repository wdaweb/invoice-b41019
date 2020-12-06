
<?php
include_once "base.php";

$sql="select * from invoices where id='{$_GET['id']}'";
$inv=$pdo->query($sql)->fetch();
/* echo "<pre>";
    print_r($inv);
echo "</pre>" */
?>
<form action="api/update_invoice.php" method="post">
    <input type="hidden" name="id" value="<?=$inv['id'];?>">

    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">發票號碼</span>
        </div>
        <input type="text" name="code" value="<?=$inv['code'];?>" class="form-control" style="width:25%">
        <input type="number" name="number" value='<?=$inv['number'];?>' class="form-control" style="width:40%">
    </div>

   
    <!-- <div>發票號碼:
            <input type="text" name="code" style="width:30px" value="<?=$inv['code'];?>">
            <input type="number" name="number" value='<?=$inv['number'];?>'>
    </div> -->
<br>
    <div class="input-group  ">
        <div class="input-group-prepend date" id="date">
            <span class="input-group-text" id="inputGroup-sizing-sm">消費日期:</span>
        </div>
        <input type="date" class="form-control" name='date' value="<?=$inv['date'];?>" aria-describedby="inputGroup-sizing-sm">
    </div>

<br>
    <!-- <div>消費日期:<input type="date" name='date' value="<?=$inv['date'];?>"></div> -->


    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">消費金額:</span>
        </div>
        <input type="text" name='payment' value="<?=$inv['payment'];?>" class="form-control" style="width:65%">
    </div>
<br>
    <!-- <div>消費金額:<input type="text" name='payment' value="<?=$inv['payment'];?>"></div> -->

    <div class="text-center">
        <input type="submit" value="修改" class="btn btn-success mx-auto">
        <input type="reset" value="重置" class="btn btn-primary mx-auto">
    </div>

    <!-- <div>
        <input type="submit" value="修改">
        <input type="reset" value="重置">
    </div> -->
</form>
