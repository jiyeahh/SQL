<html>
    <meta charset="utf-8">
    <body>

        <style>
            * {
                text-align: center;
            }
        </style>
        <form name="join" method="post" action="starterror.php">
            <h1>
                input your Account impormation</h1>
            <table>
                <tr>
                    <td>Account Number</td>
                    <td><input type="text" size="30" name="accountnum"></td>
                </tr>
                <tr>
                    <td>Type</td>
                    <td><input type="text" size="20" name="type"></td>
                </tr>
                <tr>
                    <td>Balance</td>
                    <td><input type="text" size="30" name="balance"></td>
                </tr>
                <tr>
                    <td>ID</td>
                    <td><input type="text" size="10" name="id"></td>
                </tr>
            </table>
            <input type="submit" value="submit"><input type="reset" value="rewrite">
            <input type="button" value="Back" onclick="javascript:history.go(-1)">
        </form>

    <?php
    echo '계좌는 1개이상 만들 수 있습니다.';
$host = 'localhost';
$user = 'root';
$pw = 'cyworld97';
$dbName = 'bank';
$mysqli = new mysqli($host, $user, $pw, $dbName);
 $accountnum=$_POST['accountnum'];
 $type=$_POST['type'];
 $balance=$_POST['balance'];
 $id=$_POST['id'];
 
 
 $sql = "insert into account (accountnum, type, balance,id)";             
 $sql = $sql. "values('$accountnum', '$type', '$balance','$id')";         
 if($mysqli->query($sql)){                                                              
  echo 'success inserting <p/>';                                                          
  echo '고객님 성공적으로 계좌가 가입되셨습니다! <p/>';    
  echo '고객님 계좌번호와 고객번호는 반드시 기억해주시기 바랍니다. <p/>';                   
  echo "고객번호ID : $id. '<br />";
  echo "계좌번호 : $accountnum. <br />";         
 }else{                                                                               
  echo 'fail to insert sql';    
 }
mysqli_close($mysqli);
?>
        <input type="button" value="To the first screen" onclick="location='index.php'">
    </body>
</html>