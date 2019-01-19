<style>

    #head{
        width: 100%;
        height: 320px;
        margin: 0;
        padding: 0;
    }
    #head img{
        width: 100%;
        height: 320px;
    }
    #menubar{
        display: inline-flex;
        width: 100%;
        height: 50px;
    }
    .menuitem{
        background-color: #d39e00;
        width: 20%;
        height: 50px;
        text-align: center;
    }
    .menuitem:hover{

        animation-name: example;
        animation-duration: 4s;
    }
    .menuitem a{
        width: 20%;
        height: 50px;
    }

    @keyframes example {
        0%   {background-color: red;}
        25%  {background-color: yellow;}
        50%  {background-color: blue;}
        100% {background-color: green;}
    }
</style>

<div>
    <div id="head">
        <img src="/images/heder_01.jpg">
    </div>
    <div id="menubar">
        <div class="menuitem"><a href="#">دوره های آموزشی</a></div>
        <div class="menuitem"><a href="#">کتاب ها</a></div>
        <div class="menuitem"><a href="#">رسانه ها</a></div>
        <div class="menuitem"><a href="#">فرهنگ لغت</a></div>
        <div class="menuitem"><a href="#">اطلاعات آموزشی</a></div>

    </div>

</div>