<!DOCTYPE html>
<html lang="en">
<head>
<!-- Encoding -->
<meta charset="utf-8">
<title>Home Page</title>

<link rel="stylesheet" href="css/mcss.css">
<script src="js/mjs.js"></script>

</head>
<body>

<div id="wapper">
    <div id="heading">
         <div id="ff_select_div">
             <select id="ff_select">
                 <option value="volvo"></option>

             </select>
         </div>
    </div>
    <div id="ff_body">
        <div id="ff_left">
            <div id="ff_camm">
                <iframe style="width: 100%;height: 100%;" src="https://cam09.herokuapp.com/Scalable-Broadcast.html#900" name="iframe_a"></iframe>
            </div>
            <div id="ff_chat_1">
                <textarea rows="3" cols="50" name="chat_1" >Enter text here...</textarea>
            </div>

            <div id="ff_chat_2" style="overflow-y:scroll; height:280px;">
                <div id="ff_chat_0" style="height:450px;">
                <textarea rows="3" cols="50" name="chat_1" >Enter text here...</textarea>
                <textarea rows="3" cols="50" name="chat_1" style="margin-top: 10px;" >Enter text here...</textarea>
                </div>

            </div>
        </div>


        <div id="ff_right">
            <div id="link123" style="font-size: 24px;padding-left: 30px;padding-top: 60px;    padding-bottom: 10px;">
                <a style="    text-decoration: underline;color: red;cursor: pointer;" id="link_url" href="" ></a>
            </div>
            <div>
                <iframe id="if_page" style="width: 100%;height: 592px;" src="" name="iframe_a"></iframe>
            </div>

        </div>

    </div>





</div>


</body>


<style>




</style>

<script src="js/jquery.min.js"></script>

<script>

    var a='<select id="ff_select"  onchange="abc()">';
    var z=0;

    $.ajax({
        url: "Page1List 2",
        success: function(data){
            $(data).find("td > a").each(function(){
                // will loop through
                if(z==0) {
                    z++;
                }else{
                    a = a + '<option value="'+$(this).attr("href")+'">' + $(this).attr("href") + '</option>';
                }

            });

            a=a+'</select>';
            document.getElementById("ff_select_div").innerHTML=a;


            var aaa=document.getElementById("ff_select").value;
            document.getElementById("link123").innerHTML='<a style="text-decoration: underline;color: red;cursor: pointer;" onclick="go()" id="link_url" >'+aaa+'</a>';



        }


    });

    function abc(){

        var aaa=document.getElementById("ff_select").value;
        document.getElementById("link123").innerHTML='<a style="text-decoration: underline;color: red;cursor: pointer;" onclick="go()" id="link_url" >'+aaa+'</a>';

    }


    function go(loc) {
        var a=document.getElementById("link_url").innerHTML;
        document.getElementById('if_page').src = "Page1List 2/"+a;
    }


    setTimeout(function(){

        var aaa=document.getElementById("ff_select").value;
        document.getElementById("link123").innerHTML='<a style="text-decoration: underline;color: red;cursor: pointer;" onclick="go()" id="link_url" >'+aaa+'</a>';


    }, 5000);





</script>



</html>