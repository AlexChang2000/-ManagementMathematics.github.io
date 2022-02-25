<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入</title>
    <style>
        *{ background-color: grey;
            font-family: DFKai-sb;
        }
        /*使登入框框置中*/
        .login{
            display: block;
            margin-left: auto;
            margin-right: auto;
            border-radius: 10px; 
        }
        button{
           cursor: pointer;
       }
    </style>
    
    <script language="JavaScript">
// <?php
// // 建立MySQL的資料庫連接 
// $link = @mysqli_connect( 
//             '163.14.18.161',  // MySQL主機名稱 
//             'stu',       // 使用者名稱 
//             '000',  // 密碼 
//             'scu001');  // 預設使用的資料庫名稱 
// if ( !$link ) {
//    echo "MySQL資料庫連接錯誤!<br/>";
//    exit();
// }
// else {
//    echo "MySQL資料庫test連接成功!<br/>";
// }
// mysqli_close($link);  // 關閉資料庫連接
// ?>

        //設定系統預設DB資料
        //帳號資料："密碼;王至潔;08156140;A/B班;權限?user/admin"
        function setUser(){
            localStorage.setItem("08156140","202240;王至潔(admin);08156140;A;admin");
            localStorage.setItem("nowUser",null);
            localStorage.setItem("postCount",0)
            var dataList = [];
            localStorage.setItem("dataList",JSON.stringify(dataList));

            var commentData = ["哈哈,好笑,讚讚","cute,good,haha","loool,gooood,6666"];
            localStorage.setItem("commentData",JSON.stringify(commentData));

        }
        //登入帳號密碼檢核
        //正確進入主畫面
        //錯誤跳出訊息視窗
        //
        //測試帳號密碼：
        //08156140,202240
        function identify(){
            var accountInput =  document.getElementById('accountInput').value;
            var accountInfo = localStorage.getItem(accountInput);
            if(accountInfo != null && accountInfo != ""){
                var accountInfoArray = accountInfo.split(";");
                var passwordCheck = accountInfoArray[0];
                if(document.getElementById('passwordInput').value == passwordCheck){
                    localStorage.setItem("nowUser",accountInfo);
                    location.href="Main.php";
                }else{
                    window.alert("incorrect password!!!");
                }
            }else{
                window.alert("incorrect account!!!");
            }
            
        }
    </script>
    
    <!-- <script language="JavaScript" src="scripts/require.js">
    static function setshow(){
        document.getElementById('showUUU').innerHTML = "1234";
    }
    
    </script> -->

</head>
<body onload="setUser()">
    <!--由上而下為:返回按鈕、一個有外框的div、帳號密碼輸入框、登入按鈕-->
    <button type="button" onclick="javascript:location.href='Main.php'" ><img src="標題.jpg" style="height: 50px; width: 300px;"></button>
    <h1 style="color: white; text-align: center;">~~登入系統~~</h1>
    <div class="login" style="border: 10px solid; color: white; padding: 40px; width: 500px; height: 100px;" >
        <br/>
        <span style="margin-left: 125px; ">帳號:</span> <span><input id="accountInput" type="password"></span>
        <br/>
        <span style="margin-left: 125px; ">密碼:</span> <span><input id="passwordInput" type="password"></span>
        <br/>
    <button style="width: 100px; height: 30px; font-size: 20px; color: darkkhaki; background-color: black; 
    margin-left: 235px;" onclick="identify()">登入</button>
    </div>
    </div>

</body>
</html>