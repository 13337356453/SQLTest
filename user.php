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
    <title>用户中心</title>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/user.css">
</head>
<body>
<h1>查询用户信息</h1>
<form>
    <label for="id">请输入用户id</label>
    <input type="text" id="id"><br>
    <input type="button" value="查询">
</form>
<div>
    <h2>id:<span id="uid"></span></h2>
    <h2>name:<span id="name"></span></h2>
    <h2>intro:<span id="intro"></span></h2>
</div>
<script src="js/user.js"></script>
</body>
</html>