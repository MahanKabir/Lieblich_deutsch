@extends('master')

@section('content')
    <div>
        <form action="" method="post">

            {{ csrf_field() }}

            <label for="name">نام: </label><br>
            <input type="text" name="name"><br>

            <label for="email">ایمیل: </label><br>
            <input type="text" name="email"><br>

            <label for="password">رمز عبور: </label><br>
            <input type="text" name="password"><br>

            <label for="lname">نام خانوادگی: </label><br>
            <input type="text" name="lname"><br>

            <label for="phone">شماره تماس:</label><br>
            <input type="text" name="phone"><br>

            <label for="state">استان: </label><br>
            <input type="text" name="state"><br>

            <label for="city">شهر: </label><br>
            <input type="text" name="city"><br>

            <label for="address">نشانی: </label><br>
            <input type="text" name="address"><br>

            <label for="postal_code">کد پستی: </label><br>
            <input type="text" name="postal_code"><br>

            <input class="btn btn-success" type="submit" value="ثبت">

        </form>
    </div>
    @endsection