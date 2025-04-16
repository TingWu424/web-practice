<html>
    <head>
    <title>會員登入</title>
    <meta charset="UTF-8" >
    <script>
<?php
if (isset($_POST["acct"])){
    if(strcmp($_POST["pass1"],$_POST["pass2"]))
        $db = new mysqli("localhost","root","msgboard");
        $sql=sprintf("SELECT * FROM account WHERE acct='%s'",$_POST["acct"]);
        $res=$db->query($sql);
     if($res->num_rows<=0){
        printf("alert('無資料會員，請通知管理員');");
        }else {
            $row = $res->fetch_assoc();
            if(password_verify($_POST["pass"],$_row["pass"])){
                printf("location.href='mysql.php';");
                printf("alert('歡迎登入，%s');",$row["name"]); 
            }
            
        }
    }
?>
</script>
</head>
    <body>
        <H1>註冊會員</H1>
        <form method="post">
    </body>

    <body>
        <H1>註冊會員</H1>
        <form method="post">
        <p>帳　　號:<input type ="text" name="acct" placeholder="登入用的帳號"></p>
        <p>密　　碼:<input type ="password" name="pass1" placeholder="登入用的密碼"></p>
        <p><input type="submit" value="登入"></p>
        </form>
     </body>
</html>