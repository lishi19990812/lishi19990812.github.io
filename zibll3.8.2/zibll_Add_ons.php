<?php
/*
Plugin Name: 子比美化插件3.8.2破解版
Plugin URI: https://csxandlsy.xyz/mjplu
Description: MJ美化插件，是由猫玖鱼柒工作室研发的一款美化插件，致力于子比主题的美化。这款美化插件包含内容众多，一键美化，简单实用且持续更新。感谢猫玖鱼柒工作室中的每位贡献者！
Author: 041专属破解
Version:3.8.2
Author URI: https://lsy041.com
*/
//引入核心变量
if ( ! function_exists( 'MJ' ) ) {
  function MJ( $option = '', $default = null ) {
    $options = get_option( 'MJ' ); 
    return ( isset( $options[$option] ) ) ? $options[$option] : $default;
  }
}
$mjversion="V-3.8.2";
//核心文件
require_once plugin_dir_path(__FILE__) .'inc/options/functions.php';
require_once plugin_dir_path(__FILE__) .'inc/options/core.php';
require_once plugin_dir_path(__FILE__) .'inc/codestar-framework/codestar-framework.php';
require_once plugin_dir_path(__FILE__) .'inc/options/admin-options.php';
require_once plugin_dir_path(__FILE__) .'updates/plugin-update-checker.php';
//插件更新
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker('https://csxandlsy.xyz/wp-content/uploads/mj/info.json',__FILE__,'zibll_Add_ons');
//插件配置选项
add_filter( 'plugin_action_links', 'mj_plugins', 10, 5 );
function mj_plugins( $actions, $plugin_file ) 
{
   static $plugin;
   if (!isset($plugin))
		$plugin = plugin_basename(__FILE__);
   if ($plugin == $plugin_file) {
      $site_link = array('settings' => '<a style="color: green;" href="/wp-admin/admin.php?page=MJ#tab=默认配置">配置插件</a>');
      $settings = array('support' => '<a style="color: green;" href="https://yzf.qq.com/xv/web/static/chat/index.html?sign=37ef9b9781210ac6234cc8ee4ae0b837317483df97166bf38ca9ea60487b4da0d58d9b5d4542965b00bede445468f934890e2eba" target="_blank">帮助中心</a>');
      $actions = array_merge($settings, $actions);
      $actions = array_merge($site_link, $actions);
   }
   return $actions;
}