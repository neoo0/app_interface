<?php
require_once('./response.php');
$arr = array(
	'id' => 1,
	'name' => 'singwa'		
);
$data = '输入json数据';
$newData = array('中文', 'left');
echo json_encode($newData);
//Response::json(200, '数据返回成功', $arr);
	
	
	