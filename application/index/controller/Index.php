<?php
namespace app\index\controller;
use think\Db;
class Index
{
    public function index()
    {
        // $data = [
        //     ['name' => '小莉', 'age' => '23'],
        //     ['name' => 'charles', 'age' => '18'],
        //     ['name' => '张五', 'age' => '19']
        // ];
        // Db::name('student')->insertAll($data);
        // Db::table('student')->where('id',1)->select();
        
        // 或者使用助手函数`model`
        $student = model('Student');
        // $student = new Student;
        // $student->data([
        //     'name'  =>  '2thinkphp22222',
        //     'age' =>  '252222'
        // ]);
        // $student->save();

        // $data = Db::table('student')->where('id',1)->select();
        // $data = Db::table('student')->select();
        $data = $student->_MfindAll();
        // var_dump($data);
        return view('index', ['Student' => $data]);
    }
    public function getList()
    {
        if(request()->isGet()||request()->isAjax())
        {
            $data = Db::table('student')->select();
            return json(['code'=>0,'message'=>'请求成功', 'data'=>$data]);
        } else {
            return json(['code'=>1, 'message'=>'请求失败', 'data'=>'您的请求有误']);
        }
    }
    public function addBookDetails()
    {
        $data = input("post."); //使用助手函数获取请求的所有变量
        $filter = [
            "a" => $data['firstName']
        ];
        if(request()->isPost()||request()->isAjax())
        {
            return json(['code'=>0, 'message'=>'请求成功', 'data'=>$filter]);
            // $data = [
            //     ['name' => '小莉', 'age' => '23'],
            //     ['name' => 'charles', 'age' => '18'],
            //     ['name' => '张五', 'age' => '19']
            // ];
            // Db::name('student')->insertAll($data);
        } else {
            return json(['code'=>1, 'message'=>'请求失败', 'data'=>'您的请求有误']);
        }
    }
}
