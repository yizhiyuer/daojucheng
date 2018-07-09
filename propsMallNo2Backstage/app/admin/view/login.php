<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="icon" href="./assets/images/icon-1.png"/>

    <link href="./assets/lib/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="./assets/lib/css/font-awesome.min.css"/>
    <!--[if IE 7]>
    <link rel="stylesheet" href="./assets/lib/css/font-awesome-ie7.min.css"/>
    <![endif]-->
    <link rel="stylesheet" href="./assets/lib/css/ace.min.css"/>
    <link rel="stylesheet" href="./assets/lib/css/ace-rtl.min.css"/>
    <link rel="stylesheet" href="./assets/lib/css/ace-skins.min.css"/>
    <link rel="stylesheet" href="./assets/css/style.css"/>
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="./assets/lib/css/ace-ie.min.css"/>
    <![endif]-->
    <script src="./assets/lib/js/ace-extra.min.js"></script>
    <!--[if lt IE 9]>
    <script src="./assets/lib/js/html5shiv.js"></script>
    <script src="./assets/js/respond.min.js"></script>
    <![endif]-->
    <script src="./assets/js/jquery-1.9.1.min.js"></script>
    <script src="./assets/lib/layer/layer.js" type="text/javascript"></script>
    <title>登录 - 后台管理系统</title>
</head>

<body class="login-layout Reg_log_style">
<!--<div class="logintop">-->
<!--<span>道聚城后台管理系统</span>-->
<!--<ul>-->
<!--<li><a href="javascript:void(0)">联系</a></li>-->
<!--<li><a href="javascript:void(0)">帮助</a></li>-->
<!--<li><a href="javascript:void(0)">关于</a></li>-->
<!--</ul>-->
<!--</div>-->
<div class="loginbody">
    <div class="login-container">
        <div class="center">
            <!--<img src="./assets/images/icon-1.png" />-->
        </div>

        <div class="space-6"></div>

        <div class="position-relative">
            <div style="height: 383px;" id="login-box" class="login-box widget-box no-border visible">
                <div class="widget-body">
                    <div class="widget-main">
                        <h4 class="header blue lighter bigger">
                            <!--<i class="icon-coffee green"></i>-->
                            <div class="login_icon"><img src="./assets/images/icon-1.png"/></div>
                            管理员登陆
                        </h4>

                        <!--<div class="login_icon"><img src="./assets/images/icon-1.png"/></div>-->

                        <form class="" action="./app/admin/ctrl/loginCtrl.php?act_view=online" method="post">
                            <fieldset>
                                <ul class="login-form-box">
                                    <li class="frame_style form_error"><label class="user_icon"></label><input
                                                name="user_name" type="text" id="user_name" placeholder="用户名"/></li>
                                    <li class="frame_style form_error"><label class="password_icon"></label><input
                                                name="user_password" type="password" id="user_password"
                                                placeholder="密码" /></li>
                                    <li class="frame_style form_error"><label class="Codes_icon"></label><input
                                                style="width: 160px;" name="codes_text" type="text" id="codes_text"
                                                placeholder="验证码"/>
                                        <div class="Codes_region">
                                            <img id="vCode" src="./app/admin/models/vcode/vcodeImg.php"
                                                 onclick="this.src='./app/admin/models/vcode/vcodeImg.php?v='+Math.random()">
                                        </div>
                                    </li>

                                </ul>
                            </fieldset>
                            <p class="clearfix text-center">
                                <button class="width-50  btn btn-sm btn-primary"
                                        id="login_btn">
                                    <i class="icon-key"></i>
                                    登陆
                                </button>
                            </p>
                        </form>

                        <div class="social-or-login center">
                            <span class="bigger-110">通知</span>
                        </div>

                        <div class="social-login center">
                            本网站系统不再对IE8以下浏览器支持，请见谅。
                        </div>
                    </div><!-- /widget-main -->
                    <div class="toolbar clearfix">
                    </div>
                </div><!-- /widget-body -->
            </div><!-- /login-box -->
        </div><!-- /position-relative -->
    </div>
</div>

<div class="loginbm">版权所有 2018 <a href="javascript:void(0)">北海娜娜软件系统有限公司</a></div>
<script type="text/javascript">
    $(function () {

    });
</script>
</body>
</html>

<script>
    $('#login_btn').on('click', function () {
        // console.log($('#vCode'));
        var num = 0;
        var str = "";
        $("input[type$='text'],input[type$='password']").each(function (n) {
            if ($(this).val() == "") {
                layer.alert(str += "" + $(this).attr("placeholder") + "不能为空！\r\n", {
                    title: '提示框',
                    icon: 0,
                });
                num++;
                return false;
            }
        });

        if (num > 0) {
            return false;
        } else {
            // $("input[type$='text'],input[type$='password']").each(function (n) {
            //     console.log($(this).val());
            // });
            // layer.alert('登陆成功！', {
            //     title: '提示框',
            //     icon: 1,
            // });
            // location.href = "index.html";
            // layer.close(index);
        }

    });
    $(document).ready(function () {
        $("input[type='text'],input[type='password']").blur(function () {
            var $el = $(this);
            var $parent = $el.parent();
            $parent.attr('class', 'frame_style').removeClass(' form_error');
            if ($el.val() == '') {
                $parent.attr('class', 'frame_style').addClass(' form_error');
            }
        });
        $("input[type='text'],input[type='password']").focus(function () {
            var $el = $(this);
            var $parent = $el.parent();
            $parent.attr('class', 'frame_style').removeClass(' form_errors');
            if ($el.val() == '') {
                $parent.attr('class', 'frame_style').addClass(' form_errors');
            } else {
                $parent.attr('class', 'frame_style').removeClass(' form_errors');
            }
        });


    })

</script>