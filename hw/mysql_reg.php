<?php
if (isset($_POST["acct"])){
    if(strcmp($_POST["pass1"],$_POST["pass2"])){
        printf("<script>alert('密碼不一致')<script>");
    } else {
        $filename="member.json";
        $newmember=true;
        $newmember=[];
        if(file_exists($filename)){
            $all=file_get_contents($filename);
            $newmember=jason_decode($all,true);
            foreach($member as $m){
                if(0==srtump($m["id"],$_POST["acct"])){
                    printf("alert('會員已存在')");
                    $newmember=false;
                    break
                }
            }
        }
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
        <p>帳　　號:<input type ="text" name="acct" placeholder="登入用的帳號"></p>
        <p>顯示名稱:<input type ="text" name="name" placeholder="登入後的顯示名稱"></p>
        <p>密　　碼:<input type ="password" name="pass1" placeholder="登入用的密碼"></p>
        <p>確認密碼:<input type ="password" name="pass2" placeholder="確認兩次密碼相同"></p>
        <p><input type="submit" value="註冊"></p>
        </form>
     </body>
</html>