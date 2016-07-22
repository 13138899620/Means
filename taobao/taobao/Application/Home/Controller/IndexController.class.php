<?php
namespace Home\Controller;
use Think\Controller;
use Home\Common\User;
use Home\Common;
use Think\Verify;


class IndexController extends Controller {
    //数据库连接字符串
    public function index()
    {
        /*$user =new User();
        echo Common\UserName; //const 区别命名空间
        echo '<br/>';
        echo UserName; //define 不区分命名空间
        $user1=new \Home\Common1\User();
        $user->Test();
        echo '<br/>';
        $user1->Test();


        $this->display();*/

        //验证码
        /*$very=new Verify();
        $very->entry();*/

        $user =new User();
       /* echo $user->p1;
        $user->p2=20;
        echo '<br/>';
        echo $user->p2;

        unset($user->p1);
        echo $user->p1;*/

//        echo phpinfo();

        $this->display();
    }
}
