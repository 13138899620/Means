<?php
/**
 * Created by PhpStorm.
 * User: Yang
 * Date: 2016/7/23
 * Time: 21:45
 */

namespace Home\Controller;
use Think\Controller;
use Home\Common;
use Library\ExcelToArrary;
use Model\ProductModel;

class ProductController extends Controller
{
    public function index()
    {
        $this->display();
    }

    /**
     * 上传Excel文件
     */
    public function upload()
    {
        $tmp_file = $_FILES ['file'] ['tmp_name'];
        $file_types = explode(".", $_FILES ['file'] ['name']);
        $file_type = $file_types [count($file_types) - 1];

        /*判别是不是.xls文件，判别是不是excel文件*/
        if (strtolower($file_type) != "xlsx" && strtolower($file_type) != "xls") {
            $this->error('不是Excel文件，重新上传');
        }

        /*设置上传路径*/
        $savePath = C('UPLOAD_DIR');

        /*以时间来命名上传的文件*/
        $str = date('Ymdhis');
        $file_name = $str . "." . $file_type;

        /*是否上传成功*/
        if (!copy($tmp_file, $savePath . $file_name)) {
            $this->error('上传失败');
        }
        $ExcelToArrary = new ExcelToArrary();//实例化
        $res = $ExcelToArrary->read(C('UPLOAD_DIR') . $file_name, "UTF-8", $file_type);//传参,判断office2007还是office2003

        foreach ($res as $k => $v) //循环excel表
        {
            $k = $k - 1;//addAll方法要求数组必须有0索引
            if($k>0) {
                $k = $k - 1;
                $data[$k]['id'] = $v [0];//创建二维数组
                $data[$k]['name'] = $v [1];
                $data[$k]['photo'] = $v [2];
                $data[$k]['url'] = $v [3];
                $data[$k]['shopname'] = $v [4];
                $data[$k]['price'] = $v [5];
                $data[$k]['sales'] = $v [6];
                $data[$k]['percentage'] = $v [7];
                $data[$k]['commission'] = $v [8];
                $data[$k]['wangwang'] = $v [9];
                $data[$k]['shortlink'] = $v [10];
                $data[$k]['longlink'] = $v [11];
            }
        }
        $product = new ProductModel();//M方法
        $result = $product->addAll($data);
        if (!$result) {
            $this->error('导入数据库失败');
            exit();
        } else {
            $this->success('导入成功');
        }
    }
}



