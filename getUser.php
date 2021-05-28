<?php
require_once 'model.php';
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $id=strtolower($id);
    $arr=array('and','select','or','order','union','from','if','where');
    $id=str_replace($arr,"",$id);
    $con = mysqli_connect($host, $username, $password, $dataBase);
    if (!$con) {
        die("连接失败: " . mysqli_connect_error());
    }
    $sql = "select * from users where id=" . $id;
    $result = mysqli_query($con, $sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            header('Content-Type:application/json');
            $ret = ['uid' => $row['id'], 'name' => $row['name'], 'intro' => $row['intro']];
            echo json_encode($ret, JSON_UNESCAPED_UNICODE);
        }
    }
} else {
    echo "请输入id";
}

?>