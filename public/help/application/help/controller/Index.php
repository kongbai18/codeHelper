<?php
/**
 * Created by PhpStorm.
 * User: ligo
 * Date: 2019/7/31
 * Time: 9:29
 */

namespace app\help\controller;


use think\Controller;
use think\Request;

class Index extends Controller
{
    public function index(){
        $db = config('database');
        $this->assign('db',$db);
        return $this->fetch();
    }

    public function edit(){
        define('CONFIG_EXIT', '<?php exit;?>');
        $data = Request::instance()->only('type,hostname,database,username,password','post');
        $string = file_get_contents(APP_PATH.'/database.php');
        foreach($data as $key=>$val){
            //定义正则来查找内容，这里面的key为form表单里面的name
            $old_inf="/'$key'.*?=>.*?'.*?',/";

            //将内容匹配成对应的key和修改的值
            $new_inf="'$key'=>'$val',";
            //替换内容
            $string = preg_replace($old_inf,$new_inf,$string);
        }
        file_put_contents(APP_PATH.'/database.php',$string);
        return [
            'code' => 1,
            'msg' => '修改成功',
        ];
    }
}