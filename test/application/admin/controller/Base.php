<?php
namespace app\admin\controller;

use think\Controller;

class Base extends Controller
{
	public function initialize()
    {
        if(empty(session('username'))){

            //$this->redirect(url('login/index'));
        }

        $this->assign([
            'username' => session('username')
        ]);
    }
}