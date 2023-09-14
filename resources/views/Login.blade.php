<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lecture hall Allocation</title>
        @include('cdn')
        <link rel="stylesheet" href={{asset('css/style.css')}}>
        <link rel="stylesheet" href={{asset('css/Login.css')}}>
    </head>

    <body>
        @php
        if(isset($_COOKIE['nameid']) && isset($_COOKIE['password'])){
            $loginname=$_COOKIE['nameid'];
            $loginpassword=$_COOKIE['password'];
            $is_remember="checked='checked'";
        }
        else{
            $loginname='';
            $loginpassword='';
            $is_remember='';
        }
        @endphp

    <section>
        <div class="header">
            <img src="images/logo_copy.png" class="logo">
        </div>


        <input type="checkbox" id="openSidebarMenu">
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

        <section class="login">
        <div class="box">
            <form action="{{route('login')}}" method="post">
                @if(session()->has('success'))
                <div class="alert alert-success">{{session()->get('success')}}</div>
            @endif

            @if(session()->has('fail'))
                <div class="alert alert-danger">{{session()->get('fail')}}</div>
            @endif
                @csrf
                <h1> LOGIN </h1>

                <div class="inputBox">
                    <select name="user" id="userid">
                        <option value=""><span>--Login As--</span></option>
                        <option value="Lecturer">Lecturer</option>
                        <option value="Student">Student</option>
                        <option value="Accademic_Supportive">Accademic-Supportive</option>
                        <option value="Guest">Guest</option>
                        </select>
                </div>

                <div class="inputBox" >
                    <input type="text" name="username" value="{{$loginname}}">
                    <span>Username</span>
                    <i><ion-icon name="person"></ion-icon></i>
                </div>

                <div class="inputBox">
                    <input type="password" name="password" value="{{$loginpassword}}">
                    <span>Password</span>
                    <i><ion-icon name="lock-closed"></ion-icon></i>
                </div>

                <div class="links">
                    <a href="#">Forget Password?</a>
                        <div>
                            <input type="checkbox" name="remember" {{$is_remember}}> <label class="label1">Remember Me</label>
                        </div>
                </div>

                <div class="links">
                    <input type="submit"value="login">
                        <div class="link2">
                            <a href="/guestregistration">Register</a>
                        </div>
                </div>

            </form>
        </div>
    </section>

    <footer class="footer">

        <div class="waves">
          <div class="wave" id="wave1"></div>
          <div class="wave" id="wave2"></div>
          <div class="wave" id="wave3"></div>
          <div class="wave" id="wave4"></div>
        </div>
        <ul class="social-icon">
          <li class="social-icon__item"><a class="social-icon__link" href="#">
              <ion-icon name="logo-facebook"></ion-icon>
            </a></li>
          <li class="social-icon__item"><a class="social-icon__link" href="#">
              <ion-icon name="logo-twitter"></ion-icon>
            </a></li>
          <li class="social-icon__item"><a class="social-icon__link" href="#">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a></li>
          <li class="social-icon__item"><a class="social-icon__link" href="#">
              <ion-icon name="logo-instagram"></ion-icon>
            </a></li>
        </ul>
        <ul class="menu">
          <li class="menu__item"><a class="menu__link" href="#">Home</a></li>
          <li class="menu__item"><a class="menu__link" href="#">About</a></li>
          <li class="menu__item"><a class="menu__link" href="#">Services</a></li>
          <li class="menu__item"><a class="menu__link" href="#">Team</a></li>
          <li class="menu__item"><a class="menu__link" href="#">Contact</a></li>

        </ul>
        <p>&copy;UNIVERSITY OF RUHUNA| COMPUTER SCIENCE DEPARTMENT</p>

</footer>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    </body>
</html>
