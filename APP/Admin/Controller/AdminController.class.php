<?php
namespace Admin\Controller;
use Think\Controller;
// 将来所有需要登录才能访问的控制器就继承自这个控制器
class AdminController extends Controller
{
		Public function _initialize(){
	if(!isset($_SESSION['uid']))
		{
			
			$this->redirect('Login/index/');
		}
	}
	
}

?>