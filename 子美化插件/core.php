<?php
if (!defined('ABSPATH')) {
    die('-1');
}
//底部波浪
if(in_array('bolang', $zibll_Add_ons_datas)) {
add_action( 'wp_footer', 'zibll_Add_ons_footerbolang' );
}
//文章随机彩色标签
if(in_array('colorfultag', $zibll_Add_ons_datas)) {
add_action('wp_head', 'zibll_Add_ons_hook_colorfultag_css');
}
//彩色滚动条
if(in_array('colorfulscrollbar', $zibll_Add_ons_datas)) {
add_action('wp_head', 'zibll_Add_ons_hook_colorfulscrollbar_css');
}
//logo扫光
if(in_array('logoflash', $zibll_Add_ons_datas)) {
add_action('wp_head', 'zibll_Add_ons_hook_logoflash_css');
}
//导航栏字体加粗
if(in_array('navbarb', $zibll_Add_ons_datas)) {
add_action('wp_footer', 'zibll_Add_ons_hook_navbarb_css');
}
//头像呼吸光环
if(in_array('avatar', $zibll_Add_ons_datas)) {
add_action('wp_footer', 'zibll_Add_ons_hook_avatar_css');
}
//头像鼠标悬停旋转放大
if(in_array('avatar', $zibll_Add_ons_datas)) {
add_action('wp_footer', 'zibll_Add_ons_hook_avatara_css');
}
//首页文章列表悬停上浮
if(in_array('posts_item', $zibll_Add_ons_datas)) {
add_action('wp_head', 'zibll_Add_ons_hook_posts_item_css');
}
//幻灯片指示器样式优化
if(in_array('swiper', $zibll_Add_ons_datas)) {
add_action('wp_head', 'zibll_Add_ons_hook_swiper_css');
}
//FPS显示
if(in_array('FPS', $zibll_Add_ons_datas)) {
add_action('wp_footer', 'zibll_Add_ons_hook_fps_js');
}
//文章内图片鼠标移动到图片外边框自动发光
if(in_array('post_page_img_shadow', $zibll_Add_ons_datas)) {
add_action('wp_head', 'zibll_Add_ons_hook_post_page_img_shadow_css');
}
//子比隐藏首页列表文章发布时间
if(in_array('zibll_post_public_date', $zibll_Add_ons_datas)) {
add_action('wp_head', 'zibll_Add_ons_hook_zibll_post_public_date_css');
}
//纪念日全局灰色主题
if(in_array('site_gray', $zibll_Add_ons_datas)) {
add_action('wp_head', 'zibll_Add_ons_hook_site_gray_css');
}
//鼠标指针
if(in_array('shubiao', $zibll_Add_ons_datas)) {
add_action('wp_head', 'zibll_Add_ons_hook_shubiao_css');
}
//鼠标指针
if(in_array('shubiao2', $zibll_Add_ons_datas)) {
add_action('wp_head', 'zibll_Add_ons_hook_shubiao2_css');
}
//鼠标指针
if(in_array('shubiao3', $zibll_Add_ons_datas)) {
add_action('wp_head', 'zibll_Add_ons_hook_shubiao3_css');
}
//鼠标指针
if(in_array('shubiao4', $zibll_Add_ons_datas)) {
add_action('wp_head', 'zibll_Add_ons_hook_shubiao4_css');
}
//鼠标指针
if(in_array('shubiao5', $zibll_Add_ons_datas)) {
add_action('wp_head', 'zibll_Add_ons_hook_shubiao5_css');
}
//鼠标指针
if(in_array('shubiao6', $zibll_Add_ons_datas)) {
add_action('wp_head', 'zibll_Add_ons_hook_shubiao6_css');
}
//鼠标指针
if(in_array('shubiao7', $zibll_Add_ons_datas)) {
add_action('wp_head', 'zibll_Add_ons_hook_shubiao7_css');
}
//日间、夜间模式切换提示
if(in_array('qiehuan', $zibll_Add_ons_datas)) {
add_action('wp_head', 'zibll_Add_ons_hook_qiehuan');
}
//日间、夜间模式切换提示
if(in_array('qiehuan', $zibll_Add_ons_datas)) {
add_action('wp_footer', 'zibll_Add_ons_hook_qiehuan_js');
}
//复制提示
if(in_array('fuzhitishi', $zibll_Add_ons_datas)) {
add_action('wp_footer', 'zibll_Add_ons_hook_fuzhitishi');
}
//复制提示
if(in_array('qiehuan', $zibll_Add_ons_datas)) {
add_action('wp_footer', 'zibll_Add_ons_hook_fuzhitishi_js');
}
//禁用搜索功能
if(in_array('nosearch', $zibll_Add_ons_datas)) {
add_action('wp_head', 'zibll_Add_ons_hook_nosearch_js');
}
//禁用右键
if(in_array('noyou', $zibll_Add_ons_datas)) {
add_action('wp_footer', 'zibll_Add_ons_hook_noyou_js');
}
//禁用图片拖放
if(in_array('notuofang', $zibll_Add_ons_datas)) {
add_action('wp_footer', 'zibll_Add_ons_hook_notuofang_js');
}
//禁用F12键
if(in_array('noft', $zibll_Add_ons_datas)) {
add_action('wp_footer', 'zibll_Add_ons_hook_noft_js');
}
//复制有地址
if(in_array('noft1', $zibll_Add_ons_datas)) {
add_action('wp_footer', 'zibll_Add_ons_hook_noft1_js');
}
//鼠标右键菜单
if(in_array('noft2', $zibll_Add_ons_datas)) {
add_action('wp_footer', 'zibll_Add_ons_hook_noft2');
}
//春节
if(in_array('chunjie', $zibll_Add_ons_datas)) {
add_action('wp_head', 'zibll_Add_ons_hook_chunjie');
}
//全局樱花特效
if(in_array('yinghua', $zibll_Add_ons_datas)) {
add_action('wp_footer', 'zibll_Add_ons_hook_yinghua');
}
//全局枫叶特效
if(in_array('yinghua1', $zibll_Add_ons_datas)) {
add_action('wp_footer', 'zibll_Add_ons_hook_yinghua1');
}
//顶部进度条
if(in_array('zibll_Add_ons_dingbu_jindutiao', $zibll_Add_ons_datas)) {
add_action( 'wp_head', 'zibll_Add_ons_dingbu_jindutiao');
}
//首页文章列表悬停上浮2
if(in_array('posts_item2', $zibll_Add_ons_datas)) {
add_action('wp_head', 'zibll_Add_ons_hook_posts_item2_css');
}
//文章阴影
if(in_array('zibll_Add_ons_article_box_shadow', $zibll_Add_ons_datas)) {
add_action( 'wp_head', 'zibll_Add_ons_article_box_shadow');
}
//字体①
if(in_array('zitia', $zibll_Add_ons_datas)) {
add_action('wp_head', 'zibll_Add_ons_hook_zitia_css');
}
//字体①
if(in_array('zitia', $zibll_Add_ons_datas)) {
add_action('wp_head', 'zibll_Add_ons_hook_zitia_css');
}
//字体②
if(in_array('zitib', $zibll_Add_ons_datas)) {
add_action('wp_head', 'zibll_Add_ons_hook_zitib_css');
}
//字体③
if(in_array('zitic', $zibll_Add_ons_datas)) {
add_action('wp_footer', 'zibll_Add_ons_hook_zitic_css');
}
//字体④
if(in_array('zitid', $zibll_Add_ons_datas)) {
add_action('wp_footer', 'zibll_Add_ons_hook_zitid_css');
}
//字体⑤
if(in_array('zitie', $zibll_Add_ons_datas)) {
add_action('wp_footer', 'zibll_Add_ons_hook_zitie_css');
}
//字体⑥
if(in_array('zitif', $zibll_Add_ons_datas)) {
add_action('wp_footer', 'zibll_Add_ons_hook_zitif_css');
}
//点击爆炸
if(in_array('zibll_Add_ons_baozha', $zibll_Add_ons_datas)) {
add_action('wp_footer', 'zibll_Add_ons_baozha');
}
//社会主义
if(in_array('zibll_Add_ons_aiguo_shehuizhuyihexinjiazhiguan', $zibll_Add_ons_datas)) {
add_action( 'wp_footer', 'zibll_Add_ons_aiguo_shehuizhuyihexinjiazhiguan' );
}
//鼠标跟随
if(in_array('zibll_Add_ons_mouse_cursor', $zibll_Add_ons_datas)) {
add_action( 'wp_footer', 'zibll_Add_ons_mouse_cursor' );
}
//鼠标跟随
if(in_array('zibll_Add_ons_mouse_cursor2', $zibll_Add_ons_datas)) {
add_action( 'wp_footer', 'zibll_Add_ons_mouse_cursor2' );
}
//鼠标跟随
if(in_array('zibll_Add_ons_mouse_cursor3', $zibll_Add_ons_datas)) {
add_action( 'wp_footer', 'zibll_Add_ons_mouse_cursor3' );
}
//网站图片背景1
if(in_array('zibll_Add_ons_body_backgroundtu1', $zibll_Add_ons_datas)) {
add_action( 'wp_head', 'zibll_Add_ons_body_backgroundtu1');
}
//网站图片背景1
if(in_array('zibll_Add_ons_body_backgroundtu2', $zibll_Add_ons_datas)) {
add_action( 'wp_head', 'zibll_Add_ons_body_backgroundtu2');
}
//网站图片背景1
if(in_array('zibll_Add_ons_body_backgroundtu3', $zibll_Add_ons_datas)) {
add_action( 'wp_head', 'zibll_Add_ons_body_backgroundtu3');
}
//网站图片背景1
if(in_array('zibll_Add_ons_body_backgroundtu4', $zibll_Add_ons_datas)) {
add_action( 'wp_head', 'zibll_Add_ons_body_backgroundtu4');
}
//网站图片背景1
if(in_array('zibll_Add_ons_body_backgroundtu5', $zibll_Add_ons_datas)) {
add_action( 'wp_head', 'zibll_Add_ons_body_backgroundtu5');
}
//网站图片背景1
if(in_array('zibll_Add_ons_body_backgroundtu6', $zibll_Add_ons_datas)) {
add_action( 'wp_head', 'zibll_Add_ons_body_backgroundtu6');
}
//下雪特效1
if(in_array('zibll_Add_ons_Snowfall1', $zibll_Add_ons_datas)) {
add_action( 'wp_footer', 'zibll_Add_ons_Snowfall1' );
}
//粒子
if(in_array('zibll_Add_ons_Snowfall2', $zibll_Add_ons_datas)) {
add_action( 'wp_footer', 'zibll_Add_ons_Snowfall2_js' );
}
//右侧悬浮按钮栏
if(in_array('youcexuanfu', $zibll_Add_ons_datas)) {
add_action( 'wp_head', 'zibll_Add_ons_hook_youcexuanfu_css' );
}
//右侧悬浮按钮栏1
if(in_array('youcexuanfu1', $zibll_Add_ons_datas)) {
add_action( 'wp_head', 'zibll_Add_ons_hook_youcexuanfu1_css' );
}
//顶部标题
if(in_array('biaoti', $zibll_Add_ons_datas)) {
add_action( 'wp_head', 'zibll_Add_ons_hook_biaoti_js' );
}
//手机侧边栏
if(in_array('shoujicebianlan1', $zibll_Add_ons_datas)) {
add_action( 'wp_head', 'zibll_Add_ons_hook_shoujicebianlan1_css' );
}
//手机侧边栏
if(in_array('shoujicebianlan2', $zibll_Add_ons_datas)) {
add_action( 'wp_head', 'zibll_Add_ons_hook_shoujicebianlan2_css' );
}
//手机侧边栏
if(in_array('shoujicebianlan3', $zibll_Add_ons_datas)) {
add_action( 'wp_head', 'zibll_Add_ons_hook_shoujicebianlan3_css' );
}
//评论背景
if(in_array('plbj', $zibll_Add_ons_datas)) {
add_action( 'wp_head', 'zibll_Add_ons_hook_plbj_css' );
}
//可爱底线
if(in_array('plbj1', $zibll_Add_ons_datas)) {
add_action( 'wp_footer', 'zibll_Add_ons_hook_plbj1' );
}
//可爱底线
if(in_array('plbj2', $zibll_Add_ons_datas)) {
add_action( 'wp_footer', 'zibll_Add_ons_hook_plbj2' );
}
//首页文章点击更多美化
if(in_array('dianjigengduo', $zibll_Add_ons_datas)) {
add_action( 'wp_head', 'zibll_Add_ons_hook_dianjigengduo_css' );
}
//科技
if(in_array('navbg1', $zibll_Add_ons_datas)) {
add_action( 'wp_head', 'zibll_Add_ons_hook_navbg1_css' );
}
//薰衣草
if(in_array('navbg2', $zibll_Add_ons_datas)) {
add_action( 'wp_head', 'zibll_Add_ons_hook_navbg2_css' );
}
//薰衣草
if(in_array('navbg3', $zibll_Add_ons_datas)) {
add_action( 'wp_head', 'zibll_Add_ons_hook_navbg3_css' );
}
//薰衣草
if(in_array('navbg4', $zibll_Add_ons_datas)) {
add_action( 'wp_head', 'zibll_Add_ons_hook_navbg4_css' );
}
//动漫
if(in_array('navbg5', $zibll_Add_ons_datas)) {
add_action( 'wp_head', 'zibll_Add_ons_hook_navbg5_css' );
}
//左边联系站长QQ
if(in_array('contact_help_qq', $zibll_Add_ons_datas)) {
add_action('wp_footer', 'zibll_Add_ons_hook_contact_help_qq_div_css');
}
//随便看看
if(in_array('zibll_Add_ons_suibiankankan', $zibll_Add_ons_datas)) {
if ( isset( $_GET['random'] ) ){
add_action( 'template_redirect', 'random_postlite' );
}
add_action('wp_footer', 'zibll_Add_ons_suibiankankan');
}
//动态背景1
if(in_array('dongtai1', $zibll_Add_ons_datas)) {
add_action( 'wp_footer', 'zibll_Add_ons_hook_dongtai1' );
}
