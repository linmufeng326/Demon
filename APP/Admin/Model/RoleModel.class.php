<?php
namespace Admin\Model;
use Think\Model;
class RoleModel extends Model{
protected $_validate = array(  
	    array('role_name', 'require', '角色名称不能为空！', 0, 'regex', 3),
		array('action_list', 'require', '必须要分配权限！', 1, 'regex', 3),
		array('role_name', '', '角色名已经存在！', 0, 'unique', 3),
	     );

}