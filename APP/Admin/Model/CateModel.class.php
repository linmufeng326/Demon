<?php
namespace Admin\Model;
use Think\Model;
class CateModel extends Model 
{ 
		public function reSort()
	{
		//echo asdfds;die;
		// 1. 先取出所有的栏目
		$cate=M('cate')->order('sort asc')->select();
		// 2. 使用下面的函数递归重新排序
		return $this->Leveler($cate);
	}
	Static public function Leveler ($cate,$pid=0,$html='&nbsp;└──',$level=0)
	{
		$arr=array();
		foreach ($cate as $k => $v){
			if($v['pid']==$pid){
				$v['level'] = $level+1;
				$v['html']=str_repeat($html,$level);
				$arr[] = $v;
				// 把这条 记录从数组中删除，再找子类时就不用再循环这条记录了
				unset($cate[$k]);
				// 再找当前这条记录的所有的子类
				//$this->_reSort($data, $v['id'], $level+1);
				//$arr=array_merge($data,$v['id'],$level + 1);
				//self::Leveler($cate,$v['id'],$level+1);
				$arr=array_merge($arr, self::Leveler ($cate,$v['id'],$html,$level + 1));
//				foreach($v as $key=>$value)
//               echo '&nbsp;'.$key."=>".$value;
//				echo '<br/>';
			}
			
		}
		return $arr;
	}	
}





