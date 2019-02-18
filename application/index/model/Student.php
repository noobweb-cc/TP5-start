<?php
namespace app\index\model;

use think\Model;

class Student extends Model
{
    // 设置当前模型对应的完整数据表名称
    protected $table = 'student';

    public function _MfindAll () {
        return $this->select();
    }
}