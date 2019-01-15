<style>

    #admin_menu{
        width: 25%;
        height: 100vh;
        background-color: #006064;
        direction: rtl;

    }
    .submenu{
        width: 100%;
        height: 100px;
        margin-top: 10px;
        text-align: right;
        display: inline-flex;
    }
    .submenu a{
        width: 100%;
        height: 100px;
        margin: 2.5px;
        border-radius: 2.5px;
        background-color: #80DEEA;
        text-align: center;
    }
</style>


<div id="admin_menu">

    <div class="submenu"><a href="">گرامر</a></div>
    <div class="submenu"><a href="{{ route('book.index') }}">کتاب</a></div>
    <div class="submenu"><a href="#">آهنگ</a></div>
    <div class="submenu"><a href="#">دیکشنری</a></div>
    <div class="submenu"><a href="#">اطلاعات</a></div>

</div>