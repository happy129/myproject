<?php
    @require_once("./config.php");
    $discount = $_GET["discount"];
    str = "select  * from  goodslist order by newprices  asc" 

    $result = mysql_query($str);

    $list = array();

    while($item = mysql_fetch_array($result)){
        $temp = array();
        $temp["id"]=$item["id"];
        $temp["goodsname"]=$item["goodsname"];
        $temp["kinds"]=$item["kinds"];
        $temp["localtion"]=$item["localtion"];
        $temp["marketprices"]=$item["marketprices"];
        $temp["newprices"]= $item["newprices"];
        $temp["discount"]=$item["discount"];
        $temp["weight"]=$item["weight"];
        $temp["goodscode"]=$item["goodscode"];
        $temp["rank"]=$item["rank"];
        $temp["imgsrc"]=$item["imgsrc"];
        $list[] = $temp;
    }
    echo  json_encode($list);
?>