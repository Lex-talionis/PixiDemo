<html>
<head>
    <meta charset="UTF-8">
    <title>Parallax Scrolling Demo</title>
    <style>
        body { background-color: #000000; }
        canvas { background-color: #222222; }
    </style>
</head>
<body onload="init();">
<div align="center">
    <canvas id="game-canvas" width="512" height="384"></canvas>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pixi.js/4.0.0/pixi.min.js"></script>
<script src="js/Far.js"></script>
<script src="js/Mid.js"></script>
<script src="js/Scroller.js"></script>
<script src="js/WallSpritesPool.js"></script>
<script src="js/SliceType.js"></script>
<script src="js/WallSlice.js"></script>
<script src="js/Walls.js"></script>
<script src="js/MapBuilder.js"></script>
<script src="js/Main.js"></script>
<script>
    function init() {
        main = new Main();
    }
</script>
</body>
</html>