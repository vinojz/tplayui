<?php
namespace app\admin\controller;

use think\Controller;
use think\captcha\Captcha;

class Login extends Base
{
	public function index(){
		return view('', ['title' => '系统管理']);
	}

	public function doLogin(){
		$param = $this->request->param('vercode');
		$captcha = new Captcha();
		if( !$captcha->check($param))
		{
			$data['username'] ="经专";
			$data['sex'] ="男";
			$data['role'] =1;
			$result['code'] = 0;
			$result['msg'] = '登入失败';
			$result['data'] = $data;
			return json($result);
		}	
	}

	public function verify()
    {
        $captcha = new Captcha();
        return $captcha->entry();    
    }

	public function logout(){
		$data['username'] ="经专";
		$data['sex'] ="男";
		$data['role'] =1;
		$result['code'] = 0;
		$result['msg'] = '';
		$result['data'] = $data;
		return json($result);
	}
}