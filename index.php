<?php
    include "top.php";
    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>XX企业网站</title>
        <style>
            a {margin-left: 20px}
        </style>
</head>
<body>
    <center><h1>SQL注入的测试</h1></center>
    <center><h2>这里是主页</h2></center>
    <center><h3>到处看看吧</h3></center>
    <a href="index.php">主页</a><a href="news.php?id=1">新闻</a><a href="product.php?id=1">产品</a><a href="user.php">用户信息查询</a>
    <h2><a target="_blank" href="https://blog.csdn.net/realmels/article/details/117338077">解题Write up</a></h2>
</body>
</html>
<?php
include "bottom.php";
?>
