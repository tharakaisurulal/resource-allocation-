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



       
       
            <div class="menu">
                <tr>
                    <td><a href="#">HOME</a></td>
                    <td><a href="#">MY PROFILE</a></td>
                    <td><a href="#">NOTICE</a></td>
                </tr>
            </div>
        </div>
        </section>

     @yield('content')

    </body>
</html>
