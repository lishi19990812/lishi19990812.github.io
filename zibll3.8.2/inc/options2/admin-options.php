<?php
/* 
 * About：PHP Dncode by decode.xiaojieapi.com
 * Time：2023-02-08 08:15:55
 * Admonish：本站提供的解密服务完全免费，如果您通过某些渠道付费购买，恭喜您被骗了！
 * ad：欢迎加入【小杰交流群/PHP解密】：809513269
*/ 
?>
?><?php @eval("//Encode by  phpjiami.com,Free user."); ?><?php if (! defined('ABSPATH')) {die;}
include('../../zibll_Add_ons.php');
if (class_exists('CSF')) {
    $prefix    = 'MJ';
    $mj_zibll_images = '/wp-content/plugins/zibll_Add_ons/img/';
    //开始构建
    CSF::createOptions($prefix, array(
        'menu_title'         => 'MJ美化插件',
        'menu_slug'          => 'MJ',
        'framework_title'    => 'MJ美化插件',
        'show_in_customizer' => true, 
        'footer_text'        => '猫玖鱼柒开发 '.$mjversion,
        'footer_credit'      => '<i class="fa fa-fw fa-heart-o" aria-hidden="true"></i> ',
        'theme'              => 'light',
    ));
    CSF::createSection($prefix, array(
        'id'    => 'mjnav',
        'title' => '导航美化',
        'icon'  => 'fa fa-tasks',
    ));
    CSF::createSection($prefix, array(
        'id'    => 'mjall',
        'title' => '全局美化',
        'icon'  => 'fa fa-codepen',
    ));
    CSF::createSection($prefix, array(
        'id'    => 'jubu',
        'title' => '局部美化',
        'icon'  => 'fa fa-object-group',
    ));
    CSF::createSection($prefix, array(
        'id'    => 'wenzhang',
        'title' => '文章美化',
        'icon'  => 'fa fa-pencil-square-o',
    ));
    CSF::createSection($prefix, array(
        'id'    => 'gongneng',
        'title' => '功能设置',
        'icon'  => 'fa fa-pie-chart',
    ));
    CSF::createSection($prefix, array(
        'id'    => 'updatemenu',
        'title' => '更新日志',
        'icon'  => 'fa fa-tags',
        'fields'      => array(
            array(
                'style'   => 'warning',
                'type'    => 'submessage',
                'content' => '<p><b>更新日志</b></p>
                <b>V-3.8.2<b/><br>更新时间：2022年11月11日<br>更新内容：<ol><li>紧急修复了授权因SSL验证不通过导致的授权错误的bug！</li></ol><hr>
                <b>V-3.8.1<b/><br>更新时间：2022年11月10日<br>更新内容：<ol><li>紧急修复了网站加载速度问题！</li></ol><hr>
                <b>V-3.8.0<b/><br>更新时间：2022年11月10日<br>更新内容：<ol><li>修复网站底部运行时间位置异常的问题</li><li>新增ZibllPAY插件内容</li><li>新增Oreo 2.0授权系统内容</li><li>新增用户在线自主授权及修改授权的功能</li><li>新增授权商功能</li></ol><hr>
                <b>V-3.7.8<b/><br>更新时间：2022年10月25日<br>更新内容：<ol><li>新增网站底部广告</li><li>新增Ctrl+D收藏本站提示</li><li>新增网站底部运行时间</li><li>修复了授权问题</li><li>修复了部分bug</li></ol><hr>
                <b>V-3.7.7<b/><br>更新时间：2022年10月22日<br>更新内容：<ol><li>大幅度提升了网站加载速度</li><li>优化了插件授权</li><li>修复了部分bug</li></ol><hr>
                <b>V-3.7.6<b/><br>更新时间：2022年10月22日<br>更新内容：<ol><li>优化了插件后台布局</li><li>优化了网站加载速度</li><li>新增title自定义功能</li></ol><hr>
                <b>V-3.7.5<b/><br>更新时间：2022年10月21日<br>更新内容：<ol><li>修复了底部导航栏链接问题</li><li>修复了底部蒲公英遮挡链接的问题</li></ol><hr>
                <b>V-3.7.4<b/><br>更新时间：2022年10月20日<br>更新内容：<ol><li>修复了授权问题</li><li>新增网站底部蒲公英动态特效</li><li>完善了新框架的内容</li><li>新增鼠标点击特效</li><li>新增禁止选中的功能</li><li>优化了F12禁用的功能</li><li>新增禁止Ctrl+S保存网页的功能</li></ol><hr>
                <b>V-3.7.2<b/><br>更新时间：2022年10月17日<br>更新内容：<ol><li>该版本作为正式版本发布</li><li>新增用户自定义功能，可自定义背景，文案，字体，鼠标皮肤，导航栏背景</li><li>完善了新框架的内容</li><li>修复了手机侧边栏背景显示问题</li><li>修复了其他已知bug</li><li>优化了网站加载的速度</li></ol><hr>
                <b>V-3.7.1<b/><br>更新时间：2022年10月14日<br>更新内容：<ol><li>该版本为新框架内测版本</li><li>诸多功能尚在测试阶段</li><li>新增了浏览器后台打印插件版权的内容：MJ美化插件——提供主题美化服务</li></ol><hr>
                <b>V-3.7.0<b/><br>更新时间：2022年10月13日<br>更新内容：<ol><li>重构了美化插件的框架</li><li>修复了文章标题美化的bug</li><li>修复了浏览器标签显示错误的bug</li><li>修复了其他位置bug</li></ol><hr><b>V-3.6.2<b/><br>更新时间：2022年10月10日<br>更新内容：<ol><li>修复音乐播放器不能显示的bug</li><li>修复网站LOGO及底部二维码滤镜显示问题</li><li>优化网站LOGO颜色变换滤镜动画，详情见：网站LOGO滤镜——hue-rotate 色相动画</li></ol><hr><b>V-3.6.1</b><br>更新时间：2022年10月10日<br>更新内容:<ol><li>优化授权页面显示</li><li>优化授权加密</li></ol><hr><b>V-3.6.0</b><br>更新时间：2022年10月10日<br>更新内容:<ol><li>添加在线更新推送功能，使插件更加正式，以后版本即可手动更新</li><li>采用新算法加密插件核心文件，避免因sg11加密所以发的众多问题</li><li>重新优化了插件后台UI页面，并且适配了手机端，使之变得更加美观</li><li>插件内部结构优化、追求极致的网站加载速度，本次更新将大幅度提升网站加载速度</li><li>新增并优化了网站字体，将字体加载速度做到了极致</li><li>新增自定义部分美化小部件的功能</li><li>新增底部二维码滤镜和网站logo滤镜</li><li>新增网站在线播放器，播放音乐不受刷新页面或打开新页面影响</li><li>优化评论区背景图片</li><li>新增导航栏标题样式美化</li><li>新增两款复制提示弹窗</li><li>优化了背景“符号元素”所存在的问题</li><li>新增并优化了其他存在的问题</li></ol><hr><b>V-3.5.0</b><br>更新时间：2022年10月01日<br>更新内容：<ol><li>重新优化了UI框架，使之变得更加美观</li><li>新增授权处理，防止不法商低价贩卖，修改版权等恶劣行为</li><li>修复了部分美化小部件显示问题的bug</li><li>重新优化了导航栏皮肤</li><li>优化了部分美化小部件功能图片预览</li><li>新增简单的底部导航功能</li><li>新增插件广告宣传区域</li></ol><hr><b>V-3.4.0</b><br>更新时间：2022年09月08日<br>更新内容：<ol><li>重新优化了UI框架，使之变得更加美观</li><li>优化了插件配置页面各组件的显示问题</li><li>修复了部分美化小部件显示问题的bug</li><li>新增电脑端动态背景——五彩斑斓</li><li>优化了部分美化小部件功能图片预览</li><li>新增满屏枫叶飘落特效</li><li>新增禁止图片拖放</li><li>新增鼠标右键个性菜单</li><li>新增复制网站内容添加原文地址</li><li>新增底部可爱底线</li><li>新增网站随机背景音乐</li></ol><hr><b>V-3.3.2</b><br>更新时间：2022年08月24日<br>更新内容：<ol><li>重新修复了fps帧率问题</li><li>修复了首页文章使用隐藏时间功能后分类聚合卡片中文章列表不显示的bug</li><li>修复了樱花特效</li><li>修复了日间、夜间切换时不出现提示的bug</li><li>重新优化了特效js代码的存储位置</li><li>新增了粒子特效</li><li>新增两款鼠标跟随皮肤</li><li>新增左侧联系站长QQ和随机文章功能</li><li>优化了导航栏皮肤（后续版本会适配电脑和手机端）</li></ol><hr><b>V-3.2.2</b><br>更新时间：2022年08月22日<br>更新内容：<ol><li>修复并优化fps帧率</li><li>重新优化显示布局</li><li>新增五款导航栏皮肤</li><li>新增两款电脑背景，两款手机背景，两款手机侧边栏背景</li><li>新增六款鼠标皮肤</li><li>新增文章ajax加载美化</li></ol><hr><b>V-3.1.0</b><br>更新时间：2022年08月06日<br>更新内容：<ol><li>新增网站字体</li><li>LOGO扫光</li><li>网站背景</li><li>底部波浪</li><li>顶部动态标签</li><li>头像呼吸光环</li></ol><hr><b>V-2.1.0</b><br>更新时间：2022年07月26日<br>更新内容：<ol><li>网站字体切换</li><li>导航栏字体加粗</li><li>顶部彩色进度条</li><li>右侧彩色进度条</li><li>幻灯片指示器优化</li><li>禁止F12功能</li></ol><hr><b>V-1.0.0</b><br>更新时间：2022年07月10日<br>更新内容：<ol><li>插件命名为MJ美化插件</li><li>收集各种网站美化教程在插件中集合</li></ol>
                ',
            ),)
    ));
    CSF::createSection($prefix, array(
        'id'    => 'otherpro',
        'title' => '其他产品',
        'icon'  => 'fa fa-share-alt',
    ));
    
    CSF::createSection($prefix, array(
        'id'    => 'gongju',
        'title' => '猫玖工具',
        'icon'  => 'fa fa-cogs',
        'fields'      => array(
            array(
                'style'   => 'warning',
                'type'    => 'submessage',
                'content' => '<p><b>欢迎您使用子比主题美化插件——MJ美化插件！</b></p>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，致力于子比主题的美化。这款美化插件包含内容众多，一键美化，简单实用且持续更新！</li>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>插件需付费授权使用，一次购买将享受永久免费更新！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，是由猫玖鱼柒工作室开发，开发不易，版权所有，侵权必究！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>请大家购买正版插件，盗版存在未知风险且无法自动更新！</li>
                <hr>
                <li ><a style="text-decoration:none;" href="https://www.gaoding.com/">稿定设计：</a>可设计图片、视频、logo、gif、PPT、H5、海报</li>
                <li><a style="text-decoration:none; href="https://carbon.now.sh/">高亮代码生成器（Carbon）：</a>可自定义代码背景，颜色，样式，可复制image、iframe、meadium.com、plain url</li>
                <li><a style="text-decoration:none;" href="https://c.runoob.com/front-end/52/">css代码压缩：</a>压缩效率高，准确不报错</li>
                <li><a style="text-decoration:none;" href="https://c.runoob.com/front-end/51/">js代码压缩：</a>压缩效率高，准确不报错</li>
                <li><a style="text-decoration:none;" href="https://c.runoob.com/front-end/47/">html代码压缩：</a>压缩效率高，准确不报错</li>
                <li><a style="text-decoration:none;"href="https://c.runoob.com/">菜鸟工具：</a>当然，上述功能均来自于这个网站，为作者挑选的几个常用</li>
                <li><a style="text-decoration:none;" href="https://www.jq22.com/">jQuery插件库：</a>这里有丰富的前端素材，赶紧来试试吧</li>
                <li><a style="text-decoration:none;" href="https://www.w3school.com.cn/">w3school：</a>还没有熟练掌握或者不算精通前端的站长可以随时过来学习哦</li>
                <li><a style="text-decoration:none;" href="https://www.runoob.com/">程序员客栈：</a>想学编程的站长赶紧入坑啦，服务器，数据库以及网站开发教程都在这</li>
                <li><a style="text-decoration:none;" href="">阿里图标库：</a>svg、png图标可在线编辑、可下载，可做成项目引入js</li>
                <li><a style="text-decoration:none;" href="http://www.fontawesome.com.cn/">Font Awesome：</a>fa系图标网站，多数网站均兼容</li>
                <li><a style="text-decoration:none;" href="http://www.yini.org/">旖旎的秘密花园：</a>重温上世纪网站经典，万千少女的梦乡</li>
                
                
                ',
            ),)
    ));
    CSF::createSection($prefix, array(
        'id'    => 'aboutmj',
        'title' => '关于我们',
        'icon'  => 'fa fa-envelope-o',
        'fields'      => array(
            array(
                'style'   => 'warning',
                'type'    => 'submessage',
                'content' => '<p><b>欢迎您使用子比主题美化插件——MJ美化插件！</b></p>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，致力于子比主题的美化。这款美化插件包含内容众多，一键美化，简单实用且持续更新！</li>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>插件需付费授权使用，一次购买将享受永久免费更新！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，是由猫玖鱼柒工作室开发，开发不易，版权所有，侵权必究！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>请大家购买正版插件，盗版存在未知风险且无法自动更新！</li>
                <hr>
                <p><span style="color:green;">猫玖鱼柒（csxandlsy.xyz）</span>正式上线于2022年7月，是猫玖工作室旗下的产品，是一个为大家提供“社交论坛、资源共享、学术创作”的平台。我们的宗旨是：为用户提供优质资源。<br><br>
                <span style="color:green;">社交论坛：</span>我们拥有完善的论坛功能，拥有丰富多彩的板块社区，用户在这里可以创建板块、订阅板块、发布帖子、互动评论、私信作者、分享日常动态、参与最热话题的讨论等等。<br><br>
                <span style="color:green;">资源共享：</span>网站外链了大量实用优质的链接资源、上传了大量精美网页的源码资源、各种你意想不到的实用软件。<br><br>
                <span style="color:green;">学术创作：</span>网站内有海量的学术、技术教程等优质的文章。注册的用户可以发布原创文章，支持以链接、二维码、海报等多种分享方式分享给你身边的朋友。文章还可以设置阅读权限赚取积分、参与分成。<br><br>
                <span style="color:green;">网站标题：</span>“猫玖鱼柒”寓意着猫有九条命，鱼有七秒的记忆，猫有九命不忘初心，鱼有七忆始终不渝；域名“csxandlsy.xyz”拆开就是csx and lsy。标题和域名的组合象征着站长和小不点“执子之手，与子偕老”的感情。<br><br>
                <span style="color:green;">猫玖鱼柒云支付：</span>一个优秀的支付宝收款平台！税率低，套餐便宜，稳定可靠，实时到账，用户更放心！新用户更有1元体验套餐！<br><br>
                <span style="color:green;">MJ美化插件：</span>由猫玖鱼柒站长开发，致力于子比主题美化的一款插件，该插件内容众多，一键美化，且永久更新，是子比美化的不二选择！<br><span  style="float:right;">猫玖鱼柒工作室&nbsp;&nbsp;<span></p><br><br>
                ',
            ),)
    ));
    
     CSF::createSection($prefix, array(
        'parent'      => 'wenzhang',
        'title'       => '文章页面',
        'icon'        => 'fa fa-newspaper-o',
        'description' => '',
        'default'   =>true,
        'fields'      => array(
            array(
                'content' => '<p><b>欢迎您使用子比主题美化插件——MJ美化插件！</b></p>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，致力于子比主题的美化。这款美化插件包含内容众多，一键美化，简单实用且持续更新！</li>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>插件需付费授权使用，一次购买将享受永久免费更新！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，是由猫玖鱼柒工作室开发，开发不易，版权所有，侵权必究！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>请大家购买正版插件，盗版存在未知风险且无法自动更新！</li>',
                'style'   => 'warning',
                'type'    => 'submessage',
            ), 
            array(
                'title'   => '文章随机彩色标签',
                'label'   => '开启后文章的标签将会变成随机彩色',
                'id'      => 'colorfultag',
                'default' => false,
                'type'    => 'switcher',
            ),
            array(
                'title'   => '评论区背景图片',
                'label'   => '启用后，文章末尾评论区会有背景图片',
                'id'      => 'plbj',
                'default' => false,
                'type'    => 'switcher',
            ),
            array(
                'title'   => '文章阴影边缘',
                'label'   => '启用后，文章页将会添加一个淡绿色柔光边缘',
                'id'      => 'zibll_Add_ons_article_box_shadow',
                'default' => false,
                'type'    => 'switcher',
            ),
            array(
                'title'   => '文章内图片边框光效',
                'label'   => '开启后，当鼠标移向文章页面内的图片时，图片周围会有绿色柔光显示',
                'id'      => 'post_page_img_shadow',
                'default' => false,
                'type'    => 'switcher',
            ),
            array(
                'title'   => '文章标题美化',
                'label'   => '文章H2、H3标题美化，不再有下划线',
                'id'      => 'biaoti',
                'default' => false,
                'type'    => 'switcher',
            ),
      ),));
    
         CSF::createSection($prefix, array(
        'parent'      => 'wenzhang',
        'title'       => '文章列表',
        'icon'        => 'fa fa-bars',
        'description' => '',
        'default'   =>true,
        'fields'      => array(
            array(
                'content' => '<p><b>欢迎您使用子比主题美化插件——MJ美化插件！</b></p>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，致力于子比主题的美化。这款美化插件包含内容众多，一键美化，简单实用且持续更新！</li>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>插件需付费授权使用，一次购买将享受永久免费更新！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，是由猫玖鱼柒工作室开发，开发不易，版权所有，侵权必究！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>请大家购买正版插件，盗版存在未知风险且无法自动更新！</li>',
                'style'   => 'warning',
                'type'    => 'submessage',
            ), 
                array(
                'title'   => '隐藏首页文章发布时间',
                'label'   => '开启后用户将不能在首页看到文章的发布时间,文章页面还是可以看到的',
                'id'      => 'zibll_post_public_date',
                'default' => false,
                'type'    => 'switcher',
            ),
                array(
                'title'   => '首页文章列表悬停上浮',
                'label'   => '开启后给网站首页文章赋予悬停上浮特效',
                'id'      => 'posts_item',
                'default' => false,
                'type'    => 'switcher',
            ),
              array(
                'title'   => '首页文章列表水波上浮',
                'label'   => '开启后给网站首页文章赋予悬停上浮特效',
                'desc'    => '注意，水波上浮与悬停上浮只能选择一个喔~',
                'id'      => 'posts_item2',
                'default' => false,
                'type'    => 'switcher',
            ),
                array(
                'title'   => '首页文章点击更多美化',
                'label'   => '启用后，美化文章的“点击更多”按钮',
                'id'      => 'dianjigengduo',
                'default' => false,
                'type'    => 'switcher',
            ),
      ),));
      
     CSF::createSection($prefix, array(
        'parent'      => 'wenzhang',
        'title'       => '用户头像',
        'icon'        => 'fa fa-user-circle',
        'description' => '',
        'default'   =>true,
        'fields'      => array(
            array(
                'content' => '<p><b>欢迎您使用子比主题美化插件——MJ美化插件！</b></p>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，致力于子比主题的美化。这款美化插件包含内容众多，一键美化，简单实用且持续更新！</li>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>插件需付费授权使用，一次购买将享受永久免费更新！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，是由猫玖鱼柒工作室开发，开发不易，版权所有，侵权必究！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>请大家购买正版插件，盗版存在未知风险且无法自动更新！</li>',
                'style'   => 'warning',
                'type'    => 'submessage',
            ), 
              array(
                'title'   => '用户头像美化',
                'label'   => '头像彩色呼吸光环+悬停放大',
                'id'      => 'avatar',
                'default' => false,
                'type'    => 'switcher',
            ),
      ),));
      
      CSF::createSection($prefix, array(
        'parent'      => 'otherpro',
        'title'       => '支付服务',
        'icon'        => 'fa fa-gg',
        'description' => '',
        'default'   =>true,
        'fields'      => array(
            array(
                 'style'   => 'warning',
                'type'    => 'submessage',
                'content' => '<p><b>欢迎您使用子比主题美化插件——MJ美化插件！</b></p>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，致力于子比主题的美化。这款美化插件包含内容众多，一键美化，简单实用且持续更新！</li>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>插件需付费授权使用，一次购买将享受永久免费更新！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，是由猫玖鱼柒工作室开发，开发不易，版权所有，侵权必究！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>请大家购买正版插件，盗版存在未知风险且无法自动更新！</li>
                <hr>
                <img src="https://csxandlsy.xyz/wp-content/uploads/2022/08/as78.gif" style="height:200px;width:44%;">
                <img src="https://csxandlsy.xyz/wp-content/uploads/2022/11/suas821.png" style="height:200px;width:44%;float:right;margin-right:10%;"><hr>
                <h3>支付介绍</h3>
                <p>猫玖鱼柒云支付，一个优秀的支付宝收款平台！税率低，套餐便宜，稳定可靠，实时到账，用户更放心！新用户更有1元体验套餐！
                <h3>平台接入</h3>
                <p>平台地址：<a href="https://h3cfan.com" target="_blank;">猫玖鱼柒云支付</a>
                <br>接入流程：<ol><li>注册用户：<a href="https://h3cfan.com"target="_blank;">点击注册</a></li><li>用户充值：依次点击“套餐管理”，“套餐购买”，“点击充值”</li><li>购买套餐：根据需求购买套餐，<span style="color:red">注意购买套餐后仍有充足的用余额</sapn></li><li>添加通道：点击“通道管理”，“新增”，添加<span style="color:red">支付宝通道</span>，此时通道为离线状态，右滑更新，用支付宝扫码即可</li><li>参数配置：点击“接口配置”，将三个参数（网关地址，商户PID，商户秘钥）填入自己网站后台，支付类型选择<span style="color:red">易支付</span>，支付方式选择<span style="color:red">支付宝支付</span></li><li>其他配置：完成上述步骤，网站就可以网站支付功能了，如需更改其他设置，请自行研究</li></ol>
                </p>
                <h3>用户须知</h3>
                <ol><li>平台性质属于易支付，支付类型为支付宝支付，微信支付风险较大，暂不支持微信支付</li>
                <li>税率解读：<span style="color:red">平台自2022年11月10日起，所有套餐均采用零税率模式！</sapn></li>
                <li>平台推出新用户套餐：1元7天0税率，欢迎大家过来体验</li>
                <li>具体支付详情请联系猫玖鱼柒云支付客服：<a href="https://yzf.qq.com/xv/web/static/chat/index.html?sign=37ef9b9781210ac6234cc8ee4ae0b837317483df97166bf38ca9ea60487b4da0d58d9b5d4542965b00bede445468f934890e2eba
" target="_blank;">点击联系客服</a></li>
                
                </ol><br>
                ',
               
            ), 
      ),));
      
     
      
      CSF::createSection($prefix, array(
        'parent'      => 'otherpro',
        'title'       => '脱单盲盒',
        'icon'        => 'fa fa-gg',
        'description' => '',
        'default'   =>true,
        'fields'      => array(
            array(
                'style'   => 'warning',
                'type'    => 'submessage',
                'content' => '<p><b>欢迎您使用子比主题美化插件——MJ美化插件！</b></p>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，致力于子比主题的美化。这款美化插件包含内容众多，一键美化，简单实用且持续更新！</li>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>插件需付费授权使用，一次购买将享受永久免费更新！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，是由猫玖鱼柒工作室开发，开发不易，版权所有，侵权必究！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>请大家购买正版插件，盗版存在未知风险且无法自动更新！</li>
                <hr>
                <img src="https://csxandlsy.xyz/wp-content/uploads/2022/08/aa99.jpg" style="height:55%;width:55%;">
                <img src="https://csxandlsy.xyz/wp-content/uploads/2022/08/10kk.jpg" style="height:45%;width:55%;">
                <hr>
                <h3>后台介绍</h3>
                <p>网站后台共分为九大模块，分别为：留一个、取一个、订单管理、新闻管理、合作伙伴、广告管理、网站日志、网站设置、系统设置。
                <br>①留一个：可以对用户提交的留一个信息进行修改、删除、查看、筛选和添加信息；
                <br>②取一个：可以对用户抽取的信息进行查看、筛选；
                <br>③订单管理：可以对用户提交的订单信息进行查看、筛选、导出；
                <br>④新闻管理：可以发布/修改/删除网站公告、新闻等内容；
                <br>⑤合作伙伴：可以发布/修改/删除合作伙伴信息，在首页底部滚动展示；
                <br>⑥广告管理：可以管理网站内广告和banner轮播图等信息；
                <br>⑦网站日志：记录管理员操作日志和登录日志；
                <br>⑧网站设置：分为基础配置和网站配置，支持接入谷歌验证器。<br>网站配置为网站基本信息：标题、SEO信息、统计代码等，基础配置可以设置站点的所有基本信息，例如：网站公告、客服信息、虚拟数量、海报信息、轮播数量、支付相关配置，是否开启IP黑名单、是否开启幻灯片、留一个价格、抽盲盒价格、是否开启收费、是否限制先投在抽、是否限制一次等众多功能；
                <br>⑨系统设置：支持设置权限组、多管理员、IP黑名单、地址管理等信息。
                </p><hr>
                <h3>前端介绍</h3>
                <p>前端五套模板切换，后台随意切换！
                <br>演示地址1：<a href="http://1.mh.yizhanhongtu.cn/"target="_blank;">http://1.mh.yizhanhongtu.cn</a>
                <br>演示地址2：<a href="http://2.mh.yizhanhongtu.cn/"target="_blank;">http://2.mh.yizhanhongtu.cn</a>
                <br>演示地址3：<a href="http://3.mh.yizhanhongtu.cn/"target="_blank;">http://3.mh.yizhanhongtu.cn</a>
                <br>演示地址4：<a href="http://4.mh.yizhanhongtu.cn/"target="_blank;">http://4.mh.yizhanhongtu.cn</a>
                <br>演示地址5：<a href="http://5.mh.yizhanhongtu.cn/"target="_blank;">http://5.mh.yizhanhongtu.cn</a>
                <br>站长搭建案例：<a href="https://csxandlsy.work"target="_blank;">https://csxandlsy.work</a>
                </p><hr>
                <h3>域名授权</h3>
                <p>授权地址：<a href="https://yzf.qq.com/xv/web/static/chat/index.html?sign=37ef9b9781210ac6234cc8ee4ae0b837317483df97166bf38ca9ea60487b4da0d58d9b5d4542965b00bede445468f934890e2eba
" target="_blank;">点击授权</a>
                <br>授权价格：授权一个域名50元
                <br>网站代搭：搭建费用30元，不包括配置七牛云
                <br>授权查询：<a href="http://shouquan.yizhanhongtu.cn/"target="_blank;">http://shouquan.yizhanhongtu.cn</a>
                <br>源码下载：<a href="https://wwa.lanzoui.com/b055ppt3i"target="_blank;">https://wwa.lanzoui.com/b055ppt3i</a>  密码：arv2
                <br>了解详情：<a href="https://yzf.qq.com/xv/web/static/chat/index.html?sign=37ef9b9781210ac6234cc8ee4ae0b837317483df97166bf38ca9ea60487b4da0d58d9b5d4542965b00bede445468f934890e2eba
" target="_blank;">在线客服</a></p><br>
                
                
                ',
                
            ), 
      ),));
      
       CSF::createSection($prefix, array(
        'parent'      => 'otherpro',
        'title'       => 'ZibllPAY',
        'icon'        => 'fa fa-gg',
        'description' => '',
        'default'   =>true,
        'fields'      => array(
            array(
                 'style'   => 'warning',
                'type'    => 'submessage',
                'content' => '<p><b>欢迎您使用子比主题美化插件——MJ美化插件！</b></p>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，致力于子比主题的美化。这款美化插件包含内容众多，一键美化，简单实用且持续更新！</li>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>插件需付费授权使用，一次购买将享受永久免费更新！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，是由猫玖鱼柒工作室开发，开发不易，版权所有，侵权必究！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>请大家购买正版插件，盗版存在未知风险且无法自动更新！</li>
                <hr>
                
                <img src="https://csxandlsy.xyz/wp-content/uploads/2022/11/0a9sa.jpg" style="height:200px;width:46%;">
                <img src="https://csxandlsy.xyz/wp-content/uploads/2022/11/SA7S8A.png" style="height:200px;width:46%;float:right;margin-right:7%;"><hr>
                <h3>产品介绍</h3>
                <p>ZibiiPAY是一款zibll主题商品销售插件，可以为子比主题开启一个精美的商品销售页面，用户通过简单的配置就可以实现在商品销售页面完成支付的回调！
                <h3>产品购买</h3>
                <p>购买地址：<a href="https://forum.h3cfan.com/zibllpay" target="_blank;">点击购买</a>
                <p>授权地址：<a href="https://author.h3cfan.com/" target="_blank;">点击授权</a>
                <p>授权说明：<a href="https://www.kancloud.cn/maojiu/author-self/3087512" target="_blank;">点击查看</a>
                <br>
                ',
               
            ), 
      ),));
      
      CSF::createSection($prefix, array(
        'parent'      => 'otherpro',
        'title'       => 'Oreo 2.0',
        'icon'        => 'fa fa-gg',
        'description' => '',
        'default'   =>true,
        'fields'      => array(
            array(
                 'style'   => 'warning',
                'type'    => 'submessage',
                'content' => '<p><b>欢迎您使用子比主题美化插件——MJ美化插件！</b></p>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，致力于子比主题的美化。这款美化插件包含内容众多，一键美化，简单实用且持续更新！</li>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>插件需付费授权使用，一次购买将享受永久免费更新！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，是由猫玖鱼柒工作室开发，开发不易，版权所有，侵权必究！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>请大家购买正版插件，盗版存在未知风险且无法自动更新！</li>
                <hr>
                <img src="https://csxandlsy.xyz/wp-content/uploads/2022/11/oreo.png" style="height:250px;width:44%;">
                <img src="https://csxandlsy.xyz/wp-content/uploads/2022/11/oroe1.png" style="height:250px;width:44%;float:right;margin-right:10%;"><hr>
                <h3>产品介绍</h3>
                <p>Oreo新版授权系统是基于Oreo1.0.6开发，并对其进行bug修复以及性能优化的一款授权系统，正式上线于2022年11月1日，猫玖鱼柒工作室将对其进行持续维护更新，并陆续给大家带来更多功能</p>
                <h3>产品演示</h3>
                <p>系统首页：<a href="http://oreo.h3cfan.com" target="_blank;">查看演示</a>
                <p>用户页面：<a href="http://oreo.h3cfan.com/user/" target="_blank;">查看演示</a>
                <p>管理后台：<a href="http://oreo.h3cfan.com/admin" target="_blank;">查看演示</a>
                <h3>产品购买</h3>
                <p>购买地址：<a href="https://forum.h3cfan.com/oreo" target="_blank;">点击购买</a>
                <p>授权地址：<a href="https://author.h3cfan.com/" target="_blank;">点击授权</a>
                <p>授权说明：<a href="https://www.kancloud.cn/maojiu/author-self/3087512" target="_blank;">点击查看</a>
                <br>
                ',
            ), 
      ),));
      
       CSF::createSection($prefix, array(
        'parent'      => 'gongneng',
        'title'       => '弹窗提示',
        'icon'        => 'fa fa-crop',
        'description' => '',
        'default'   =>true,
        'fields'      => array(
            array(
                'content' => '<p><b>欢迎您使用子比主题美化插件——MJ美化插件！</b></p>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，致力于子比主题的美化。这款美化插件包含内容众多，一键美化，简单实用且持续更新！</li>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>插件需付费授权使用，一次购买将享受永久免费更新！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，是由猫玖鱼柒工作室开发，开发不易，版权所有，侵权必究！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>请大家购买正版插件，盗版存在未知风险且无法自动更新！</li>',
                'style'   => 'warning',
                'type'    => 'submessage',
            ), 
             array(
                'title'   => '复制成功提示框1',
                'label'   => '启用后，当用户复制内容时会有弹窗提示',
                'id'      => 'fuzhitishi1',
                'default' => false,
                'type'    => 'switcher',
            ),
              array(
                'title'   => '复制成功提示框2',
                'label'   => '启用后，当用户复制内容时会有弹窗提示',
                'id'      => 'fuzhitishi2',
                'default' => false,
                'type'    => 'switcher',
            ),
               array(
                'title'   => '复制成功提示框3',
                'label'   => '启用后，当用户复制内容时会有弹窗提示',
                'id'      => 'fuzhitishi3',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '复制成功提示框4',
                'label'   => '启用后，当用户复制内容时会有弹窗提示',
                'id'      => 'fuzhitishi4',
                'default' => false,
                'type'    => 'switcher',
            ),
            array(
                'title'   => '日间、夜间切换提示',
                'label'   => '启用后，进行日间夜间模式切换时，谁有弹窗提示',
                'id'      => 'qiehuan',
                'default' => false,
                'type'    => 'switcher',
            ),
      ),));
      CSF::createSection($prefix, array(
        'parent'      => 'gongneng',
        'title'       => '音乐模块',
        'icon'        => 'fa fa-music',
        'description' => '',
        'default'   =>true,
        'fields'      => array(
            array(
                'content' => '<p><b>欢迎您使用子比主题美化插件——MJ美化插件！</b></p>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，致力于子比主题的美化。这款美化插件包含内容众多，一键美化，简单实用且持续更新！</li>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>插件需付费授权使用，一次购买将享受永久免费更新！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，是由猫玖鱼柒工作室开发，开发不易，版权所有，侵权必究！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>请大家购买正版插件，盗版存在未知风险且无法自动更新！</li>',
                'style'   => 'warning',
                'type'    => 'submessage',
            ), 
            array(
                'title'   => '添加音乐播放器',
                'label'   => '开启后可以给网站添加一个音乐播放器',
                'id'      => 'video',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '网站播放音乐',
                'label'   => '启用后，网站会无播放器式播放10首随机音乐',
                'id'      => 'plbj2',
                'default' => false,
                'type'    => 'switcher',
            ),
             
      ),));
    
    CSF::createSection($prefix, array(
        'parent'      => 'gongneng',
        'title'       => '禁用设置',
        'icon'        => 'fa fa-ban',
        'description' => '',
        'default'   =>true,
        'fields'      => array(
            array(
                'content' => '<p><b>欢迎您使用子比主题美化插件——MJ美化插件！</b></p>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，致力于子比主题的美化。这款美化插件包含内容众多，一键美化，简单实用且持续更新！</li>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>插件需付费授权使用，一次购买将享受永久免费更新！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，是由猫玖鱼柒工作室开发，开发不易，版权所有，侵权必究！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>请大家购买正版插件，盗版存在未知风险且无法自动更新！</li>',
                'style'   => 'warning',
                'type'    => 'submessage',
            ), 
             array(
                'title'   => '禁用鼠标右键',
                'label'   => '启用后，用户将不能使用右键进行任何操作',
                'id'      => 'noyou',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '禁止图片拖放',
                'label'   => '启用后，用户将不能拖放网站中图片',
                'id'      => 'notuofang',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '禁用F12键',
                'label'   => '启用后，用户将不能使用F12键查询您的网站源码',
                'id'      => 'noft',
                'default' => false,
                'type'    => 'switcher',
            ),
            array(
                'title'   => ' ',
                'desc'   => '请输入自定义F12提示语，如：小子！别想扒站！',
                'dependency' => array('noft', '!=', ''),
                'class'    =>'compact',
                'id'      => 'nofttext',
                'default' => '坏孩子',
                'type'    => 'text',
            ),
             array(
                'title'   => '禁止内容选中',
                'label'   => '启用后，用户将不能选中网站中任意内容',
                'desc'    => '注：对用户不友好，慎选！',
                'id'      => 'nofta',
                'default' => false,
                'type'    => 'switcher',
            ),
            array(
                'title'   => '禁止Ctrl+S保存网页',
                'label'   => '启用后，用户将不能Ctrl+S保存网页内容',
                'id'      => 'noftb',
                'default' => false,
                'type'    => 'switcher',
            ),
      ),));
      
     CSF::createSection($prefix, array(
        'parent'      => 'jubu',
        'title'       => '右侧',
        'icon'        => 'fa fa-arrow-circle-right',
        'description' => '',
        'default'   =>true,
        'fields'      => array(
            array(
                'content' => '<p><b>欢迎您使用子比主题美化插件——MJ美化插件！</b></p>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，致力于子比主题的美化。这款美化插件包含内容众多，一键美化，简单实用且持续更新！</li>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>插件需付费授权使用，一次购买将享受永久免费更新！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，是由猫玖鱼柒工作室开发，开发不易，版权所有，侵权必究！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>请大家购买正版插件，盗版存在未知风险且无法自动更新！</li>',
                'style'   => 'warning',
                'type'    => 'submessage',
            ), 
              array(
                'title'   => '纵向彩色滚动条',
                'label'   => '开启后可以美化网站右侧滚动条',
                'id'      => 'colorfulscrollbar',
                'default' => false,
                'type'    => 'switcher',
            ),
              array(
                'title'   => '右侧悬浮按钮栏',
                'label'   => '右侧悬浮按钮美化——欢迎光临',
                'id'      => 'youcexuanfu1',
                'default' => false,
                'type'    => 'switcher',
            ),
      ),));
      
       CSF::createSection($prefix, array(
        'parent'      => 'jubu',
        'title'       => '底部',
        'icon'        => 'fa fa-arrow-circle-down',
        'description' => '',
        'default'   =>true,
        'fields'      => array(
            array(
                'content' => '<p><b>欢迎您使用子比主题美化插件——MJ美化插件！</b></p>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，致力于子比主题的美化。这款美化插件包含内容众多，一键美化，简单实用且持续更新！</li>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>插件需付费授权使用，一次购买将享受永久免费更新！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，是由猫玖鱼柒工作室开发，开发不易，版权所有，侵权必究！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>请大家购买正版插件，盗版存在未知风险且无法自动更新！</li>',
                'style'   => 'warning',
                'type'    => 'submessage',
            ),
            array(
                'title'   => '底部二维码滤镜一',
                'label'   => 'hue-rotate 色相旋转',
                'id'      => 'erweima1',
                'default' => false,
                'type'    => 'switcher',
            ),
            array(
                'title'   => '底部二维码滤镜二',
                'label'   => 'invert 反色',
                'id'      => 'erweima2',
                'default' => false,
                'type'    => 'switcher',
            ),
            array(
                'title'   => '底部二维码滤镜三',
                'label'   => 'drop-shadow 阴影',
                'id'      => 'erweima3',
                'default' => false,
                'type'    => 'switcher',
            ),
            array(
                'title'   => '底部收藏本站',
                'label'   => '开启后将在网站底部显示Ctrl+D收藏本站提示',
                'id'      => 'dixian',
                'default' => false,
                'type'    => 'switcher',
            ),
           array(
                'title'   => '网站底部广告',
                'label'   => '开启后可在网站底部显示广告',
                'id'      => 'advertisement',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => ' ',
                'desc'   => '请填写广告链接地址',
                'id'      => 'advertisement1',
                'default' => false,
                'type'    => 'text',
                'dependency' => array('advertisement', '!=', ''),
                'class'    =>'compact',
                
            ),
            array(
                'title'   => '网站底部波浪',
                'label'   => '开启后可以在网站底部显示一个蓝色波浪',
                'id'      => 'bolang',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '右下角蒲公英',
                'label'   => '开启后网站底部将显示动态蒲公英特效',
                'id'      => 'plbj5',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '网站运行时间',
                'label'   => '开启后可在网站底部显示彩色运行时间',
                'id'      => 'timeauthor',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => ' ',
                'desc'   => '请填写您的建站时间，如：2022-20-25',
                'id'      => 'timeauthor1',
                'default' => false,
                'type'    => 'text',
                'dependency' => array('timeauthor', '!=', ''),
                'class'    =>'compact',
                
            ),
             array(
                'title'   => '底部导航栏',
                'label'   => '开启后可自定义网站底部导航',
                'id'      => 'plbj4',
                'default' => false,
                'type'    => 'switcher',
            ),
            array(
                'title'   => '左侧文案',
                'dependency' => array('plbj4', '!=', ''),
                'desc'    => '请填写左侧文案',
                'id'      => 'bottomnav0',
                'default' => false,
                'type'    => 'text',
            ),
             array(
                'title'   => '导航一',
                'dependency' => array('plbj4', '!=', ''),
                'desc'    => '请填写导航文字',
                'id'      => 'bottomnav1',
                'default' => false,
                'type'    => 'text',
            ),
             array(
                'title'   => ' ',
                'dependency' => array('plbj4', '!=', ''),
                'desc'    => '请填写导航链接',
                'id'      => 'bottomhre1',
                'class'    =>'compact',
                'default' => false,
                'type'    => 'text',
            ),
             array(
                'title'   => '导航二',
                'dependency' => array('plbj4', '!=', ''),
                'id'      => 'bottomnav2',
                'desc'    => '请填写导航文字',
                'default' => false,
                'type'    => 'text',
            ),
             array(
                'title'   => ' ',
                'dependency' => array('plbj4', '!=', ''),
                'desc'    => '请填写导航链接',
                'class'    =>'compact',
                'id'      => 'bottomhre2',
                'default' => false,
                'type'    => 'text',
            ),
             array(
                'title'   => '导航三',
                'dependency' => array('plbj4', '!=', ''),
                'desc'    => '请填写导航文字',
                'id'      => 'bottomnav3',
                'default' => false,
                'type'    => 'text',
            ),
             array(
                'title'   => ' ',
                'dependency' => array('plbj4', '!=', ''),
                'desc'    => '请填写导航链接',
                'id'      => 'bottomhre3',
                'class'    =>'compact',
                'default' => false,
                'type'    => 'text',
            ),
             array(
                'title'   => '导航四',
                'dependency' => array('plbj4', '!=', ''),
                'desc'    => '请填写导航文字',
                'id'      => 'bottomnav4',
                'default' => false,
                'type'    => 'text',
            ),
             array(
                'title'   => ' ',
                'dependency' => array('plbj4', '!=', ''),
                'desc'    => '请填写导航链接',
                'class'    =>'compact',
                'id'      => 'bottomhre4',
                'default' => false,
                'type'    => 'text',
            ),
             array(
                'title'   => '导航五',
                'dependency' => array('plbj4', '!=', ''),
                'desc'    => '请填写导航文字',
                'id'      => 'bottomnav5',
                'default' => false,
                'type'    => 'text',
            ),
             array(
                'title'   => ' ',
                'dependency' => array('plbj4', '!=', ''),
                'desc'    => '请填写导航链接',
                'class'    =>'compact',
                'id'      => 'bottomhre5',
                'default' => false,
                'type'    => 'text',
            ),
      ),));
      
      CSF::createSection($prefix, array(
        'parent'      => 'jubu',
        'title'       => '左侧',
        'icon'        => 'fa fa-arrow-circle-left',
        'description' => '',
        'default'   =>true,
        'fields'      => array(
            array(
                'content' => '<p><b>欢迎您使用子比主题美化插件——MJ美化插件！</b></p>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，致力于子比主题的美化。这款美化插件包含内容众多，一键美化，简单实用且持续更新！</li>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>插件需付费授权使用，一次购买将享受永久免费更新！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，是由猫玖鱼柒工作室开发，开发不易，版权所有，侵权必究！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>请大家购买正版插件，盗版存在未知风险且无法自动更新！</li>',
                'style'   => 'warning',
                'type'    => 'submessage',
            ), 
             array(
                'title'   => '左边联系站长QQ',
                'label'   => '开启后，电脑左侧边栏显示"联系站长”按钮',
                'desc'    => '注意：站长需要在前端个人中心填写个人QQ，否则无法实现跳转QQ',
                'id'      => 'contact_help_qq',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '左边随便看看按钮',
                'label'   => '开启后，电脑左侧边栏显示"随便看看”按钮',
                'id'      => 'zibll_Add_ons_suibiankankan',
                'default' => false,
                'type'    => 'switcher',
            ),
      ),));
       CSF::createSection($prefix, array(
        'parent'      => 'jubu',
        'title'       => '顶部',
        'icon'        => 'fa fa-arrow-circle-up',
        'description' => '',
        'default'   =>true,
        'fields'      => array(
            array(
                'content' => '<p><b>欢迎您使用子比主题美化插件——MJ美化插件！</b></p>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，致力于子比主题的美化。这款美化插件包含内容众多，一键美化，简单实用且持续更新！</li>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>插件需付费授权使用，一次购买将享受永久免费更新！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，是由猫玖鱼柒工作室开发，开发不易，版权所有，侵权必究！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>请大家购买正版插件，盗版存在未知风险且无法自动更新！</li>',
                'style'   => 'warning',
                'type'    => 'submessage',
            ), 
              array(
                'title'   => '元旦灯笼+梅花特效',
                'label'   => '启用后，网站右上角将呈现梅花和元旦灯笼特效',
                'id'      => 'chunjie',
                'default' => false,
                'type'    => 'switcher',
            ),
              array(
                'title'   => '顶部彩色进度条',
                'label'   => '启用后，网站顶部将显示一个彩色的进度条',
                'id'      => 'zibll_Add_ons_dingbu_jindutiao',
                'default' => false,
                'type'    => 'switcher',
            ),
            array(
                'title'   => '自定义顶部切换标签',
                'label'   => '（你别走吖 ʕ ᵔᴥᵔ ʔ）（欢迎回来o( ❛ᴗ❛ o)',
                'id'      => 'dingbubiaoti',
                'default' => false,
                'type'    => 'switcher',
            ),
            array(
                'title'   => ' ',
                'desc'   => '当用户处于当前页面时的title文案)',
                'id'      => 'dingbubiaoti_mj1',
                'class'    =>'compact',
                'dependency' => array('dingbubiaoti', '!=', ''),
                'default' => '欢迎回来o( ❛ᴗ❛ ',
                'type'    => 'text',
            ),
            array(
                'title'   => ' ',
                'class'    =>'compact',
                'desc'   => '当用户离开当前页面时的title文案)',
                'id'      => 'dingbubiaoti_mj2',
                'dependency' => array('dingbubiaoti', '!=', ''),
                'default' => '你别走吖 ʕ ᵔᴥᵔ ʔ',
                'type'    => 'text',
            ),
             array(
                'title'   => '自定义顶部轮播标签',
                'id'      => 'dongtaibiaoti',
                'default' => false,
                'type'    => 'switcher',
                'label'    => '启用后，网站标签的title会显示一段轮播文字，注意，不能和“切换标签”混用',
            ),
             array(
                'title'   => ' ',
                'id'      => 'dongtaibiaoti1',
                'class'    =>'compact',
                'dependency' => array('dongtaibiaoti', '!=', ''),
                'default' => false,
                'type'    => 'text',
                'desc'    => '填写内容后，网站标签将会显示该内容的字幕，不填则不显示',
            ),
            array(
                'title'   => '幻灯片指示器优化',
                'label'   => '启用后，幻灯片指示器将会圆角显示',
                'id'      => 'swiper',
                'default' => false,
                'type'    => 'switcher',
            ),
      ),));
    
      CSF::createSection($prefix, array(
        'parent'      => 'mjall',
        'title'       => '鼠标皮肤',
        'icon'        => 'fa fa-hand-pointer-o',
        'description' => '',
        'default'   =>true,
        'fields'      => array(
            array(
                'content' => '<p><b>欢迎您使用子比主题美化插件——MJ美化插件！</b></p>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，致力于子比主题的美化。这款美化插件包含内容众多，一键美化，简单实用且持续更新！</li>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>插件需付费授权使用，一次购买将享受永久免费更新！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，是由猫玖鱼柒工作室开发，开发不易，版权所有，侵权必究！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>请大家购买正版插件，盗版存在未知风险且无法自动更新！</li>',
                'style'   => 'warning',
                'type'    => 'submessage',
            ), 
              array(
                'title'   => '点击五彩斑斓爆炸特效',
                'label'   => '点击鼠标会出现五彩斑斓的爆炸特效',
                'id'      => 'zibll_Add_ons_baozha',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '点击搞笑文字特效特效',
                'label'   => '点击鼠标会出现文字显示特效',
                'id'      => 'zibll_Add_ons_baozha1',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '点击社会主义核心价值观',
                'label'   => '点击鼠标会随机出现社会主义价值观词语，彰显爱国情操！',
                'id'      => 'zibll_Add_ons_aiguo_shehuizhuyihexinjiazhiguan',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '鼠标跟随光圈（蓝色）',
                'label'   => '启用后，将会有一个蓝色的鼠标光圈实时跟随鼠标移动',
                'id'      => 'zibll_Add_ons_mouse_cursor',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '鼠标跟随光圈（绿色）',
                'label'   => '启用后，将会有一个绿色的鼠标光圈实时跟随鼠标移动',
                'id'      => 'zibll_Add_ons_mouse_cursor2',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '鼠标跟随光圈（粉色）',
                'label'   => '启用后，将会有一个粉色的鼠标光圈实时跟随鼠标移动',
                'id'      => 'zibll_Add_ons_mouse_cursor3',
                'default' => false,
                'type'    => 'switcher',
            ),
              array(
                'title'   => '鼠标皮肤',
                'label'   => '让你的鼠标更加夺目！下列皮肤中只能选择一个，注意不要要多选哦~',
                'id'      => 'shubiao_top',
                'type'    => 'switcher',
                'default' => false,
            ),
             array(
                'title'   => ' ',
                'dependency' => array('shubiao_top', '!=', ''),
                'label'   => '【蓝色精灵】',
                'id'      => 'shubiao',
                'type'    => 'switcher',
                'default' => false,
            ),
             array(
                'title'   => ' ',
                'dependency' => array('shubiao_top', '!=', ''),
                'label'   => '【寒雨剑锋】',
                'id'      => 'shubiao2',
                'class'    =>'compact',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => ' ',
                'dependency' => array('shubiao_top', '!=', ''),
                'label'   => '【幽灵琥珀】',
                'id'      => 'shubiao3',
                'class'    =>'compact',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => ' ',
                'dependency' => array('shubiao_top', '!=', ''),
                'label'   => '【红蓝对决】',
                'id'      => 'shubiao4',
                'class'    =>'compact',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => ' ',
                'dependency' => array('shubiao_top', '!=', ''),
                'label'   => '【返璞风筝】',
                'id'      => 'shubiao5',
                'class'    =>'compact',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => ' ',
                'dependency' => array('shubiao_top', '!=', ''),
                'label'   => '【翠色猫石】',
                'id'      => 'shubiao6',
                'class'    =>'compact',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => ' ',
                'label'   => '【黑白无常】',
                'dependency' => array('shubiao_top', '!=', ''),
                'id'      => 'shubiao7',
                'class'    =>'compact',
                'default' => false,
                'type'    => 'switcher',
            ),
              array(
                'title'   => '鼠标右键菜单',
                'label'   => '启用后，将呈现一个个性化的右键菜单，请自定义菜单栏中最后一个的内容',
                'id'      => 'noft2',
                'default' => false,
                'type'    => 'switcher',
            ),
              array(
                'title'   => ' ',
                'dependency' => array('noft2', '!=', ''),
                'desc'   => '请填写鼠标右键菜单栏内容名称',
                'id'      => 'noft3',
                'class'    =>'compact',
                'default' => false,
                'type'    => 'text',
            ),
             array(
                'title'   => ' ',
                'dependency' => array('noft2', '!=', ''),
                'desc'   => '请填写鼠标右键菜单栏内容链接',
                'id'      => 'noft4',
                'class'    =>'compact',
                'default' => false,
                'type'    => 'text',
            ),
      ),));
      
      CSF::createSection($prefix, array(
        'parent'      => 'mjall',
        'title'       => '动态背景',
        'icon'        => 'fa fa-life-ring',
        'description' => '',
        'default'   =>true,
        'fields'      => array(
            array(
                'content' => '<p><b>欢迎您使用子比主题美化插件——MJ美化插件！</b></p>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，致力于子比主题的美化。这款美化插件包含内容众多，一键美化，简单实用且持续更新！</li>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>插件需付费授权使用，一次购买将享受永久免费更新！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，是由猫玖鱼柒工作室开发，开发不易，版权所有，侵权必究！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>请大家购买正版插件，盗版存在未知风险且无法自动更新！</li>',
                'style'   => 'warning',
                'type'    => 'submessage',
            ),
             array(
                'title'   => '动态背景',
                'label'   => '启动后，将会显示动态网站背景',
                'id'      => 'dongtai0',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => ' ',
                'label'   => '【五彩斑斓】',
                'dependency' => array('dongtai0', '!=', ''),
                'id'      => 'dongtai1',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => ' ',
                'label'   => '【符号元素】',
                'dependency' => array('dongtai0', '!=', ''),
                'id'      => 'dongtai3',
                'default' => false,
                'type'    => 'switcher',
            ), 
            array(
                'title'   => ' ',
                'label'   => '【粒子连线】',
                'dependency' => array('dongtai0', '!=', ''),
                'id'      => 'zibll_Add_ons_Snowfall2',
                'default' => false,
                'type'    => 'switcher',
            ),
      ),));
      
        CSF::createSection($prefix, array(
        'parent'      => 'mjall',
        'title'       => '手机背景',
        'icon'        => 'fa fa-android',
        'description' => '',
        'default'   =>true,
        'fields'      => array(
            array(
                'content' => '<p><b>欢迎您使用子比主题美化插件——MJ美化插件！</b></p>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，致力于子比主题的美化。这款美化插件包含内容众多，一键美化，简单实用且持续更新！</li>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>插件需付费授权使用，一次购买将享受永久免费更新！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，是由猫玖鱼柒工作室开发，开发不易，版权所有，侵权必究！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>请大家购买正版插件，盗版存在未知风险且无法自动更新！</li>',
                'style'   => 'warning',
                'type'    => 'submessage',
            ), 
            array(
                'title'   => '【淡蓝遐想】',
                'label'   => '一个不错的手机背景',
                'id'      => 'zibll_Add_ons_body_backgroundtu4',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '【熏衣彩云】',
                'label'   => '一个不错的手机背景',
                'id'      => 'zibll_Add_ons_body_backgroundtu5',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '【遨游题海】',
                'label'   => '一个不错的手机背景',
                'id'      => 'zibll_Add_ons_body_backgroundtu6',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '自定义手机背景',
                'label'   => '开启后可自定义手机背景',
                'id'      => 'zibll_Add_ons_body_backgroundtu66',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => ' ',
                'desc'    =>'请上传自定义手机背景图片或填写图片地址',
                'dependency' => array('zibll_Add_ons_body_backgroundtu66', '!=', ''),
                'id'      => 'zibll_Add_ons_body_backgroundtu666',
                'class'    =>'compact',
                'default' => false,
                'type'    => 'switcher',
                'preview' => true,
                'library' => 'image', 
                'type' => 'upload',
            ),
      ),));
      
      CSF::createSection($prefix, array(
        'parent'      => 'mjall',
        'title'       => '侧边背景',
        'icon'        => 'fa fa-picture-o',
        'description' => '',
        'default'   =>true,
        'fields'      => array(
            array(
                'content' => '<p><b>欢迎您使用子比主题美化插件——MJ美化插件！</b></p>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，致力于子比主题的美化。这款美化插件包含内容众多，一键美化，简单实用且持续更新！</li>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>插件需付费授权使用，一次购买将享受永久免费更新！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，是由猫玖鱼柒工作室开发，开发不易，版权所有，侵权必究！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>请大家购买正版插件，盗版存在未知风险且无法自动更新！</li>',
                'style'   => 'warning',
                'type'    => 'submessage',
            ), 
             array(
                'title'   => '【淡蓝遐想】',
                'label'   => '一个不错的侧边栏背景',
                'id'      => 'shoujicebianlan1',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '【熏衣彩云】',
                'label'   => '一个不错的侧边栏背景',
                'id'      => 'shoujicebianlan2',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '【遨游题海】',
                'label'   => '一个不错的侧边栏背景',
                'id'      => 'shoujicebianlan3',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '自定义侧边栏背景',
                'label'   => ' ',
                'id'      => 'shoujicebianlan33',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => ' ',
                'dependency' => array('shoujicebianlan33', '!=', ''),
                'id'      => 'shoujicebianlan333',
                'desc'    => '请上传自定义手机侧边栏背景图片或填写图片地址',
                'preview' => true,
                'class'    =>'compact',
                'library' => 'image', 
                'type' => 'upload',
            ),
      ),));
      
       CSF::createSection($prefix, array(
        'parent'      => 'mjall',
        'title'       => '电脑背景',
        'icon'        => 'fa fa-television',
        'description' => '',
        'fields'      => array(
            array(
                'content' => '<p><b>欢迎您使用子比主题美化插件——MJ美化插件！</b></p>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，致力于子比主题的美化。这款美化插件包含内容众多，一键美化，简单实用且持续更新！</li>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>插件需付费授权使用，一次购买将享受永久免费更新！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，是由猫玖鱼柒工作室开发，开发不易，版权所有，侵权必究！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>请大家购买正版插件，盗版存在未知风险且无法自动更新！</li>',
                'style'   => 'warning',
                'type'    => 'submessage',
            ), 
              array(
                'title'   => '【炫彩夜空】',
                'label'   => '一个不错的电脑端背景',
                'id'      => 'zibll_Add_ons_body_backgroundtu1',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '【淡蓝遐想】',
                'label'   => '一个不错的电脑端背景',
                'id'      => 'zibll_Add_ons_body_backgroundtu2',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '【遨游题海】',
                'label'   => '一个不错的电脑端背景',
                'id'      => 'zibll_Add_ons_body_backgroundtu3',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '自定义电脑端背景',
                'label'   => '开启后可自定义电脑端背景',
                'id'      => 'zibll_Add_ons_body_backgroundtu33',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'dependency' => array('zibll_Add_ons_body_backgroundtu33', '!=', ''),
                'title'   => ' ',
                'id'      => 'zibll_Add_ons_body_backgroundtu333',
                'class'    =>'compact',
                'default'  =>false,
                'preview' => true,
                'library' => 'image', 
                'type' => 'upload',
                'desc'    =>'请上传自定义电脑背景图片或填写图片地址',
            ),
      ),));
      
       CSF::createSection($prefix, array(
        'parent'      => 'mjall',
        'title'       => '飘落特效',
        'icon'        => 'fa fa-snowflake-o',
        'description' => '',
        'fields'      => array(
            array(
                'content' => '<p><b>欢迎您使用子比主题美化插件——MJ美化插件！</b></p>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，致力于子比主题的美化。这款美化插件包含内容众多，一键美化，简单实用且持续更新！</li>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>插件需付费授权使用，一次购买将享受永久免费更新！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，是由猫玖鱼柒工作室开发，开发不易，版权所有，侵权必究！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>请大家购买正版插件，盗版存在未知风险且无法自动更新！</li>',
                'style'   => 'warning',
                'type'    => 'submessage',
            ), 
             array(
                'title'   => '浪漫樱花特效',
                'label'   => '启用后，网站全局显示浪漫的樱花飘落特效',
                'id'      => 'yinghua',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '枫叶飘落特效',
                'label'   => '启用后，网站全局显示枫叶飘落特效',
                'desc'    => '注意：枫叶飘落特效不能和樱花飘落特效一起用喔~',
                'id'      => 'fengye',
                'default' => false,
                'type'    => 'switcher',
            ),
              array(
                'title'   => '雪花飘落特效',
                'label'   => '启用后，网站全局将会显示雪花飘落的特效',
                'id'      => 'zibll_Add_ons_Snowfall1',
                'default' => false,
                'type'    => 'switcher',
            ),
               array(
                'title'   => '全局灰色主题',
                'label'   => '启用后，网站全局变灰,适合国家公祭日等纪念日使用',
                'id'      => 'site_gray',
                'default' => false,
                'type'    => 'switcher',
            ),
      ),));
    
       CSF::createSection($prefix, array(
        'parent'      => 'mjall',
        'title'       => '网站字体',
        'icon'        => 'fa fa-pencil',
        'description' => '',
        'default'   =>true,
        'fields'      => array(
            array(
                'content' => '<p><b>欢迎您使用子比主题美化插件——MJ美化插件！</b></p>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，致力于子比主题的美化。这款美化插件包含内容众多，一键美化，简单实用且持续更新！</li>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>插件需付费授权使用，一次购买将享受永久免费更新！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，是由猫玖鱼柒工作室开发，开发不易，版权所有，侵权必究！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>请大家购买正版插件，盗版存在未知风险且无法自动更新！</li>',
                'style'   => 'warning',
                'type'    => 'submessage',
            ), 
             array(
                'title'   => '网站字体1',
                'label'   => '一款不错的字体',
                'id'      => 'ziti1',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '网站字体2',
                'label'   => '一款不错的字体',
                'id'      => 'ziti2',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '网站字体3',
                'label'   => '一款不错的字体',
                'id'      => 'ziti3',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '网站字体4',
                'label'   => '一款不错的字体',
                'id'      => 'ziti4',
                'default' => false,
                'type'    => 'switcher',
            ), array(
                'title'   => '网站字体5',
                'label'   => '一款不错的字体',
                'id'      => 'ziti5',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '网站字体6',
                'label'   => '一款不错的字体',
                'id'      => 'ziti6',
                'default' => false,
                'type'    => 'switcher',
            ), 
             array(
                'title'   => '自定义网站字体',
                'label'   => ' ',
                'id'      => 'ziti66',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => ' ',
                'desc'   => '请填写自定义的网站字体链接地址',
                'dependency' => array('ziti66', '!=', ''),
                'id'      => 'ziti666',
                'class'    =>'compact',
                'default' => false,
                'type'    => 'text',
            ),
      ),));
    
     CSF::createSection($prefix, array(
        'parent'      => 'mjnav',
        'title'       => 'LOGO滤镜',
        'icon'        => 'fa fa-spinner',
        'description' => '',
        'default'   =>true,
        'fields'      => array(
            array(
                'content' => '<p><b>欢迎您使用子比主题美化插件——MJ美化插件！</b></p>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，致力于子比主题的美化。这款美化插件包含内容众多，一键美化，简单实用且持续更新！</li>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>插件需付费授权使用，一次购买将享受永久免费更新！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，是由猫玖鱼柒工作室开发，开发不易，版权所有，侵权必究！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>请大家购买正版插件，盗版存在未知风险且无法自动更新！</li>',
                'style'   => 'warning',
                'type'    => 'submessage',
            ), 
             array(
                'title'   => 'logo扫光',
                'label'   => '让你的网站logo焕然一新！',
                'id'      => 'logoflash',
                'default' => false,
                'type'    => 'switcher',
            ),
              array(
                'title'   => 'hue-rotate 色相动画',
                'label'   => '网站LOGO将会进行动态色彩渐变',
                'id'      => 'logo1',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => 'invert 反色',
                'label'   => '网站LOGO的色彩将进行反色处理，可以看效果喔~',
                'id'      => 'logo2',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => 'drop-shadow 阴影',
                'label'   => '网站LOGO将会被添加一个淡绿色柔光背景',
                'id'      => 'logo3',
                'default' => false,
                'type'    => 'switcher',
            ),
      ),));

    
   CSF::createSection($prefix, array(
        'parent'      => 'mjnav',
        'title'       => '导航栏内容',
        'icon'        => 'fa fa-bar-chart',
        'description' => '',
        'default'   =>true,
        'fields'      => array(
            array(
                'content' => '<p><b>欢迎您使用子比主题美化插件——MJ美化插件！</b></p>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，致力于子比主题的美化。这款美化插件包含内容众多，一键美化，简单实用且持续更新！</li>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>插件需付费授权使用，一次购买将享受永久免费更新！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，是由猫玖鱼柒工作室开发，开发不易，版权所有，侵权必究！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>请大家购买正版插件，盗版存在未知风险且无法自动更新！</li>',
                'style'   => 'warning',
                'type'    => 'submessage',
            ), 
            array(
                'title'   => '导航字体加粗',
                'label'   => '让你的导航栏更加醒目！',
                'id'      => 'navbarb',
                'default' => false,
                'type'    => 'switcher',
            ),
            array(
                'title'   => '标题样式美化',
                'label'   => '导航栏标题将简化主题自带的标题hover效果',
                'id'      => 'navbiaoti',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '禁用搜索功能',
                'label'   => '禁用导航栏顶部的搜索功能',
                'id'      => 'nosearch',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => 'FPS帧率显示',
                'label'   => '网站LOGO左侧显示一个实时的FPS帧率',
                'id'      => 'FPS',
                'default' => false,
                'type'    => 'switcher',
            ),
       ),));
       
       CSF::createSection($prefix, array(
        'parent'      => 'mjnav',
        'title'       => '导航栏背景',
        'icon'        => 'fa fa-yelp',
        'description' => '',
        'default'   =>true,
        'fields'      => array(
            array(
                'content' => '<p><b>欢迎您使用子比主题美化插件——MJ美化插件！</b></p>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，致力于子比主题的美化。这款美化插件包含内容众多，一键美化，简单实用且持续更新！</li>
                <li><i class="fa fa-fw fa-info-circle fa-fw"></i>插件需付费授权使用，一次购买将享受永久免费更新！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>MJ美化插件，是由猫玖鱼柒工作室开发，开发不易，版权所有，侵权必究！</li>
                <li style="color:#ff2153"><i class="fa fa-fw fa-info-circle fa-fw"></i>请大家购买正版插件，盗版存在未知风险且无法自动更新！</li>',
                'style'   => 'warning',
                'type'    => 'submessage',
            ), 
           array(
                'title'   => '导航栏皮肤',
                'label'   => ' 启用后，将在顶部导航栏显示背景',
                'desc'    => '注：该项不能与自定义导航栏皮肤混用',
                'id'      => 'usernavbg0',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => ' ',
                'dependency' => array('usernavbg0', '!=', ''),
                'label'   => '【童年飞机】',
                'id'      => 'navbg1',
                'class'    =>'compact',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => ' ',
                'dependency' => array('usernavbg0', '!=', ''),
                'label'   => '【紫色薰衣】',
                'id'      => 'navbg2',
                'class'    =>'compact',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => ' ',
                'dependency' => array('usernavbg0', '!=', ''),
                'label'   => '【三生桃花】',
                'id'      => 'navbg3',
                'class'    =>'compact',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => ' ',
                'dependency' => array('usernavbg0', '!=', ''),
                'label'   => '【万里山河】',
                'id'      => 'navbg4',
                'class'    =>'compact',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => ' ',
                'dependency' => array('usernavbg0', '!=', ''),
                'label'   => '【环游动漫】',
                'id'      => 'navbg5',
                'class'    =>'compact',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => ' ',
                'dependency' => array('usernavbg0', '!=', ''),
                'label'   => '【浪漫爱心】',
                'id'      => 'navbg6',
                'class'    =>'compact',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => ' ',
                'dependency' => array('usernavbg0', '!=', ''),
                'label'   => '【蜜桔海滩】',
                'id'      => 'navbg7',
                'class'    =>'compact',
                'default' => false,
                'type'    => 'switcher',
            ),
            array(
                'title'   => '自定义导航栏皮肤',
                'label'   => '开启后可自定义导航栏皮肤',
                'id'      => 'usernavbg8',
                'type'    => 'switcher',
            ),
             array(
                'title'   => ' ',
                'desc'    =>'请上传自定义导航栏背景图片或填写图片地址，注意尺寸为：1800px*80px',
                'dependency' => array('usernavbg8', '!=', ''),
                'id'       => 'usernavbg88',
                'class'    =>'compact',
                'default' => false,
                'preview' => true,
                'library' => 'image', 
                'type'    => 'upload',
            ),
       ),));
    //结尾
} 