<?php
    $il = 0;
    if(isset($_GET['snap'])) $il=1;
    $num = fopen("counter.txt","r"); //看看膜了沉淀多少下
    $tql = fgets($num); 
    $tql ++ ; //再膜一下沉淀
    if($il) $tql+=9;
    $upd = fopen("counter.txt","w");
    fwrite($upd,$tql);
    echo $tql;
    fclose($num);
    fclose($upd);