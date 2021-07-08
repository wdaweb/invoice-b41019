<?php

include_once "base.php";

$inv = $pdo->query("select * from invoices where id='{$_GET['id']}'")->fetch();
?>
<div class="col-md-6 text-center border p-4 mx-auto">
    <div class="text-center del">確認要刪除以下發票資料嗎?!?!?!?!</div>
    <ul class="list-group del2">
        <li class="list-group-item "><?= $inv['code'] . $inv['number']; ?></li>
        <li class="list-group-item"><?= $inv['date']; ?></li>
        <li class="list-group-item"><?= $inv['payment']; ?></li>
    </ul>
    <br>
    <div>
    <button class="btn btn-danger mx-auto">
        <a href="api/del.php?id=<?= $_GET['id']; ?>" class="text-light">確認</a>
    </button>
    <button class="btn btn-warning mx-auto">
        <a href="?do=invoice_list" class="text-light">取消</a>
    </button>

    </div>

    <!-- <div class="text-center mt-4">
        <button class="btn-danger">
            <a href="api/del.php?id=<?= $_GET['id']; ?>">確認</a>
        </button>
        <button class="btn-warning">
            <a href="?do=invoice_list">取消</a>
        </button>
    </div> -->

</div>