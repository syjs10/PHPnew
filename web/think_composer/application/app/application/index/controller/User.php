<?php
namespace app\index\controller;

use app\common\controller\User as commonUser;

/**
 *
 */
class User extends commonUser
{

    public function demo()
    {
        return $this->showName('syjs10');
    }
}
