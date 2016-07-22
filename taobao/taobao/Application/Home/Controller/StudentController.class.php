<?php
namespace Home\Controller;

use Model\StudentModel;
use Library\BaseController as Controller;


class StudentController extends Controller
{
    public function  Add()
    {
        //实例化普通Model对象
        //$student=new StudentModel();

        //实例化父类Model对象,用于执行原生Sql语句，不针对某一个表
        //$model=D('');

        //$student = D('Student');

        //通过数组添加
        /*$data=array(
            'Id'=>'9',
            'Name'=>'TT',
            'Gender'=>'1',
            'Age'=>'22',
        );
        $result=$student->add($data);*/

        //AR方式添加
        /* $student->Id='11';
        $student->Name='CoCo';
        $student->Gender='0';
        $student->Age1='30';
        $result=$student->add();*/

        //sava（） 通过Id修改
        /*$student->Id = 9;
        $student->Name = 'TT';
        $student->Gender = '0';
        $student->Age = '33';
        $result = $student->save();*/


        //sava（） 通过where条件修改
      /*  $student->Gender = '0';
        $student->Age = '33';
        $result = $student->where('Id>=8') ->save();*/


        //获取预定变量 $_SERVER包含的值
       /* echo '<table border="1">';
        foreach($_SERVER as $key=>$value)
        {
            echo '<tr>';
            echo '<td>'.$key.'</td>';
            echo '<td>'.$value.'</td>';
            echo '</tr>';
        }
        echo '</table>';*/



        $student =new StudentModel();
        //post提交表单
        if(!empty($_POST))
        {
            $model= $student->create();
            if($model)
            {
              //*  $_POST['Hobby']=implode(',',$_POST['Hobby']);
                $result=$student->add($_POST);

                if($result)
                {
                    $this->redirect('Get',array(),0,'Add Student Success!');
                }
                else
                {
                    $this->redirect('/Home/User/login',array(),3,'Add Student Faild!');
                }//*/

            }
            else
            {
                $errorInfo=$student->getError();
                $this->assign('errorInfo',$errorInfo);
                $this->display();
            }
        }
        else
        {
            $this->display();
        }
    }

    public function Get()
    {
        $student = new StudentModel();
        //where 限制查询条件
        //$student->where('name="Tom"');

        //field 限制查询的字段
        //$student->field('Id,name,gender,age');

        //limit(长度） 限制查询条数
        //limit(长度,偏移量）
        //$student->limit(1);

        //排序 order
        //$student->order('age');

        //分组 group
        //$student->group('gender');
        //$student->field('gender,max(age) as age');

        //having   having和where的区别  where必须是查询表中必须存在的字段，having必须是查询结果集中的存在的字段
        //$student->having('age>25');

        //连贯操作
        //$data = $student->field('name,age')->limit(3)->order('age desc')->where('age>25')->select();

        //原生Sql
        $rows=$student->execute("update Student set gender=1,age=22 where ID=9");
        echo $rows;
        echo '<br/>';
        $data=$student->query("select * from Student");
        foreach ($data as $key) {
            foreach ($key as $value) {
                echo $value . ' ';

            }
            echo '<br/>';
        }
       // show_bug($data);

        /*$Student = M('Student','','DB_CONFIG_PHP');
        $Student->getByName('Tom');
        echo $Student->name;
        $gender= $Student->gender;
        if($gender==1)
        {
            echo '男';
        }
        if($gender==0)
        {
            echo '女';
        }*/
        $this->display();
    }

    public function Edit()
    {
        //post提交表单
        if(!empty($_POST))
        {
            $student = D('Student');
            $result=$student->save($_POST);

            if($result)
            {
                $this->redirect('Get',array(),0,'Edit Student Success!');
            }
            else
            {
                $this->redirect('/Home/User/login',array(),3,'Edit Student Faild!');
            }
            show_bug($_POST);
        }
        else
        {
            $this->display();
        }
    }

    public function Delete($Id)
    {
        $student=new StudentModel();
        $result=$student->where('id='.$Id)->delete();
        if($result)
        {
            $this->redirect('Get',array(),0,'Delete Student Success!');
        }
        else
        {
            $this->redirect('/Home/User/login',array(),3,'Delete Student Faild!');
        }
        show_bug($result);
        $this->display();
    }
}



