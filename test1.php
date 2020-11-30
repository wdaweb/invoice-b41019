<?php
include_once "base.php";

// "select * from invoices where id='9'";
// $row=$pdo->query("select *from invoices where id='9'")->fetch();
// $res=回傳的id為9的發票內容
// echo implode(" && ",['欄位1'=>'值1','欄位2'=>'值2','id'=>'9']);
// echo "<br>";
// echo "欄位1='值1' && 欄位2='值2' && id='9'";
// echo "<hr>";
// $array=['欄位1'=>'值1','欄位2'=>'值2','id'=>'9'];
// echo "<hr>";

//利用一個暫時的陣列來存放語句的片段
// foreach($array as $key => $value){
//     $tmp[]=sprintf("`%s`='%s'",$key,$value);
//     //$tmp[]="`".$key."`='".$value."'";
// }
// foreach($id as $key => $value){
//     $tmp[]=sprintf("`%s`='%s'",$key,$value);
//     //$tmp[]="`".$key."`='".$value."'";
// }


// print_r($tmp);
// echo "<br>";

// //使用implode把暫時陣列中的語句片段串成SQL會使用到的語句
// echo implode(" && ",$tmp);

// echo "<br>";
//取得單一資料的自訂函式
function find($table,$id){
    global $pdo;
    $sql="select * from $table where ";

// 利用一個陣列來存放語句片段
function find($table,$id){
    global $pdo;
    $sql="select * from $table where ";
    if(is_array($id)){
        foreach($id as $key => $value){
            $tmp[]=sprintf("`%s`='%s'",$key,$value);
            //$tmp[]="`".$key."`='".$value."'";
        }
        $sql=$sql.implode(' && ',$tmp);
    }else{
        $sql=$sql . " id='$id' ";
    }
    $row=$pdo->query($sql)->fetch();

    return $row;
}

function all ($table,...$arg){
    global $pdo;

    // echo gettype($arg);
    // $sql="select * from $table";

    // return $pdo->query($sql)->fetchall();
    $sql="select * from $table";
    if(isset($arg[0]) && is_array($arg[0])){
    // invoices製作會在where後面句子字串(鎮列格式)
    }else{
        // 製作非陣列格式與據皆在$sql後面
        echo "arg[0]不存在或arg{0]不是陣列";

    }

    if(isset($arg[1])){
        // 製作皆在最後面的句子字串
    }
    return $pdo->query($sql)->fetchAll();
}

print_r(all('invoices','a','b')[0])

/*function find2 ($table,$def){

    global $pdo;
    
    $sql="select * from $table where $def";
    $row=$pdo->query($sql)->fetch();
    
    return $row;
}
*/
$row=find('invoices',1);
echo $row['code'].$row['number']."<br>";

$row=find('invoices',"code='AB' && number='84232176'");
echo $row['code'].$row['number']."<br>";

$row=find('invoices',17);
echo $row['code'].$row['number']."<br>";


?>