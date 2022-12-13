<?php
/*
Plugin Name: MJ美化插件
Plugin URI: https://csxandlsy.xyz/
Description: MJ美化插件，是由猫玖鱼柒工作室研发的一款美化插件，致力于子比主题的美化。这款美化插件包含内容众多，一键美化，简单实用且持续更新。感谢猫玖鱼柒工作室中的每位贡献者！
Version: 3.4.0
Author: 猫玖鱼柒工作室 <2149268560@qq.com>
Author URI: https://csxandlsy.xyz/
Date: 2022年09月08日
*/

if (!defined('ABSPATH')) {
    die('-1');
}

$zibll_Add_ons_datas = get_option('zibll_Add_ons_data');
$zibll_Add_ons_datas = $zibll_Add_ons_datas ? json_decode($zibll_Add_ons_datas, true) : array();

$dir = dirname(__FILE__);
//delete_transient( 'kekc_cn__custom_upd' );
define("zibll_Add_ons_dir","$dir");
define("zibll_Add_ons_index",$dir."/zibll_Add_ons.php");
include_once(zibll_Add_ons_dir."/functions.php");//函数
include_once(zibll_Add_ons_dir."/core.php");//核心
include_once(zibll_Add_ons_dir."/control.php");//核心

//检查更新
if(in_array('checker', $zibll_Add_ons_datas)) {
include_once(zibll_Add_ons_dir."/updatechecker.php");
}

