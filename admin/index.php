<?php
$admin = false;
session_start();
if (isset($_SESSION["admin"]) && $_SESSION["admin"] === true) {
    ?>
    <h1>后台管理</h1>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="file">文件名：</label>
        <input type="file" name="file" id="file"><br>
        <input type="submit" name="submit" value="提交">
    </form>

    <?php
} else {
    $_SESSION["admin"] = false;
    echo "<script>alert(/未登录/);location.href='login.php'</script>";
}

?>