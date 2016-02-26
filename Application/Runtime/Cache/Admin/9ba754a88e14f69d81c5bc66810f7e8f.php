<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>后台登录</title>

    <link href="/tp/Application/Admin/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/tp/Application/Admin/Public/css/signin.css" rel="stylesheet">

</head>

<body>

<div class="signin">
    <div class="signin-head">
        <img width="120" height="120" src="<?php echo $public ?>images/test/img_top.jpg" alt="" class="img-circle">
    </div>
    <form action="/tp/index.php/Admin/Index/login" method="post" class="form-signin" role="form">
        <input type="text" name="username" class="form-control" placeholder="用户名" required autofocus/>
        <input type="password" name="password" class="form-control" placeholder="密码" required/>
        <button class="btn btn-lg btn-warning btn-block" type="submit">登录</button>
        <!--<label class="checkbox">
            <input type="checkbox" value="remember-me"> 记住我
        </label>-->
    </form>
</div>

</body>
</html>