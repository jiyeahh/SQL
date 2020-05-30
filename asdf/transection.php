<?
    include"session.php";
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>계좌이체</title>
    </head>
    <body>

        <style>
            * {
                text-align: center;
            }
        </style>
        <form method="post" action="submit.php">
            <h1>input your information</h1>
            <table>
                <tr style="background-color:pink">
                    <th>계좌이체 프로그램</th>
                </tr>
            </table>
            <table>
                <tr>
                    <td>Enter your account ID :
                    </td>
                    <td><input type="text" name="accountnum" value=""></td><br>
                </tr>
                <tr>
                    <td>Enter opponent account ID :</td>
                    <td><input type="text" name="ids" value=""></td><br>
                </tr>
                <tr>
                    <td>Enter Amonut You Want To :
                    </td>
                    <td><input type="text" name="balance" value="금액을 입력하세요" onfocus="this.value=''"></td><br>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <input type="submit" value="Deposit" name="ds">
                        <input type="submit" value="WithDraw" name="wd">
                        <input type="button" value="Back" onclick="javascript:history.go(-1)">
                        <input
                            type="button"
                            value="Log-Out"
                            name="home"
                            onclick="window.location.href='index.php'"/>
                    </td>
                </tr>
            </table>
        </form>

    </body>
</html>