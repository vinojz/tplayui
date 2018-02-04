<?php
namespace app\admin\controller;

use think\Controller;

class Index extends Base
{
    public function index()
    {
        return view('public/main', ['title' => '系统管理']);
    }
    public function main()
    {
        return view('index', ['title' => '系统管理']);
    }
    public function homepage()
    {
        return view('homepage', ['title' => '系统管理']);
    }
}
