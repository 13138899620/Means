<?php
namespace Home\Controller;

use Library\Auth;
use Think\Controller;
use Home\Common;


class UserController extends Controller
{
    public function login()
    {
        $blogs = serviceGet('blog/cnblogapi/get', array('userName' => 'MR-YY'));
        $blogs = json_decode($blogs);
        $this->display('login');
    }
}


