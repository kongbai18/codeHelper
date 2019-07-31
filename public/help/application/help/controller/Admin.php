<?php
/**
 * Created by PhpStorm.
 * User: ligo
 * Date: 2019/7/31
 * Time: 17:19
 */

namespace app\help\controller;


use think\Controller;

class Admin extends Controller
{
    public function index(){
        $base = BASE_PATH.'/../../application';
        $dh = opendir($base);
        $module = [];
        while(false!=($file=readdir($dh))){
            if($file!='.' &&$file!='..')
            {
                if(is_dir($base.'/'.$file)){
                    $module[] = $file;
                }

            }
        }
        closedir($dh);
        $this->assign('module',$module);
        return $this->fetch();
    }
}