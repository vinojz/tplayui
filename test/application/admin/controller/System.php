<?php
namespace app\admin\controller;

use think\Controller;

class System{
	public function theme(){
		return view('', ['title' => '主题']);
	}
	public function message(){
		return view('', ['title' => '主题']);
	}
}