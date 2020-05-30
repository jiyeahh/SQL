<html>
    <meta charset="utf-8">
<?php
$host = 'localhost';
$user = 'root';
$pw = 'cyworld97';
$dbName = 'hjyDB';
$mysqli = new mysqli($host, $user, $pw, $dbName);
 
 $id=$_POST['id'];
 $password=($_POST['pwd']);
 $name=$_POST['name'];
 $position=$_POST['position'];
 
 $sql = "insert into hjymember (id, pass, name)";             
 $sql = $sql. "values('$id','$password','$name')";         
 if($mysqli->query($sql)){                                                              
  echo 'success inserting <p/>';                                                          
  echo $name.'님 성공적으로 가입되셨습니다! <p/>';    
  echo $name.'님 아이디와 비밀번호는 반드시 기억해주시기 바랍니다. <p/>';                   
  echo "사용자ID : $id. '<br />";
  echo "사용자password : $password. <br />";
  echo "사용자명: $name. <br />";          
 }else{                                                                               
  echo 'fail to insert sql';    
 }
mysqli_close($mysqli);
?>
    <input type="button" value="To the first screen" onclick="location='index.php'">
</html>