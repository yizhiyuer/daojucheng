<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | General Form Elements</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="./Assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./Assets/admin/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="./Assets/admin/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./Assets/admin/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="./Assets/admin/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php include display("common/header_aside")?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                商品管理
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">

                <!-- right column -->
                <div class="col-md-12">
                    <!-- Horizontal Form -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">商品添加</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal"
                              action="./admin.php?act=index&view=doadd"
                              method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">商品名称</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="sname" id="inputEmail3">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">商品分类</label>

                                    <div class="col-sm-10">
                                        <select name="cid" id="">
                                            <?php foreach ($cateList as $opt){?>
                                                <option value="<?php echo $opt["cid"] ?>">
                                                    <?php echo $opt["cname"] ?>
                                                </option>
                                            <?php }?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">商品价格</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="price" id="inputEmail3">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">商品数量</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="storenum" id="inputEmail3">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">商品封面图片</label>

                                    <div class="col-sm-10">
                                        <label for="uppic" style="padding: 10px;background: #2aabd2;color:#eee">选择图片</label>
                                        <input type="file" id="uppic" style="display: none" onchange="doupbyajax()">
                                        <input type="text" name="pic" id="picurl" >
                                        <br>
                                        <img src="" id="showpic" height="100px">
                                        <script>
                                            function doupbyajax(){
                                                formData=new FormData();//创建一个表单对象
                                                formData.append('files',
                                                    document.getElementById("uppic").files[0]);
                                                $.ajax({
                                                    url:'./admin.php?act=upload&view=doup',//上传文件接收服务
                                                    type:'POST',
                                                    data:formData,//表单数据对象
                                                    dataType:"json",
                                                    cache: false,
                                                    contentType: false,    //不可缺
                                                    processData: false,    //不可缺
                                                    success:function(data){
                                                        console.log(data);
                                                        $("#showpic").attr("src",data.filepath);//设置图片的src属性值
                                                        $("#picurl").val(data.filepath);//返回路径放入表单元素
                                                    }});
                                            }
                                        </script>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">商品详情</label>
                                    <div class="col-sm-10">
                                        <textarea name="detail" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-info pull-right">保存</button>
                            </div>
                            <!-- /.box-footer -->
                        </form>
                    </div>
                    <!-- /.box -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.0
        </div>
        <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="./Assets/admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="./Assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="./Assets/admin/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="./Assets/admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./Assets/admin/dist/js/demo.js"></script>
</body>
</html>
