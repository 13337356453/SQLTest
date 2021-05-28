<?php
require_once '../model.php';
if (isset($_POST['uname']) and isset($_POST['pwd'])) {
    try{
        $pdo = new PDO("mysql:host=$host;dbname=$dataBase",$username,$password);
    }catch(PDOException $e){
        die("数据库连接失败".$e->getMessage());
    }
    $uname = $_POST['uname'];
    $pwd = md5($_POST['pwd']);
    $sql = "select * from admin where uname=? and pwd=?";
    $stmt=$pdo->prepare($sql);
    $stmt->bindParam(1,$uname);
    $stmt->bindParam(2,$pwd);
    $stmt->execute();
    $row=$stmt->fetchAll();
    if (!$row > 0) {
        echo "<script>alert(/登录失败/);location.href='login.php'</script>";
    } else {
        session_start();
        $_SESSION["admin"] = true;
        echo "<script>alert(/登录成功/);location.href='index.php'</script>";
    }
    $stmt=null;
    $pdo=null;
} else {
    ?>
    <form action="login.php" method="post" name="Login"">
    <div style="color: gray">
        <h2>登录系统</h2>
    </div>
    <hr>
    <div>
        <label>用户名</label>
        <div>
            <input type="text" name="uname" id="uname" placeholder="用户名" autocomplete="off">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">密    码</label>
        <div class="layui-input-block">
            <input type="password" name="pwd" id="pwd" placeholder="密码" autocomplete="off">
        </div>
    </div>
    <div>
        <div>
            <input type="submit" value="登录">
            <input type="reset" value="重置">
        </div>
    </div>
    </form>
<?php } ?>
