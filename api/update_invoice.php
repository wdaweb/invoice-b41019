<?php
include_once "../base.php";

// echo "<pre>";

// print_r($_POST);

// echo "</pre>";

/*$sql="
update 
    invoices 
set 
    `code`='{$_POST['code']}',
    `date`='{$_POST['date']}',
    `payment`='{$_POST['payment']}'
where 
    `id`='{$_POST['id']}'";

$pdo->exec($sql);
// echo $sql;
header("location:../index.php?do=invoice_list");
*/

include_once "../base.php";

/* $sql="update 
        invoices 
      set 
        `code`='{$_POST['code']}',
        `number`='{$_POST['number']}',
        `date`='{$_POST['date']}',
        `payment`='{$_POST['payment']}' 
      where 
        `id`='{$_POST['id']}'"; */

$row=find('invoices',$_POST['id']);

$row['code']=$_POST['code'];
$row['number']=$_POST['number'];
$row['date']=$_POST['date'];
$row['payment']=$_POST['payment'];
//$row['id']=$_POST['id'];

save('invoices',$row);
//$pdo->exec($sql);
to("../index.php?do=invoice_list")
//header("location:../index.php?do=invoice_list");
?>
?>