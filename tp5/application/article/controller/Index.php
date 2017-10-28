<?php
namespace app\article\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
        return $this->fetch('test');
    }
    public function test($name)
    {
        return view('test',['name'=>$name]);
    }
}
