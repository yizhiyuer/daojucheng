window.onload = function (ev) {
    //换一换 B
    cgLike = document.getElementById('changeLike');

    changeLike();//换一换 E


    //倒计时 B
    dayHtml = document.getElementById('day');
    hourHtml = document.getElementById('hour');
    minuteHtml = document.getElementById('minute');
    secondHtml = document.getElementById('second');
    // countDown(864000);//倒计时 E

    //轮播图 B
    deviation = 0;
    carousel();
    var box = document.getElementsByClassName('carousel-img-box')[0];
    var carouselButton = document.getElementsByClassName('carousel-button')[0];
    carouselButton.addEventListener('mousemove', function () {
        clearInterval(autoCarousel);
    });
    box.addEventListener('mousemove', function () {
        clearInterval(autoCarousel);
    });
    box.addEventListener('mouseout', function () {
        carousel();
    });//轮播图 E

};

//换一换
function changeLike() {
    var like = [
        {
            src: 'images/changelike1.jpg',
            title: '[英雄联盟]',
            vice: '胜利经验卡(10胜)'
        },
        {
            src: 'images/changelike2.jpg',
            title: '[英雄联盟]',
            vice: '胜利金币卡(10胜)'
        },
        {
            src: 'images/changelike3.jpg',
            title: '[英雄联盟]',
            vice: '高丽风情 阿狸'
        },
        {
            src: 'images/changelike4.jpg',
            title: '[英雄联盟]',
            vice: '战地机甲 斯卡纳'
        },
        {
            src: 'images/changelike5.jpg',
            title: '[英雄联盟]',
            vice: '黑色荆棘 莫甘娜'
        },
        {
            src: 'images/changelike6.jpg',
            title: '[烽火战国]',
            vice: '炽星魔盒(10个)'
        },
        {
            src: 'images/changelike7.jpg',
            title: '[烽火战国]',
            vice: '星空上衣(1件)'
        },
        {
            src: 'images/changelike8.jpg',
            title: '[烽火战国]',
            vice: '勇者战袍(1件)'
        },
        {
            src: 'images/changelike9.jpg',
            title: '[烽火战国]',
            vice: '技能卷轴(1个)'
        },
        {
            src: 'images/changelike10.jpg',
            title: '[烽火战国]',
            vice: '冰霜宝盒(10个)'
        },
        {
            src: 'images/changelike11.jpg',
            title: '[烽火战国]',
            vice: '复苏之光(10个)'
        },
        {
            src: 'images/changelike12.jpg',
            title: '[烽火战国]',
            vice: '力量宝石(10个)'
        },
        {
            src: 'images/changelike13.jpg',
            title: '[烽火战国]',
            vice: '淬炼玉瓶(10个)'
        },
        {
            src: 'images/changelike14.jpg',
            title: '[烽火战国]',
            vice: '技能宝石(10个)'
        },
        {
            src: 'images/changelike15.jpg',
            title: '[烽火战国]',
            vice: '觉醒宝珠(10个)'
        }
    ];//换一换内容
    var likeRandom = random(5, 0, 14);
    var likeHtml = '';
    for (var a = 0; a < 5; a++) {
        var raNumber = likeRandom[a];
        var price = Math.floor(Math.random() * 399.99 + 9.99).toFixed(2);
        likeHtml += '<li class="R-li">\n' +
            '                        <img src=' + like[raNumber].src + '>\n' +
            '                        <p class="R-words p-1"><b>' + like[raNumber].title + '</b></p>\n' +
            '                        <p class="R-words">' + like[raNumber].vice + '</p>\n' +
            '                        <p class="li-3">商城价:<b>' + price + 'QB</b></p>\n' +
            '                    </li>';
    }
    cgLike.innerHTML = likeHtml;
    console.log(likeHtml)
}

function random(len, min, max) {
    var arr = [];

    function _inner(min, max) {
        var span = max - min;
        return parseInt(Math.random() * span + min)
    }

    while (arr.length < len) {
        var num = _inner(min, max);
        if (arr.indexOf(num) == -1) {
            arr.push(num);
        }
    }
    return arr;
}


//轮播图
function carousel(index) {
    var carouselImgBox = document.getElementById('carouselImg');
    var imgNumber = carouselImgBox.getElementsByTagName('img').length - 1;
    var carouselImg = window.getComputedStyle(carouselImgBox, null);
    var offset = imgNumber * 770;
    var carouselImgLeft = parseInt(carouselImg.left);

    if (index === 'right') { /*下一张*/
        clearInterval(autoCarousel);
        deviation -= 770;
        if (carouselImgLeft == -offset) {
            deviation = 0;
        }
    }

    if (index === 'left') { /*上一张*/
        clearInterval(autoCarousel);
        deviation += 770;
        if (carouselImgLeft == 0) {
            deviation = -offset;
        }
    }

    autoCarousel = setInterval(function () {
        deviation -= 770;
        if (deviation == -(offset + 770)) {
            deviation = 0;
        }
        carouselImgBox.style.cssText = 'left:' + deviation + 'px;';
    }, 2000);

    carouselImgBox.style.cssText = 'left:' + deviation + 'px;';
}

//倒计时
function countDown(times) {
    var timer = null;
    timer = setInterval(function () {
        var day = 0,
            hour = 0,
            minute = 0,
            second = 0;//时间默认值
        if (times > 0) {
            day = Math.floor(times / (60 * 60 * 24));
            hour = Math.floor(times / (60 * 60)) - (day * 24);
            minute = Math.floor(times / 60) - (day * 24 * 60) - (hour * 60);
            second = Math.floor(times) - (day * 24 * 60 * 60) - (hour * 60 * 60) - (minute * 60);
        }
        if (day <= 9) day = '0' + day;
        if (hour <= 9) hour = '0' + hour;
        if (minute <= 9) minute = '0' + minute;
        if (second <= 9) second = '0' + second;
        //
        dayHtml.innerHTML = day;
        hourHtml.innerHTML = hour;
        minuteHtml.innerHTML = minute;
        secondHtml.innerHTML = second;
        // console.log(day+"天:"+hour+"小时："+minute+"分钟："+second+"秒");
        times--;
    }, 1000);
    if (times <= 0) {
        clearInterval(timer);
    }
}