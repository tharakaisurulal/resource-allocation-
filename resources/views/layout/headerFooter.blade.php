<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lecture hall Allocation</title>
        @include('cdn')
        <link rel="stylesheet" href={{asset('css/headerfooter.css')}}>
        <link rel ="icon" href ="/images/R.png">
    </head>

    <body>
        <section class="sec1">
        <div class="header">
            <img src="/images/logo_copy.png" class="logo">
        </div>


        <input type="checkbox" id="openSidebarMenu">
        <div><label for="openSidebarMenu" class="sidebarIconToggle">
            <div class="spinner top"></div>
            <div class="spinner middle"></div>
            <div class="spinner bottom"></div>
        </label></div>
            <div id="sidebarMenu">
                <ul class="menu">
                    <li><a href="/">HOME</a></li>
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="#">CONTACT US</a></li>
                    <li><a href="#">NOTICE</a></li>
                    <li><a href="/loginpage">LOGIN</a></li>
                    <li><a href="/guest/guestregistration">REGISTER</a></li>
                </ul>
            </div>

        </section>

        @yield('content')

        <!-- footer section starts  -->

        <div class="page-wrapper">
            <div id="waterdrop"></div>
            <footer>
              <div class="footer-top">
                <div class="pt-exebar">

                </div>
                <div class="container">
                  <div class="row">

                    <div class="col-lg-3 col-md-12 col-sm-12 footer-col-3">
                        <div class="logo2">
                            <img src={{asset('images/u-ruhuna.png')}}>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12 col-sm-12 footer-col-3">
                      <div class="widget footer_widget">
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
                            <div class="box1">
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
                        </div>

                    <div class="col-lg-3 col-md-12 col-sm-12 footer-col-3">
                        <div class="widget">

                            <div class="box1">
                                <h5 class="footer-title">Quick Link</h5>
                                  <a href="/"> <i class="fas fa-angle-right"></i> Home</a><br><br>
                                  <a href="#"> <i class="fas fa-angle-right"></i> About</a><br><br>
                                  <a href="#"> <i class="fas fa-angle-right"></i> Contact</a><br><br>
                                  <a href="#"> <i class="fas fa-angle-right"></i> Log Out</a>
                            </div>

                        </div>
                    </div>


                    <div class="credit"><span> UNIVERSITY OF RUHUNA </span> | COMPUTER SCIENCE DEPARTMENT </div>
                </div>
              </div>



            </footer>
          </div>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
          <script src="https://daniellaharel.com/raindrops/js/raindrops.js"></script>
          <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
          <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

         <script> jQuery('#waterdrop').raindrops({color:'#1c1f2f', canvasHeight:150, density: 0.1, frequency: 20});
        </script>

 <!-- footer section ends ---->
</div>
    </body>
    </html>
