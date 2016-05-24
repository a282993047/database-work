<?php
session_start();
$user = $_SESSION['login_name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>教师信息查询系统</title>
    <link rel="stylesheet" href="./static/css/index.css">
    <link rel="stylesheet" href="./static/css/bootstrap.min.css">
</head>
<body>
<div id="page">
    <header id="menu-top">
        <div class="container">
            <nav>
                <a href="index.php">首页HOME</a>
                <?php  if(!$user)
                    echo '<a href="login.html" class="btn btn-action">管理员登录</a>';
                else {echo '<a>'.$user.'</a>';
                    echo '<a href="logout.php">登出</a>';
                }
                ?>
            </nav>
        </div>
    </header>
</div>
</body>
</html>