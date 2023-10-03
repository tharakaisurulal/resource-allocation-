<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lecture hall Allocation</title>
        @include('cdn')
        <link rel="stylesheet" href={{asset('css/style1.css')}}>

    </head>

    <body>
        <section>
        <div class="header">
            <img src="images/logo_copy.png" class="logo">



       
        <label for="openSidebarMenu" class="sidebarIconToggle">
            <div class="spinner top"></div>
            <div class="spinner middle"></div>
            <div class="spinner bottom"></div>
        </label>
            <div id="sidebarMenu">
                <ul class="menu">
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="#">MY PROFILE</a></li>
                    <li><a href="#">CONTACT US</a></li>
                    <li><a href="#">NOTICE</a></li>
                </ul>
            </div>
        </div>
        </section>

     @yield('content')

    </body>
</html>
