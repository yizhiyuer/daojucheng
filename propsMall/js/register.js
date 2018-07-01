$(function () {

    var userNameReg = /^[A-Za-z0-9\u4e00-\u9fa5]{3,6}$/;/*正则匹配 用户名：中文-_2bW*/
    /*blur：失去焦点触发事件*/
    // $('#user-name').blur(function () {
    //     var userName = $('#user-name').val();/*每次触发都重新获取输入的用户名*/
    //     if( userNameReg.test(userName) ){
    //         console.log('yes');
    //     }else {
    //         console.log('no');
    //         $('.user-name .register-tip').slideUp();
    //     }
    // });
    // $('#user-name').focus(function () {
    //     $('.user-name .register-tip').slideDown();
    // });
    /* 获取当前点击的输入框并做输入判断 */
    $('.form-content input').focus(function () {
        var input = $(this)[0].id;
        switch (input) {
            case 'user-name':
                tipShow(input);
                // var a = $('#'+input).siblings('.register-tip').find('span');
                // console.log(a);
                break;
            case 'user-password':
                tipShow(input);
                break;
    case 'user-password-two':
        tipShow(input);
        break;
    default:
        break;
    }
});

function tipShow(input) {
        $('.register-tip').slideUp();
        $('#'+input).siblings('.register-tip').stop(true, false).slideDown();
    }

});