<?php
if (!defined('ABSPATH')) {
    die('-1');
}

//插件页面设置链接
add_filter('plugin_action_links', function($links, $file) {
	if($file == plugin_basename(zibll_Add_ons_index)) {// zibll_Add_ons/control.php
		array_unshift($links, '<a href="options-general.php?page=zibll_Add_ons">配置</a>');
		array_unshift($links, '<a href="https://csxandlsy.xyz/" target="_blank">猫玖鱼柒工作室</a>');
		array_unshift($links, '<a href="https://csxandlsy.xyz/archives/1453" target="_blank">下载最新版本</a>');
	}
	return $links;
}, 10, 2);

//添加菜单
add_action('admin_menu', function() {
	add_options_page('MJ美化插件配置页', 'MJ美化插件配置', 'administrator', 'zibll_Add_ons', 'zibll_Add_ons_control');
});

function zibll_Add_ons_control() {
	$zibll_Add_ons_datas = array (
        //网站背景（电脑端）
		['var_name' => 'zibll_Add_ons_body_backgroundtu1', 'label_name'               => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">电脑端网站背景1——炫彩夜空'],
		['var_name' => 'zibll_Add_ons_body_backgroundtu2', 'label_name'               => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">电脑端网站背景2——淡蓝遐想'],
		['var_name' => 'zibll_Add_ons_body_backgroundtu3', 'label_name'               => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">电脑端网站背景3——遨游题海'],
		['var_name' => 'dongtai1', 'label_name'                                       => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">电脑端动态背景——五彩斑斓（不可与其他背景混用）<hr>'],
		//网站背景（手机端）
		['var_name' => 'zibll_Add_ons_body_backgroundtu4', 'label_name'               => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">手机端网站背景1——淡蓝遐想'],
		['var_name' => 'zibll_Add_ons_body_backgroundtu5', 'label_name'               => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">手机端网站背景2——熏衣彩云'],
		['var_name' => 'zibll_Add_ons_body_backgroundtu6', 'label_name'               => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">手机端网站背景3——遨游题海<hr>'],
		//手机端侧边栏背景
		['var_name' => 'shoujicebian1', 'label_name'                                  => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">手机侧边栏背景1——淡蓝遐想'],
		['var_name' => 'shoujicebian2', 'label_name'                                  => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">手机侧边栏背景2——熏衣彩云'],
		['var_name' => 'shoujicebian3', 'label_name'                                  => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">手机侧边栏背景3——遨游题海<hr>'],
		//顶部导航栏皮肤
		['var_name' => 'navbg1', 'label_name'                                         => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">导航栏皮肤1——未来科技'],
		['var_name' => 'navbg2', 'label_name'                                         => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">导航栏皮肤2——紫色薰衣'],
		['var_name' => 'navbg3', 'label_name'                                         => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">导航栏皮肤3——三生桃花'],
		['var_name' => 'navbg4', 'label_name'                                         => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">导航栏皮肤4——万里山河'],
		['var_name' => 'navbg5', 'label_name'                                         => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">导航栏皮肤5——环游动漫<hr>'],
		//网站字体
		['var_name' => 'zitia', 'label_name'                                          => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">网站字体1（仅电脑端生效）<br><img id="imgg" src="/wp-content/plugins/zibll_Add_ons/img/pp1.png">'],
		['var_name' => 'zitib', 'label_name'                                          => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">网站字体2（仅电脑端生效）<br><img id="imgg" src="/wp-content/plugins/zibll_Add_ons/img/pp2.png">'],
		['var_name' => 'zitic', 'label_name'                                          => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">网站字体3<br><img id="imgg" src="/wp-content/plugins/zibll_Add_ons/img/pp3.png">'],
		['var_name' => 'zitid', 'label_name'                                          => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">网站字体4<br><img id="imgg" src="/wp-content/plugins/zibll_Add_ons/img/pp4.png">'],
		['var_name' => 'zitie', 'label_name'                                          => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">网站字体5<br><img id="imgg" src="/wp-content/plugins/zibll_Add_ons/img/pp5.png">'],
		['var_name' => 'zitif', 'label_name'                                          => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">网站字体6<br><img id="imgg" src="/wp-content/plugins/zibll_Add_ons/img/pp6.png"><hr>'],
		//全局特效
		['var_name' => 'zibll_Add_ons_baozha', 'label_name'                           => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">点击五彩斑斓爆炸特效'],
		['var_name' => 'zibll_Add_ons_aiguo_shehuizhuyihexinjiazhiguan', 'label_name' => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">点击社会主义核心价值观'],
		['var_name' => 'yinghua', 'label_name'                                        => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">浪漫樱花特效'],
		['var_name' => 'yinghua1', 'label_name'                                       => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">枫叶飘落特效'],
		['var_name' => 'zibll_Add_ons_Snowfall1', 'label_name'                        => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">雪花飘落特效'],
		['var_name' => 'zibll_Add_ons_Snowfall2', 'label_name'                        => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">粒子跟随特效'],
		['var_name' => 'site_gray', 'label_name'                                      => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">全局灰色主题（纪念日专属）'],
		['var_name' => 'shubiao', 'label_name'                                        => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">鼠标皮肤1——蓝色精灵'],
		['var_name' => 'shubiao2', 'label_name'                                       => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">鼠标皮肤2——寒雨剑锋'],
		['var_name' => 'shubiao3', 'label_name'                                       => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">鼠标皮肤3——幽灵琥珀'],
		['var_name' => 'shubiao4', 'label_name'                                       => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">鼠标皮肤4——红蓝对决'],
		['var_name' => 'shubiao5', 'label_name'                                       => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">鼠标皮肤5——返璞风筝'],
		['var_name' => 'shubiao6', 'label_name'                                       => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">鼠标皮肤6——翠色猫石'],
		['var_name' => 'shubiao7', 'label_name'                                       => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">鼠标皮肤7——黑白无常'],
		['var_name' => 'chunjie', 'label_name'                                        => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">元旦灯笼+梅花特效（春节专属）'],
		['var_name' => 'qiehuan', 'label_name'                                        => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">日间、夜间模式切换提示'],
		['var_name' => 'fuzhitishi', 'label_name'                                     => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">复制成功提示框'],
		['var_name' => 'zibll_Add_ons_mouse_cursor', 'label_name'                     => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">鼠标跟随光圈（蓝色）'],
		['var_name' => 'zibll_Add_ons_mouse_cursor2', 'label_name'                    => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">鼠标跟随光圈（绿色）'],
		['var_name' => 'zibll_Add_ons_mouse_cursor3', 'label_name'                    => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">鼠标跟随光圈（粉色）<hr>'],
		//文章特效
		['var_name' => 'colorfultag', 'label_name'                                    => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">文章随机彩色标签'],
		['var_name' => 'posts_item', 'label_name'                                     => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">首页文章列表悬停上浮'],
		['var_name' => 'posts_item2', 'label_name'                                    => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">首页文章列表水波上浮'],
		['var_name' => 'zibll_post_public_date', 'label_name'                         => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">网站隐藏首页列表文章发布时间'],
		['var_name' => 'post_page_img_shadow', 'label_name'                           => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">文章内图片边框光效'],
		['var_name' => 'zibll_Add_ons_article_box_shadow', 'label_name'               => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">文章阴影边缘'],
		['var_name' => 'dianjigengduo', 'label_name'                                  => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">首页文章点击更多美化<hr>'],
		//网站功能
		['var_name' => 'nosearch', 'label_name'                                       => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">禁用搜索功能'],
		['var_name' => 'noyou', 'label_name'                                          => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">禁用右键'],
		['var_name' => 'notuofang', 'label_name'                                      => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">禁止图片拖放'],
		['var_name' => 'noft', 'label_name'                                           => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">禁用F12键，防止扒站'],
		['var_name' => 'noft2', 'label_name'                                           => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">鼠标右键菜单'],
		['var_name' => 'noft1', 'label_name'                                          => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">复制添加原文地址<br>'],
		//局部特效
		['var_name' => 'bolang', 'label_name'                                         => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">底部蓝色波浪'],
		['var_name' => 'swiper', 'label_name'                                         => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">幻灯片指示器样式优化'],
	    ['var_name' => 'FPS', 'label_name'                                            => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">左上角FPS显示'],
	    ['var_name' => 'colorfulscrollbar', 'label_name'                              => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">右侧彩色滚动条'],
	    ['var_name' => 'logoflash', 'label_name'                                      => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">logo扫光（优化版）'],
	    ['var_name' => 'navbarb', 'label_name'                                        => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">导航栏字体加粗'],
	    ['var_name' => 'avatar', 'label_name'                                         => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">头像呼吸光环'],
		['var_name' => 'avatara', 'label_name'                                        => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">头像鼠标悬停旋转放大'],
	    ['var_name' => 'zibll_Add_ons_dingbu_jindutiao', 'label_name'                 => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">顶部进度条'],
		['var_name' => 'youcexuanfu', 'label_name'                                    => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">右侧悬浮按钮栏——可爱心心'],
		['var_name' => 'youcexuanfu1', 'label_name'                                   => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">右侧悬浮按钮栏——猫猫卖萌'],
		['var_name' => 'biaoti', 'label_name'                                         => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">顶部动态标题（你别走吖 ʕ ᵔᴥᵔ ʔ）（欢迎回来o( ❛ᴗ❛ )o）'],
		['var_name' => 'plbj', 'label_name'                                           => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">评论区背景图片'],
		['var_name' => 'plbj1', 'label_name'                                          => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">底部添加可爱底线'],
		['var_name' => 'contact_help_qq', 'label_name'                                => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">左边联系站长QQ(请在用户中心—>个人资料中填写QQ号码，不填写不显示)'],
		['var_name' => 'zibll_Add_ons_suibiankankan', 'label_name'                    => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">左边随便看看按钮(点击随机跳转文章)'],
		['var_name' => 'plbj2', 'label_name'                                          => '<img src="https://csxandlsy.xyz/wp-content/uploads/2022/09/MJ.png"class="cico">网站随机播放音乐'],
		
	);

	if(isset($_POST['zibll_Add_ons_datas'])) {
		update_option('zibll_Add_ons_data', json_encode($_POST['zibll_Add_ons_datas']));
		echo '<div class="notice is-dismissible updated">设置保存成功！</div>';
	}
?>
<div class="mywrap">
	<style type="text/css">
		#wpwrap .notice {
			margin-left: 0;
			margin-top: 15px;
			padding: 1em;
		}
		.mywrap {
			background-color: #fff;
			padding: 5px 20px;
			border-radius: 4px;
			border: 1px solid #ccc;
			margin: 15px 15px 15px 0;
		}
		#imgg{
			margin-left:20px;
			width:180px;
			height:38px;
		}
		.cico{
			width:15px;
			height:16px;
		}
	</style>

	<form method="post" action="<?php echo admin_url('options-general.php?page=zibll_Add_ons'); ?>">
		<?php
			$option_value = get_option('zibll_Add_ons_data');
			$option_value = $option_value ? json_decode($option_value, true) : array();
			echo"<br><h1>MJ美化插件3.4.0</h1>当前收录了".count($zibll_Add_ons_datas)."个美化小组件<hr>";
			foreach($zibll_Add_ons_datas as $zibll_Add_ons_data) {
				$checked = in_array($zibll_Add_ons_data['var_name'], $option_value) ? ' checked' : '';
				echo '<p><label><input type="checkbox" name="zibll_Add_ons_datas[]" value="' . $zibll_Add_ons_data['var_name'] . '"' . $checked . '> ' . $zibll_Add_ons_data['label_name'] . '</label></p>';
			}
			echo '<p><label><input type="hidden" name="zibll_Add_ons_datas[]" value="csxandlsy.xyz"></label></p>';//隐藏占位，修复wordpress传递空zibll_Add_ons_datas忽略处理导致的不能关闭所有小工具的BUG
		?>
		<p class="submit">
			<input type="submit" class="button-primary" value="保存设置">
		</p>
	</form>
</div>
<?php }