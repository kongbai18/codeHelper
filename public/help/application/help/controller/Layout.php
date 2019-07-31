<?php
/**
 * Created by PhpStorm.
 * User: ligo
 * Date: 2019/7/31
 * Time: 14:59
 */

namespace app\help\controller;


use think\Controller;

class Layout extends Controller
{
    public function index(){
        return $this->fetch();
    }

    public function add(){
        $this->copyDir(BASE_PATH.'/static',BASE_PATH.'/../static/codehelper');
        return [
            'code' => 1,
            'msg'  => '生成成功',
        ];
    }

    public function copyDir($dir,$newDir){
        if(is_dir($dir)){
            if(!file_exists($newDir)){
                mkdir($newDir);
            }
            $dh = opendir($dir);
            while(false!=($file=readdir($dh))){
                if($file!='.' &&$file!='..')
                {
                    if(is_dir($dir.'/'.$file)){
                        if(file_exists($newDir.'/'.$file)){
                            $this->copyDir($dir.'/'.$file,$newDir.'/'.$file);
                        }else{
                            mkdir($newDir.'/'.$file);
                        }
                    }else{
                        copy($dir.'/'.$file,$newDir.'/'.$file);
                    }
                }
            }
        }
    }
}