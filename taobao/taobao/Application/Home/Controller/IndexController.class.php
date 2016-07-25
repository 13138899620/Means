<?php
namespace Home\Controller;
use Think\Controller;
use Home\Common\User;
use Home\Common;
use Model\ProductModel;


class IndexController extends Controller {
    //数据库连接字符串
    public function index()
    {
        $product = new ProductModel();
        $list=$product->limit('1,15')->select();
        for($i=0;$i<5;$i++)
        {
            $products[] = array_slice($list, $i * 3 ,3);
        }
        $this->assign('products',$products);
        $this->display();
    }
}
