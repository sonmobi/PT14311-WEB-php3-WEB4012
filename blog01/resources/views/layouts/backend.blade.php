<!DOCTYPE html>
<html>
    <head>
        <title>ADMIN: @yield('tieu_de')</title>
        <style>
            header{ border-bottom: 1px solid red; font-size: 24px;}
            footer{ border-top: 1px solid blue; font-size: 24px;}
        </style>
    </head>
    <body>
        <header>Backend layout: header
        <br>
            <a href="{{ route('User.index') }}">Danh sach</a> <br>
            <a href="{{route('User.add')}}">Thêm User</a>
        </header>
        @yield('noi_dung')
        <footer>Footer</footer>
    </body>
</html>
