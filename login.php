<?
    include"session.php";   
    ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>DB</title>
        <style>
            * {
                text-align: center;
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
    </head>
    <body>
        <div id="jb-container">
            <div id="jb-header">
                <h1>Apache & PHP & MySQL</h1>
            </div>
            <div id="jb-sidebar-left">
                <h2>웹을 통해 DatatBase 접근하기</h2>
                <ul>

                    <li>1.데이터베이스에 member 테이블 생성</li><br>
                    <li>2.사용자 회원가입 페이지 작성</li><br>
                    <li>3.사용자 웹페이지 작성</li><br>
                </ul>
            </div>
            <div id="jb-sidebar-right">

                <?php 
    $host = 'localhost'; 
    $user = 'root';
    $pw = 'cyworld97';
    $dbName = 'bank';
    $mysqli = new mysqli($host, $user, $pw, $dbName); //mysql로 접근하도록 설정
    $memberId = $_POST['id'];
    $memberPw = $_POST['password'];
    $sql = "SELECT * FROM user WHERE id = '$memberId' AND password = '$memberPw'"; 
    //my sqli 연결의 끈을 생성시키고, 쿼리를 실행한다
      // account_info테이블로부터 id와 pwd가 일치하는 모든것을 고른다
    $res = $mysqli->query($sql); //실행결과를 $res에 저장한다
        $row = $res->fetch_array(MYSQLI_ASSOC); //넘어온 결과를 한행씩 패치해서 $row 배열에 담는다

        if ($row != null) {                                                 
            $_SESSION['ses_username'] = $row['username'];                           
            echo $_SESSION['ses_username'].'님 안녕하세요!<p/>';                   
            echo '<a href="./index.php">로그아웃 하기 />';         
        }
        if($row == null){                                                   
         echo("<script>location.href='starterror.php';</script>");                
        }
?>
            </div>
        </div>
</body>
</html>