<html>
    <head>
        <meta charset="utf-8">
        <title>sign up page</title>
    </head>
    <body>

        <style>
            * {
                text-align: center;
            }
        </style>
        <form name="join" method="post" action="membersave.php">
            <h1>input your information</h1>
            <table>
                <tr>
                    <td>ID</td>
                    <td><input type="text" size="30" name="id" value="숫자만 입력해주세요" onfocus="this.value=''"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" size="30" name="pwd"></td>
                </tr>
                <tr>
                    <td>name</td>
                    <td><input type="text" size="30" maxlength="10" name="name"></td>
                </tr>
                <tr>
                    <td>금액</td>
                    <td><input type="text" size="30" maxlength="10" name="intbalans"></td>
                </tr>
            </table>
            <input type="submit" value="submit"><input type="reset" value="rewrite">
            <input type="button" value="Back" onclick="javascript:history.go(-1)">
        </form>
<?php
$host = 'localhost';
$user = 'root';
$pw = 'cyworld97';
$dbName = 'bank';
$mysqli = new mysqli($host, $user, $pw, $dbName);
 
 $id=$_POST['id'];
 $password=($_POST['pwd']);
 $name=$_POST['name'];
 $intbalans=$_POST['intbalans'];
 
 $sql = "insert into user (id, username, password, intbalans)";             
 $sql = $sql. "values('$id','$name','$password','$intbalans')";         
 if($mysqli->query($sql)){                                                              
  echo 'success inserting <p/>';                                                          
  echo $name.'님 성공적으로 가입되셨습니다! <p/>';    
  echo $name.'님 아이디와 비밀번호는 반드시 기억해주시기 바랍니다. <p/>';                   
  echo "사용자ID : $id. <br />";
  echo "사용자password : $password. <br />";
  echo "사용자명: $name. <br />";    
  echo "초기금액: $intbalans. <br />";    
        
 }else{                                                                               
  echo 'fail to insert sql';    
 }
mysqli_close($mysqli);
?>
    <input type="button" value="To the first screen" onclick="location='index.php'">
    </body>
</html>