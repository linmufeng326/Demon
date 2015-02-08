<?php
namespace Admin\Controller;
use Think\Controller;
//后台登陆控制器
class LoginController extends Controller
{
	
public function index()
{
	
      $this->display('login');
    }
public function login()
{
	  $code=I("code");
     if(!$this->check_verify($code))
	 {
	 	$this->error("验证码错误!");
	 	}	 	
	 $db=M('admin');
	 $user=$db->where(array('username'=>I('username')))->find();
	 	//p($user);
	//p($user['password']);
	//p(I('password','','md5'));
	 if(!$user||$user['password']!==I('password','','md5'))
	 {  
	 	$this->error('账号或密码错误!');
	 }

		$data=array(
		
		'id'=>$user['uid'],
		'logintime'=>time(),
		'login_ip'=>get_client_ip()
		);
		//M('admin')->save($data);
		M('admin')->where(array('username'=>$username))->save($data);
		session('uid',$user['id']);
		session('username',$user['username']);
		session('logintime',date('Y-m-d H:i:s',$user['logintime']));
		session('loginip',$user['loginip']);
		$this->success("登录成功！", U('index/index'));		
    }
	
	function check_verify($code, $id ="")
{  
    $verify = new \Think\Verify();  
    return $verify->check($code, $id);  
}
public function Verify()
{
      $Verify = new \Think\Verify();
        //$Verify->fontSize = 15;
//      $Verify->length   = 4;
//	  $Verify->imageW =0;
//      $Verify->imageH =0;
//	  $Verify->codeSet = '0123456789';
//      $Verify->useNoise = false;
      $Verify->entry();
    
	}	

	
	}

?>