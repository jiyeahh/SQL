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
    </body>
</html>