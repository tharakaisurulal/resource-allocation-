@extends('layout.headerFooter')
@section('content2')
        <li><a href="/">HOME</a></li>
        <li><a href="#">ABOUT US</a></li>
        <li><a href="#">CONTACT US</a></li>
        <li><a href="#">NOTICE</a></li>
        <li><a href="/loginpage">LOGIN</a></li>
        <li><a href="/guest/guestregistration">REGISTER</a></li>
@endsection

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
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
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

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
<div id="about" class="container-fluid">
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
        </div>

        <div id="calendar">
            <h1>d</h1>
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
