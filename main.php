<h3 class="text-center">通一發票紀錄與對獎</h3>

<div class="container"></div>
    <div class="col-8 d-flex justify-content-between p-3 mx-auto border">
    <?php   
    $month=[
        1=>"1,2月",
        2=>"3,4月",
        3=>"5,6月",
        4=>"7,8月",
        5=>"9,10月",
        6=>"11,12月",
    ];
    $m=ceil(date("m")/2);



    ?>
        <div class="text-center"><?=$month[$m];?></div>
        <div class="text-center">
        <a href="">當期發票</a>
        </div>
        <div class="text-center">
        <a href="">對獎</a> 
        </div>
        <div class="text-center">
        <a href=""></a> 輸入獎號
        </div>
    </div>

    <div class="col-8 d-flex justify-content-between p-3 mx-auto border">
    <form action="api/add_invoice.php" method="post">
    <div>
        年分<input type="text" name="year" id="">
    </div>
        期別:<select name="period" id="">
            <option value="1">1,2</option>
            <option value="2">3,4</option>
            <option value="3">5,6</option>
            <option value="4">7,8</option>
            <option value="5">9,10</option>
            <option value="6">11,12</option>
        </select>
        <div>發票號碼
        <input type="text" name="pretend" style="width: 50px">
        <input type="text" name="number" style="width: 50px">
        </div>
        <div> 
            發票金額<input type="number" name="payment" id="">
    </div>
        <div>
            <input type="submit" value="送出">
    </div>
    </form>
    </div>
</div>