<?php
/**
 * 
 * 克米出品 必属精品
 * 克米设计工作室 版权所有 http://www.Comiis.com
 * 专业论坛首页及风格制作, 页面设计美化, 数据搬家/升级, 程序二次开发, 网站效果图设计, 页面标准DIV+CSS生成, 各类大中小型企业网站设计...
 * 我们致力于为企业提供优质网站建设、网站推广、网站优化、程序开发、域名注册、虚拟主机等服务，
 * 一流设计和解决方案为企业量身打造适合自己需求的网站运营平台，最大限度地使企业在信息时代稳握无限商机。
 *
 *   电话: 0668-8810200
 *   手机: 13450110120  15813025137
 *    Q Q: 21400445  8821775  11012081  327460889
 * E-mail: ceo@comiis.com
 *
 * 工作时间: 周一到周五早上09:00-11:30, 下午03:00-05:30, 晚上09:00-11:00(周六、日休息)
 * 克米设计用户交流群: ①群83667771 ②群83667772 ③群83667773 ④群110900020 ⑤群110900021 ⑥群70068388 ⑦群110899987
 * 
 */
if(!defined('IN_DISCUZ')) {exit('Access Denied');}

$comiis_window_width = 1;   //设置页面宽度模式，0为1000宽，1为1200宽，2为按屏幕宽度自动设置;

$comiis_header = 1; //头部样式设置,  0为使用默认头部样式，1为使用克米设计头部样式;

$comiis_header_fx = 1; //主导航滚动设置,  0为不滚动，1为滚动;

$comiis_navss = 2; //头部论坛导航右侧搜索设置,  0为关闭，1显示在默认导航右侧，2在右侧列表显示，3使用默认样式;

$comiis_wz_fl = 1;   //门户文章页和列表页栏目分类设置,  0为关闭，1为显示;

$comiis_forum_right = 1; //论坛首页右边边栏设置, 0为关闭, 1为开启;

$comiis_list_xpic = 1; // 帖子列表页版块图标设置, 0为关闭，1为显示;

$comiis_list_zlb = 2; //帖子列表页克米设计边栏设置, 0为关闭(使用论坛默认), 1为开启在左边, 2为开启在右边;

$comiis_list_image = 1; //帖子列表页瀑布流样式是否隐藏边栏, 0为显示, 1为隐藏;

$_G['blockedpids'] = 0; //帖子内容页【还有一些帖子被系统自动隐藏】功能开关,  0为关闭, 1为开启;

$comiis_view_zlb = 2; //帖子内容页克米设计边栏设置, 0为关闭, 1为开启在左边, 2为开启在右边;

$comiis_view_tit_avt = 1; //帖子内容页楼主头像设置, 0为关闭, 1为开启在左边, 2为开启在右边;

$comiis_view_tit_tx = 1; //帖子内容页楼层头像设置, 0为关闭, 1为显示;

$comiis_view_tit_lz = 0; //帖子内容页是否显示楼主图标, 0为关闭, 1为显示;

$comiis_view_tit_zuico = 0; //帖子内容页楼层用户组图标设置, 0为关闭, 1为显示;

$comiis_view_fxd = 1;   //帖子内容页分享到内容设置, 0为关闭, 1为显示;

/*** 注意：以上设置关闭再开启后，有可能会造成被关闭内容的DIY数据丢失，需要重新导入设置，请慎重使用！***/
?>
