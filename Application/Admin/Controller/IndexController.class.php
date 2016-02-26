<?php
namespace Admin\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->assign('public', __ROOT__ . '/Application/Admin/Public/');
    }

    public function index()
    {
        if (empty($_SESSION['userInfo'])) {
            $this->display('login');
        } else {
            $this->assign('userInfo', $_SESSION['userInfo']);
            $this->display('index');
        }
    }

    //登录
    public function login()
    {
        $username = I('post.username');
        $passward = I('post.password');
        $User = M('user');
        $where['nikename'] = $username;
        $where['is_del'] = 1;
        //$res = $User->where($where)->field('uid, password')->find();
        $res = $User->where($where)->find();

        if (!empty($res)) {
            if ($res['password'] == md5($passward)) {
                $_SESSION['userInfo'] = $res;
                $this->assign('userInfo', $_SESSION['userInfo']);
                $this->success('登录成功', U('Index/index'));
            } else {
                $this->error('密码错误', U('Index/index'));
            }
        } else {
            $this->error('该用户不存在', U('Index/index'));
        }
    }

    //登出
    public function logout()
    {
        unset($_SESSION['userInfo']);
        $this->success('退出成功', U('Index/index'));
    }
}