<?php
namespace Admin\Controller;
use Think\Controller;
 class RoleController extends Controller{
		public function add()
		{ 
			$power=C('priv_list');
			$this->assign('power',$power);
			//显示表单
			$this->display();
		}
		public function run()
		{//p($_POST);die;
			if(IS_POST)
			{
								
				$roleModel=D('Role');//生成模型
				$_POST['action_list'] = implode(',', $_POST['action_list']);
				if($roleModel->create())//验证表单
				{
					
					if($roleModel->add())//插入数据库
					{
						$this->success('成功');
						
					}
					else{
						
						exit($this->error($roleModel->getError()));
					}
				}
				else{
					exit($this->error($roleModel->getError()));
					}
			}
			
			//显示表单
			//$this->display();
			
		}
		public function index()
	{
		$where='1';
		if(isset($_GET['wh'] ) && $_GET['wh'])
		{
			$where .= ' AND role_name LIKE "%'.$_GET['wh'].'%"';
		}
		$order='ASC';
		if(isset($_GET['OR']) && $_GET['OR'])
		{
			$order=$_GET['OR'];
		}
		$roleModel=M('Role');
		$count= $roleModel->where($where)->count();// 查询满足要求的总记录数 
		//p($count);die;
		$Page= new \Think\Page($count,2);//
		$show= $Page->show();// 分页显示输出  
		//p($Page);die;
		$list = $roleModel->where($where)->order(" id $order")->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出$this->display();
		$this->display();
		}
		
	public function edit()
		{ $id=I('id',0,'intval');
			$power=C('priv_list');
			p($power);
			$model = M('role');
		// 根据主键查询一条记录
		$info = $model->find($id);
		//p($info);
		$this->assign('info', $info);
			$this->assign('power',$power);
			//显示表单
			$this->display();
		}
		public function editrun()
		{//p($_POST);die;
			if(IS_POST)
			{
								
				$roleModel=D('Role');//生成模型
				$_POST['action_list'] = implode(',', $_POST['action_list']);
				if($roleModel->create())//验证表单
				{
					
					if($roleModel->save())//插入数据库
					{
						$this->success('成功',U('role/index'));
						
					}
					else{
						
						exit($this->error($roleModel->getError()));
					}
				}
				else{
					exit($this->error($roleModel->getError()));
					}
			}
			
		
			//显示表单
			//$this->display();
			
		}
 }
 ?>	