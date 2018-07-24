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
                    foreach ($imgSrcList as $key => $src) { ?>
                        <li id="goods-img-<?PHP echo $src['id'] ?>"><p class="title"><?PHP echo $src['name'] ?></p>
                            <p class="imgWrap"><img src="<?PHP echo $src['src'] ?>"></p>
                            <div class="file-panel"><span onclick="deleteImg(this)" class="cancel">删除</span></div>
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
                <div class="uploadBtn state-ready">
                    <label for="uppic">继续添加</label>
                    <input multiple="multiple" type="file" id="uppic" style="display: none" onchange="doupbyajax()">
                </div>
            </div>
        </div>


    </div>
</div>

<script>


    function doupbyajax() {

        formData = new FormData();//创建一个表单对象
        for (var s = 0; s < document.getElementById("uppic").files.length; s++) {
            formData.append('files',
                document.getElementById("uppic").files[s]);
            postImg(formData);
        }
    }

    srcTip = false;

    /*
    * 上传图片
    * */
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
                    // console.log(data);
                    var imgSrc = "";
                    for (var src in data.file) {
                        imgSrc += '<li id=" goods-img-' + data.file[src].id + ' "><p class="title">' + data.file[src].name + '</p>\n' +
                            '                    <p class="imgWrap"><img src="' + data.file[src].src + '"></p>\n' +
                            '                    <div class="file-panel"><span onclick="deleteImg(this)" class="cancel">删除</span></div>\n' +
                            '                </li>';

                    }
                    $('.filelist').html('');
                    $('.filelist').append(imgSrc);
                    imgTip(srcTip = true);
                }
            }
        });
    }


    /*
    * 删除图片操作
    * */
    function deleteImg(tis) {
        var deleteImgSrc = $(tis).parent().siblings('.imgWrap').children('img').attr('src');
        var deleteData = {
            "deleteImgSrc": deleteImgSrc,
            "goodsId":<?PHP echo $val['id'] ?>,
        };
        // console.log(deleteData);
        $.ajax({
            url: "../ctrl/goodsEditAddCtrl.php?goods_act=image_delete",//删除文件
            type: 'POST',
            data: {
                "deleteData": deleteData
            },
            dataType: "json",
            success: function (data) {
                // console.log(data);
                if (data.code !== 1) {
                    console.log(data);
                } else {
                    console.log(data);
                    var imgSrc = "";
                    for (var src in data.file) {
                        imgSrc += '<li id=" goods-img-' + data.file[src].id + ' "><p class="title">' + data.file[src].name + '</p>\n' +
                            '                    <p class="imgWrap"><img src="' + data.file[src].src + '"></p>\n' +
                            '                    <div class="file-panel"><span onclick="deleteImg(this)" class="cancel">删除</span></div>\n' +
                            '                </li>';

                    }
                    $('.filelist').html('');
                    $('.filelist').append(imgSrc);
                    imgTip(srcTip = false);
                }
            }
        });
    }


    /*
    * 图片上传提示
    * */
    function imgTip(Tip) {

        var imgList = "<?PHP echo isset($imgSrcList); ?>";//图片列表是否存在
        var imgSrcListLength = "<?PHP echo count($imgSrcList); ?>";//图片列表是否存在数据 不存在长度为0
        var imgListLength = $('.filelist').children('li').length;//列表父元素下 子元素的个数 无图为0
        imgSrcListLength = imgListLength;
        if(imgListLength === 0){imgList = 0;console.log("无图1");}
        if ( imgList || Tip ) {
            console.log("有图", imgListLength, imgSrcListLength, imgList, srcTip);
            console.log();
            $('#dndArea').css('display', 'none');
            $('.statusBar').css('display', 'block');
        } else {
            console.log("无图3", imgListLength, imgSrcListLength, imgList, srcTip);
            $('#dndArea').css('display', 'block');
            $('.statusBar').css('display', 'none');
        }
    }

    imgTip();

    $(function () {

    });
</script>
