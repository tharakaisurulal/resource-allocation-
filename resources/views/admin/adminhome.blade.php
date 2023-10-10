<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lecture hall Allocation</title>
        @include('cdn')
        <link rel="stylesheet" href={{asset('css/adminhome.css')}}>

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
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <!--<div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTen">
                        <button class="accordion-button collapsed sec2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                            <a href="#"><li>DASHBOARD</li></a>
                      </button>
                    </h2>
                  </div>-->


                <div class="accordion-item">
                  <h2 class="accordion-header bb" id="flush-headingOne">
                    <button class="accordion-button collapsed sec2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <li><a href="#">ACTORS</a></li>
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse sec2" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul>
                            <li class="sec3"><a href="#">STUDENT</a></li>
                            <li class="sec3"><a href="#">LECTURER</a></li>
                            <li class="sec3"><a href="#">ACADEMIC-SUPPORTIVE</a></li>
                            <li class="sec3"><a href="#">GUEST</a></li>
                        </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed sec2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <li><a href="#">HALLS & LABS</a></li>
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse sec2" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                            <li class="sec3"><a href="/admin/lecturehall/adminlecturehallopera">LECTUREHALLS</a></li>
                            <li class="sec3"><a href="/admin/lab/adminlabopera">PRACTICAL LABS</a></li>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed sec2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree" onclick="window.location.href='/admin/course/admincourseopera';">
                        <li><a href="#">COURSE</a></li>
                    </button>
                  </h2>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFour">
                      <button class="accordion-button collapsed sec2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour" onclick="window.location.href='/admin/program/adminprogramopera';">
                        <li><a href="#">DEGREE PROGRAM</a></li>
                      </button>
                    </h2>
                  </div>


                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingSeven">
                      <button class="accordion-button collapsed sec2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                        <li><a href="#">TIMETABLE</a></li>
                      </button>
                    </h2>
                    <div id="flush-collapseSeven" class="accordion-collapse collapse sec2" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                          <!--write-->
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFive">
                      <button class="accordion-button collapsed sec2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                        <li><a href="#">HALL REQUEST</a></li>
                      </button>
                    </h2>
                    <div id="flush-collapseFive" class="accordion-collapse collapse sec2" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                          <!--write-->
                      </div>
                    </div>
                  </div>


                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingSix">
                      <button class="accordion-button collapsed sec2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                        <li><a href="#">EVENTS</a></li>
                      </button>
                    </h2>
                    <div id="flush-collapseSix" class="accordion-collapse collapse sec2" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                          <!--write-->
                      </div>
                    </div>
                  </div>


                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingEleven">
                      <button class="accordion-button collapsed sec2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEleven" aria-expanded="false" aria-controls="flush-collapseEleven">
                        <li><a href="#">MAINTENANCE COMPLAIN</a></li>
                      </button>
                    </h2>
                    <div id="flush-collapseEleven" class="accordion-collapse collapse sec2" aria-labelledby="flush-headingEleven" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                          <!--write-->
                      </div>
                    </div>
                  </div>


                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingEight">
                      <button class="accordion-button collapsed sec2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                        <li><a href="#">EVENTS</a></li>
                      </button>
                    </h2>
                    <div id="flush-collapseEight" class="accordion-collapse collapse sec2" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                          <!--write-->
                      </div>
                    </div>
                  </div>


                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTen">
                      <button class="accordion-button collapsed sec2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen" onclick="window.location.href='/logout';">
                        <li><a href="#">LOG OUT</a></li>
                      </button>
                    </h2>
                  </div>

              </div>
            </div>
        </div>
        </section>

        @yield('content')
    </body>
    </html>