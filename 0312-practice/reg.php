<?php
if (isset($_POST["acct"])){
    if(strcmp($_POST["pass1"],$_POST["pass2"])){
        printf("<script>alert('密碼不一致')<script>");
    } else {
        $filename="member.csv";
        $acct_existed=false;
           if(file_exists($filename)){
              $fp=fopen($filename,"r");
              while(($member)){}
           }
        $fp=fopen("member.csv","a");
        fputcsv($fp,[$_POST["acct"],$_POST["name"],
              password_hash($_POST["pass1"],PASSWORD_DEFAULT) ]
    );
    fclose($fp);
    printf("location.herf='login.php';");
    }
}


?>
<html>
    <head>
        <title>註冊會員</title>
        <mata charest="UTF-8">
    </head>

    <body>
        <H1>註冊會員</H1>
        <form method="post">
        <p>帳　　號:<input type ="text" name="acct"></p>
        <p>顯示名稱:<input type ="text" name="name"></p>
        <p>密　　碼:<input type ="password" name="pass1"></p>
        <p>確認密碼:<input type ="password" name="pass2"></p>
        <p><input type="submit"></p>
        </form>
     </body>
</html>