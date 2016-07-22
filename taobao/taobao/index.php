<?php
header("content-type:text/html;charset=utf-8");
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
//if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);
//define('APP_DEBUG',false); //生产模式( 错误提示模糊，防止黑客攻击)

// 定义应用目录
define('APP_PATH','./Application/');

define('__ROOT__', 'http://www.yangyi.com:81');

//给静态文件访问目录设置常量，方便后期维护  调用
/*<?php echo CSS_URL; ?>*/

//输出调试信息
function show_bug($msg){
    echo "<pre style='color:red; font-weight: bold'>";
    var_dump($msg);
    echo "</pre>";
}

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';



