<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:72:"C:\phpStudy\PHPTutorial\WWW\bhlv/application/admin\view\index\index.html";i:1532076710;s:74:"C:\phpStudy\PHPTutorial\WWW\bhlv\application\admin\view\common\header.html";i:1532076588;s:76:"C:\phpStudy\PHPTutorial\WWW\bhlv\application\admin\view\common\leftside.html";i:1532315796;s:72:"C:\phpStudy\PHPTutorial\WWW\bhlv\application\admin\view\common\foot.html";i:1532076520;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/tp5_proj/public/admin/css/base.css" />
<link rel="stylesheet" type="text/css" href="/tp5_proj/public/admin/css/jquery.dialog.css" />
<link rel="stylesheet" href="/tp5_proj/public/admin/css/index.css" />
<link rel="stylesheet" href="/tp5_proj/public/admin/css/home.css" />
<title>移动办公自动化系统</title>
</head>

<body>
<div id="container">
    <!--头部导航部分-->
    <div id="hd">
    <div class="hd-wrap ue-clear">
        <div class="top-light"></div>
        <h1 class="logo"></h1>
        <div class="login-info ue-clear">
            <div class="welcome ue-clear"><span>欢迎您,</span><a href="javascript:;" class="user-name">Admin</a></div>
            <div class="login-msg ue-clear">
                <a href="javascript:;" class="msg-txt">消息</a>
                <a href="javascript:;" class="msg-num">10</a>
            </div>
        </div>
        <div class="toolbar ue-clear">
            <a href="javascript:;" class="home-btn">首页</a>
            <a href="javascript:;" class="quit-btn exit"></a>
        </div>
    </div>
</div>
    <!--/头部导航部分-->
    <div id="bd">
    	<div class="wrap ue-clear">
            <!--左边菜单部分-->
            <div class="sidebar">
    <h2 class="sidebar-header"><p>功能导航</p></h2>
    <ul class="nav">
        <li class="office"><div class="nav-header"><a href="<?php echo url('index/index'); ?>"class="ue-clear"><span>首页</span><i class="icon"></i></a></div></li>
        <li class="gongwen"><div class="nav-header"><a href="<?php echo url('subject/index'); ?>" class="ue-clear"><span>主题管理</span><i class="icon"></i></a></div></li>
        <li class="nav-info">
            <div class="nav-header"><a href="<?php echo url('index/infoedit'); ?>" class="ue-clear"><span>信息录入</span><i class="icon"></i></a></div>
        </li>
        <li class="konwledge"><div class="nav-header"><a href="javascript:;" class="ue-clear"><span>知识管理</span><i class="icon"></i></a></div></li>
        <li class="agency"><div class="nav-header"><a href="javascript:;" class="ue-clear"><span>组织结构</span><i class="icon"></i></a></div></li>
        <li class="email"><div class="nav-header"><a href="javascript:;" class="ue-clear"><span>邮件管理</span><i class="icon"></i></a></div></li>
        <li class="system"><div class="nav-header"><a href="javascript:;" class="ue-clear"><span>系统管理</span><i class="icon"></i></a></div></li>
    </ul>
</div>
            <!--/左边菜单部分-->
            <div class="content" style="overflow-x: hidden">
                <div class="article toolbar">
                    <div class="title ue-clear">
                        <h2>常用工具</h2>
                        <a href="javascript:;" class="more">更多</a>
                    </div>
                    <div class="content">
                        <ul class="toollist ue-clear">
                            <li>
                                <a href="javascript:;" class="img"><img src="/tp5_proj/public/admin/images/icon01.png" /></a>
                                <p><a href="javascript:;">通知公告</a></p>
                            </li>
                            <li>
                                <a href="javascript:;" class="img"><img src="/tp5_proj/public/admin/images/icon02.png" /></a>
                                <p><a href="javascript:;">知识库</a></p>
                            </li>
                            <li>
                                <a href="javascript:;" class="img"><img src="/tp5_proj/public/admin/images/icon03.png" /></a>
                                <p><a href="javascript:;">密码修改</a></p>
                            </li>
                            <li>
                                <a href="javascript:;" class="img"><img src="/tp5_proj/public/admin/images/icon04.png" /></a>
                                <p><a href="javascript:;">日程安排</a></p>
                            </li>
                            <li>
                                <a href="javascript:;" class="img"><img src="/tp5_proj/public/admin/images/icon05.png" /></a>
                                <p><a href="javascript:;">添加文章</a></p>
                            </li>
                            <li>
                                <a href="javascript:;" class="img"><img src="/tp5_proj/public/admin/images/icon06.png" /></a>
                                <p><a href="javascript:;">网络硬盘</a></p>
                            </li>
                            <li>
                                <a href="javascript:;" class="img"><img src="/tp5_proj/public/admin/images/icon07.png" /></a>
                                <p><a href="javascript:;">参数信息</a></p>
                            </li>
                            <li>
                                <a href="javascript:;" class="img"><img src="/tp5_proj/public/admin/images/icon08.png" /></a>
                                <p><a href="javascript:;">回收站</a></p>
                            </li>
                            <li>
                                <a href="javascript:;" class="img"><img src="/tp5_proj/public/admin/images/icon09.png" /></a>
                                <p><a href="javascript:;">系统配置</a></p>
                            </li>
                            <li class="add-btn">
                                <img src="/tp5_proj/public/admin/images/add.png" />
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="article half notice">
                    <div class="wrap-l">
                        <div class="title ue-clear">
                            <h2>通知公告</h2>
                            <a href="javascript:;" class="more">更多</a>
                        </div>
                        <div class="content">
                            <ul class="notice-list">
                                <li class="ue-clear">
                                    <a href="javascript:;" class="notice-title">中国移动关于设立作风建设监督举报电话的公告</a>
                                    <div class="notice-time">05-08</div>
                                </li>
                                <li class="ue-clear">
                                    <a href="javascript:;" class="notice-title">关于公示全市中国移动办公生产双主体责任名单的通知</a>
                                    <div class="notice-time">05-08</div>
                                </li>
                                <li class="ue-clear">
                                    <a href="javascript:;" class="notice-title">南京市中国移动支付系统安全管理责任人名单</a>
                                    <div class="notice-time">05-08</div>
                                </li>
                                <li class="ue-clear">
                                    <a href="javascript:;" class="notice-title">2014年全市通信行业安全生产工作要点</a>
                                    <div class="notice-time">05-08</div>
                                </li>
                                <li class="ue-clear">
                                    <a href="javascript:;" class="notice-title">中国移动南京公司关于表彰各位员工的规定</a>
                                    <div class="notice-time">05-08</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="article half matter">
                    <div class="wrap-r">
                        <div class="title ue-clear">
                            <h2 class="title-list">
                                <ul class="ue-clear">
                                    <li class="current"><a href="javascript:;">待办事项</a></li>
                                    <li><a href="javascript:;">已办事项</a></li>
                                </ul>
                            </h2>
                            <a href="javascript:;" class="more">更多</a>
                        </div>
                        <div class="content">
                            <div class="matter-content current ue-clear">
                                <div class="today">
                                    <p class="year">2014年5月</p>
                                    <p class="date">10</p>
                                </div>
                                <ul class="matter-list">
                                    <li class="ue-clear">
                                        <span class="matter-time">05-08</span>
                                        <a href="javascript:;" class="matter-title">下午2点中国移动召开2014年工作会议</a>
                                    </li>
                                    <li class="ue-clear">
                                        <span class="matter-time">05-08</span>
                                        <a href="javascript:;" class="matter-title">上交本年度市局工作报告提纲</a>
                                    </li>
                                    <li class="ue-clear">
                                        <span class="matter-time">05-08</span>
                                        <a href="javascript:;" class="matter-title">领取南京政府办公室公务员津贴</a>
                                    </li>
                                    <li class="ue-clear">
                                        <span class="matter-time">05-08</span>
                                        <a href="javascript:;" class="matter-title">南京2014年全国移动技术投标大会报名事宜</a>
                                    </li>
                                    <li class="ue-clear">
                                        <span class="matter-time">05-08</span>
                                        <a href="javascript:;" class="matter-title">参加市政府举办的互动活动并宣传单位</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="matter-content ue-clear">
                                <div class="today">
                                    <p class="year">2014年5月</p>
                                    <p class="date">10</p>
                                </div>
                                <ul class="matter-list">
                                    <li class="ue-clear">
                                        <span class="matter-time">05-08</span>
                                        <a href="javascript:;" class="matter-title">领取南京政府办公室公务员津贴</a>
                                    </li>
                                    <li class="ue-clear">
                                        <span class="matter-time">05-08</span>
                                        <a href="javascript:;" class="matter-title">南京2014年全国移动技术投标大会报名事宜</a>
                                    </li>
                                    <li class="ue-clear">
                                        <span class="matter-time">05-08</span>
                                        <a href="javascript:;" class="matter-title">领取南京政府办公室公务员津贴</a>
                                    </li>
                                    <li class="ue-clear">
                                        <span class="matter-time">05-08</span>
                                        <a href="javascript:;" class="matter-title">南京2014年全国移动技术投标大会报名事宜</a>
                                    </li>
                                    <li class="ue-clear">
                                        <span class="matter-time">05-08</span>
                                        <a href="javascript:;" class="matter-title">参加市政府举办的互动活动并宣传单位</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="article half duty">
                    <div class="wrap-l">
                        <div class="title ue-clear">
                            <h2>领导值岗</h2>
                            <a href="javascript:;" class="more">更多</a>
                        </div>
                        <div class="content">
                            <table>
                                <thead>
                                <tr>
                                    <th class="date">日期</th>
                                    <th class="week">星期</th>
                                    <th class="leader">值班领导</th>
                                    <th class="contact">联系方式</th>
                                    <th class="remark">备注</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="date">05-08</td>
                                    <td class="week">星期一</td>
                                    <td class="leader">刘秀全</td>
                                    <td class="contact">139039409876</td>
                                    <td class="remark"></td>
                                </tr>
                                <tr>
                                    <td class="date">05-09</td>
                                    <td class="week">星期一</td>
                                    <td class="leader">刘秀全</td>
                                    <td class="contact">139039409876</td>
                                    <td class="remark"></td>
                                </tr>
                                <tr>
                                    <td class="date">05-10</td>
                                    <td class="week">星期一</td>
                                    <td class="leader">刘秀全</td>
                                    <td class="contact">139039409876</td>
                                    <td class="remark"></td>
                                </tr>
                                <tr>
                                    <td class="date">05-08</td>
                                    <td class="week">星期一</td>
                                    <td class="leader">刘秀全</td>
                                    <td class="contact">139039409876</td>
                                    <td class="remark"></td>
                                </tr>
                                <tr>
                                    <td class="date">05-08</td>
                                    <td class="week">星期一</td>
                                    <td class="leader">刘秀全</td>
                                    <td class="contact">139039409876</td>
                                    <td class="remark"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="article half email">
                    <div class="wrap-r">
                        <div class="title ue-clear">
                            <h2>未读邮件</h2>
                            <a href="javascript:;" class="more">更多</a>
                        </div>
                        <div class="content">
                            <table>
                                <thead>
                                <tr>
                                    <th class="icon"></th>
                                    <th class="sender">发件人</th>
                                    <th class="subject">主题</th>
                                    <th class="time last-item">时间</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="tody">
                                    <td colspan="4"><div class="td-wrap"><em>今天</em><a href="javascript:;">(3封)</a></div></td>
                                </tr>
                                <tr>
                                    <td class="icon"><div class="td-wrap"></div></td>
                                    <td class="sender"><div class="td-wrap">办公室</div></td>
                                    <td class="subject"><div class="td-wrap"><a href="javascript:;">关于移动所有工作人员薪资调整的说明文件</a></div></td>
                                    <td class="time"><div class="td-wrap">22分钟前</div></td>
                                </tr>
                                <tr>
                                    <td class="icon"><div class="td-wrap"></div></td>
                                    <td class="sender"><div class="td-wrap">行政部</div></td>
                                    <td class="subject"><div class="td-wrap"><a href="javascript:;">行政廉洁形象建设工程要点会议纪要</a></div></td>
                                    <td class="time"><div class="td-wrap">1小时前</div></td>
                                </tr>
                                <tr class="open">
                                    <td class="icon"><div class="td-wrap"></div></td>
                                    <td class="sender"><div class="td-wrap">局长</div></td>
                                    <td class="subject"><div class="td-wrap"><a href="javascript:;">部门劳动节放假相关通知</a></div></td>
                                    <td class="time"><div class="td-wrap">今天14:23</div></td>
                                </tr>
                                <tr>
                                    <td class="icon"><div class="td-wrap"></div></td>
                                    <td class="sender"><div class="td-wrap">自贡水务</div></td>
                                    <td class="subject"><div class="td-wrap"><a href="javascript:;">2014年度所有公务员征税政策文件下载</a></div></td>
                                    <td class="time"><div class="td-wrap">今天10:23</div></td>
                                </tr>
                                <tr>
                                    <td class="icon"><div class="td-wrap"></div></td>
                                    <td class="sender"><div class="td-wrap">办公室</div></td>
                                    <td class="subject"><div class="td-wrap"><a href="javascript:;">关于移动所有工作人员薪资调整的说明文件</a></div></td>
                                    <td class="time"><div class="td-wrap">22分钟前</div></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--脚注部分-->
    <div id="ft" class="ue-clear">
    <div class="ft-left">
        <span>中国移动</span>
        <em>Office&nbsp;System</em>
    </div>
    <div class="ft-right">
        <span>Automation</span>
        <em>V2.0&nbsp;2014</em>
    </div>
</div>
    <!--/脚注部分-->
</div>
<div class="exitDialog">
	<div class="dialog-content">
    	<div class="ui-dialog-icon"></div>
        <div class="ui-dialog-text">
        	<p class="dialog-content">你确定要退出系统？</p>
            <p class="tips">如果是请点击“确定”，否则点“取消”</p>
            
            <div class="buttons">
                <input type="button" class="button long2 ok" value="确定" />
                <input type="button" class="button long2 normal" value="取消" />
            </div>
        </div>
        
    </div>
</div>
</body>
<script type="text/javascript" src="/tp5_proj/public/admin/js/jquery.js"></script>
<script type="text/javascript" src="/tp5_proj/public/admin/js/common.js"></script>
<script type="text/javascript" src="/tp5_proj/public/admin/js/core.js"></script>
<script type="text/javascript" src="/tp5_proj/public/admin/js/jquery.dialog.js"></script>
<script type="text/javascript" src="/tp5_proj/public/admin/js/index.js"></script>

</html>
