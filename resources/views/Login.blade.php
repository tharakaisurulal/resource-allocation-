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
            <form action="">
                <h1> LOGIN </h1>
                <div class="inputBox">

                    <select name="user" id="userid">
                        <option value=""><span>--Login As--</span></option>
                        <option value="volvo">Lecturer</option>
                        <option value="saab">Student</option>
                        <option value="mercedes">Accademic-Supportive</option>
                        <option value="audi">Guest</option>
                        </select>


                </div>

                <div class="inputBox">
                    <input type="text" required>
                    <span>Username</span>
                    <i><ion-icon name="person"></ion-icon></i>
                </div>

                <div class="inputBox">
                    <input type="password" required>
                    <span>Password</span>
                    <i><ion-icon name="lock-closed"></ion-icon></i>
                </div>

                <div class="links">
                    <a href="#">Forget Password?</a>
                    <a href="#">Register</a>
                </div>

                <input type="submit"value="Login">

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
