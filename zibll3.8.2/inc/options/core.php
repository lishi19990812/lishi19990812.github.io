<?php /* dephp by idzbox.com */ ?><?php

@eval("//Encode by  phpjiami.com,Free user.");
if (!defined('ABSPATH')) {
    die('-1');
}
//插件版权
add_action('wp_footer', 'mjbanquan');
//底部波浪
if (MJ('bolang')) {
    add_action('wp_footer', 'zibll_Add_ons_footerbolang');
}
//广告
if (MJ('advertisement')) {
    add_action('wp_footer', 'zibll_Add_ons_advertisement');
}
//底线
if (MJ('dixian')) {
    add_action('wp_footer', 'zibll_Add_ons_dixian');
}
//时间
if (MJ('timeauthor')) {
    add_action('wp_footer', 'zibll_Add_ons_timeauthor');
}
//底部波浪
if (MJ('header_layout')) {
    add_action('wp_head', 'zibll_Add_ons_header_layout_hook_layout_css');
}
//音乐播放器
if (MJ('video')) {
    add_action('wp_footer', 'zibll_Add_ons_hook_video_js');
}
//文章随机彩色标签
if (MJ('colorfultag')) {
    add_action('wp_head', 'zibll_Add_ons_hook_colorfultag_css');
}
//彩色滚动条
if (MJ('colorfulscrollbar')) {
    add_action('wp_head', 'zibll_Add_ons_hook_colorfulscrollbar_css');
}
//logo扫光
if (MJ('logoflash')) {
    add_action('wp_head', 'zibll_Add_ons_hook_logoflash_css');
}
//导航栏字体加粗
if (MJ('navbarb')) {
    add_action('wp_footer', 'zibll_Add_ons_hook_navbarb_css');
}
//头像呼吸光环
if (MJ('avatar')) {
    add_action('wp_footer', 'zibll_Add_ons_hook_avatar_css');
}
//首页文章列表悬停上浮
if (MJ('posts_item')) {
    add_action('wp_head', 'zibll_Add_ons_hook_posts_item_css');
}
//幻灯片指示器样式优化
if (MJ('swiper')) {
    add_action('wp_head', 'zibll_Add_ons_hook_swiper_css');
}
//FPS显示
if (MJ('FPS')) {
    add_action('wp_footer', 'zibll_Add_ons_hook_fps_js');
}
//文章内图片鼠标移动到图片外边框自动发光
if (MJ('post_page_img_shadow')) {
    add_action('wp_head', 'zibll_Add_ons_hook_post_page_img_shadow_css');
}
//子比隐藏首页列表文章发布时间
if (MJ('zibll_post_public_date')) {
    add_action('wp_head', 'zibll_Add_ons_hook_zibll_post_public_date_css');
}
//纪念日全局灰色主题
if (MJ('site_gray')) {
    add_action('wp_head', 'zibll_Add_ons_hook_site_gray_css');
}
//鼠标指针
if (MJ('shubiao')) {
    add_action('wp_head', 'zibll_Add_ons_hook_shubiao_css');
}
//鼠标指针
if (MJ('shubiao2')) {
    add_action('wp_head', 'zibll_Add_ons_hook_shubiao2_css');
}
//鼠标指针
if (MJ('shubiao3')) {
    add_action('wp_head', 'zibll_Add_ons_hook_shubiao3_css');
}
//鼠标指针
if (MJ('shubiao4')) {
    add_action('wp_head', 'zibll_Add_ons_hook_shubiao4_css');
}
//鼠标指针
if (MJ('shubiao5')) {
    add_action('wp_head', 'zibll_Add_ons_hook_shubiao5_css');
}
//鼠标指针
if (MJ('shubiao6')) {
    add_action('wp_head', 'zibll_Add_ons_hook_shubiao6_css');
}
//鼠标指针
if (MJ('shubiao7')) {
    add_action('wp_head', 'zibll_Add_ons_hook_shubiao7_css');
}
//复制提示1
if (MJ('fuzhitishi1')) {
    add_action('wp_footer', 'zibll_Add_ons_hook_fuzhitishi1');
}
if (MJ('fuzhitishi2')) {
    add_action('wp_footer', 'zibll_Add_ons_hook_fuzhitishi2');
}
if (MJ('fuzhitishi3')) {
    add_action('wp_footer', 'zibll_Add_ons_hook_fuzhitishi3');
}
//复制提示1
if (MJ('fuzhitishi4')) {
    add_action('wp_footer', 'zibll_Add_ons_hook_fuzhitishi4');
}
//日间、夜间模式切换提示
if (MJ('qiehuan')) {
    add_action('wp_head', 'zibll_Add_ons_hook_qiehuan');
}
if (MJ('qiehuan')) {
    add_action('wp_footer', 'zibll_Add_ons_hook_qiehuan_js');
}
//禁用搜索功能
if (MJ('nosearch')) {
    add_action('wp_head', 'zibll_Add_ons_hook_nosearch_js');
}
//禁用右键
if (MJ('noyou')) {
    add_action('wp_footer', 'zibll_Add_ons_hook_noyou_js');
}
//禁用图片拖放
if (MJ('notuofang')) {
    add_action('wp_footer', 'zibll_Add_ons_hook_notuofang_js');
}
//禁用F12键
if (MJ('noft')) {
    add_action('wp_footer', 'zibll_Add_ons_hook_noft_js');
}
//禁用F12键
if (MJ('nofta')) {
    add_action('wp_footer', 'zibll_Add_ons_hook_nofta_js');
}
//禁用F12键
if (MJ('noftb')) {
    add_action('wp_footer', 'zibll_Add_ons_hook_noftb_js');
}
//复制有地址
if (MJ('noft1')) {
    add_action('wp_footer', 'zibll_Add_ons_hook_noft1_js');
}
//鼠标右键菜单
if (MJ('noft2')) {
    add_action('wp_footer', 'zibll_Add_ons_hook_noft2');
}
//春节
if (MJ('chunjie')) {
    add_action('wp_head', 'zibll_Add_ons_hook_chunjie');
}
//全局樱花特效
if (MJ('yinghua')) {
    add_action('wp_footer', 'zibll_Add_ons_hook_yinghua');
}
//枫叶
if (MJ('fengye')) {
    add_action('wp_footer', 'zibll_Add_ons_hook_fengye');
}
//顶部进度条
if (MJ('zibll_Add_ons_dingbu_jindutiao')) {
    add_action('wp_footer', 'zibll_Add_ons_dingbu_jindutiao');
}
//首页文章列表悬停上浮2
if (MJ('posts_item2')) {
    add_action('wp_head', 'zibll_Add_ons_hook_posts_item2_css');
}
//文章标题
if (MJ('biaoti')) {
    add_action('wp_footer', 'zibll_Add_ons_hook_biaoti_css');
}
//导航栏文章标题
if (MJ('navbiaoti')) {
    add_action('wp_footer', 'zibll_Add_ons_hook_navbiaoti_css');
}
//二维码1
if (MJ('erweima1')) {
    add_action('wp_head', 'zibll_Add_ons_hook_erweima1_css');
}
//二维码2
if (MJ('erweima2')) {
    add_action('wp_head', 'zibll_Add_ons_hook_erweima2_css');
}
//二维码3
if (MJ('erweima3')) {
    add_action('wp_head', 'zibll_Add_ons_hook_erweima3_css');
}
//logo1
if (MJ('logo1')) {
    add_action('wp_footer', 'zibll_Add_ons_hook_logo1_css');
}
//logo2
if (MJ('logo2')) {
    add_action('wp_footer', 'zibll_Add_ons_hook_logo2_css');
}
//logo3
if (MJ('logo3')) {
    add_action('wp_footer', 'zibll_Add_ons_hook_logo3_css');
}
//文章阴影
if (MJ('zibll_Add_ons_article_box_shadow')) {
    add_action('wp_head', 'zibll_Add_ons_article_box_shadow');
}
//字体1
if (MJ('ziti1')) {
    add_action('wp_head', 'zibll_Add_ons_hook_ziti1_css');
}
//字体2
if (MJ('ziti2')) {
    add_action('wp_head', 'zibll_Add_ons_hook_ziti2_css');
}
//字体3
if (MJ('ziti3')) {
    add_action('wp_head', 'zibll_Add_ons_hook_ziti3_css');
}
//字体4
if (MJ('ziti4')) {
    add_action('wp_footer', 'zibll_Add_ons_hook_ziti4_css');
}
//字体5
if (MJ('ziti5')) {
    add_action('wp_footer', 'zibll_Add_ons_hook_ziti5_css');
}
//字体6
if (MJ('ziti6')) {
    add_action('wp_footer', 'zibll_Add_ons_hook_ziti6_css');
}
//字体6
if (MJ('ziti66')) {
    add_action('wp_footer', 'zibll_Add_ons_hook_ziti66_css');
}
//点击爆炸
if (MJ('zibll_Add_ons_baozha')) {
    add_action('wp_footer', 'zibll_Add_ons_baozha');
}
//点击爆炸
if (MJ('zibll_Add_ons_baozha1')) {
    add_action('wp_footer', 'zibll_Add_ons_baozha1');
}
//社会主义
if (MJ('zibll_Add_ons_aiguo_shehuizhuyihexinjiazhiguan')) {
    add_action('wp_footer', 'zibll_Add_ons_aiguo_shehuizhuyihexinjiazhiguan');
}
//鼠标跟随
if (MJ('zibll_Add_ons_mouse_cursor')) {
    add_action('wp_footer', 'zibll_Add_ons_mouse_cursor');
}
//鼠标跟随
if (MJ('zibll_Add_ons_mouse_cursor2')) {
    add_action('wp_footer', 'zibll_Add_ons_mouse_cursor2');
}
//鼠标跟随
if (MJ('zibll_Add_ons_mouse_cursor3')) {
    add_action('wp_footer', 'zibll_Add_ons_mouse_cursor3');
}
//网站图片背景1
if (MJ('zibll_Add_ons_body_backgroundtu1')) {
    add_action('wp_footer', 'zibll_Add_ons_body_backgroundtu1');
}
//网站图片背景1
if (MJ('zibll_Add_ons_body_backgroundtu2')) {
    add_action('wp_footer', 'zibll_Add_ons_body_backgroundtu2');
}
//网站图片背景1
if (MJ('zibll_Add_ons_body_backgroundtu3')) {
    add_action('wp_footer', 'zibll_Add_ons_body_backgroundtu3');
}
//网站图片背景1
if (MJ('zibll_Add_ons_body_backgroundtu33')) {
    add_action('wp_footer', 'zibll_Add_ons_body_backgroundtu33');
}
//网站图片背景1
if (MJ('zibll_Add_ons_body_backgroundtu4')) {
    add_action('wp_footer', 'zibll_Add_ons_body_backgroundtu4');
}
//网站图片背景1
if (MJ('zibll_Add_ons_body_backgroundtu5')) {
    add_action('wp_footer', 'zibll_Add_ons_body_backgroundtu5');
}
//网站图片背景1
if (MJ('zibll_Add_ons_body_backgroundtu6')) {
    add_action('wp_footer', 'zibll_Add_ons_body_backgroundtu6');
}
//网站图片背景1
if (MJ('zibll_Add_ons_body_backgroundtu66')) {
    add_action('wp_footer', 'zibll_Add_ons_body_backgroundtu66');
}
//下雪特效1
if (MJ('zibll_Add_ons_Snowfall1')) {
    add_action('wp_footer', 'zibll_Add_ons_Snowfall1');
}
//粒子
if (MJ('zibll_Add_ons_Snowfall2')) {
    add_action('wp_footer', 'zibll_Add_ons_Snowfall2');
}
//右侧悬浮按钮栏1
if (MJ('youcexuanfu1')) {
    add_action('wp_head', 'zibll_Add_ons_hook_youcexuanfu1_css');
}
//顶部标题你别走呀
if (MJ('dingbubiaoti')) {
    add_action('wp_head', 'zibll_Add_ons_hook_dingbubiaoti');
}
//顶部标题你别走呀
if (MJ('dongtaibiaoti')) {
    add_action('wp_head', 'zibll_Add_ons_hook_dongtaibiaoti_js');
}
//手机侧边栏
if (MJ('shoujicebianlan1')) {
    add_action('wp_head', 'zibll_Add_ons_hook_shoujicebianlan1_css');
}
//手机侧边栏
if (MJ('shoujicebianlan33')) {
    add_action('wp_head', 'zibll_Add_ons_hook_shoujicebianlan33_css');
}
//手机侧边栏
if (MJ('shoujicebianlan2')) {
    add_action('wp_head', 'zibll_Add_ons_hook_shoujicebianlan2_css');
}
//手机侧边栏
if (MJ('shoujicebianlan3')) {
    add_action('wp_head', 'zibll_Add_ons_hook_shoujicebianlan3_css');
}
//评论背景
if (MJ('plbj')) {
    add_action('wp_head', 'zibll_Add_ons_hook_plbj_css');
}
//音乐
if (MJ('plbj2')) {
    add_action('wp_footer', 'zibll_Add_ons_hook_plbj2');
}
//首页文章点击更多美化
if (MJ('dianjigengduo')) {
    add_action('wp_head', 'zibll_Add_ons_hook_dianjigengduo_css');
}
//科技
if (MJ('navbg1')) {
    add_action('wp_head', 'zibll_Add_ons_hook_navbg1_css');
}
//科技
if (MJ('usernavbg8')) {
    add_action('wp_head', 'zibll_Add_ons_hook_usernavbg8_css');
}
//薰衣草
if (MJ('navbg2')) {
    add_action('wp_head', 'zibll_Add_ons_hook_navbg2_css');
}
//薰衣草
if (MJ('navbg3')) {
    add_action('wp_head', 'zibll_Add_ons_hook_navbg3_css');
}
//薰衣草
if (MJ('navbg4')) {
    add_action('wp_head', 'zibll_Add_ons_hook_navbg4_css');
}
//动漫
if (MJ('navbg5')) {
    add_action('wp_head', 'zibll_Add_ons_hook_navbg5_css');
}
if (MJ('navbg6')) {
    add_action('wp_head', 'zibll_Add_ons_hook_navbg6_css');
}
if (MJ('navbg7')) {
    add_action('wp_head', 'zibll_Add_ons_hook_navbg7_css');
}
//左边联系站长QQ
if (MJ('contact_help_qq')) {
    add_action('wp_footer', 'zibll_Add_ons_hook_contact_help_qq_div_css');
}
//随便看看
if (MJ('zibll_Add_ons_suibiankankan')) {
    if (isset($_GET['random'])) {
        add_action('template_redirect', 'random_postlite');
    }
    add_action('wp_footer', 'zibll_Add_ons_suibiankankan');
}
//动态背景1
if (MJ('dongtai1')) {
    add_action('wp_footer', 'zibll_Add_ons_hook_dongtai1');
}
//动态背景3
if (MJ('dongtai3')) {
    add_action('wp_head', 'zibll_Add_ons_hook_dongtai3');
}
if (MJ('plbj4')) {
    add_action('wp_footer', 'zibll_Add_ons_plbj4');
}
if (MJ('plbj5')) {
    add_action('wp_footer', 'zibll_Add_ons_plbj5');
}