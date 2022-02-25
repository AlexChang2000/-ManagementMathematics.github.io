<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>某則留言</title>
    <style>
        button{
           cursor: pointer;
       }
    </style>
    <script language="JavaScript">
        
        //顯示貼文和作者
        // function showPost(){

        //     var dataList = JSON.parse(localStorage.getItem("dataList"));

        //     var postContent = String(dataList[0]);
        //     var postAuthor = postContent.slice(0,8);
        //     var postContentAd = postContent.slice(9);
        //     document.getElementById("postContent").innerHTML = postContentAd+"by..."+postAuthor;
        // }
        function showPost(){
            var postView = JSON.parse(localStorage.getItem("postView"));

            var postAuthor = String(postView[0]);
            var postContent = String(postView[1]);
            var postID = String(postView[2]);
            document.getElementById("postContent").innerHTML = postContent;
            document.getElementById("postAuthor").innerHTML = postAuthor;
            document.getElementById("myComment").value = "";
        }
        function showComments(){

            var postView = JSON.parse(localStorage.getItem("postView"));
            var postID = parseInt(postView[2]);
            var commentData = JSON.parse(localStorage.getItem("commentData"));
            var selectCD = commentData[postID-1];
            var selectCDcontent = selectCD.split(",");

            var pointerStart = 0;
            for(var i = selectCDcontent.length-1; i >=0 ; i--){

                pointerStart++;
                var pointerStr = "c";
                var pointerNum = String(pointerStart);
                var pointer = pointerStr+pointerNum;
                document.getElementById(pointer).innerHTML = selectCDcontent[i];

            }
        }
        function comment(){

            var postView = JSON.parse(localStorage.getItem("postView"));
            var postID = parseInt(postView[2]);
            var commentData = JSON.parse(localStorage.getItem("commentData"));
            var selectCD = commentData[postID-1];

            var newCommentContent = document.getElementById('myComment').value;

            if(newCommentContent != ""){

                selectCD=selectCD+","+newCommentContent;
                commentData[postID-1] = selectCD;
                localStorage.setItem("commentData",JSON.stringify(commentData));
                onload();
            }else{
            window.alert("請輸入留言內容！");
            }
        }
    </script>
</head>

<body onload="showPost(),showComments()">
    <button type="button" onclick="javascript:location.href='Main.php'" ><img src="小標題.png" style="height: 50px; width: 300px;"></button>
    <br/>

    <div style="border:5px rgb(2, 27, 73) double ; margin-top: 20px; padding: 20px; background-color: rgb(255, 253, 234);">
        <b><span id="postContent" style="font-size: 25px;"></span></b>
        <b><span style="padding-left: 60px; font-size: 17px;" >發布人:</span></b>
        <b><span id="postAuthor" style="font-size: 17px;"></span></b>

        <h3 style="padding-left: 5px;">-------留言-------</h3>
        <hr/>
        <p id="c1">留言1</p>
        <hr/>
        <p id="c2">留言2</p>
        <hr/>
        <p id="c3">留言3</p>
        <hr/>
        <p id="c4">留言4</p>
        <hr/>
        <p id="c5">留言5</p>
        <hr/>
        <p id="c6">留言6</p>
        <hr/>
        <h4 style="border: 10px rgba(167, 167, 167, 0.932) solid; 
        margin-left:-20px; margin-right:-20px;"></h4>

        <textarea id="myComment" rows="5" cols="55" placeholder="請輸入您想留的話~"></textarea>
        <button style="width: 70px; height: 25px; font-size: 15px; color: white; 
        background-color: grey;" onclick="comment()">送出</button>
    </div>



</body>
</html>