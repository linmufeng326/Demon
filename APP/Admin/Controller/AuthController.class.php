<?php
/**
 * 权限验证控制器
 * 
 */
namespace Admin\Controller;
use Think\Controller;
class AuthController extends AdminController {
    /**
	 * 权限首页视图
	 */
	public function index(){
		$this->display();
	}
	
   /**
	 * 权限列表视图
	 */
	public function rule(){
		$this->rule=M('auth_rule')->select();
		$this->display();
	}

	/**
	 * 添加权限视图
	 */
	public function addRule(){
		$this->display();
	}
	/**
	 * 添加权限表单处理
	 */
	public function addRules(){
		if (!IS_POST) {
			exit('页面错误~');
		}
		$data=array(
			'title'=>I('post.name'),
			'name'=>I('post.nlink')
			);
		if (M('auth_rule')->add($data)) {
			$this->success('添加成功');
		}else{
			$this->error('添加失败！');
		}
	}
   /**
	 * 添加用户组视图
	 */
	public function addGroup(){
		$this->display();
	}
	/**
	 * 添加用户组表单处理
	 */
	public function addGrouprun(){
		if (!IS_POST) {
			exit('页面错误~');
		}
		$data=array(
			'title'=>I('post.name'),
			);
		if (M('auth_group')->add($data))
		 {
			$this->success('添加成功');
		}
	  else
	  {
		$this->error('添加失败！');
		}
	}
   	/**
	 * 用户组列表视图
	 */
	public function groupList(){
		$this->grouplist=M('auth_group')->select();
		$this->display();
	}
}