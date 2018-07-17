<script src="../../../../assets/js/jquery-1.7.2.min.js"></script>
<style>
    .file-panel {
        transition: all .5s;
    }

    .filelist li:hover .file-panel {
        height: 30px;
        transition: all .5s;
    }
    .uploader-list-container .placeholder {
        border: none;
        color: #999;
    }
</style>
<div class="formControls col-10">


    <div class="uploader-list-container">
        <div class="queueList">

                <div id="dndArea" class="placeholder">
                    <div id="filePicker-2" class="webuploader-container">
                        <div class="webuploader-pick">点击选择图片</div>
                        <div id="rt_rt_1cijcqbmh2b06oc1fgftm11o0m1"
                             style="position: absolute; top: 20px; left: 0px; width: 168px; height: 44px; overflow: hidden; bottom: auto; right: auto;">
                            <input multiple="multiple" type="file" id="uppic" style="display: none"
                                   onchange="doupbyajax()"><label for="uppic"
                                                                  style="opacity: 0; width: 100%; height: 100%; display: block; cursor: pointer; background: rgb(255, 255, 255);"></label>
                        </div>
                    </div>
                    <p>请上传商品图片，支持多图上传！</p>
                </div>

            <ul class="filelist">
                <?PHP if (isset($imgSrcList) && $imgSrcList != "") {
                    foreach ($imgSrcList as $src) { ?>
                        <li id="goods-img-"><p class="title"><?PHP echo $src['name'] ?></p>
                            <p class="imgWrap"><img src="<?PHP echo $src['src'] ?>"></p>
                            <div class="file-panel"><span class="cancel">删除</span></div>
                        </li>
                        <?PHP
                    }
                } ?>

            </ul>
        </div>


            <div class="statusBar" style="" id="statusBar">
                <div class="progress" style="display: none;">
                    <span class="text">0%</span>
                    <span class="percentage" style="width: 0%;"></span>
                </div>


                <div class="info">选中1张图片，共124.74K。</div>
                <div class="btns">

                    <!--                <div id="filePicker2" class="webuploader-container">
                                        <div class="webuploader-pick">继续添加</div>
                                        <div id="rt_rt_1cij1s054skmdm91rgar9k1ue37"
                                             style="position: absolute; top: 0px; left: 10px; width: 94px; height: 42px; overflow: hidden; bottom: auto; right: auto;">
                                            <input type="file" name="file" class="webuploader-element-invisible" multiple="multiple"><label
                                                    style="opacity: 0; width: 100%; height: 100%; display: block; cursor: pointer; background: rgb(255, 255, 255);"></label>
                                        </div>
                                    </div>-->

                    <div class="uploadBtn state-ready">
                        <label for="uppic">继续添加</label>
                        <input multiple="multiple" type="file" id="uppic" style="display: none" onchange="doupbyajax()">
                    </div>
                </div>
            </div>


    </div>
</div>


<img src="<?php echo isset($picvalue) ? $picvalue : "" ?>" id="showpic" height="100px">
<script>




    function doupbyajax() {

        formData = new FormData();//创建一个表单对象
        for (var s = 0; s < document.getElementById("uppic").files.length; s++) {
            formData.append('files',
                document.getElementById("uppic").files[s]);
            postImg(formData);
        }
    }

    function postImg(imgFrom) {
        $.ajax({
            url: "../ctrl/goodsEditAddCtrl.php?goods_act=image_upload&goods_id=<?PHP echo $val['id'] ?>",//上传文件接收服务
            type: 'POST',
            data: imgFrom,//表单数据对象
            dataType: "json",
            cache: false,
            contentType: false,    //不可缺
            processData: false,    //不可缺
            success: function (data) {

                if (data.code !== 1) {

                } else {


                    console.log(data);
                    ssss = "";
                    for (var src in data.file) {
                        ssss += '<li id="goods-img-' + src + '"><p class="title">' + data.file[src].name + '</p>\n' +
                            '                    <p class="imgWrap"><img src="../../../' + data.file[src].src + '"></p>\n' +
                            '                    <div class="file-panel"><span class="cancel">删除</span></div>\n' +
                            '                </li>';

                    }
                    $('.filelist').html('');
                    $('.filelist').append(ssss);
                    console.log(ssss);
                }
                // $("#showpic").attr("src",data.filepath);//设置图片的src属性值
                // $("#picurl").val(data.filepath);//返回路径放入表单元素
            }
        });
    }

$(function () {
    function f() {

        var s = "<?PHP echo isset($imgSrcList); ?>"
        if(s){
            $('#dndArea').css('display','none');
            $('.statusBar').css('display','block');
        }else {
            $('#dndArea').css('display','block');
            $('.statusBar').css('display','none');
        }
    }
    f();
});
</script>
