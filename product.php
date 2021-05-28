<?php
include "top.php";
require_once 'model.php';

$id=1;
if (isset($_GET['id'])){
    $id=$_GET['id'];
}
try{
    $pdo = new PDO("mysql:host=$host;dbname=$dataBase",$username,$password);
}catch(PDOException $e){
    die("数据库连接失败".$e->getMessage());
}
$sql="select * from products where id=?";
$stmt=$pdo->prepare($sql);
$stmt->bindValue(1,$id);
$stmt->execute();
while ($row=$stmt->fetch())
{
    $name=$row['name'];
    $introduction=$row['introduction'];
}
$stmt=null;
$pdo=null;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>产品</title>
</head>
<body>
<center><h1><?php echo $id?></h1></center>
<center><h2><?php echo $name?></h2></center>
<p><?php echo $introduction?></p>
</body>
</html>
<?php
include "bottom.php";
?>
