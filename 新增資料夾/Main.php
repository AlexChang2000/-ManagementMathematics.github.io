<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=devive-width, initial-scale=1.0"/>
    <title>管理數學學術討論區</title>
    <style>
       button{
           cursor: pointer;
       }
       *{
        font-family: Microsoft JhengHei;
       }
    </style>
    
    <script language="JavaScript">
        
        //顯示目前登入user
        function setUserID(){

            // sessionStorage.setItem('userID','08156140');
            // sessionStorage.setItem('userName','王至潔');
            var nowUser = (localStorage.getItem("nowUser")).split(";");
            var nowUserName = nowUser[1];
            var nowUserID = nowUser[2];
            document.getElementById('showUserbox').innerHTML = "歡迎蒞臨: "+nowUserID+" "+nowUserName;
        }
    </script>
</head>
<body onload="setUserID()">

    <img src="標題.jpg" style="text-align: center;">   <!--封面圖片-->
    <span id="showUserbox" style="padding-left: 950px;"></span>    <!--顯示登入的使用者-->
    <!--登出鍵-->
    <span><button style="width: 100px; height: 40px; font-size: 20px; color: darkkhaki; 
    background-color: black;" onclick="javascript:location.href='Login.php'">登出</button></span>   
    <!--課後意見討論區-->
    <div>
        <span><img src="group_icon.png"></span>
        <h2><a href="Discussion.php">每周課後意見討論區</a></h2>
    </div>
    <br/>
    <hr/>
    <!--重要事項-->
    <div>
        <span><img src="list_icon.png"></span>
        <h2><a href="Announcement.php">重要事項</a></h2>
    </div>
    <br/>
    <hr/>
    <!--相關網站-->
    <div>
        <span><img src="website_icon.png"></span>
        <h2><a href="Reference.php">相關網站</a></h2>
    </div>

</body>
</html>

