<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>問題範例</title>
    <style>
        *{
            background-color: rgb(255, 255, 255);
        }
        button{
           cursor: pointer;
       }
    </style>

    <script language="JavaScript">
        //發布日期顯示
        function ShowTime(){
            var NowDate=new Date();
            var y=NowDate.getFullYear();
            var m=NowDate.getMonth();
            var d=NowDate.getDate();
            var h=NowDate.getHours();
            var mm=NowDate.getMinutes();
            document.getElementById('showbox').innerHTML = "發布日期: "+y+" 年 "+m+" 月 "+d+" 日 "+h+" 點 "+mm+" 分 ";
        }
        //發布人顯示
        function ShowUser(){
            var nowUser = (localStorage.getItem("nowUser")).split(";");
            var nowUserName = nowUser[1];
            var nowUserID = nowUser[2];
            document.getElementById('showboxUser').innerHTML = "發佈人: "+nowUserID+" "+nowUserName;
        }
        //貼文
        function post(){
            var nowUser = (localStorage.getItem("nowUser")).split(";");
            var nowUserName = nowUser[1];
            var nowUserID = nowUser[2];

            var newPostContent = document.getElementById('newPostContent').value;
            if(newPostContent != ""){

                var postID = parseInt(localStorage.getItem("postCount"))+1;
                localStorage.setItem("postCount",postID);
                var newPostAuthor = nowUserName;
                var newPost = String(newPostAuthor)+","+String(newPostContent)+","+String(postID);

                var dataList = [];
                dataList = JSON.parse(localStorage.getItem("dataList"));
                dataList.push(newPost);
                localStorage.setItem("dataList",JSON.stringify(dataList));

                window.alert("已發佈貼文");
                location.href="Discussion.php";
            }else{
                window.alert("請輸入貼文內容！");
            }
            
        }
    </script>
</head>
<body onload="ShowTime(),ShowUser()">
    <button type="button" onclick="javascript:location.href='Main.php'" ><img src="小標題.png" style="height: 50px; width: 300px;"></button>
    <h1>問題簡述</h1>
    <div style="border:5px rgb(2, 27, 73) double ; margin-top: 20px; padding: 20px; background-color: rgb(255, 253, 234);">
        <!--貼文內容輸入欄-->
        <textarea id="newPostContent" name="myComment" rows="8" cols="55" placeholder="請輸入您想留的話~"></textarea>
        <!--發布POST按鈕-->
        <button style="width: 70px; height: 25px; font-size: 15px; color: white; 
        background-color: grey;"   onclick="post()">POST</button>
        <!--發布日期/發布人顯示-->
        
        <div id="showbox" style="background-color:  rgb(255, 253, 234);"></div>
        <div id="showboxUser" style="background-color:  rgb(255, 253, 234);"></div>
        
    
    </div> 
</body>
</html>