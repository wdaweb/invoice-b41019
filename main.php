<form action="api/add_invoice.php" method="post" class="in_form">
    <div class="input-group  ">
        <div class="input-group-prepend date" id="date">
            <span class="input-group-text" id="inputGroup-sizing-sm">日期:</span>
        </div>
        <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
    </div>
    <!-- <div >日期:<input type="date" name="date"></div> -->
    <br>

    <!--改一 <div class="input-group  ">
        <div class="input-group-prepend date" id="date">
            <span class="input-group-text" id="inputGroup-sizing-sm">期別:</span>
        </div>
        <select name="period" class="form-control" style="width:45%">
            <option value="1">1,2</option>
            <option value="2">3,4</option>
            <option value="3">5,6</option>
            <option value="4">7,8</option>
            <option value="5">9,10</option>
            <option value="6">11,12</option>
        </select>
    </div> -->

    <div class="btn-group">
        <!-- <span  class="btn btn-secondary disable chi"> -->
        <span class="input-group-text chi">
            期別:
        </span>
        <div>
            <select name="period" class="form-control">
                <option value="1">1,2</option>
                <option value="2">3,4</option>
                <option value="3">5,6</option>
                <option value="4">7,8</option>
                <option value="5">9,10</option>
                <option value="6">11,12</option>
            </select>
        </div>
    </div>




    <!--原版 <div>
        期別:
        <select name="period">
            <option value="1">1,2</option>
            <option value="2">3,4</option>
            <option value="3">5,6</option>
            <option value="4">7,8</option>
            <option value="5">9,10</option>
            <option value="6">11,12</option>
        </select>
    </div> -->
    <br>
    <br>

    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">發票號碼</span>
        </div>
        <input type="text" aria-label="First name" class="form-control" style="width:25%">
        <input type="number" aria-label="Last name" class="form-control" style="width:40%">
    </div>


    <!-- <div>發票號碼:
        <input type="text" name="code" style="width:50px">
        <input type="number" name="number" style="width:150px">
        <?//php errFeedBack('number');?>
    </div> -->


    <br>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">發票金額</span>
        </div>
        <input type="text" aria-label="Last name" class="form-control" style="width:65%">
    </div>

    <!-- <div>
        發票金額:<input type="number" name="payment">
    </div> -->
    <br>
    <div class="text-center">
        <input type="submit" value="送出" class="btn btn-primary mx-auto">
    </div>

</form>