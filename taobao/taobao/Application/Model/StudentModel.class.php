<?php
namespace Model;
use Think\Model;

class StudentModel extends Model{
    /*function  say()
    {
        echo "Tom say good good study,day day up!";
    }

    function  sing($addres,$name)
    {
        echo "Tom is at ".$addres.",he is sing,name is".$name;
    }*/

    //批量验证
    protected $patchValidate=true;

    //自动定义验证
    protected  $_validate =array(
        array('Name','require','姓名不能为空！'),
        array('Age','require','年龄不能为空！'),
        array('Gender','require','性别不能为空！'),
        array('Gender','0,1','性别必须为0或1的数字！',0,'in'),
        //array('Gender','Age','两次需一致！',1,'confirm'),
        array('Hobby','Check_Hobby','爱好必须选择两种及以上！',1,'callback'),
    );

    function  Check_Hobby($arg)
    {
        if(count($arg)<2)
            return false;
        else
            return true;
    }

}


/*$student=new Studnt();
$student->say();
$student->sing('beijin','beijin welcome!');

$me=new \ReflectionMethod($student,'say');
$me->invoke($student);

$me=new \ReflectionMethod($student,'sing');
echo '<br/>';
$me->invokeArgs($student,array('ShangHai','I be believe'));
*/
