<?php
if (($_FILES["file"]["size"] < 204800))
{
    if ($_FILES["file"]["error"] > 0)
    {
        echo "错误：: " . $_FILES["file"]["error"] . "<br>";
    }
    else
    {
        if (file_exists("../upload/" . $_FILES["file"]["name"]))
        {
            echo $_FILES["file"]["name"] . " 文件已经存在。 ";
        }
        else
        {
            move_uploaded_file($_FILES["file"]["tmp_name"], "../upload/" . $_FILES["file"]["name"]);
            echo "文件存储在: " . "../upload/" . $_FILES["file"]["name"];
        }
    }
}
else
{
    echo "文件过大";
}
?>