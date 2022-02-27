<?php
 $user=$_POST['user'];
 $pwd=$_POST['pwd'];
 $grade=$_POST['grade'];
 $hobbies=$_POST['hobbies'];

 echo "USER:$user  pwd:$pwd   grade:$grade<br>";
 $hb="";
 echo"your hobbies:";

 foreach($hobbies as $hobby){
     $hb.= $hobby.",";
 }
 echo $hb."<br>";
 $cnn=mysqli_connect("localhost","root","root","test");
$sql="insert into userinfo values('".$user."','".$pwd."','".$hb."')";
//     $result=mysqli_query($cnn,$sql);

     /*
      * 常见的sql语句  拓展学习 SQL 语法（基础）
      * 1、select： select username from userinfo where username like 'z*' order by username;
      * 2、insert
      * 3、update
      * 4、delete
      * 5、alter
      * 6、drop
      */
//$sql="select * from userinfo where username='zhangsan'";
$sql="select * from userinfo where username like'zhang%'";
$result=mysqli_query($cnn,$sql);
while($row=mysqli_fetch_array($result)){
    echo "username:".$row['username']."\tpassword:".$row['password']."\n<br>";
}