<style>

    #admin_menu{
        width: 25%;
        height: 100vh;
        background-color: #006064;
        direction: rtl;

    }
    .submenu{
        width: 100%;
        height: 45px;
        margin-top: 10px;
        text-align: right;
        display: inline-flex;
    }
    .submenu a{
        width: 100%;
        height: 45px;
        margin: 2.5px;
        border-radius: 2.5px;
        background-color: #80DEEA;
        text-align: center;
        text-decoration: none;
        color: #1d2124;
    }
    .submenu a:hover{
        background-color: #9fcdff;
    }
</style>


<div id="admin_menu">

    <div class="submenu"><a href="{{ route('lesson.index') }}">مدیریت دوره ها</a></div>
    <div class="submenu"><a href="{{ route('book.index') }}">مدیریت کتاب ها</a></div>
    <div class="submenu"><a href="#">مدیریت آهنگ ها</a></div>
    <div class="submenu"><a href="#">مدیریت فیلم ها</a></div>
    <div class="submenu"><a href="#">مدیریت انیمیشن ها</a></div>
    <div class="submenu"><a href="#">مدیریت سریال ها</a></div>
    <div class="submenu"><a href="#">مدیریت اطلاعات</a></div>
    <div class="submenu"><a href="#">مدیریت کاربران</a></div>
    <div class="submenu"><a href="#">مدیریت نظرات</a></div>
    <div class="submenu"><a href="#">مدیریت پرداخت ها</a></div>
    <div class="submenu"><a href="#">تنظیمات وبسایت</a></div>

</div>