<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/index', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],
    '__alias__' =>  [ // 别名
        'user'  =>  'index/User',
    ],
    // 定义资源路由
    '__rest__'=>[
        // 指向index模块的blog控制器
        'blog'=>'index/blog',
    ],
    // student相关接口
    '[student]'     =>  [
        'getList' => ['index/getList', ['method' => 'get']]
    ],
    // book相关接口
    '[book]'     =>  [ // 添加书信息
        'addBookDetails' => ['index/addBookDetails', ['method' => 'post']]
    ],

];
