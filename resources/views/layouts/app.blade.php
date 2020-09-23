<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <h2>Header</h2>
        </div>
        <div id="wp-content">
            <div id="content">
                @yield('content')
            </div>
            <div id="sidebar">
                {{-- khi tất cả các trang đều cố định form search thì ta làm như sau --}}
                @section('sidebar')
                    <p>Khối tìm kiếm</p>
                @show
                {{-- @yield('sidebar') --}}
            </div>
        </div>
        <div id="footer">
            <h2>Footer</h2>
        </div>
    </div>
</body>
</html>