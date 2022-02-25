<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>問題討論區</title>
    <style>
         button{
           cursor: pointer;
       }
    </style>
    <script language="JavaScript">

        //從DB撈出貼文資料並顯示在下方區塊
        function showPost(){
            var dataList = JSON.parse(localStorage.getItem("dataList"));

            // var postContent = String(dataList[0]);
            // var postAuthor = postContent.slice(0,8);
            // var postContentAd = postContent.slice(9);
            // document.getElementById("post1").innerHTML = postContentAd+" by..."+postAuthor;

            // var postContent = String(dataList[1]);
            // var postAuthor = postContent.slice(0,8);
            // var postContentAd = postContent.slice(9);
            // document.getElementById("post2").innerHTML = postContentAd+" by..."+postAuthor;

            // var postContent = String(dataList[4]);
            // var postAuthor = postContent.slice(0,8);
            // var postContentAd = postContent.slice(9);
            // document.getElementById("post3").innerHTML = postContentAd+" by..."+postAuthor;

            var num = 1;
            var nowDataList = [];

            for(var i = dataList.length-1 ; i >= 0 ; i --){
                
                var pointerStr = "post";
                var pointerDiv = "div";
                var pointerNum = String(num);
                var pointerNumD = String(num+1)
                var pointer = pointerStr+pointerNum;
                var pointerD = pointerDiv+pointerNum;
                var pointerD2 = pointerDiv+pointerNumD;

                var postContent = (String(dataList[i])).split(",");
                var postAuthor = postContent[0];
                var postContentAd = postContent[1];
                
                var inputContent = postContentAd+" by..."+postAuthor;
                nowDataList.push(inputContent);
                if(pointerNum<8){
                    document.getElementById(pointer).innerHTML = inputContent;
                    document.getElementById(pointerD).style.display = 'block';
                    document.getElementById(pointer).style.display = 'block';
                    document.getElementById(pointerD2).style.display = 'block';
                    
                }
                num++;
            }
            // document.getElementById("divEnd").style.display = 'block';
            localStorage.setItem("nowDataList",JSON.stringify(nowDataList));
        }
        function linkPost(id){

            // var pointer = String(id).charAt(id.length-1);
            // document.getElementById(pointer).innerHTML = postContentAd+" by..."+postAuthor;
            var numOfOrder = parseInt(id.charAt(id.length-1));
            var dataList = JSON.parse(localStorage.getItem("dataList"));
            var selectPost = dataList[dataList.length-numOfOrder];
            // var linkContent = document.getElementById(str).value;
            // var linkContent2 = document.getElementById('post1').innerHTML.value;;
            // for(var i = 0 ; i <= linkContent.length ; i ++){
            //     if(linkContent.charAt(i))
            // }
            var tempContent = selectPost.split(",");
            var author = tempContent[0];
            var content = tempContent[1];
            var postID = tempContent[2];

            var postView = [author,content,postID];
            localStorage.setItem("postView",JSON.stringify(postView));
        }
    </script>
</head>
<body onload="showPost()">
    <button type="button" onclick="javascript:location.href='Main.php'">
        <img src="小標題.png" style="height: 50px; width: 300px;"></button>
       
    <br/>
    <br/>
        <span style="font-size: 32px;"><i><b>課後意見討論區<b></i></span>
        <span style="padding-left:30px; "><button onclick="javascript:location.href='Post.php'" 
            style="width: 90px; height: 35px; font-size: 15px; color: white; 
            background-color: grey; ">新增問題</button></span>
    <ul>
        <hr id="div1" style="display:none"/>
        <a href="PostComments.php">
            <div id="post1" onclick="linkPost(id)" style="display:none">問題1</div>
        </a>
        <br/>
        <hr id="div2" style="display:none"/>
        <br/>
        <a href="PostComments.php">
            <div id="post2" onclick="linkPost(id)" style="display:none">問題2</div>
        </a>
        <br/>
        <hr id="div3" style="display:none"/>
        <br/>
        <a href="PostComments.php">
            <div id="post3" onclick="linkPost(id)" style="display:none">問題3</div>
        </a>
        <br/>
        <hr id="div4" style="display:none"/>
        <br/>
        <a href="PostComments.php">
            <div id="post4" onclick="linkPost(id)" style="display:none">問題4</div>
        </a>
        <br/>
        <hr id="div5" style="display:none"/>
        <br/>
        <a href="PostComments.php">
            <div id="post5" onclick="linkPost(id)" style="display:none">問題5</div>
        </a>
        <br/>
        <hr id="div6" style="display:none"/>
        <br/>
        <a href="PostComments.php">
            <div id="post6" onclick="linkPost(id)" style="display:none">問題6</div>
        </a>
        <br/>
        <hr id="div7" style="display:none"/>
        <br/>
        <a href="PostComments.php">
            <div id="post7" onclick="linkPost(id)" style="display:none">問題7</div>
        </a>
        <br/>
        <hr id="div8" style="display:none"/>
    </ul>
    <!--學生新增問題的按鈕-->
    
</body>                                 
</html>