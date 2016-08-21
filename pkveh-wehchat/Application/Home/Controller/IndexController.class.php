<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $this ->display('/index');
    }

    public function setting()
    {
        $this ->display('/setting');
    }


    public function test(){
        $data = M('customer')->select();
        $this->ajaxReturn($data);
    }
}