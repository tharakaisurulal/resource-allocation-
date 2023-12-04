@extends('layout.header')
@section('content2')
        <li><a href="/">HOME</a></li>
        <li><a href="#">ABOUT US</a></li>
        <li><a href="#">CONTACT US</a></li>
        <li><a href="#">NOTICE</a></li>
        <li><a href="/guest/guestregistration">REGISTER</a></li>
@endsection

@section("content")
<!DOCTYPE html>
<html lang="en">
<head>

  <title>Bootstrap Theme Company Page</title>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <!--<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{asset('css/guestpage.css')}}">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>


</head>
<body>
    <div class="divi1">
    <div class="jumbotron text-center">
        <h1>TODAY ALLOCATION</h1>
        <p>From Department Of Computer Science</p>

      </div>
      <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
          <!-- Indicators -->
          <!--<ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol> -->

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <h4>"notice01"<br><span>Dtae(YYYY/MM/DD)</span></h4>
            </div>
            <div class="item">
              <h4>"notice02"<br><span>Dtae(YYYY/MM/DD)</span></h4>
            </div>
            <div class="item">
              <h4>"notice03"<br><span>Dtae(YYYY/MM/DD)</span></h4>
            </div>
          </div>
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
              </a>
          </div>
      </div>

<!-- Container (About Section) -->
<!--<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
            <h2>TODAY ALLOCATION OF LECTURE HALLS</h2>
          <table class="table table-bordered table-dark">
        <thead>
          <tr>
            <th scope="col">Time</th>
            <th scope="col">Main Auditorium</th>
            <th scope="col">Lecture Hall 01</th>
            <th scope="col">Lecture Hall 02</th>
            <th scope="col">Lecture Hall 03</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">8-9</th>
            <td> </td>
            <td> </td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">9-10</th>
            <td> </td>
            <td> </td>
            <td> </td>
            <td></td>
          </tr>
          <tr>
          <th scope="row">10-11</th>
            <td> </td>
            <td> </td>
            <td> </td>
            <td></td>
          </tr>
          <th scope="row">11-12</th>
            <td> </td>
            <td> </td>
            <td> </td>
            <td></td>
          </tr>
          <th scope="row">13-14</th>
            <td> </td>
            <td> </td>
            <td> </td>
            <td></td>
          </tr>
          <th scope="row">14-15</th>
            <td> </td>
            <td> </td>
            <td> </td>
            <td></td>
          </tr>
          <th scope="row">15-16</th>
            <td> </td>
            <td> </td>
            <td> </td>
            <td></td>
          </tr>
          <th scope="row">16-17</th>
            <td> </td>
            <td> </td>
            <td> </td>
            <td></td>
          </tr>
          <th scope="row">17-18</th>
            <td> </td>
            <td> </td>
            <td> </td>
            <td></td>
          </tr>

        </tbody>
      </table>
          </div>
    <div class="col-sm-4">
      Calender
    </div>
  </div>
</div>


<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      map
    </div>
    <div class="col-sm-8">
      <h2>TODAY ALLOCATION OF PRACTICAL LABS</h2>
            <table class="table table-bordered table-dark">
          <thead>
            <tr>
              <th scope="col">Time</th>
              <th scope="col">Lab 01</th>
              <th scope="col">Lab 02</th>
              <th scope="col">Lab 03</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">8-9</th>
              <td> </td>
              <td> </td>
              <td></td>
            </tr>
            <tr>
              <th scope="row">9-10</th>
              <td> </td>
              <td> </td>
              <td> </td>

            </tr>
            <tr>
            <th scope="row">10-11</th>
              <td> </td>
              <td> </td>
              <td> </td>

            </tr>
            <th scope="row">11-12</th>
              <td> </td>
              <td> </td>
              <td> </td>

            </tr>
            <th scope="row">13-14</th>
              <td> </td>
              <td> </td>
              <td> </td>

            </tr>
            <th scope="row">14-15</th>
              <td> </td>
              <td> </td>
              <td> </td>

            </tr>
            <th scope="row">15-16</th>
              <td> </td>
              <td> </td>
              <td> </td>

            </tr>
            <th scope="row">16-17</th>
              <td> </td>
              <td> </td>
              <td> </td>

            </tr>
            <th scope="row">17-18</th>
              <td> </td>
              <td> </td>
              <td> </td>

            </tr>

          </tbody>
        </table>
            </div>
          </div>
        </div>-->

    <div class="container">
        <img src="images/im1.jpg" alt="Snow"  class="img2" >

            <div class="container1">
                    <img src="images/im2rec.png"  class="mm" width="356px" height="80px">
                <div class="overlay">
                    <div class="text">@if ($data2)

                        <table class="table table-dark">
                            <thead>
                                <td>Course Code</td>
                                <td> Start</td>
                                <td>End</td>
                            </thead>
                            <tbody>
                                @foreach ($data2 as $cdb3 )
                            <tr>
                                <td>{{$cdb3->course_code}}</td>
                                <td>{{$cdb3->start_time}}</td>
                                <td>{{$cdb3->end_time}}</td>
                            </tr>
                                @endforeach
                        </tbody>
                        </table>

                    @else
                        @php
                            echo "No Allocations for Today"
                        @endphp
                    @endif </div> <!--4-->
                </div>
            </div>

            <div class="container2">
                    <img src="images/im2rec.png"  class="mm1" width="509px" height="93px">
                <div class="overlay1">
                    <div class="text">Hello World1</div>
                </div>
            </div>

            <div class="container3">
                    <img src="images/im2rec.png"  class="mm2" width="363px" height="80px">
                <div class="overlay2">
                    <div class="text">@if (!$data1)

                        <table class="table table-dark">
                            <thead>
                                <td>Course Code</td>
                                <td> Start</td>
                                <td>End</td>
                            </thead>
                            <tbody>
                                @foreach ($data1 as $cdb3 )
                            <tr>
                                <td>{{$cdb3->course_code}}</td>
                                <td>{{$cdb3->start_time}}</td>
                                <td>{{$cdb3->end_time}}</td>
                            </tr>
                                @endforeach
                        </tbody>
                        </table>

                    @else
                    <table class="table table-dark">
                        <tbody>
                        <tr>
                            <td colspan="3">No Time slotes allocated For Today!</td>
                        </tr>
                    </tbody>
                    </table>
                    @endif</div> <!--17-->
                </div>
            </div>

            <div class="container4">
                    <img src="images/im2rec.png"  class="mm3" width="392px" height="67px">
                <div class="overlay3">
                    <div class="text">Hello World3</div>
                </div>
            </div>

            <div class="container5">
                    <img src="images/im2rec.png"  class="mm4" width="379px" height="209px">
                <div class="overlay4">
                    <div class="text">@if ($data3)
                        @foreach ($data3 as $cdb3 )
                        <table class="table table-dark">
                            <thead>
                                <td>Course Code</td>
                                <td> Start</td>
                                <td>End</td>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{$cdb3->course_code}}</td>
                                <td>{{$cdb3->start_time}}</td>
                                <td>{{$cdb3->end_time}}</td>
                            </tr>
                        </tbody>
                        </table>
                        @endforeach
                    @else
                    @php
                    echo 'No Allocations for Today';
                    @endphp
                    @endif</div> <!--13-->
                </div>
            </div>

            <div class="container6">
                    <img src="images/im2rec.png"  class="mm5" width="310px" height="90px">
                <div class="overlay5">
                    <div class="text">Hello World5</div>
                </div>
            </div>

            <div class="container7">
                    <img src="images/im2rec.png"  class="mm6" width="253px" height="78px">
                <div class="overlay6">
                    <div class="text">Hello World6</div>
                </div>
            </div>


            <div class="divi2">
              <h1 class="hb">Speacial Events</h1>
              <div id="calendar">
                  </div>
              </div>
          </div>

    </div>

        <script type="text/javascript">
            var booking =@json($event);
                //console.log(event)
                $(document).ready(function() {
                var calendar = $('#calendar').fullCalendar({
                    header: {
                        left:'prev,next today',
                        center:'title',
                        right:'month,agendaWeek,agendaDay',
                    },
                    events:booking,
                    selectable: true,
                    selectHelper: true
                    })
            });
            </script>
</body>
</html>
@endsection
