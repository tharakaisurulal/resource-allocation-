<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lecture hall Allocation</title>
        @include('cdn')
        <link rel="stylesheet" href={{asset('css/bootstrap.css')}}>
        <link rel="stylesheet" href={{asset('css/style.css')}}>
        <link rel="icon" type="text/css" href="{{asset('img/icons/favicon.png')}}">

    </head>
    <body>
        <section>
        <div class="header">
            <img src="images/logo_copy.png" class="logo">


        <input type="checkbox" id="openSidebarMenu" style="display:none">

        <label for="openSidebarMenu" class="sidebarIconToggle">
            <div class="spinner top"></div>
            <div class="spinner middle"></div>
            <div class="spinner bottom"></div>
        </label>
            <div id="sidebarMenu">
                <ul class="menu">
                    <li><a href="#">HOME</a></li>
                    <li><a href="#about">ABOUT US</a></li>
                    <li><a href="#contactus">CONTACT US</a></li>
                    <li><a href="#">NOTICE</a></li>
                    <li><a href="/loginpage">LOGIN</a></li>
                    <li><a href="/guest/guestregistration">REGISTER</a></li>
                    <li><a href="#">LOG OUT</a></li>
                </ul>
            </div>

        </div>
    </section>

        <section id="banner">

            <div class="banner-text">
                <h1>WELCOME TO RESOURCES MANAGEMENT SYSTEM...</h1>
                <div class="banner-btn">
                    <a href="#"><span></span>GUEST US</a>
                    <a href="/loginpage"><span></span>LOGIN</a>
                    <a href="/guest/guestregistration"><span></span>REGISTER</a>
                </div>
            </div>
        </div>
        </section>

        <!------------------------about section starts -------------------------------------->

        <section class="about" id="about">
            <div class="container">
                    <div class="title-text">
                        <h1 class="heading"><span>ABOUT</span> US</h1>
                    </div>

                    <div class="content">
                        <div class="article">
                            <img src={{asset('images/slider3.jpg')}} alt="" class="img-responsive floating-image right">

                            <h2><ins>Department Of Computer Science</ins></h2>
                            <p>&nbsp&nbsp&nbspThe Department of Computer Science of the University of Ruhuna is the oldest and one of the most esteemed computer science departments in the university system of Sri Lanka. The root of the department was the Computer Unit of the University of Ruhuna and the department was established in 1997 fulfilling a long-standing need of the University. Currently the department offers undergraduate programs, postgraduate programs and training programs on demand. The department disseminates it’s knowledge not only to the university students but also to the outside society through its external courses. The department further extends its services by providing software solutions and though ICT related consultancy services. </p>

                            <div class="profile">
                                <h4><ins> HEAD </ins></h4>
                                <div class="img">
                                    <img src={{asset('images/849.jpg')}}>
                                </div>

                                <div class="b">
                                        <h3>Dr. Sugandima Vidanagamachchi </h3>
                                        <h4>Senior Lecturer (Grade I)</h4>
                                        <p>B.Sc. in Computer Science (UCSC) , PhD in Computer Engineering (Pdn),<br>
                                        Email :<a href="#">smv@dcs.ruh.ac.lk</a><br>
                                        Extention 14600</p>
                                </div>
                            </div>

                            <div class="button">
                                <a href=""><span>Read More</span></a>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
        <!---------------------- about section ends ---------------------------------------->

        <!---------------------- contact section starts ---------------------------------------->

        <section class="contactus" id="contactus">
            <div class="container">
            <div class="title-text">
                <h1 class="heading"><span>CONTACT</span> US</h1>
            </div>

            <div class="box">
                <!--form -->
                <div class="contact form">
                    <h3>Send a Message</h3>
                    <form>
                        <div class="formBox">
                            <div class="row50">
                                <div class="inputBox">
                                    <span>First Name</span>
                                    <input type="text" placeholder="Enter Name">
                                </div>

                                <div class="inputBox">
                                    <span>Last Name</span>
                                    <input type="text" placeholder="Enter Name">
                                </div>
                            </div>

                            <div class="row50">
                                <div class="inputBox">
                                    <span>Email</span>
                                    <input type="text" placeholder="abc@gmail.com">
                                </div>

                                <div class="inputBox">
                                    <span>Mobile</span>
                                    <input type="text" placeholder="+94xxxx">
                                </div>
                            </div>

                            <div class="row100">
                                <div class="inputBox">
                                    <span>Message</span>
                                    <textarea placeholder="Write your message here..."></textarea>
                                </div>
                            </div>

                            <div class="row100">
                                <div class="inputBox">
                                    <input type="submit" value="Send">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!--info Box -->
                <div class="contact info">
                    <h3> Contact Info</h3>
                    <div class="infoBox">
                        <div>
                            <span><ion-icon name="location"></ion-icon></span>
                            <p>Department Of Computer Science,<br>University of Ruhuna,<br>Matara,<br>Sri Lanka</p>
                        </div>

                        <div>
                            <span><ion-icon name="call"></ion-icon></span>
                            <a href="tel:+94 41 2222681/2 Ext 4801/2">+94 41 2222681/2 Ext 4801/2</a>
                        </div>

                        <!-- Social Media Links -->
                        <ul class="sci">
                            <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                            <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                            <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                            <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                        </ul>
                    </div>
                </div>

                <!--Map -->
                <div class="contact map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3968.399122939445!2d80.57371417412882!3d5.939599329674986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae13904aaa6ab35%3A0xd4d8a1376614f3a4!2sDepartment%20of%20Computer%20Science!5e0!3m2!1sen!2slk!4v1694210796019!5m2!1sen!2slk" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            </div>
        </section>
        <!---------------------- contact section ends ---------------------------------------->

        <!---------------------- footer section starts ---------------------------------------->
    <section class="footer">
        <div class="page-wrapper">
            <div id="waterdrop"></div>
              <div class="footer-top">
                  <div class="row">

                    <div class="col-lg-3 col-md-12 col-sm-12 footer-col-3">
                        <div class="logo2">
                            <img src={{asset('images/u-ruhuna.png')}}>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12 col-sm-12 footer-col-3">
                      <div class="Contact Info ">
                        <h5 class="footer-title">Address</h5>
                            <div class="contact">
                            <div>
                                <span><ion-icon name="location"></ion-icon></span>
                                <p>Department Of Computer Science,<br>University of Ruhuna,<br>Matara,<br>Sri Lanka</p>
                            </div>

                            <div>
                                <span><ion-icon name="call"></ion-icon></span>
                                <a href="tel:+94 41 2222681/2 Ext 4801/2">+94 41 2222681/2 Ext 4801/2</a>
                            </div>
                        </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-12 col-sm-12 footer-col-3">
                        <div class="widget">
                          <h5 class="footer-title">Email Us</h5>
                          <div class="textwidget">
                            <div role="form" class="wpcf7" id="wpcf7-f4-o1" lang="en-US" dir="ltr">

                              <form method="post" class="wpcf7-form" novalidate="novalidate">

                                <div class="contact-form-footer">
                                  <p><span class="wpcf7-form-control-wrap your-first-name"><input type="text" name="your-first-name" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Your name"></span></p>
                                  <p><span class="wpcf7-form-control-wrap your-email_1"><input type="email" name="your-email_1" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" aria-invalid="false" placeholder="Your email"></span></p>
                                  <p><span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Your message"></textarea></span></p>
                                  <div><input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span></div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-3 col-md-12 col-sm-12 footer-col-3">
                        <div class="widget">
                            <h5 class="footer-title">Quick Link</h5>
                            <div class="box">

                                  <a href="#"> <i class="fas fa-angle-right"></i> Home</a><br>
                                  <a href="#"> <i class="fas fa-angle-right"></i> About</a><br>
                                  <a href="#"> <i class="fas fa-angle-right"></i> Contact</a><br>
                                  <a href="#"> <i class="fas fa-angle-right"></i> Log Out</a>
                            </div>

                        </div>
                    </div>

                    <div class="credit"><span> UNIVERSITY OF RUHUNA </span> | COMPUTER SCIENCE DEPARTMENT </div>
                </div>
            </section>

      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>

    </html>

