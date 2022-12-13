<?php
if (!defined('ABSPATH')) {
    die('-1');
}
//底部波浪
function zibll_Add_ons_footerbolang() {
    if(!is_page('user-sign')){
 
?>
<div class="wiiuii_layout">
<svg class="editorial"
     xmlns="http://www.w3.org/2000/svg"
     xmlns:xlink="http://www.w3.org/1999/xlink"
     viewBox="0 24 150 28"
     preserveAspectRatio="none">
 <defs>
 <path id="gentle-wave"
 d="M-160 44c30 0 
    58-18 88-18s
    58 18 88 18 
    58-18 88-18 
    58 18 88 18
    v44h-352z" />
  </defs>
  <g class="parallax">
   <use xlink:href="#gentle-wave" x="50" y="0" fill="#4579e2"/>
   <use xlink:href="#gentle-wave" x="50" y="3" fill="#3461c1"/>
   <use xlink:href="#gentle-wave" x="50" y="6" fill="#2d55aa"/>  
  </g>
</svg>
</div>
<style type='text/css'>
.parallax > use{animation: move-forever 12s linear infinite;}.parallax > use:nth-child(1){animation-delay: -2s;}.parallax > use:nth-child(2){animation-delay: -2s; animation-duration: 5s;}.parallax > use:nth-child(3){animation-delay: -4s; animation-duration: 3s;}@keyframes move-forever{0%{transform: translate(-90px, 0%);} 100%{transform: translate(85px, 0%);}}.wiiuii_layout{width: 100%;height: 40px;position: relative;overflow: hidden;z-index: 1;background: var(--footer-bg);}.editorial{display: block; width: 100%; height: 40px; margin: 0;}
</style>
<?php
}
}
//文章随机彩色标签
function zibll_Add_ons_hook_colorfultag_css() {
?>
<style>
    .article-tags{margin-bottom: 10px}.article-tags a{padding: 4px 10px;background-color: #19B5FE;color: white;font-size: 12px;line-height: 16px;font-weight: 400;margin: 0 5px 5px 0;border-radius: 2px;display: inline-block}.article-tags a:nth-child(5n){background-color: #4A4A4A;color: #FFF}.article-tags a:nth-child(5n+1){background-color: #ff5e5c;color: #FFF}.article-tags a:nth-child(5n+2){background-color: #ffbb50;color: #FFF}.article-tags a:nth-child(5n+3){background-color: #1ac756;color: #FFF}.article-tags a:nth-child(5n+4){background-color: #19B5FE;color: #FFF}.article-tags a:hover{background-color: #1B1B1B;color: #FFF}
</style>
<?php } 
//彩色滚动条
function zibll_Add_ons_hook_colorfulscrollbar_css() {
?>
<style>
::-webkit-scrollbar {/**大小*/
    width: 6px;  
    height: 1px;
}
::-webkit-scrollbar-thumb {/**颜色*/
    background-color: #07e6f6;
    background-image: -webkit-linear-gradient(45deg, rgb(236, 174, 6) 25%, transparent 25%, transparent 50%, rgb(10, 77, 246) 50%, rgb(241, 9, 28) 75%, transparent 75%, transparent);
}
::-webkit-scrollbar-track {/**背景*/
    background:white;
    border-radius: 20px;
}
</style>
<?php }
//logo扫光
function zibll_Add_ons_hook_logoflash_css() {
?>
<style>
.navbar-brand{
position:relative;
overflow:hidden;
margin: 0px 0 0 0px;
}
.navbar-brand:before{
content:""; 
position: absolute; 
left: -665px; 
top: -460px; 
width: 200px; 
height: 15px; 
background-color: rgba(255,255,255,.5);
-webkit-transform: rotate(-45deg);
-moz-transform: rotate(-45deg);
-ms-transform: rotate(-45deg);
-o-transform: rotate(-45deg); 
transform: rotate(-45deg);
-webkit-animation: searchLights 10s ease-in 0s infinite;
-o-animation: searchLights 6s ease-in 0s infinite;
animation: searchLights 10s ease-in 0s infinite;
}
@-moz-keyframes searchLights{50%{left: -120px; top: 0;} 65%{left: 350px; top: 0px;}}
@keyframes searchLights{40%{left: -120px; top: 0;} 60%{left: 350px; top: 0px;} 80%{left: -120px; top: 0px;}
}
</style>
<?php }
//导航栏字体加粗
function zibll_Add_ons_hook_navbarb_css() {
?>
<style>
    ul.nav {font-weight: 650;}
</style>
<?php }
//头像呼吸光环
function zibll_Add_ons_hook_avatar_css() {
?>
<style>
    .avatar{border-radius: 50%; animation: light 4s ease-in-out infinite; transition: 0.5s;}
</style>
<?php }
//头像鼠标悬停旋转放大
function zibll_Add_ons_hook_avatara_css() {
?>
<style>
    .avatar:hover{transform: scale(1.15) rotate(720deg);}@keyframes light{0%{box-shadow: 0 0 4px #f00;} 25%{box-shadow: 0 0 16px #0f0;} 50%{box-shadow: 0 0 4px #00f;} 75%{box-shadow: 0 0 16px #0f0;} 100%{box-shadow: 0 0 4px #f00;}}
</style>
<?php }
//首页文章列表悬停上浮
function zibll_Add_ons_hook_posts_item_css() {
?>
<style>
    @media screen and (min-width: 980px){.tab-content .posts-item:not(article){transition: all 0.3s;}.tab-content .posts-item:not(article):hover{transform: translateY(-10px); box-shadow: 0 8px 10px rgba(53, 231, 8, 0.35);}}
</style>
<?php }
//幻灯片指示器样式优化
function zibll_Add_ons_hook_swiper_css() {
?>
<style>
    .swiper-button-next, .swiper-button-prev{height: 70px !important;}.swiper-button-prev{border-top-right-radius: 8px;border-bottom-right-radius: 8px;}.swiper-button-next{border-top-left-radius: 8px;border-bottom-left-radius: 8px;}
</style>
<?php }
//FPS显示
function zibll_Add_ons_hook_fps_js() {
?>
<script>$('body').before('<div id="fps" style="z-index:10000;position:fixed;top:16px;left:10px;font-weight:bold;background-image:linear-gradient(-90deg, rgb(135, 57, 244),rgb(85, 97, 236), rgb(91, 126, 241));-webkit-background-clip: text;color: transparent;"></div>');
var showFPS = (function(){
var requestAnimationFrame =
window.requestAnimationFrame ||
window.webkitRequestAnimationFrame ||
window.mozRequestAnimationFrame ||
window.oRequestAnimationFrame ||
window.msRequestAnimationFrame ||
function(callback) {
window.setTimeout(callback, 1000/60);
};
var e,pe,pid,fps,last,offset,step,appendFps;

fps = 0;
last = Date.now();
step = function(){
offset = Date.now() - last;
fps += 1;
if( offset >= 1000 ){
last += offset;
appendFps(fps);
fps = 0;
}
requestAnimationFrame( step );
};
appendFps = function(fps){
console.log(fps+'FPS');
$('#fps').html(fps+'FPS');
};
step();
})();
</script>
<?php }
//文章内图片鼠标移动到图片外边框自动发光
function zibll_Add_ons_hook_post_page_img_shadow_css() {
?>
<style>
.wp-posts-content img:hover {
box-shadow:0px 0px 8px #63B8FF;
}
</style>
<?php }
//子比隐藏首页列表文章发布时间
function zibll_Add_ons_hook_zibll_post_public_date_css() {
?>
<style>
    span.icon-circle{display:none;}
</style>
<?php }
//纪念日全局灰色主题
function zibll_Add_ons_hook_site_gray_css() {
?>
<style>
html{
    -webkit-filter: grayscale(100%);
            filter: grayscale(100%);
}
</style>
<?php }
//鼠标美化
function zibll_Add_ons_hook_shubiao_css() {
?>
<style>
body{cursor:url(https://csxandlsy.xyz/wp-content/uploads/2022/07/shubiao1.png), default;}
a:hover{cursor:url(https://csxandlsy.xyz/wp-content/uploads/2022/07/shubiao2.png), pointer;}
</style>
<?php }
//鼠标美化
function zibll_Add_ons_hook_shubiao2_css() {
?>
<style>
body{cursor:url(/wp-content/plugins/zibll_Add_ons/img/arr1.png), default;}
a:hover{cursor:url(/wp-content/plugins/zibll_Add_ons/img/arr2.png), pointer;}
</style>
<?php }
//鼠标美化
function zibll_Add_ons_hook_shubiao3_css() {
?>
<style>
body{cursor:url(/wp-content/plugins/zibll_Add_ons/img/arr3.png), default;}
a:hover{cursor:url(/wp-content/plugins/zibll_Add_ons/img/arr4.png), pointer;}
</style>
<?php }
//鼠标美化
function zibll_Add_ons_hook_shubiao4_css() {
?>
<style>
    body{cursor:url(/wp-content/plugins/zibll_Add_ons/img/arr5.png), default;}
a:hover{cursor:url(/wp-content/plugins/zibll_Add_ons/img/arr6.png), pointer;}
</style>
<?php }
//鼠标美化
function zibll_Add_ons_hook_shubiao5_css() {
?>
<style>
    body{cursor:url(/wp-content/plugins/zibll_Add_ons/img/arr7.png), default;}
a:hover{cursor:url(/wp-content/plugins/zibll_Add_ons/img/arr8.png), pointer;}
</style>
<?php }
//鼠标美化
function zibll_Add_ons_hook_shubiao6_css() {
?>
<style>
    body{cursor:url(/wp-content/plugins/zibll_Add_ons/img/arr9.png), default;}
a:hover{cursor:url(/wp-content/plugins/zibll_Add_ons/img/arr10.png), pointer;}
</style>
<?php }
//鼠标美化
function zibll_Add_ons_hook_shubiao7_css() {
?>
<style>
    body{cursor:url(/wp-content/plugins/zibll_Add_ons/img/arr11.png), default;}
a:hover{cursor:url(/wp-content/plugins/zibll_Add_ons/img/arr12.png), pointer;}
</style>
<?php }
//日间、夜间模式切换提示
function zibll_Add_ons_hook_qiehuan() {
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/layui/2.6.8/layui.min.js"></script>
<?php }
//日间、夜间模式切换提示
function zibll_Add_ons_hook_qiehuan_js() {
?>
<script>
$(".toggle-theme").click(function() {
var toggleThemeText = "当前为日间模式";
if (!$("body").hasClass('dark-theme')) {
toggleThemeText = "当前为夜间模式";
}
layer.msg(toggleThemeText, {
time: 2000,
anim: 1
});
});  
</script>
<?php }
//复制提示
function zibll_Add_ons_hook_fuzhitishi() {
?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<?php }
//复制提示
function zibll_Add_ons_hook_fuzhitishi_js() {
?>
<script>
//复制提示
document.body.oncopy = function(){Swal.fire({allowOutsideClick:false,type:'success',title: '复制成功,如转载请注明出处！',showConfirmButton: false,timer: 2000});};
</script>
<?php }
//禁用搜索功能
function zibll_Add_ons_hook_nosearch_js() {
?>
<script>
$(document).ready(function(){
$("li.relative").css("display","none")
})
</script>
<?php }
//禁用右键
function zibll_Add_ons_hook_noyou_js() {
?>
<script>
document.oncontextmenu = function (event){
if(window.event){
event = window.event;
}try{
var the = event.srcElement;
if (!((the.tagName == "INPUT" && the.type.toLowerCase() == "text") || the.tagName == "TEXTAREA")){
return false;
}
return true;
}catch (e){
return false;
}
}
</script>
<?php }
//禁用图片拖放
function zibll_Add_ons_hook_notuofang_js() {
?>
<script>
document.ondragstart = function() {
    return false
};
</script>
<?php }
//禁用F12键
function zibll_Add_ons_hook_noft_js() {
?>
<script>
document.onkeydown = function(){
if(window.event && window.event.keyCode == 123) {
    alert("小子，别想扒站！");
    event.keyCode=0;
    event.returnValue=false;
}
if(window.event && window.event.keyCode == 13) {
    window.event.keyCode = 505;
}
if(window.event && window.event.keyCode == 8) {
    alert(str+"\n请使用Del键进行字符的删除操作！");
    window.event.returnValue=false;
}
}
</script>
<?php }
//鼠标右键菜单
function zibll_Add_ons_hook_noft2() {
?>
<style type="text/css">a {text-decoration: none;}div.usercm{background-repeat:no-repeat;background-position:center center;background-size:cover;background-color:#fff;font-size:13px!important;width:130px;-moz-box-shadow:1px 1px 3px rgba(0,0,0,.3);box-shadow:0px 0px 15px #333;position:absolute;display:none;z-index:10000;opacity:0.9; border-radius: 8px;}div.usercm ul{list-style-type:none;list-style-position:outside;margin:0px;padding:0px;display:block}div.usercm ul li{margin:0px;padding:0px;line-height:35px;}div.usercm ul li a{color:#666;padding:0 15px;display:block}div.usercm ul li a:hover{color:#fff;background:rgba(170,222,18,0.88)}div.usercm ul li a i{margin-right:10px}a.disabled{color:#c8c8c8!important;cursor:not-allowed}a.disabled:hover{background-color:rgba(255,11,11,0)!important}div.usercm{background:#fff !important;}</style><div class="usercm" style="left: 199px; top: 5px; display: none;"><ul><li><a href="/"><i class="fa fa-home fa-fw"></i><span>首页</span></a></li><li><a href="javascript:void(0);" onclick="getSelect();"><i class="fa fa-copy fa-fw"></i><span>复制</span></a></li><li><a href="javascript:history.go(1);"><i class="fa fa-arrow-right fa-fw"></i><span>前进</span></a></li><li><a href="javascript:history.go(-1);"><i class="fa fa-arrow-left fa-fw"></i><span>后退</span></a></li><li style="border-bottom:1px solid gray"><a href="javascript:window.location.reload();"><i class="fa fa-refresh fa-fw"></i><span>刷新</span></a></li><li><a href="javascript:void(0);"  onclick="baiduSearch();"><i class="fa fa-paw fa-fw"></i><span>百度</span></a></li><li><a href="javascript:void(0);" onclick="googleSearch();"><i class="fa fa-google fa-fw"></i><span>谷歌</span></a></li><li style="border-bottom:1px solid gray"><a target="_blank" href="https://csxandlsy.xyz/"><i class="fa fa-refresh fa-fw"></i><span>猫玖</span></a></li></ul></div><script type="text/javascript">(function(a) {a.extend({mouseMoveShow: function(b) {var d = 0,c = 0,h = 0,k = 0,e = 0,f = 0;a(window).mousemove(function(g) {d = a(window).width();c = a(window).height();h = g.clientX;k = g.clientY;e = g.pageX;f = g.pageY;h + a(b).width() >= d && (e = e - a(b).width() - 5);k + a(b).height() >= c && (f = f - a(b).height() - 5);a("html").on({contextmenu: function(c) {3 == c.which && a(b).css({left: e,top: f}).show()},click: function() {a(b).hide()}})})},disabledContextMenu: function() {window.oncontextmenu = function() {return !1}}})})(jQuery);function getSelect() {"" == (window.getSelection ? window.getSelection() : document.selection.createRange().text) ? layer.msg("请选择需要百度的内容！") : document.execCommand("Copy")}function baiduSearch() {var a = window.getSelection ? window.getSelection() : document.selection.createRange().text;"" == a ? layer.msg("请选择需要百度的内容！") : window.open("https://www.baidu.com/s?wd=" + a)}function googleSearch() {var a = window.getSelection ? window.getSelection() : document.selection.createRange().text;"" == a ? layer.msg("请选择需要谷歌的内容！") : window.open("https://www.google.com/search?q=" + a)}$(function() {for (var a = navigator.userAgent, b = "Android;iPhone;SymbianOS;Windows Phone;iPad;iPod".split(";"), d = !0, c = 0; c < b.length; c++) if (0 < a.indexOf(b[c])) {d = !1;break}d && ($.mouseMoveShow(".usercm"), $.disabledContextMenu())});</script>
<?php }
//复制有地址
function zibll_Add_ons_hook_noft1_js() {
?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/layui/2.6.8/layui.min.js"></script><script type="text/javascript">$(document).on("copy", function(e) {var selected = window.getSelection();var selectedText = selected.toString().replace(/\n/g, "<br>");var copyFooter ="<br>-----------------------<br>著作权归作者所有。<br>" +"商业转载请联系作者获得授权，非商业转载请注明出处。<br>" +"作者：<?php bloginfo('name'); ?><br> 源地址：" +document.location.href +"<br>来源：<?php bloginfo('name'); ?><br>© 版权声明：本文为博主原创文章，转载请务必保留原文链接！";if (document.location.pathname === "/") {var copyFooter ="<br>-----------------------<br>" +"来源：<?php bloginfo('name'); ?><br> 源地址：" +document.location.href +"<br>© 版权声明：商业转载请联系作者获得授权，非商业转载请注明出处。<br>";}var msgContent ='<span style="font-weight: 700;margin: 0 !important;">【<?php bloginfo('name'); ?>】<br>复制成功，若要转载请务必保留原文链接</span>' + copyFooter;layer.msg(msgContent, {time: 2000,shift: 2,shade: 0.3,skin: "wiiuii-layer-mode"});var copyHolder = $("<div>", {id: "temp",html: selectedText + copyFooter,style: {position: "absolute",left: "-99999px"}});$("body").append(copyHolder);selected.selectAllChildren(copyHolder[0]);window.setTimeout(function() {copyHolder.remove();}, 0);});</script>
<?php }
//元旦灯笼+梅花
function zibll_Add_ons_hook_chunjie() {
?>
<div class="meiha"></div>
<style>
.meiha {
        position: fixed;
        top: 0;
        right: 0;
        z-index: 999;
        width: 350px;
        height: 231px;
        pointer-events: none;
        background: url('https://csxandlsy.xyz/wp-content/uploads/2022/08/1kBpid.png');
}
</style>
<div class="deng-box">
        <div class="deng">
                <div class="xian"></div>
                <div class="deng-a">
                        <div class="deng-b"><div class="deng-t">旦</div></div>
                </div>
                <div class="shui shui-a"><div class="shui-c"></div><div class="shui-b"></div></div>
        </div>
</div>
<div class="deng-box1">
        <div class="deng">
                <div class="xian"></div>
                <div class="deng-a">
                        <div class="deng-b"><div class="deng-t">元</div></div>
                </div>
                <div class="shui shui-a"><div class="shui-c"></div><div class="shui-b"></div></div>
        </div>
</div>
<style>
.deng-box {
        position: fixed;
        top: -40px;
        right: -20px;
        z-index: 9999;
        pointer-events: none;
}
 
.deng-box1 {
        position: fixed;
        top: -30px;
        right: 10px;
        z-index: 9999;
        pointer-events: none;
}
.deng-box1 .deng {
        position: relative;
        width: 120px;
        height: 90px;
        margin: 50px;
        background: #d8000f;
        background: rgba(216, 0, 15, 0.8);
        border-radius: 50% 50%;
        -webkit-transform-origin: 50% -100px;
        -webkit-animation: swing 5s infinite ease-in-out;
        box-shadow: -5px 5px 30px 4px rgba(252, 144, 61, 1);
}
.deng {
        position: relative;
        width: 120px;
        height: 90px;
        margin: 50px;
        background: #d8000f;
        background: rgba(216, 0, 15, 0.8);
        border-radius: 50% 50%;
        -webkit-transform-origin: 50% -100px;
        -webkit-animation: swing 3s infinite ease-in-out;
        box-shadow: -5px 5px 50px 4px rgba(250, 108, 0, 1);
}
.deng-a {
        width: 100px;
        height: 90px;
        background: #d8000f;
        background: rgba(216, 0, 15, 0.1);
        margin: 12px 8px 8px 10px;
        border-radius: 50% 50%;
        border: 2px solid #dc8f03;
}
.deng-b {
        width: 45px;
        height: 90px;
        background: #d8000f;
        background: rgba(216, 0, 15, 0.1);
        margin: -2px 8px 8px 26px;
        border-radius: 50% 50%;
        border: 2px solid #dc8f03;
}
.xian {
        position: absolute;
        top: -20px;
        left: 60px;
        width: 2px;
        height: 20px;
        background: #dc8f03;
}
.shui-a {
        position: relative;
        width: 5px;
        height: 20px;
        margin: -5px 0 0 59px;
        -webkit-animation: swing 4s infinite ease-in-out;
        -webkit-transform-origin: 50% -45px;
        background: #ffa500;
        border-radius: 0 0 5px 5px;
}
.shui-b {
        position: absolute;
        top: 14px;
        left: -2px;
        width: 10px;
        height: 10px;
        background: #dc8f03;
        border-radius: 50%;
}
.shui-c {
        position: absolute;
        top: 18px;
        left: -2px;
        width: 10px;
        height: 35px;
        background: #ffa500;
        border-radius: 0 0 0 5px;
}
.deng:before {
        position: absolute;
        top: -7px;
        left: 29px;
        height: 12px;
        width: 60px;
        content: " ";
        display: block;
        z-index: 999;
        border-radius: 5px 5px 0 0;
        border: solid 1px #dc8f03;
        background: #ffa500;
        background: linear-gradient(to right, #dc8f03, #ffa500, #dc8f03, #ffa500, #dc8f03);
}
.deng:after {
        position: absolute;
        bottom: -7px;
        left: 10px;
        height: 12px;
        width: 60px;
        content: " ";
        display: block;
        margin-left: 20px;
        border-radius: 0 0 5px 5px;
        border: solid 1px #dc8f03;
        background: #ffa500;
        background: linear-gradient(to right, #dc8f03, #ffa500, #dc8f03, #ffa500, #dc8f03);
}
.deng-t {
        font-family: 华文行楷,Arial,Lucida Grande,Tahoma,sans-serif;
        font-size: 3.2rem;
        color: #dc8f03;
        font-weight: bold;
        line-height: 85px;
        text-align: center;
}
.night .deng-t, 
.night .deng-box, 
.night .deng-box1 {
        background: transparent !important;
}
@-moz-keyframes swing {
        0% {
                -moz-transform: rotate(-10deg)
        }
        50% {
                -moz-transform: rotate(10deg)
        }
 
        100% {
                -moz-transform: rotate(-10deg)
        }
}
@-webkit-keyframes swing {
        0% {
                -webkit-transform: rotate(-10deg)
        }
        50% {
                -webkit-transform: rotate(10deg)
        }
        100% {
                -webkit-transform: rotate(-10deg)
        }
}
</style>
<?php }
//全局樱花特效
function zibll_Add_ons_hook_yinghua() {
?>
<script src="https://csxandlsy.xyz/wp-content/uploads/resource/js/yinghua.js"></script>
<?php }
//全局枫叶特效
function zibll_Add_ons_hook_yinghua1() {
?>
<script>var stop,staticx;var img=new Image();img.src="/wp-content/plugins/zibll_Add_ons/img/fengye.webp";function Sakura(x,y,s,r,fn){this.x=x;this.y=y;this.s=s;this.r=r;this.fn=fn}Sakura.prototype.draw=function(cxt){cxt.save();var xc=20*this.s/2;cxt.translate(this.x,this.y);cxt.rotate(this.r);cxt.drawImage(img,0,0,20*this.s,20*this.s);cxt.restore()};Sakura.prototype.update=function(){this.x=this.fn.x(this.x,this.y);this.y=this.fn.y(this.y,this.y);this.r=this.fn.r(this.r);if(this.x>window.innerWidth||this.x<0||this.y>window.innerHeight||this.y<0){this.r=getRandom("fnr");if(Math.random()>0.4){this.x=getRandom("x");this.y=0;this.s=getRandom("s");this.r=getRandom("r")}else{this.x=window.innerWidth;this.y=getRandom("y");this.s=getRandom("s");this.r=getRandom("r")}}};SakuraList=function(){this.list=[]};SakuraList.prototype.push=function(sakura){this.list.push(sakura)};SakuraList.prototype.update=function(){for(var i=0,len=this.list.length;i<len;i++){this.list[i].update()}};SakuraList.prototype.draw=function(cxt){for(var i=0,len=this.list.length;i<len;i++){this.list[i].draw(cxt)}};SakuraList.prototype.get=function(i){return this.list[i]};SakuraList.prototype.size=function(){return this.list.length};function getRandom(option){var ret,random;switch(option){case"x":ret=Math.random()*window.innerWidth;break;case"y":ret=Math.random()*window.innerHeight;break;case"s":ret=Math.random();break;case"r":ret=Math.random()*4;break;case"fnx":random=-0.5+Math.random()*1;ret=function(x,y){return x+0.5*random-1.7};break;case"fny":random=1.5+Math.random()*0.7;ret=function(x,y){return y+random};break;case"fnr":random=Math.random()*0.03;ret=function(r){return r+random};break}return ret}function startSakura(){requestAnimationFrame=window.requestAnimationFrame||window.mozRequestAnimationFrame||window.webkitRequestAnimationFrame||window.msRequestAnimationFrame||window.oRequestAnimationFrame;var canvas=document.createElement("canvas"),cxt;staticx=true;canvas.height=window.innerHeight;canvas.width=window.innerWidth;canvas.setAttribute("style","position: fixed;left: 0;top: 0;pointer-events: none;");canvas.setAttribute("id","canvas_sakura");document.getElementsByTagName("body")[0].appendChild(canvas);cxt=canvas.getContext("2d");var sakuraList=new SakuraList();for(var i=0;i<50;i++){var sakura,randomX,randomY,randomS,randomR,randomFnx,randomFny;randomX=getRandom("x");randomY=getRandom("y");randomR=getRandom("r");randomS=getRandom("s");randomFnx=getRandom("fnx");randomFny=getRandom("fny");randomFnR=getRandom("fnr");sakura=new Sakura(randomX,randomY,randomS,randomR,{x:randomFnx,y:randomFny,r:randomFnR});sakura.draw(cxt);sakuraList.push(sakura)}stop=requestAnimationFrame(function(){cxt.clearRect(0,0,canvas.width,canvas.height);sakuraList.update();sakuraList.draw(cxt);stop=requestAnimationFrame(arguments.callee)})}window.onresize=function(){var canvasSnow=document.getElementById("canvas_snow")};img.onload=function(){startSakura()};function stopp(){if(staticx){var child=document.getElementById("canvas_sakura");child.parentNode.removeChild(child);window.cancelAnimationFrame(stop);staticx=false}else{startSakura()}};</script><?php }
//顶部进度条
function zibll_Add_ons_dingbu_jindutiao(){
    ?>
<style>
#percentageCounter{position:fixed; left:0; top:0; height:3px; z-index:99999; background-image: linear-gradient(to right, #339933,#FF6666);border-radius:5px;}
</style>
<div id="percentageCounter"></div>
<script>//进度条加载显示
$(window).scroll(function() {
    var a = $(window).scrollTop(),
    c = $(document).height(),
    b = $(window).height();
    scrollPercent = a / (c - b) * 100;
    scrollPercent = scrollPercent.toFixed(1);
    $("#percentageCounter").css({
        width: scrollPercent + "%"
    });
}).trigger("scroll");
</script>
<?php
}
//首页文章列表悬停上浮2
function zibll_Add_ons_hook_posts_item2_css() {
if(is_home()){
?>
<style>
.tab-content .posts-item:not(article):hover{opacity: 1;z-index: 99;border-radius: 20px;transform: translateY(-5px);box-shadow: 0 3px 20px rgba(0, 0, 0, .25);animation: index-link-active 1s cubic-bezier(0.315, 0.605, 0.375, 0.925) forwards;}@keyframes index-link-active {0%{transform: perspective(2000px) rotateX(0) rotateY(0) translateZ(0);}16%{transform:perspective(2000px) rotateX(10deg) rotateY(5deg) translateZ(32px);}100%{transform: perspective(2000px) rotateX(0) rotateY(0) translateZ(65px);}}
</style>
<?php
}
}
//文章阴影
function zibll_Add_ons_article_box_shadow(){
if(is_single ()){
    ?>
    <style>
    .article{border-radius:var(--main-radius);box-shadow: 1px 1px 3px 3px rgba(53, 231, 8, 0.35);-moz-box-shadow: 1px 1px 3px 3px rgba(53, 231, 8, 0.35);}.article:hover{box-shadow: 1px 1px 5px 5px rgba(53, 231, 8, 0.35); -moz-box-shadow: 1px 1px 5px 5px rgba(53, 231, 8, 0.35);}
    </style>
    <?php
}
}
//字体1
function zibll_Add_ons_hook_zitia_css() {
?>
<style>
@media screen and (min-width: 1000px){
html,body{
font-family:"楷体";
}
}
</style>
<?php }
//字体2
function zibll_Add_ons_hook_zitib_css() {
?>
<style>
@media screen and (min-width: 1000px){
html,body{
font-family:"华文新魏";
}
}
</style>
<?php }
//字体3
function zibll_Add_ons_hook_zitic_css() {
?>
<style>
@font-face{font-family: 'zti';src:  url('/wp-content/plugins/zibll_Add_ons/zt/mj1.ttf');}body{font-family:'zti';}
</style>
<?php }
//字体4
function zibll_Add_ons_hook_zitid_css() {
?>
<style>
@font-face{font-family: 'zti';src:  url('/wp-content/plugins/zibll_Add_ons/zt/mj2.ttf');}body{font-family:'zti';}
</style>
<?php }
//字体5
function zibll_Add_ons_hook_zitie_css() {
?>
<style>
@font-face{font-family: 'zti';src:  url('/wp-content/plugins/zibll_Add_ons/zt/mj3.ttf');}body{font-family:'zti';}
</style>
<?php }
//字体6
function zibll_Add_ons_hook_zitif_css() {
?>
<style>
@font-face{font-family: 'zti';src:  url('/wp-content/plugins/zibll_Add_ons/zt/mj4.ttf');}body{font-family:'zti';}
</style>
<?php }
//点击爆炸
function zibll_Add_ons_baozha() {
?>
    <canvas class="baozha" style="position:fixed;left:0;top:0;z-index:99999999;pointer-events:none;"></canvas>
    <script src="https://csxandlsy.xyz/wp-content/uploads/resource/js/baozha.js"></script>
<?php
}
//社会主义核心价值观
function zibll_Add_ons_aiguo_shehuizhuyihexinjiazhiguan(){
?>
<script type="text/javascript">
var a_idx = 0;
jQuery(document).ready(function($) {
$("body").click(function(e) {
var a = new Array("富强", "民主", "文明", "和谐", "自由", "平等", "公正" ,"法治", "爱国", "敬业", "诚信", "友善");
var b = new Array("red","blue","yellow","green","pink","blue","orange");
var $i = $("<span/>").text(a[a_idx]);
a_idx = (a_idx + 1) % a.length;
b_idx = (a_idx+1)%7;/* 七中颜色变色 */
var x = e.pageX,
y = e.pageY;
$i.css({
"z-index": 9999,
"top": y - 20,
"left": x,
"position": "absolute",
"font-weight": "bold",
"color": b[b_idx]
});
$("body").append($i);
$i.animate({
"top": y - 180,
"opacity": 0
},
1500,
function() {
$i.remove();
});
});
});
</script>
<?php
}
//鼠标跟随1
function zibll_Add_ons_mouse_cursor() { 
?>
<div class="mouse-cursor cursor-outer"></div>
<div class="mouse-cursor cursor-inner"></div>
<script src="https://csxandlsy.xyz/wp-content/uploads/resource/js/shubiao.js"></script>
<style>
.mouse-cursor {
    position: fixed;
    left: 0;
    top: 0;
    pointer-events: none;
    border-radius: 50%;
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    visibility: hidden;
} 
.cursor-inner {
    margin-left: -3px;
    margin-top: -3px;
    width: 6px;
    height: 6px;
    z-index: 10000001;
    background: #123eed;
    -webkit-transition: width .3s ease-in-out,height .3s ease-in-out,margin .3s ease-in-out,opacity .3s ease-in-out;
    transition: width .3s ease-in-out,height .3s ease-in-out,margin .3s ease-in-out,opacity .3s ease-in-out;
}
.cursor-inner.cursor-hover {
    margin-left: -18px;
    margin-top: -18px;
    width: 36px;
    height: 36px;
    background: #123eed;
    opacity: .3;
}  
.cursor-outer {
    margin-left: -15px;
    margin-top: -15px;
    width: 30px;
    height: 30px;
    border: 2px solid #123eed;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    z-index: 10000000;
    opacity: .5;
    -webkit-transition: all .08s ease-out;
    transition: all .08s ease-out;
} 
.cursor-outer.cursor-hover {
    opacity: 0;
}   
.main-wrapper[data-magic-cursor=hide] .mouse-cursor {
    display: none;
    opacity: 0;
    visibility: hidden;
    position: absolute;
    z-index: -1111;
}
</style>
<?php }
//鼠标跟随2
function zibll_Add_ons_mouse_cursor2() { 
?>
<div class="mouse-cursor cursor-outer"></div>
<div class="mouse-cursor cursor-inner"></div>
<script src="https://csxandlsy.xyz/wp-content/uploads/resource/js/shubiao.js"></script>
<style>
.mouse-cursor {
    position: fixed;
    left: 0;
    top: 0;
    pointer-events: none;
    border-radius: 50%;
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    visibility: hidden;
} 
.cursor-inner {
    margin-left: -3px;
    margin-top: -3px;
    width: 6px;
    height: 6px;
    z-index: 10000001;
    background: green;
    -webkit-transition: width .3s ease-in-out,height .3s ease-in-out,margin .3s ease-in-out,opacity .3s ease-in-out;
    transition: width .3s ease-in-out,height .3s ease-in-out,margin .3s ease-in-out,opacity .3s ease-in-out;
}
.cursor-inner.cursor-hover {
    margin-left: -18px;
    margin-top: -18px;
    width: 36px;
    height: 36px;
    background: green;
    opacity: .3;
}  
.cursor-outer {
    margin-left: -15px;
    margin-top: -15px;
    width: 30px;
    height: 30px;
    border: 2px solid green;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    z-index: 10000000;
    opacity: .5;
    -webkit-transition: all .08s ease-out;
    transition: all .08s ease-out;
} 
.cursor-outer.cursor-hover {
    opacity: 0;
}   
.main-wrapper[data-magic-cursor=hide] .mouse-cursor {
    display: none;
    opacity: 0;
    visibility: hidden;
    position: absolute;
    z-index: -1111;
}
</style>
<?php }
//鼠标跟随3
function zibll_Add_ons_mouse_cursor3() { 
?>
<div class="mouse-cursor cursor-outer"></div>
<div class="mouse-cursor cursor-inner"></div>
<script src="https://csxandlsy.xyz/wp-content/uploads/resource/js/shubiao.js"></script>
<style>
.mouse-cursor {
    position: fixed;
    left: 0;
    top: 0;
    pointer-events: none;
    border-radius: 50%;
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    visibility: hidden;
} 
.cursor-inner {
    margin-left: -3px;
    margin-top: -3px;
    width: 6px;
    height: 6px;
    z-index: 10000001;
    background: hotpink;
    -webkit-transition: width .3s ease-in-out,height .3s ease-in-out,margin .3s ease-in-out,opacity .3s ease-in-out;
    transition: width .3s ease-in-out,height .3s ease-in-out,margin .3s ease-in-out,opacity .3s ease-in-out;
}
.cursor-inner.cursor-hover {
    margin-left: -18px;
    margin-top: -18px;
    width: 36px;
    height: 36px;
    background: hotpink;
    opacity: .3;
}  
.cursor-outer {
    margin-left: -15px;
    margin-top: -15px;
    width: 30px;
    height: 30px;
    border: 2px solid hotpink;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    z-index: 10000000;
    opacity: .5;
    -webkit-transition: all .08s ease-out;
    transition: all .08s ease-out;
} 
.cursor-outer.cursor-hover {
    opacity: 0;
}   
.main-wrapper[data-magic-cursor=hide] .mouse-cursor {
    display: none;
    opacity: 0;
    visibility: hidden;
    position: absolute;
    z-index: -1111;
}
</style>
<?php }
//网站背景pc1
function zibll_Add_ons_body_backgroundtu1(){
?>
<style>
@media screen and (min-width: 1000px){
body {background: var(--body-bg-color);} :root{--body-bg-color:url(/wp-content/plugins/zibll_Add_ons/img/pc.jpg) top fixed;}}
</style>
<?php
}
//网站背景pc2
function zibll_Add_ons_body_backgroundtu2(){
?>
<style>
@media screen and (min-width: 1000px){
body {background: var(--body-bg-color);} :root{--body-bg-color:url(/wp-content/plugins/zibll_Add_ons/img/pc2.jpg) top fixed;}}
</style>
<?php
}
//网站背景pc3
function zibll_Add_ons_body_backgroundtu3(){
?>
<style>
@media screen and (min-width: 1000px){
body {background: var(--body-bg-color);} :root{--body-bg-color:url(/wp-content/plugins/zibll_Add_ons/img/pc1.png) top fixed;}}
</style>
<?php
}
//网站背景mp1
function zibll_Add_ons_body_backgroundtu4(){
?>
<style>
@media screen and (max-width: 1000px){
body {background: var(--body-bg-color);} :root{--body-bg-color:url(/wp-content/plugins/zibll_Add_ons/img/mp.jpg) top fixed;}}
</style>
<?php
}
//网站背景mp2
function zibll_Add_ons_body_backgroundtu5(){
?>
<style>
@media screen and (max-width: 1000px){
body {background: var(--body-bg-color);} :root{--body-bg-color:url(/wp-content/plugins/zibll_Add_ons/img/ce.jpg) top fixed;}}
</style>
<?php
}
//网站背景mp3
function zibll_Add_ons_body_backgroundtu6(){
?>
<style>
@media screen and (max-width: 1000px){
body {background: var(--body-bg-color);} :root{--body-bg-color:url(/wp-content/plugins/zibll_Add_ons/img/mp1.png) top fixed;}}
</style>
<?php
}
//下雪特效35
function zibll_Add_ons_Snowfall1(){
?>
<script src="https://csxandlsy.xyz/wp-content/uploads/resource/js/xuehua.js"></script>
<?php
}
//右侧悬浮36
function zibll_Add_ons_hook_youcexuanfu_css(){
?>
<style>
span.float-btn.more-btn.hover-show.nowave {
    margin-top: 0px;
}
.float-right.round.position-bottom {
    background: #fff;
    border-radius: var(--main-radius);
    transition: 0s;
    right: 1px;
    bottom: 170px;
    border-radius: 20px 0 0 20px;
    box-shadow: -5px 3px 10px 0px rgb(5 5 5 / 15%);
}
.float-right.round .float-btn {
    border-radius: 8px 0px 0px 17px;
}
.float-right .float-btn {
    background: #fff;
}
.float-right.round.position-bottom::before {
    content: '';
    width: 40px;
    height: 40px;
    background: url("/wp-content/plugins/zibll_Add_ons/img/aa.gif");
    background-size: cover;
    display: block;
    margin: 5px 7px 0 2px;
}
.dark-theme .float-right.round.position-bottom {
    background: #414141;
    border: 1px solid #4a4a4a;
    transition: 0s;
}
.dark-theme .float-right .float-btn {
    background: #414141;
}
.dark-theme .float-right.round.position-bottom a:hover {
    background: #505255;
    --this-color: var(--muted-2-color);
}
.dark-theme .float-right.round.position-bottom span:hover {
    background: #505255;
    --this-color: var(--muted-2-color);
}
span.newadd-btns.hover-show.float-btn.add-btn .hover-show-con.dropdown-menu.drop-newadd>a:hover {
    background-color: #d8d8d836;
    border-radius: 8px;
}
a.float-btn.ontop.fade {
    display: none;
}</style>
<?php
}
//右侧悬浮36
function zibll_Add_ons_hook_youcexuanfu1_css(){
?>
<style>
span.float-btn.more-btn.hover-show.nowave {
    margin-top: 0px;
}
.float-right.round.position-bottom {
    background: #fff;
    border-radius: var(--main-radius);
    transition: 0s;
    right: 1px;
    bottom: 170px;
    border-radius: 20px 0 0 20px;
    box-shadow: -5px 3px 10px 0px rgb(5 5 5 / 15%);
}
.float-right.round .float-btn {
    border-radius: 8px 0px 0px 17px;
}

.float-right .float-btn {
    background: #fff;
}
.float-right.round.position-bottom::before {
    content: '';
    width: 40px;
    height: 40px;
    background: url("/wp-content/plugins/zibll_Add_ons/img/aa1.gif");
    background-size: cover;
    display: block;
    margin: 5px 7px 0 2px;
}
.dark-theme .float-right.round.position-bottom {
    background: #414141;
    border: 1px solid #4a4a4a;
    transition: 0s;
}
.dark-theme .float-right .float-btn {
    background: #414141
}
.dark-theme .float-right.round.position-bottom a:hover {
    background: #505255;
    --this-color: var(--muted-2-color);
}
.dark-theme .float-right.round.position-bottom span:hover {
    background: #505255;
    --this-color: var(--muted-2-color);
}
span.newadd-btns.hover-show.float-btn.add-btn .hover-show-con.dropdown-menu.drop-newadd>a:hover {
    background-color: #d8d8d836;
    border-radius: 8px;
}
a.float-btn.ontop.fade {
    display: none
}</style>
<?php
}
//顶部你别走呀
function zibll_Add_ons_hook_biaoti_js(){
?>
<script>
var OriginTitile = document.title,
titleTime;
document.addEventListener("visibilitychange",
function() {
    if (document.hidden) {
        document.title = "你别走吖 ʕ ᵔᴥᵔ ʔ";
        clearTimeout(titleTime)
    } else {
        document.title = "欢迎回来o( ❛ᴗ❛ )o" ;
        titleTime = setTimeout(function() {
            document.title = OriginTitile
        },
        2000)
    }
});
</script>
<?php
}
//手机侧边栏1
function zibll_Add_ons_hook_shoujicebianlan1_css() {
?>
<style>
@media (max-width: 767px){
.mobile-navbar.show,.mobile-navbar.left{
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    cursor: pointer;
  background-image:linear-gradient(rgba(255, 255,255,0),rgba(255,255,255, 0.3)),url("/wp-content/plugins/zibll_Add_ons/img/mp.jpg");}
  .mobile-nav-widget .box-body {
    background: var(--muted-border-color) !important;}
}
</style>
<?php }
//手机侧边栏2
function zibll_Add_ons_hook_shoujicebianlan2_css() {
?>
<style>
@media (max-width: 767px){
.mobile-navbar.show,.mobile-navbar.left{
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    cursor: pointer;
    background-image:linear-gradient(rgba(255, 255,255,0),rgba(255,255,255, 0.3)),url("/wp-content/plugins/zibll_Add_ons/img/ce.jpg");}
    .mobile-nav-widget .box-body {
    background: var(--muted-border-color) !important;}
}
</style>
<?php }
//手机侧边栏3
function zibll_Add_ons_hook_shoujicebianlan3_css() {
?>
<style>
@media (max-width: 767px){
.mobile-navbar.show,.mobile-navbar.left{
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    cursor: pointer;
    background-image:linear-gradient(rgba(255, 255,255,0),rgba(255,255,255, 0.3)),url("/wp-content/plugins/zibll_Add_ons/img/mp1.png");}
    .mobile-nav-widget .box-body {
    background: var(--muted-border-color) !important;}
}
</style>
<?php }
//评论背景39
function zibll_Add_ons_hook_plbj_css(){
?>
<style>
 textarea#comment {background-color:transparent;background:linear-gradient(rgba(0, 0, 0, 0.05), rgba(0, 0, 0, 0.05)),url("/wp-content/plugins/zibll_Add_ons/img/plbj.png") right 10px bottom 10px no-repeat;-moz-transition:ease-in-out 0.45s;-webkit-transition:ease-in-out 0.45s;-o-transition:ease-in-out 0.45s;-ms-transition:ease-in-out 0.45s;transition:ease-in-out 0.45s;}textarea#comment:focus {background-position-y:789px;-moz-transition:ease-in-out 0.45s;-webkit-transition:ease-in-out 0.45s;-o-transition:ease-in-out 0.45s;-ms-transition:ease-in-out 0.45s;transition:ease-in-out 0.45s;}';
</style>
<?php
}
//可爱底线
function zibll_Add_ons_hook_plbj1(){
?>
<div class="app_normal window" style="padding-top:" data-reactroot=""><div class="common_container lastpagenotice_noticewrap"><img src="/wp-content/plugins/zibll_Add_ons/img/dixian.gif" style="height:60px;width:60px;" data-spm-anchor-id="a2ha1.14919748_WEBHOME_GRAY.0.i1"><div class="lastpagenotice_text"  style="color:#6699FF;font-weight:bold;">已经到底了哦~</div><div class="lastpagenotice_line"></div></div></div>
<style>
.lastpagenotice_noticewrap{color:hsla(0, 2.1%, 18.8%, 0.6);}
.lastpagenotice_noticewrap img{height:73px; width:88px; margin:0 auto}
.lastpagenotice_noticewrap .lastpagenotice_text{display:block; position:absolute; font-size:15px; line-height:20px; top:50%; -webkit-transform:translateY(-50%); -ms-transform:translateY(-50%); transform:translateY(-50%); left:-webkit-calc(50% + 60px); left:calc(50% + 60px)}
.lastpagenotice_noticewrap .lastpagenotice_line{width:100%; height:1px; background-color:hsla(0,0%,100%,.05); position:absolute; bottom:0}.app_normal{text-align:center; position:relative}';
</style>
<?php
}
//音乐
function zibll_Add_ons_hook_plbj2(){
?>
<!--10随机背景音乐开始-->
<div id="backgroundmusic"></div>
    <script>
    var m1="https://csxandlsy.xyz/wp-content/uploads/resource/music/1.mp3";
    var m2="https://csxandlsy.xyz/wp-content/uploads/resource/music/2.mp3";
    var m3="https://csxandlsy.xyz/wp-content/uploads/resource/music/3.mp3";
    var m4="https://csxandlsy.xyz/wp-content/uploads/resource/music/4.mp3";
    var m5="https://csxandlsy.xyz/wp-content/uploads/resource/music/5.mp3";
    var m6="https://csxandlsy.xyz/wp-content/uploads/resource/music/6.mp3";
    var m7="https://csxandlsy.xyz/wp-content/uploads/resource/music/7.mp3";
    var m8="https://csxandlsy.xyz/wp-content/uploads/resource/music/8.mp3";
    var m9="https://csxandlsy.xyz/wp-content/uploads/resource/music/9.mp3";
    var m10="https://csxandlsy.xyz/wp-content/uploads/resource/music/10.mp3";
    var x=Math.round(Math.random()*9);
    console.log(x);
    if (x==0) x=m1
    else if (x==1) x=m2
    else if (x==2) x=m3
    else if (x==3) x=m4
    else if (x==4) x=m5
    else if (x==5) x=m6
    else if (x==6) x=m7
    else if (x==7) x=m8
    else if (x==8) x=m9
    else  x=m10
    var obj = document.getElementById("backgroundmusic");
    obj.innerHTML='<audio src='+'"'+x+'"'+''+'height="0"'+'autoplay="true"'+'loop="true"'+'>'+'</audio>';
    </script>
    <!--10随机背景音乐结束 -->
<?php
}
//评论背景40
function zibll_Add_ons_hook_dianjigengduo_css(){
?>
<style>
   .theme-pagination .ajax-next a, .theme-pagination .order-ajax-next a{border-radius: 30px; padding: 15px 0; color: var(--muted-color); background-color:var(--main-bg-color);color: #FF0033;display: block;opacity: 1;font-weight:bold;}
</style>
<?php
}
//导航栏背景1
function zibll_Add_ons_hook_navbg1_css(){
?>
<style>
@media screen and (min-width: 1000px){.header-layout-1{position:relative;background-image:url("/wp-content/plugins/zibll_Add_ons/img/kjg.png");background-position:center right;background-size:auto 100%;}}</style>
<?php
}
//导航栏背景2
function zibll_Add_ons_hook_navbg2_css(){
?>
<style>
@media screen and (min-width: 1000px){.header-layout-1{position:relative;background-image:url("/wp-content/plugins/zibll_Add_ons/img/zsf.png");background-position:center right;background-size:auto 100%;}}</style>
<?php
}
//导航栏背景3
function zibll_Add_ons_hook_navbg3_css(){
?>
<style>
@media screen and (min-width: 1000px){.header-layout-1{position:relative;background-image:url("/wp-content/plugins/zibll_Add_ons/img/gfth.png");background-position:center right;background-size:auto 100%;}}</style>
<?php
}
//导航栏背景4
function zibll_Add_ons_hook_navbg4_css(){
?>
<style>
@media screen and (min-width: 1000px){.header-layout-1{position:relative;background-image:url("/wp-content/plugins/zibll_Add_ons/img/wlsh.png");background-position:center right;background-size:auto 100%;}}</style>
<?php
}
//导航栏背景5
function zibll_Add_ons_hook_navbg5_css(){
?>
<style>
@media screen and (min-width: 1000px){.header-layout-1{position:relative;background-image:url("/wp-content/plugins/zibll_Add_ons/img/dmss.png");background-position:center right;background-size:auto 100%;}}</style>
<?php
}
//左边联系站长QQ
function zibll_Add_ons_hook_contact_help_qq_div_css() {
    $contact_help_qq = get_user_meta(1,"qq")[0];
    if($contact_help_qq){
?>
<style>
.contact-help-qq{
    position: fixed;
    z-index: 99999;
    left: 0;
    top: calc(30% - 30px);
    margin-top: -36px;
    width: 28px;
    height: 85px;
    transition: all .3s;
    font-size: 12px;
    background: var(--main-bg-color);
    border-radius: 0 5px 5px 0; padding: 8px 7px;
    line-height: 14px;
    }
@media screen and (max-width: 768px){
    .contact-help-qq{display:none;}
}
</style>
<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $contact_help_qq;?>&site=qq&menu=yes"target="_blank" class="contact-help-qq" style="font-weight:700;">联系站长<svg t="1661264106455" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="6951" width="200" height="200"><path d="M350.5 823.3s-113.4 26.7-78.2 74.6c22.7 30.8 148 33.7 199.6 5.7 13.6-7.4 38.5-25.2 38.5-67.2s-159.9-13.1-159.9-13.1zM670.4 823.3s113.4 26.7 78.2 74.6c-22.7 30.8-148 33.7-199.6 5.7-13.6-7.4-38.5-25.2-38.5-67.2s159.9-13.1 159.9-13.1z" fill="#FFB94D" p-id="6952"></path><path d="M268.5 446.9s-119.3 160.7-86.2 281.7c0 0 20.7 107.7 86.2-54.7 0 0 24 174.8 239.4 194.7 0 0 200.5-8.3 241.1-194.7 0 0 59.7 157.4 81.2 54.7 0 0 40.6-121.8-84.5-281.7 0 0 24-340.5-237.8-351.3 0.1 0.1-236.9-20.7-239.4 351.3z" p-id="6953"></path><path d="M489.9 256.6c0 40.4-22.1 78.7-49.3 78.7-27.3 0-49.3-38.4-49.3-78.7s22.1-67.4 49.3-67.4c27.3 0 49.3 27 49.3 67.4z" fill="#FFFFFF" p-id="6954"></path><path d="M422.3 271.5c0 12.9 10.5 23.4 23.4 23.4s23.4-10.5 23.4-23.4-10.5-23.4-23.4-23.4-23.4 10.5-23.4 23.4z" p-id="6955"></path><path d="M530.9 256.6c0 40.4 22.1 78.7 49.3 78.7 27.3 0 49.3-38.4 49.3-78.7s-22.1-67.4-49.3-67.4c-27.2 0-49.3 27-49.3 67.4z" fill="#FFFFFF" p-id="6956"></path><path d="M575.2 256.7c11.4 0 21 8.2 22.9 19.1 0.2-1.3 0.4-2.8 0.4-4.2 0-12.9-10.4-23.4-23.4-23.4-12.9 0-23.4 10.4-23.4 23.4 0 1.4 0.1 2.9 0.4 4.2 2.1-10.9 11.7-19.1 23.1-19.1z" p-id="6957"></path><path d="M400.3 351.5s55.5-16.9 110-15.8c0 0 102.5-0.2 143.6 31.3 0 0 22.7 13.1 0 28.9 0 0-60 50.6-143.5 56.5 0 0-37.7 3.1-95.6-26.6 0 0-34.7-16.1-51.4-33.1 0-0.1-30.5-21.3 36.9-41.2z" fill="#FFB94D" p-id="6958"></path><path d="M300.4 490.7s156.7-31.2 416.9 0v166.9s-2.1 80.8-66.6 144.9c0 0-43.5 58.7-141.7 59.9 0 0-71.9 6.3-138.7-57.2 0 0-60.5-50.3-69-148.4l-0.9-166.1z" fill="#FFFFFF" p-id="6959"></path><path d="M348.8 524.5l4 230.2 80.8 32V498.5z" fill="#0071BC" p-id="6960"></path><path d="M410.04 636.407l9.562-11.166 2.734 2.342-9.56 11.166zM414.772 643.948l6.829-7.975 2.734 2.341-6.829 7.976z" fill="#F5D8A3" p-id="6961"></path><path d="M402.646 633.156l2.342-2.735 8.583 7.35-2.341 2.734zM417.424 628.043l2.434-2.652 8.325 7.641-2.435 2.652zM408.505 626.893l7.35-8.583 2.734 2.341-7.35 8.584z" fill="#F5D8A3" p-id="6962"></path><path d="M407.43 627.402l2.433-2.654 12.24 11.215-2.433 2.654z" fill="#F5D8A3" p-id="6963"></path><path d="M414.9 576.6L393 553.2l1 12.5-6.8-7 0.9 11.2 9.6 10.5 1 12.5-2.3 2.7-21.8-22.2-9.1 12 1 12.5 9.1-12 5.5 5.8s1.4 2.4 0.4 5l-13.6 18.6 1 12.5 5.8-6.7s1.2-1.3 2.6 1.1l6.9 8.2 1.4 18.7-6.8 9.3s-1.2 1.3-2.5 0.2l-5.5-5.8 1 12.5 16.4 17.5 0.4 5-4.6 5.4s-1.2 1.3-2.5 0.2l-8.3-9.4 0.9 11.2 9.5 9.3s1.3 1.2 2.5-0.2l16.9-25.1s1.2-1.3 2.5-0.2l1.3 1.2s1.3 1.2 0.2 2.5l-17 23.9 0.6 7.5 31.5-46.4s1.1-2.6-0.3-3.7l-16.3-16.3-2.5-32.4 12.5-17.3s1.2-1.3 2.6 1.1l8.3 9.4-0.8-10-8.2-8.2s-4.1-4.7-0.6-7.5l8.3 9.4-0.7-8.7-9.6-10.5 0.1 3.6z" fill="#C1272D" p-id="6964"></path><path d="M364.52 734.405l10.464-10.465 10.466 10.465-10.466 10.465z" fill="#FFFFFF" p-id="6965"></path><path d="M403.524 719.411l10.465-10.465 10.465 10.465-10.465 10.465z" fill="#C1272D" p-id="6966"></path><path d="M257.5 450.5s208.2 56.3 512.4 0l32 84.4s-288.2 70.3-576.4 0l32-84.4z" fill="#0071BC" p-id="6967"></path><path d="M322.93 480.482l2.945-2.07 8.456 12.024-2.944 2.07zM333.718 481.12l2.944-2.07 6.041 8.589-2.945 2.07z" fill="#F5D8A3" p-id="6968"></path><path d="M324.323 495.905l9.243-6.5 2.071 2.944-9.243 6.501zM323.138 480.274l9.462-6.178 1.968 3.015-9.461 6.177zM315.288 482.453l2.945-2.071 6.5 9.243-2.944 2.071z" fill="#F5D8A3" p-id="6969"></path><path d="M320.076 489.846l13.893-9.087 1.97 3.013-13.892 9.086z" fill="#F5D8A3" p-id="6970"></path><path d="M274.6 472.9l-28.1 15.4 12.3 2.1-8.5 4.9 11.1 1.9 12.6-6.7 12.3 2.1 2 2.9-26.8 15.6 9.4 11.8 12.3 2.1-9.4-11.8 7-3.9s2.7-0.8 4.9 0.9l14.7 17.8 12.3 2.1-5.1-7.2s-1-1.4 1.7-2.3l9.7-4.7 18.5 3.2 7.3 8.9s1 1.4-0.4 2.5l-7 3.9 12.3 2.1 21.1-11.6 4.9 0.9 4.1 5.8s1 1.4-0.4 2.5l-11.1 5.7 11.1 1.9 11.4-6.9s1.4-1 0.4-2.5L371 510s-1-1.4 0.4-2.5l1.4-1s1.4-1 2.5 0.4l19 22.3 7.4 1.3-37.1-42s-2.3-1.7-3.7-0.6L341 499.7l-32-5.6-13.7-16.3s-1-1.4 1.7-2.3l11.1-5.7-9.9-1.7-9.9 5.9s-5.6 2.8-7.4-1.3L292 467l-8.6-1.5-12.6 6.7 3.8 0.7z" fill="#C1272D" p-id="6971"></path><path d="M509.54 505.766l9.449-11.26 2.758 2.314-9.45 11.26zM501.286 502.3l6.749-8.043 2.758 2.314-6.75 8.043z" fill="#C1272D" p-id="6972"></path><path d="M507.982 507.507l2.314-2.758 8.656 7.264-2.315 2.758zM510.447 492.3l2.217-2.836 8.903 6.961-2.218 2.836zM519.076 505.675l7.263-8.655 2.758 2.314-7.264 8.656z" fill="#C1272D" p-id="6973"></path><path d="M508.416 498.788l2.22-2.834 13.07 10.235-2.22 2.835z" fill="#C1272D" p-id="6974"></path><path d="M570.4 493.4l26.7 17.8-12.5 1.1 8 5.6-11.2 1-12-7.7-12.5 1.1-2.3 2.7 25.4 17.9-10.3 11-12.5 1.1 10.3-11-6.7-4.4s-2.6-1-5 0.4l-16.1 16.5-12.5 1.1 5.7-6.8s1.1-1.4-1.5-2.4l-9.3-5.5-18.7 1.6-8.1 8.2s-1.1 1.4 0.2 2.5l6.7 4.4-12.5 1.1-20-13.3-5 0.4-4.5 5.4s-1.1 1.4 0.2 2.5l10.6 6.6-11.2 1-10.7-7.9s-1.4-1.1-0.2-2.5l22-20.8s1.1-1.4-0.2-2.5l-1.4-1.1s-1.4-1.1-2.5 0.2L446 539.4l-7.5 0.7 40.6-38.7s2.4-1.5 3.7-0.3l18.8 13.4 32.4-2.8 15-15.1s1.1-1.4-1.5-2.4l-10.6-6.6 10-0.9 9.4 6.7s5.3 3.3 7.5-0.7l-10.6-6.6 8.7-0.8 12 7.7-3.5 0.4z" fill="#FFB94D" p-id="6975"></path><path d="M420.838 501.934l10.465-10.465 10.465 10.465-10.465 10.465z" fill="#C1272D" p-id="6976"></path><path d="M400.302 543.293l10.466-10.465 10.465 10.465-10.465 10.465z" fill="#FFFFFF" p-id="6977"></path><path d="M607.33 543.476l10.465-10.465 10.465 10.465-10.465 10.465z" fill="#C1272D" p-id="6978"></path><path d="M591.323 495.413l10.465-10.465 10.465 10.465-10.465 10.465z" fill="#FFFFFF" p-id="6979"></path><path d="M699.93 484.503l2.229-2.828 11.546 9.097-2.227 2.827zM710.626 481.995l2.228-2.827 8.248 6.497-2.228 2.828z" fill="#F5D8A3" p-id="6980"></path><path d="M705.843 498.92l6.993-8.876 2.827 2.227-6.992 8.877zM700.215 484.218l7.294-8.63 2.749 2.324-7.294 8.63zM693.197 488.551l2.228-2.827 8.876 6.992-2.228 2.828z" fill="#F5D8A3" p-id="6981"></path><path d="M699.998 494.288l10.705-12.688 2.751 2.322-10.705 12.687z" fill="#F5D8A3" p-id="6982"></path><path d="M651.6 491.1L629.1 514l12.4-1.5-6.7 7.1 11.2-1.3 10.1-10 12.4-1.5 2.8 2.2-21.2 22.7 12.4 8.6 12.4-1.5-12.4-8.6 5.6-5.7s2.3-1.5 5-0.6l19.2 12.8 12.4-1.5-6.9-5.5s-1.4-1.1 0.9-2.6l8-7.2 18.6-2.2 9.6 6.4s1.4 1.1 0.3 2.5l-5.6 5.7 12.4-1.5 16.9-17.1 5-0.6 5.6 4.4s1.4 1.1 0.3 2.5l-9.1 8.6 11.2-1.3 8.9-9.9s1.1-1.4-0.3-2.5l-25.8-15.8s-1.4-1.1-0.3-2.5l1.1-1.4s1.1-1.4 2.5-0.3l24.6 16 7.5-0.9-47.6-29.6s-2.6-0.9-3.7 0.4l-15.6 17-32.3 3.8-17.8-11.7s-1.4-1.1 0.9-2.6l9.1-8.6-9.9 1.2-7.8 8.5s-4.5 4.3-7.5 0.9l9.1-8.6-8.7 1-10.1 10 3.4-0.6z" fill="#C1272D" p-id="6983"></path></svg></a>
<?php }
}
// 随便看看
function random_postlite() {
global $wpdb;
$query = "SELECT ID FROM $wpdb->posts WHERE post_type = 'post' AND post_password = '' AND post_status = 'publish' ORDER BY RAND() LIMIT 1";
$random_id = $wpdb->get_var( $query );
wp_redirect( get_permalink( $random_id ) );
exit;
}    
//随便看看前台显示
function zibll_Add_ons_suibiankankan() {
?>
<style>
.suibianknakan{
    position: fixed;
    z-index: 999999;
    left: 0;
    top: calc(30% + 75px);
    margin-top: -36px;
    width: 28px;
    height: 70px;
    transition: all .3s;
    font-size: 12px;
    background: var(--main-bg-color);
    border-radius: 0 5px 5px 0; padding: 8px 7px;
    line-height: 14px;
    }
@media screen and (max-width: 768px){
    .suibianknakan{display:none;}
}
</style>
<a href="/?random" target="_blank" class="suibianknakan" style="font-weight:700;">随便看看</a>
<?php
}
//粒子
function zibll_Add_ons_Snowfall2_js() {
?>
<script>
    !function () {
    function n(n, e, t) {
        return n.getAttribute(e) || t
    }
 
    function e(n) {
        return document.getElementsByTagName(n)
    }
 
    function t() {
        var t = e("script"), o = t.length, i = t[o - 1];
        return {l: o, z: n(i, "zIndex", -1), o: n(i, "opacity", .5), c: n(i, "color", "0,0,0"), n: n(i, "count", 99)}
    }
 
    function o() {
        a = m.width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth, c = m.height = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight
    }
 
    function i() {
        r.clearRect(0, 0, a, c);
        var n, e, t, o, m, l;
        s.forEach(function (i, x) {
            for (i.x += i.xa, i.y += i.ya, i.xa *= i.x > a || i.x < 0 ? -1 : 1, i.ya *= i.y > c || i.y < 0 ? -1 : 1, r.fillRect(i.x - .5, i.y - .5, 1, 1), e = x + 1; e < u.length; e++) n = u[e], null !== n.x && null !== n.y && (o = i.x - n.x, m = i.y - n.y, l = o * o + m * m, l < n.max && (n === y && l >= n.max / 2 && (i.x -= .03 * o, i.y -= .03 * m), t = (n.max - l) / n.max, r.beginPath(), r.lineWidth = t / 2, r.strokeStyle = "rgba(" + d.c + "," + (t + .2) + ")", r.moveTo(i.x, i.y), r.lineTo(n.x, n.y), r.stroke()))
        }), x(i)
    }
 
    var a, c, u, m = document.createElement("canvas"), d = t(), l = "c_n" + d.l, r = m.getContext("2d"),
        x = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || function (n) {
            window.setTimeout(n, 1e3 / 45)
        }, w = Math.random, y = {x: null, y: null, max: 2e4};
    m.id = l, m.style.cssText = "position:fixed;top:0;left:0;z-index:" + d.z + ";opacity:" + d.o, e("body")[0].appendChild(m), o(), window.onresize = o, window.onmousemove = function (n) {
        n = n || window.event, y.x = n.clientX, y.y = n.clientY
    }, window.onmouseout = function () {
        y.x = null, y.y = null
    };
    for (var s = [], f = 0; d.n > f; f++) {
        var h = w() * a, g = w() * c, v = 2 * w() - 1, p = 2 * w() - 1;
        s.push({x: h, y: g, xa: v, ya: p, max: 6e3})
    }
    u = s.concat([y]), setTimeout(function () {
        i()
    }, 100)
}();
</script>
<?php
}
//动态特效
function zibll_Add_ons_hook_dongtai1(){
?>
<div id="bubble"><canvas width="1494" height="815" style="display: block; position: fixed; top: 0px; left: 0px; z-index: -2;"></canvas></div><script>class BGBubble{constructor(i){this.defaultOpts={id:"",num:30,start_probability:.1,radius_min:1,radius_max:2,radius_add_min:.3,radius_add_max:.5,opacity_min:.3,opacity_max:.5,opacity_prev_min:.003,opacity_prev_max:.005,light_min:40,light_max:70,is_same_color:!1,background:"#f1f3f4"},"[object Object]"==Object.prototype.toString.call(i)?this.userOpts={...this.defaultOpts,...i}:this.userOpts={...this.defaultOpts,id:i},this.color=this.random(0,360),this.bubbleNum=[],this.requestAnimationFrame=window.requestAnimationFrame||window.mozRequestAnimationFrame||window.webkitRequestAnimationFrame||window.msRequestAnimationFrame,this.cancelAnimationFrame=window.cancelAnimationFrame||window.mozCancelAnimationFrame}random(i,t){return Math.random()*(t-i)+i}initBubble(i,t){const a=window.innerWidth,s=window.innerHeight,n=this.userOpts,e=this.random(n.light_min,n.light_max);this.bubble={x:this.random(0,a),y:this.random(0,s),radius:this.random(n.radius_min,n.radius_max),radiusChange:this.random(n.radius_add_min,n.radius_add_max),opacity:this.random(n.opacity_min,n.opacity_max),opacityChange:this.random(n.opacity_prev_min,n.opacity_prev_max),light:e,color:`hsl(${t?i:this.random(0,360)},100%,${e}%)`}}bubbling(i,t,a){!this.bubble&&this.initBubble(t,a);const s=this.bubble;i.fillStyle=s.color,i.globalAlpha=s.opacity,i.beginPath(),i.arc(s.x,s.y,s.radius,0,2*Math.PI,!0),i.closePath(),i.fill(),i.globalAlpha=1,s.opacity-=s.opacityChange,s.radius+=s.radiusChange,s.opacity<=0&&this.initBubble(t,a)}createCanvas(){this.canvas=document.createElement("canvas"),this.ctx=this.canvas.getContext("2d"),this.canvas.style.display="block",this.canvas.width=window.innerWidth,this.canvas.height=window.innerHeight,this.canvas.style.position="fixed",this.canvas.style.top="0",this.canvas.style.left="0",this.canvas.style.zIndex="-1",document.getElementById(this.userOpts.id).appendChild(this.canvas),window.onresize=(()=>{this.canvas.width=window.innerWidth,this.canvas.height=window.innerHeight})}start(){const i=window.innerWidth,t=window.innerHeight;this.color+=.1,this.ctx.fillStyle=this.defaultOpts.background,this.ctx.fillRect(0,0,i,t),this.bubbleNum.length<this.userOpts.num&&Math.random()<this.userOpts.start_probability&&this.bubbleNum.push(new BGBubble),this.bubbleNum.forEach(i=>i.bubbling(this.ctx,this.color,this.userOpts.is_same_color));const a=this.requestAnimationFrame;this.myReq=a(()=>this.start())}destory(){(0,this.cancelAnimationFrame)(this.myReq),window.onresize=null}}const bubbleDemo=new BGBubble("bubble");bubbleDemo.createCanvas(),bubbleDemo.start();</script>
<style>@media screen and (max-width: 1000px){#bubble{display:none;}}</style>
<?php
}
