
<style>

    #footer{
        width: 100%;
        height: 250px;
        background-color: #1d2124;
    }
    #contact{
        width: 100%;
        text-align: center;
    }
    #contact ul{
        background-color: #721c24;
        width: 100%;
        text-align: center;
    }
    #contact ul li{
        float: left;
        margin: 20px;

    }
    #contact ul li:hover{
        cursor: pointer;
    }
    #contact ul li img{

    }
</style>
<div id="footer" onclick="startAnimation()">
    <div id="contact">
        <ul>
            <li><img id="img"  src="icons/telegram.png"></li>
            <li><img src="icons/instagram.png"></li>
            <li><img src="icons/gmail.png"></li>
            <li><img src="icons/facebook.png"></li>
        </ul>
    </div>
</div>

<script>
    function startAnimation() {
        var frameHeight = 102;
        var frames = 15;
        var frame = 0;
        var div = document.getElementById("animation");
        setInterval(function () {
            var frameOffset = (++frame % frames) * -frameHeight;
            div.style.backgroundPosition = "0px " + frameOffset + "px";
        }, 100);
    }
</script>