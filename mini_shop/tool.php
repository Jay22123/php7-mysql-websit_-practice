<?php
    /*引入*/
    require_once "header.php";

    /*流程控制*/
    $op = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") : '';
    switch ($op) {
      case 'goods_form':
        goods_form();
        break;
      case 'insert_goods':
        insert_goods();
        break;
    }

    /*輸出*/
    require_once "footer.php";

    /*函數*/
    function goods_form()
    {
    }
    //儲存商品
    function insert_goods()
    {
        global $mysqli;
        $goods_title   = $mysqli->real_escape_string($_POST['goods_title']);
        $goods_content = $mysqli->real_escape_string($_POST['goods_content']);
        $goods_price   = $mysqli->real_escape_string($_POST['goods_price']);
        $goods_date = date("Y-m-d H:i:s");
        $sql = "INSERT INTO 'goods' ('goods_title', 'goods_content', 'goods_price', 'goods_counter', 'goods_date') VALUES ('{$goods_title}', '{$goods_content}', '{$goods_price}', '0', '{$goods_date}')";
        $mysqli->query($sql) or die($mysqli->connect_error);
        $goods_sn = $mysqli->insert_id;
        return $goods_sn;
    }
