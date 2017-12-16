<?php
/**
 * Created by PhpStorm.
 * User: zhoushuo <z_s106@126.com>
 * Date: 2017/12/16
 * Time: 11:04
 */
?>

<header class="header-container">
    <div class="header-left">
        <img src="/images/logo.png" class="header-logo">
    </div>
    <div class="header-right">
        <div class="header-link">
            <span>欢迎您 admin 超级管理员</span>
            <ul>
                <li><a class="header-link-item"><i class="fa fa-user-o" aria-hidden="false"></i>我的资料</a></li>
                <li><a class="header-link-item"><i class="fa fa-minus-circle" aria-hidden="true"></i>我要注销</a></li>
                <li><a class="header-link-item"><i class="fa fa-home" aria-hidden="true"></i>网站首页</a></li>
            </ul>
        </div>
        <ul class="header-navbar">
            <li><a href="#" class="header-navbar-item">文章管理</a></li>
            <li><a href="#" class="header-navbar-item">文章管理</a></li>
            <li><a href="#" class="header-navbar-item">文章管理</a></li>
            <li><a href="#" class="header-navbar-item">文章管理</a></li>
            <li><a href="#" class="header-navbar-item">文章管理</a></li>
        </ul>
    </div>
</header>

<?php
    $cssString = <<<'EOF'
    .header-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 70px;
        border: none;
        background: #c3ced5 url('/images/bg.jpg') no-repeat;
        background-size: 100% 100%; 
        display: flex;
        justify-content: space-between;
    }
    .header-right {
        height: 100%;
    }
    .header-right ul>li {
        display: inline-block;
    }
    .header-right ul>li>a {
        color: #fff;
    }
    .header-logo {
        height: 50px;
        margin: 10px 20px;
    }
    .header-link {
        display: flex;
        margin:10px 20px;
    }
    .header-link-item {
    }
    .header-navbar {
        position: absolute;
        bottom: -10px;
        right: 10px;
    }
    .header-navbar-item {
        display: inline-block;
        width: 100px;
        line-height: 32px;
        background-color: #0863b0;
        text-align: center;
        border-radius: 5px;
    }
EOF;
    $this->registerCss($cssString);
?>
