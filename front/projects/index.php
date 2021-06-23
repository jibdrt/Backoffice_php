<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>Horizontal Scroll</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="style.css" />
    </head>
    <style> 
            body { 
            animation: fadeInAnimation ease 5s; 
            animation-fill-mode: forwards; 
            animation-iteration-count: 1; 
            } 
            @keyframes fadeInAnimation { 
            0% { 
            opacity: 0; 
            } 
            100% { 
            opacity: 1; 
            } 
            } 
</style> 
    <body>
        <a class="btnback" href="/test-front/"><button>&#8592</button></a>
        <div class="container">
            <div class="block block-1">
                <h1>.</h1>
            </div>
            <div class="block block-2">
                <h1>.</h1>
            </div>
            <div class="block block-3">
                <h1>.</h1>
            </div>
            <div class="block block-4">
                <h1>A propos.</h1>
            </div>
            <div class="block block-5">
                <h1>Contact.</h1>
            </div>
        </div>
        <script src="main.js"></script>
        <script>
            var blocks = document.getElementsByClassName("block");
            var container = document.getElementsByClassName("container");
            var hs = new HorizontalScroll.default({
                blocks: blocks,
                container: container,
                isAnimated: true,
                springEffect: 0.8,
            });
        </script>
    </body>
</html>