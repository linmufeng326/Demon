<?php
namespace Admin\Controller;
use Think\Controller;
class AttrController extends AdminController{
	
	public  function index(){
		$this->attr=M('attr')->select();
		$this->display();
	}
	//添加属性
	public function addattr(){
		
		$this->display();
	}
	//删除属性
	public function delattr(){
		$id=I('id',0,'intval');	
        $where = 'id='.$id;
		if(M('attr')->where('id='.$id)->delete())
		{
			$this->success('删除成功',U('Attr/index'));
		}
		else
			{
				$this->error('删除失败');
			
			}
		
		//$this->display();
	}
	//修改数据
	function edit(){
     $user=M('attr');
     $id=(int)$_GET['id'];
     $list=$user->where("id=$id")->find();
	 //p($list);
	 //die;
     $this->assign('attr',$list);
     $this->display();
   }
	
 public function editattr(){
 	$db = M('attr'); 
 	$c = $db->create();
	 //echo $data['id'];die;
 	//$c=array();
 	   //$c=$_POST;
	   //P($c['id']);die;
       //$db = D("attr");
	   //$user=$db->where(array('id'=>$c['id']))->find();
	   $data=array(
		
		'name'=>$c['name'],
		'color'=>$c['color']
		);
		//p($data);
		//die;
		$a=$c['id'];
		//p($a);die;
      $info=M('attr')->where('id='.$a)->save($data);
        if($info){
            $this->success("编辑成功",U('Attr/index'));
        }else{
            $this->error("编辑失败");
        }
    }
	//处理表单数据
	public  function runattr(){
		if(M('attr')->add($_POST))
		{
			$this->success('添加成功',U('Attr/index'));
		}
		else
			{
				$this->error('添加失败');
			
			}
			
	}
}

?>