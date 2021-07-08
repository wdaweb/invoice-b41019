<?//php include_once "base.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>統一發票紀錄及對獎系統</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        .number {
            font-size: 1.2rem;
            color: red;
            font-weight: bolder;
        }

        body {
            /* background:url(https://picsum.photos/300/200) ;
            background-repeat:no-repeat; 
            background-attachment:fixed; */
        }


        header a:hover::after {

            width: 100%;

        }

        header a::after {
            content: "";
            display: block;
            height: 2px;
            width: 0%;
            background: #fff;
            margin: 5px 0;
            transition: all 0.7s;
        }
                
        a{
            color:#CCC;
        }
        a:hover{
            color:#2f4863;
        }
        .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
        color: #fff;
        background-color: #656b71;
        }
        .input-group {
        position: relative;
        
        display: flex;
        
        flex-wrap: wrap;
        
        align-items: stretch;
        width: 65%;
        /* 回首頁大部分輸入藍 */
            }
        
        .chi{
            color: #495057;
            background-color: #e9ecef;
            border-color: #ced4da;
            /* 回首頁:期別 */
        }
        /* .chi:hover{
            color: #495057;
            background-color: #e9ecef;
            border-color: #ced4da;

            
        } */
        
        .del{
            /* del_invoice標題 */
            color:red ;
            font-weight:900;
        }
        .del2{
           /* del_invoice下面表格 */
            font-weight:500;
        }
        
        .adaw{
            /* add_awards特獎.特別獎 */
            width: 25%;
        }
        .adaw-f{
            /* add_awards p標籤字體 */
            height: 20px;
            padding: .375rem .75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
        }
        .adaw-s{
            /* add_awards 用p標來撐開部分 */
            padding: .375rem .30rem;
            
        }
        .mframe{
            overflow: hidden;
        }
        .awnu-t{
            width: 95%;
        }


    </style>
</head>

<body>
<?php 
  include_once "base.php";
?>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark ">
            <p class="navbar-brand" href="index.php">統一發票紀錄與對獎</p>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0 ">
                    <li class="nav-item ">
                        <a class="nav-link" href="?do=invoice_list">當期發票</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?do=award_numbers">對獎</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?do=add_awards">輸入獎號</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">回首頁</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <br>
    <!-- <h3 class="text-center">統一發票紀錄與對獎</h3> -->

    <div class="container">
        <!-- <background:url(https://picsum.photos/300/200) no-repeat fixed;> -->
        <!-- <img src="https://picsum.photos/300/200" class="img-fluid" alt="Responsive image"> -->
        <!-- <div class="col-lg-8 col-md-12 d-flex justify-content-between p-3 mx-auto border"> -->
        <?php
        $month = [
            1 => "1,2月",
            2 => "3,4月",
            3 => "5,6月",
            4 => "7,8月",
            5 => "9,10月",
            6 => "11,12月",
        ];

        $m = ceil(date("m") / 2);

        ?>

        <!-- <div class="text-center"><?//=$month[$m];?></div>
        <div class="text-center">
            <a href="?do=invoice_list">當期發票</a>
        </div>
        <div class="text-center">
            <a href="?do=award_numbers">對獎</a>
        </div>
        <div class="text-center">
            <a href="?do=add_awards">輸入獎號</a>
        </div>
        <div class="text-center">
            <a href="index.php">回首頁</a>
        </div>
        </div>  -->





        <!-- <div class="text-center"><?//=$month[$m];?></div>
            <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="?do=invoice_list">當期發票</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="?do=award_numbers">對獎</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="?do=add_awards">輸入獎號</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="index.php" >回首頁</a>
        </li>
        </ul> -->





        <!-- <div class="col-lg-8 col-md-12  d-flex flex-column p-3 mx-auto border"> -->
        <div class="col-lg-8 col-md-12  d-flex flex-column p-3 mx-auto border">

            <div class="mframe">
                <?php

                if (isset($_GET['do'])) {

                    $file = $_GET['do'] . ".php";
                    include $file;
                } else {

                    include "main.php";
                }

                ?>
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
<?php $_SESSION['err'] = []; ?>