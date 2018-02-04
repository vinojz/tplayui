<?php
namespace app\admin\controller;

class Json
{
	public function menu(){
		$item1[0]['name'] = "list";
		$item1[0]['title'] = "等比例列表排列";
		$item1[1]['name'] = "list";
		$item1[1]['title'] = "等比例列表排列";
		$item2[0]['name'] = "list";
		$item2[0]['title'] = "等比例列表排列";
		$item2[1]['name'] = "list";
		$item2[1]['title'] = "等比例列表排列";


		$items[0]['name'] = "grid";
		$items[0]['title'] = "栅格";
		$items[0]['list'] = $item1;
		$items[1]['name'] = "form";
		$items[1]['title'] = "表单";
		$items[1]['list'] = $item2;
		$items[2]['name'] = "button";
		$items[2]['title'] = "按钮";

		$data[0]['name'] = "component";
		$data[0]['title'] = "组件";
		$data[0]['icon'] = "layui-icon-component";
		$data[0]['list'] = $items;

		$result['code'] = 0;
		$result['msg'] = '';
		$result['data'] = $data;
		return json($result);
	}

	public function new(){
		$result['code'] = 0;
		$result['msg'] = '';
		$result['data'] = '{"newmsg": 3}';
		return json($result);
	}

	public function user(){
		$data['username'] ="经专";
		$data['sex'] ="男";
		$data['role'] =1;
		$result['code'] = 0;
		$result['msg'] = '';
		$result['data'] = $data;
		return json($result);
	}
}