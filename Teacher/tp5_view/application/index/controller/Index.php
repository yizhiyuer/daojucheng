<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
class Index extends Controller
{
    public function index()
    {
//        return "首页";
        //在控制器中渲染视图；
        $this->assign("key","将变量输出到模板中显示");
        //todo:1.构造获取广告信息数据；
        $pcads=["adsid"=>1,
            "adstitle"=>"黑鲨游戏手机",
            "adspos"=>"home_phone_cate_ads",
            "adslink"=>"https://item.mi.com/product/10000089.html",
            "adspic"=>"https://i1.mifile.cn/a4/xmad_15283420365224_wLvZm.jpg"];
        $this->assign("pcads",$pcads);
        //todo:2.构造九宫格排版数据；
        $phoneList = [
            ["gid"=>1,"gname"=>"红米6A","intro"=>"AI人脸解锁，小巧全面屏，高性能处理器",
                "price_new"=>599,"price_old"=>599,
                "pic"=>"https://i1.mifile.cn/a1/pms_1528719476.67789934!220x220.jpg"],
            ["gid"=>2,"gname"=>"小米8 6GB+64GB","intro"=>"全球首款双频GPS，骁龙845处理器",
                "price_new"=>2699,"price_old"=>2699,
                "pic"=>"https://i1.mifile.cn/a1/pms_1528092587.49664451!220x220.jpg"],
            ["gid"=>3,"gname"=>"小米6X 4GB+32GB","intro"=>"全索尼相机，骁龙660 AIE处理器",
                "price_new"=>1299,"price_old"=>1499,
                "pic"=>"https://i1.mifile.cn/a1/pms_1527144859.25489991!220x220.jpg"],
            ["gid"=>4,"gname"=>"红米6A","intro"=>"AI人脸解锁，小巧全面屏，高性能处理器",
                "price_new"=>599,"price_old"=>599,
                "pic"=>"https://i1.mifile.cn/a1/pms_1528719476.67789934!220x220.jpg"],
            ["gid"=>5,"gname"=>"小米8 6GB+64GB","intro"=>"全球首款双频GPS，骁龙845处理器",
                "price_new"=>2699,"price_old"=>2699,
                "pic"=>"https://i1.mifile.cn/a1/pms_1528092587.49664451!220x220.jpg"],
            ["gid"=>6,"gname"=>"小米6X 4GB+32GB","intro"=>"全索尼相机，骁龙660 AIE处理器",
                "price_new"=>1299,"price_old"=>1499,
                "pic"=>"https://i1.mifile.cn/a1/pms_1527144859.25489991!220x220.jpg"],
            ["gid"=>7,"gname"=>"红米6A","intro"=>"AI人脸解锁，小巧全面屏，高性能处理器",
                "price_new"=>599,"price_old"=>599,
                "pic"=>"https://i1.mifile.cn/a1/pms_1528719476.67789934!220x220.jpg"],
            ["gid"=>8,"gname"=>"小米8 6GB+64GB","intro"=>"全球首款双频GPS，骁龙845处理器",
                "price_new"=>2699,"price_old"=>2699,
                "pic"=>"https://i1.mifile.cn/a1/pms_1528092587.49664451!220x220.jpg"]
        ];
        $this->assign("plist",$phoneList);
        //练习：在视图模板中输出手机号，身份证号码
        //1.要求使用函数对输出的手机号变量进行处理：以*代替显示中间4位；
        //2.要求使用函数对输出的身份证号变量进行处理：以*代替显示中间11位；
        $this->assign(["phoneNo"=>"13557089656","cardNo"=>"450502198403210256"]);
        return view();
//        return view("index/index222");
//        return view("index222");
//        return view("about/about");
    }

    function test($str){

    }
}
