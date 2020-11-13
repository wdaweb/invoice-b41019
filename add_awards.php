<form action="api/add_award_number.php" method="post">
<table class="table table-bordered table-sm" summary="統一發票中獎號碼單"> 
   <tbody>
    <tr> 
     <th id="months">年月份</th> 
     <td headers="months" class="title">
        <input type="number" name="year" min="<?=date("Y")-1;?>" max="<?=date("Y")+1;?>" step="1" value="<?=date("Y");?>">年
        <select name="period">
            <option value="1">01 ~ 02</option>
            <option value="2">03 ~ 04</option>
            <option value="3">05 ~ 06</option>
            <option value="4">07 ~ 08</option>
            <option value="5">09 ~ 10</option>
            <option value="6">11 ~ 12</option>
        </select>月 
    </td> 
    </tr> 
    <tr> 
     <th id="specialPrize" rowspan="2">特別獎</th> 
     <td headers="specialPrize" class="number"> 
       <input type="number" name="special_prize" min="00000001" max="99999999"> 
    </td> 
    </tr> 
    <tr> 
     <td headers="specialPrize"> 同期統一發票收執聯8位數號碼與特別獎號碼相同者獎金1,000萬元 </td> 
    </tr> 
    <tr> 
     <th id="grandPrize" rowspan="2">特獎</th> 
     <td headers="grandPrize" class="number"> 
     <input type="number" name="grand_prize" min="00000001" max="99999999"> 
      </td> 
    </tr> 
    <tr> 
     <td headers="grandPrize"> 同期統一發票收執聯8位數號碼與特獎號碼相同者獎金200萬元 </td> 
    </tr> 
    <tr> 
     <th id="firstPrize" rowspan="2">頭獎</th> 
     <td headers="firstPrize" class="number">
        <input type="number" name="first_prize[]" min="00000001" max="99999999"> 
        <input type="number" name="first_prize[]" min="00000001" max="99999999"> 
        <input type="number" name="first_prize[]" min="00000001" max="99999999"> 
      </td> 
    </tr> 
    <tr> 
     <td headers="firstPrize"> 同期統一發票收執聯8位數號碼與頭獎號碼相同者獎金20萬元 </td> 
    </tr> 
    
    <tr> 
     <th id="addSixPrize">增開六獎</th> 
     <td headers="addSixPrize" class="number"> 
        <input type="number" name="add_six_prize[]" min="001" max="999"> 
        <input type="number" name="add_six_prize[]" min="001" max="999"> 
        <input type="number" name="add_six_prize[] " min="001" max="999"> 
    </td> 
    </tr>  
   </tbody>
</table>
  <div class="text-center">
    <input type="submit" value="儲存" class="mx-2 btn btn-primary">
    <input type="reset" value="清空" class="mx-2 btn btn-warning">
  </div>
  </form>
