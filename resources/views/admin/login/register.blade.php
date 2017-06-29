<!DOCTYPE html>
<html>
<head>
<title>注册</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="keywords" content="注册页面模板,网站注册页面,注册模板页面,网站模板,注册页面表单验证">
<meta name="description" content="JS代码网提供大量的注册页面模板的学习和下载">
<link rel="shortcut icon" href="/g/images/favicon.ico" />
<link href="/d/style/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/d/js/jquery.js"></script>
<script type="text/javascript" src="/d/js/jquery.i18n.properties-1.0.9.js" ></script>
<script type="text/javascript" src="/d/js/jquery-ui-1.10.3.custom.js"></script>
<script type="text/javascript" src="/d/js/jquery.validate.js"></script>
<script type="text/javascript" src="/d/js/md5.js"></script>
<script type="text/javascript" src="/d/js/page_regist.js?lang=zh"></script>
<!--[if IE]>
  <script src="/g/js/html5.js"></script>
<![endif]-->
<!--[if lte IE 6]>
  <script src="/g/js/DD_belatedPNG_0.0.8a-min.js" language="javascript"></script>
  <script>
    DD_belatedPNG.fix('div,li,a,h3,span,img,.png_bg,ul,input,dd,dt');
  </script>
<![endif]-->
</head>
<body class="loginbody">
<div class="dataEye">
  <div class="loginbox registbox">
    <div class="logo-a">
     
    </div>
    <div class="login-content reg-content">
      <div class="loginbox-title">
        <h3>注册</h3>
      </div>
      <form id="signupForm" action="/admin/login/insert" method="post">
      {{ csrf_field() }}
      <div class="login-error"></div>
      <div class="row">
        <label class="field" for="username">用户名</label>
        <input type="text" value="" class="input-text-user noPic input-click" name="username" id="contact">
      </div>
      <div class="row">
        <label class="field" for="password">密码</label>
        <input type="password" value="" class="input-text-password noPic input-click" name="password" id="password">
      </div>
      <div class="row">
        <label class="field" for="passwordAgain">确认密码</label>
        <input type="password" value="" class="input-text-password noPic input-click" name="repassword" id="passwordAgain">
      </div>
      <div class="row">
        <label class="field" for="email">邮箱</label>
        <input type="text" value="" class="input-text-user noPic input-click" name="email" id="email">
      </div>
    
     
      <div class="row">
        <label class="field" for="phone">电话</label>
        <input type="text" value="" class="input-text-user noPic input-click" name="phone" id="tel">
      </div>
      <div class="row tips">
        <input type="checkbox" id="checkBox">
        <label>
        我已阅读并同意
        <a href="#" target="_blank">隐私政策、服务条款</a>
        </label>
      </div>
      <div class="row btnArea">
        <input type="submit" class="login-btn" id="submit" value="注册">
      </div>
      </form>
    </div>
    <div class="go-regist">
      已有帐号,请<a href="/admin/login/login" class="link">登录</a>
    </div>
  </div>
  
<div id="footer">
  <div class="dblock">
    <div class="inline-block"></div>
    <div class="inline-block copyright">
      <p><a href="#">关于我们</a> | <a href="#">微博</a> | <a href="#">隐私政策</a> | <a href="#">人员招聘</a></p>
      <p> Copyright © 2013 O(∩_∩)O哈哈~</p>
    </div>
  </div>
</div>
</div>
<div class="loading">
  <div class="mask">
    <div class="loading-img">
    <img src="/d/images/loading.gif" width="31" height="31">
    </div>
  </div>
</div>
</body>
</html>

