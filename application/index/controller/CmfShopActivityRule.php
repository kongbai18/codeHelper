<?php

//由ThinkphpHelper自动生成,请根据需要修改
namespace app\index\controller;

use think\Controller;

class CmfShopActivityRule extends Controller{
	protected $model = null;

	public function _initialize(){	//初始化
		$this->model = new \app\index\model\CmfShopActivityRule;
	}
	    //默认入口
    public function index(){
        $this->redirect('lists');
    }
		//新增
	public function add(){
		if($this->request->isPost()){
			$flag = $this->model->add($this->request);
			if($flag){
				$this->success('添加成功', url('lists'));
			}else{
				$this->error('添加失败');
			}
		}else{
			return $this->fetch();
		}
	}
		//修改
	public function edit(){
		if($this->request->isPost()){
			$flag = $this->model->edit($this->request);
			if($flag){
				$this->success('编辑成功', url('lists'));
			}else{
				$this->error('编辑失败');
			}
		}else{
			$cmf_shop_activity_rule = $this->model->info($this->request);
			$this->assign('cmf_shop_activity_rule', $cmf_shop_activity_rule);
			return $this->fetch();
		}
	}
		//删除
	public function delete(){
		$flag = $this->model->del($this->request);
		if($flag){
			$this->success('删除成功', url('lists'));
		}else{
			$this->error('删除失败');
		}
	}
	    //批量删除
    public function delList(){
        $flag = $this->model->delList($this->request);
        if($flag){
			$this->success('删除成功', url('lists'));
		}else{
			$this->error('删除失败');
		}
    }
	    //id单个查询
    public function info(){
        $cmf_shop_activity_rule = $this->model->info($this->request);
        $this->assign('cmf_shop_activity_rule', $cmf_shop_activity_rule);
        return $this->fetch();
    }
		//列表
	public function lists(){
		$cmf_shop_activity_ruleList = $this->model->lists($this->request, 12);	
		$this->assign('cmf_shop_activity_ruleList', $cmf_shop_activity_ruleList);
		return $this->fetch();
	}
}
