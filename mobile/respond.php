<?php

/**
 * ECTouch Open Source Project
 * ============================================================================
 * Copyright (c) 2012-2014 http://ectouch.cn All rights reserved.
 * ----------------------------------------------------------------------------
 * 文件名称：respond.php
 * ----------------------------------------------------------------------------
 * 功能描述：支付接口通知文件
 * ----------------------------------------------------------------------------
 * Licensed ( http://www.ectouch.cn/docs/license.txt )
 * ----------------------------------------------------------------------------
 */

/* 访问控制 */
define('IN_ECTOUCH', true);
if(!isset($_REQUEST['code'])){
    header('location: ./index.php?'.$_SERVER['QUERY_STRING']);
    exit;
}



$pay_code = !empty($_REQUEST['code']) ? trim($_REQUEST['code']) : '';
// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";
// echo "<hr/>";
// echo "<pre>";
// var_dump($_GET);
// echo "<hr/>";
var_dump($_REQUEST);
echo "</pre>";
die();

$order_sn = $_REQUEST['item_name'];

if($_REQUEST['code'] == 'paypal'){
    $row = $GLOBALS['db']->query("update ".$ecs->table('order_info')." set pay_status = '2' ,source='PC' where order_sn = '$order_sn'");
    if( $row = true){

           echo "支付成功";
           
    }else{
           echo "支付失败";

    }


}








// define('CONTROLLER_NAME', 'Respond');
//  加载核心文件 
// require ('include/EcTouch.php');

