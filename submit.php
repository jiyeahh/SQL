<?
include"session.php";
?>
<html>
    <head>
        <title>
            Transaction Account Banking
        </title>
    </head>
    <body>

        <style>
            * {
                text-align: center;
            }
        </style>
        <br>
        <h2>2202 225A4C!<br></h2>
        <form name="name" home="home" method="post" action="transection.php">
            <table width="600" cellspacing="1" height-180="height-180">
                <tr>
                    <td width="5%"></td>
                    <td>
                        <b>&nbsp;&nbsp;<h3>Transaction Account Banking</h3><br>
                        </b>
                    <?php
                        

                        $host = 'localhost';
                        $user = 'root';
                        $pw = 'cyworld97';
                        $dbName = 'bank';
                        $mysqli = new mysqli($host, $user, $pw, $dbName); //mysqle로 접근하도록 설정
 
$sql = mysql_query("SELECT accountnum, id, balance FROM account WHERE id='$ids'",$mysqli);
$acc = mysql_query("SELECT * FROM account WHERE id='$ids'", $mysqli);
echo "Print." ; 


$amt=$_POST['balance']; 
$id1=($_POST['id']);
$accountnum=$_POST['accountnum']; 
echo "Print." ; 
if(isset($_GET['wd'])){
$sql ="UPDATE account SET balance=balance - $amt WHERE id = $accountnum"; 
$sql ="UPDATE account SET balance=balance + $amt WHERE id = $id1";
echo $amt."가 출금되었습니다.";
}
else if(isset($_GET['ds'])) {
$sql="UPDATE account SET balance=balance+$amt WHERE id = $accountnum";
$sql="UPDATE account SET balance=balance-$amt WHERE id = $id1"; 
echo $amt."가 입금되었습니다.";
}else{
    echo "Error!!";

}

if (mysqli_query($mysqli, $sql)) { 
    echo "Record updated successfully";
    echo $accountnum. "님의 잔액은 ", $balance. " 입니다." ;
} 
else {
echo "Error updating record:  " . mysqli_error($mysq1i);
}

?>
                    </td>
                    <td width="5%"></td>
                </tr>
            </table>
            <br>
        </body>
    </html>