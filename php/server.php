<?php
$user=$_POST['user'];
$password=$_POST['pwd'];
$stu_num=$_POST['student_number'];
$grade=$_POST['grade'];
$sex=$_POST['sex'];
$birthday=$_POST['birthday'];
$identification=$_POST['identification'];
$hb="";


$cnn=mysqli_connect("localhost", "root", "123456","yzy_test");
if ( !$cnn ) die("连接MySQL服务器失败: ".mysqli_error($cnn) );echo "连接MySQL服务器成功!<br>";
$sql="insert into userinfo values ('".$user."','".$password."','".$stu_num."','".$grade."','".$sex."','".$birthday."','".$identification."')";
$connected=mysqli_query($cnn,$sql);
echo "connect:$connected<br><br>";
echo "personal information:<br>";
$id = mysqli_insert_id($cnn);
if( $id != 0){
    echo "插入数据成功！";
}
echo "user:$user  <br>student_number:$stu_num  <br>password:$password  <br>grade:$grade <br>birthday:$birthday <br>sex:$sex <br>indentification:$identification";
