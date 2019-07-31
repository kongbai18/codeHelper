<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:71:"E:\wamp64\www\tp\public\tph2\codeRepository\amaze\Controller\index.html";i:1556261711;s:69:"E:\wamp64\www\tp\public\tph2\codeRepository\amaze\Controller\add.html";i:1556261711;s:70:"E:\wamp64\www\tp\public\tph2\codeRepository\amaze\Controller\edit.html";i:1556261711;s:72:"E:\wamp64\www\tp\public\tph2\codeRepository\amaze\Controller\delete.html";i:1556261711;s:73:"E:\wamp64\www\tp\public\tph2\codeRepository\amaze\Controller\delList.html";i:1556261711;s:70:"E:\wamp64\www\tp\public\tph2\codeRepository\amaze\Controller\info.html";i:1556261711;s:71:"E:\wamp64\www\tp\public\tph2\codeRepository\amaze\Controller\lists.html";i:1556261711;}*/ ?>

//由ThinkphpHelper自动生成,请根据需要修改
namespace <?php echo getDbConfig('app_namespace'); ?>\<?php echo $moduleName; ?>\controller;

use think\Controller;

class <?php echo tableNameToModelName($tableName); ?> extends Controller{
	protected $model = null;

	public function _initialize(){	//初始化
		$this->model = new \<?php echo getDbConfig('app_namespace'); ?>\<?php echo $moduleName; ?>\model\<?php echo tableNameToModelName($tableName); ?>;
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
			$<?php echo $tableName; ?> = $this->model->info($this->request);
			$this->assign('<?php echo $tableName; ?>', $<?php echo $tableName; ?>);
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
        $<?php echo $tableName; ?> = $this->model->info($this->request);
        $this->assign('<?php echo $tableName; ?>', $<?php echo $tableName; ?>);
        return $this->fetch();
    }
		//列表
	public function lists(){
		$<?php echo $tableName; ?>List = $this->model->lists($this->request, 12);	
		$this->assign('<?php echo $tableName; ?>List', $<?php echo $tableName; ?>List);
		return $this->fetch();
	}
}
