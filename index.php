<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> 膜拜沉淀 - Offical Homepage </title>
        <link href="https://cdn.bootcss.com/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.bootcss.com/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>
        <link href="https://fonts.loli.net/css?family=Noto+Serif+SC" rel="stylesheet">
        <script>
            $(document).ready(function(){
                $("div#int").hide();
                $("button#inctro").click(function(){$("div#int").toggle()});
                $("button#once").click(function(){
                    $("#snap").load("function.php").fadeToggle("fast").fadeToggle("fast");
                });
                $("button#ten").click(function(){
                    $("#snap").load("function.php?snap=10").fadeToggle("fast").fadeToggle("fast");
                });
                $("button#auto").click(fun);
                function fun(){
                    setInterval(function(){
                    $("#snap").load("function.php").fadeToggle("fast").fadeToggle(200);
                    },800)
                }
                
            });
        </script>
    </head>
    <body style="margin : 10px;font-family:'Noto Serif SC',serif;">
        <h1>膜拜沉淀 Bot </h1><hr/>
        <h3>当前已膜 <span id="snap" style="color:#4d866e;"><?php require'function.php';?></span> 次</h3><br/>
        
        <button class="btn btn-default" id="once">膜一下</button> <button class="btn btn-default" id="ten">膜十下</button> <button class="btn btn-primary" id="auto">自动膜</button>
        <br/><br/>
        <button type="button" class="btn btn-default btn-xs" id="inctro">Introduction ▼</button>
        <div style="color:grey;" id="int">
            <br/>
            <p>*您的膜拜次数已随机乘上一个 R∈[0,10<sup>-∞</sup>] 后转化为您本次成绩和沉淀大大的下次成绩。</p>
            <p> 本项目使用了开源项目 jQuery 和 Twitter Bootstrap 技术。</p>
        </div>
    </body>
</html>