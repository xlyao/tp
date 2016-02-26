<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->assign('public', __ROOT__ . '/Public/');
    }

    public function index()
    {
        $this->assign('public', __ROOT__ . '/Public/');
        $this->display('index');
    }
}