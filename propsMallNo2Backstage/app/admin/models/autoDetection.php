<?php
/**
 * Created by PhpStorm.
 * User: adger.lai
 * Date: 2018/7/6
 * Time: 17:20
 */
class Session{

    /**
     * 设置session
     * $expire 超时时间(秒)
     */
    public static function set($name, $data, $expire=360){
        $session_data = array();
        $session_data['data'] = $data;
        $session_data['timeout'] = time()+$expire;
        $_SESSION[$name] = $session_data;
    }
    /**
     * 读取session
     */
    public static function get($name){
        if(isset($_SESSION[$name])){
            if($_SESSION[$name]['timeout']>time()){
//                return $_SESSION[$name]['data'];
//                return $_SESSION[$name]['timeout'].":".time();
                self::ExtendedValidityPeriod($name);
                return $_SESSION[$name];
            }else{
//                return $_SESSION[$name]['data']."已过期";
                self::clear($name);
            }
        }
        return false;
    }
    /**
     * 刷新过期时间session
     */
    public static function ExtendedValidityPeriod($name){
        $_SESSION[$name]['timeout'] = time()+360;
    }
    /**
     * 清除session
     */
    private static function clear($name){
        unset($_SESSION[$name]);
        $_SESSION['act'] = 'login';
        $_SESSION['view'] = 'login';
        $_SESSION['error'] = 'timeOut';
        header('Location:../../../index.php');
    }
}

