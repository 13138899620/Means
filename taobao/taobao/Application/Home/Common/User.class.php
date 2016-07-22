<?php
namespace Home\Common;
const  UserName = 'Admin';
define('UserName', 'Root');

class User
{
    public $p1 = 1;

    protected  $prop_list=array();

    public function __get($p)
    {
        if(isset($this->prop_list[$prop]))
            return $this->prop_list[$p];
        else
            return '该属性不存在';
    }

    public function __set($p,$v)
    {
       $this->prop_list[$p]=$v;
    }


    function __unset($prop)
    {
        unset($this->prop_list[$prop]);
    }

    function Test()
    {
        echo "namespace Model";
    }

    function  __call($mothedName,$argument)
    {
        if($mothedName==='f1')
        {
            $len=count($argument);
            if($len<1||$len>2)
            {
                trigger_error("非法的方法！",E_USER_ERROR);
            }
            else if($len==1)
            {
             return $argument[0];
            }
            else if($len==2)
            {
                return $argument[0]*$argument[0]+$argument[1]*$argument[1];
            }
        }
    }
}


namespace Home\Common1;
class User
{

    function Test()
    {
        echo "namespace Model1";
    }
}



