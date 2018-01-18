<?php
namespace app\index\controller;

use think\Env;

/**
 *
 */
class Index
{
    public function index()
    {

        // dump(config());
        // print_r($_ENV);
        $res = Env::get('database.username');
        dump($res);
    }
    public function info($id)
    {
        return "{$id}";
    }
}
