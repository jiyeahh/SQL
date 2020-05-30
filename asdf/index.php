<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>SIGN_UP_PAGE</title>

    </head>

    <body>
            <style>
              *{
                text-align:center;
              }
                a:link {
                    color: black;
                    background-color: transparent;
                    text-decoration: none;
                }
                a:visited {
                    color: gray;
                    background-color: transparent;
                    text-decoration: none;
                }
                a:hover {
                    color: gray;
                    background-color: transparent;
                    text-decoration: underline;
                }
                a:active {
                    color: black;
                    background-color: transparent;
                    text-decoration: underline;
                }
                #jb-container {
                    width: 940px;
                    height: 450px;
                    margin: 0;
                    padding: 20px;
                    border: 1px solid #bcbcbc;
                }
                #jb-header {
                    padding: 20px;
                    margin-bottom: 20px;
                    border: 1px solid #bcbcbc;
                }
                #jb-sidebar-left {
                    width: 650px;
                    height: 170px;
                    padding: 20px;
                    margin-right: 20px;
                    margin-bottom: 20px;
                    float: left;
                    border: 1px solid #bcbcbc;
                }
                #jb-content {
                    width: 450px;
                    padding: 20px;
                    margin-bottom: 20px;
                    float: left;
                    border: 1px solid #bcbcbc;
                }
                #jb-sidebar-right {
                    width: 160px;
                    padding: 20px;
                    margin-bottom: 20px;
                    float: right;
                    border: 1px solid #bcbcbc;
                }
                #jb-footer {
                    clear: both;
                    padding: 20px;
                    border: 1px solid #bcbcbc;
                }
            </style>

            <body>
                <div id="jb-container">
                    <div id="jb-header">
                        <h1>SIGN_UP_PAGE</h1>
                    </div>
                    <div id="jb-sidebar-left">
                        <h2>Welcome:-)<br>Jiye's Transaction Account Banking</h2>
                        <input type="button" value="계좌만들기" onclick="location='starterror.php'">
                        <input type="button" value="계좌이체하기" onclick="location='transection.php'">
                        <ul>
                            Please enter ID and PASSWORD
                        </ul>
                    </div>
                    <div id="jb-sidebar-right">
                        <h2>login</h2>
                        <form method="post" action="login.php">
                            ID :
                            <input type="text" name="id"/><br/>
                            
                            PASSWORD :
                            <input type="password" name="password"/><br/>
                            
                            NAME :
                            <input type="text" name="name"/><br/><br/>
                            <input type="submit" value="login"/>
                            <input
                                type="button"
                                name="버튼"
                                value="sign up"
                                onclick="location.href='http://localhost:8080/asdf/join.php'"
                                ;=";">
                        </form>
                    </div>
                </div>
            
        </body>
    </html>