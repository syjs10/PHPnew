<?php
namespace app\index\controller;

use think\Request;

/**
 *
 */
class Index
{
    public function index()
    {

        // dump(config());
        // print_r($_ENV);
        // $res = Env::get('database.username');
        // dump($res);
        return view();
    }
    public function info($id)
    {
        return "{$id}";
    }
    public function re(Request $request)
    {
        dump($request);
    }
}
