<?php
/**
 * Created by PhpStorm.
 * User: zhoushuo <z_s106@126.com>
 * Date: 2017/12/16
 * Time: 11:04
 */
?>

<aside class="sidebar">
    <h4 class="sidebar-title">导航栏</h4>
    <div class="sidebar-panel-group" id="accordion">
        <?php for($i = 1; $i < 5; $i++) {?>
        <div class="sidebar-panel-heading">
            <h4 class="sidebar-panel-title">
                <a href="#">常规设置</a>
            </h4>
        </div>
        <div class="sidebar-panel-body">
            <ul>
                <li><a href="#">基本设置</a></li>
                <li><a href="#">基本设置</a></li>
                <li><a href="#">基本设置</a></li>
                <li><a href="#">基本设置</a></li>
                <li><a href="#">基本设置</a></li>
                <li><a href="#">基本设置</a></li>
                <li><a href="#">基本设置</a></li>
            </ul>
        </div>
    </div>
    <?php } ?>
</aside>

<?php
$cssString = <<<'EOF'
    /**侧边栏布局*/
    .sidebar {
        margin-top: 70px;
        width: 200px;
        border: 1px solid #ccc;
    }
    .sidebar li {
        list-style: none;
    }
    .sidebar a {
        color: #222;
    }
    .sidebar-panel-heading {
        background-color: #fff;
        border-radius: none;
    }

EOF;
$this->registerCss($cssString);
?>
