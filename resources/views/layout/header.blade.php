<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lecture hall Allocation</title>
        @include('cdn')
        <link rel="stylesheet" href={{asset('css/headerfooter.css')}}>

    </head>

    <body>
        <section class="sec1">
        <div class="header">
            <img src="/images/logo_copy.png" class="logo">

            @yield('content1')

        <input type="checkbox" id="openSidebarMenu" hidden>
        <label for="openSidebarMenu" class="sidebarIconToggle">
            <div class="spinner top"></div>
            <div class="spinner middle"></div>
            <div class="spinner bottom"></div>
        </label>

            <div id="sidebarMenu">
                <ul class="menu">
                    @yield('content2')
                </ul>
            </div>
        </div>
        </section>

        @yield('content')
    </body>
    </html>
