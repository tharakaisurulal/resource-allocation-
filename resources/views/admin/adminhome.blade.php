<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lecture hall Allocation</title>
        @include('cdn')
        <link rel="stylesheet" href={{asset('css/adminhome.css')}}>
        <link rel="icon" type="text/css" href="{{asset('/images/R.png')}}">

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
                            <li class="sec3"><a href="/admin/student/stuopera">STUDENT</a></li>
                            <li class="sec3"><a href="/admin/lecturer/lectureopera">LECTURER</a></li>
                            <li class="sec3"><a href="/admin/academicsupportive/academicsupopera">ACADEMIC-SUPPORTIVE</a></li>
                            <li class="sec3"><a href="/admin/guest/guestopera">GUEST</a></li>
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
                      <button class="accordion-button collapsed sec2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven" onclick="window.location.href='/admin/timetable/timetableopera';">
                        <li><a href="#">TIMETABLE</a></li>
                      </button>
                    </h2>
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


                 <!-- <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingSix">
                      <button class="accordion-button collapsed sec2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                        <li><a href="#">EVENTS</a></li>
                      </button>
                    </h2>
                    <div id="flush-collapseSix" class="accordion-collapse collapse sec2" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                          <!--write-->
                     <!-- </div>
                    </div>
                  </div>-->


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
<!--header section end-->
<div class="section1">
    <div class="card">
        <img src="/images/R2.png" alt="" width="50px" height="50px">
        <h4>STUDENTS</h4><br>
        <h4>{{$count}}</h4>
    </div>

    <div class="card">
        <img src="/images/lecturer.png" alt="" width="50px" height="50px">
        <h4>LECTURERS</h4><br>
        <h4>{{$count1}}</h4>
    </div>

    <div class="card">
        <img src="/images/sup.png" alt="" width="50px" height="50px">
        <h4>ACADEMIC-SUPPORTIVE</h4>
        <h4>{{$count2}}</h4>
    </div>

    <div class="card">
        <img src="/images/R3.png" alt="" width="50px" height="50px">
        <h4>GUEST</h4><br>
        <h4>{{$count3}}</h4>
    </div>
</div>
<div class="section2">
    <button type="button" class="btn btn-warning but">
        <a href="/admin/timetable/timetableopera">
        <h4>Time Table</h4><br>
        </a>
    </button>

    <button type="button" class="btn btn-warning but">
        <a href="/admin/adminhallallocation">
        <h4>Hall Allocation</h4><br>
        </a>
    </button>
</div>
    </body>
    </html>

