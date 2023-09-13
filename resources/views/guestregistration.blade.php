<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lecture hall Allocation</title>
        @include('cdn')
        <link rel="stylesheet" href={{asset('css/style.css')}}>
        <link rel="stylesheet" href={{asset('css/regi.css')}}>
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
                <h1> REGISTER </h1>

                <div class="inputBox">
                    <input type="text" name="name" required>
                    <span>Name With Initials</span>
                    <i><ion-icon name="person"></ion-icon></i>
                </div>

                <div class="inputBox">
                    <select name="faculty" id="faculty">
                        <option value="">--Choose faculty--</option>
                        <option value="op1">Faculty of Science</option>
                        <option value="op2">Faculty of Management and Finance</option>
                        <option value="op3">Faculty of Humanities and Social Sciences	</option>
                        <option value="op4">Faculty of Fisheries and Marine Sciences and Technology</option>
                        <option value="op5">Faculty of Medicine</option>
                        <option value="op6">Faculty of Engineering</option>
                        <option value="op7">Faculty of Technology</option>
                        <option value="op7">Faculty of Agriculture</option>
                        </select>
                </div>


                <div class="inputBox">
                    <input type="text" name="department" required>
                    <span>Department</span>
                    <i><ion-icon name="lock-closed"></ion-icon></i>
                </div>

                <div class="inputBox">
                    <input type="text" name="position" required>
                    <span>Position</span>
                    <i><ion-icon name="lock-closed"></ion-icon></i>
                </div>

                <div class="inputBox">
                    <input type="file" required>

                    <i><ion-icon name="lock-closed"></ion-icon></i>
                </div>
            <br>

            <div class="inputBox">
                <input type="email" required>
                <span>Username</span>
                <i><ion-icon name="lock-closed"></ion-icon></i>
            </div>

            <div class="inputBox">
                <input type="text" required>
                <span>Password</span>
                <i><ion-icon name="lock-closed"></ion-icon></i>
            </div>

            <p class="pr">By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

                <input type="submit"value="Register">

                <div class="links">
                    <p class="pr">Already have an account?</p>
                    <p><a href="/login">Sign in</a>.</p>

                  </div>

            </form>
        </div>
    </section>


    </body>
</html>
