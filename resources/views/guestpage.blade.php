@extends('layout.header')
@section('content2')
        <li><a href="/">HOME</a></li>
        <li><a href="/welcome/about">ABOUT US</a></li>
        <li><a href="/welcome/notice">NOTICE</a></li>
        <li><a href="/loginpage">LOGIN</a></li>
        <li><a href="/guest/guestregistration">REGISTER</a></li>
@endsection

@section("content")
<!DOCTYPE html>
<html lang="en">
<head>

  <title>Bootstrap Theme Company Page</title>

 <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
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
      <div id="marquee-cont">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50px" height="40px" style="background:#1174A8;">
              <button id="ticker-title">Posts:</button>
            </td>
            <td id="marquee">
              <marquee onmouseover="this.stop();" onmouseout="this.start();" id='scroll'>
              <!--temp <img src="https://www.naishare.com/images/favicon.png" width="25px" />-->
              </marquee>
            </td>
          </tr>
        </table>
      </div>
    </div>
     
<!-- Map Start-->
    <div class="container">
        <img src="images/im1.jpg" alt="Snow"  class="img2" >

            <div class="container1">
                    <img src="images/im2rec.png" class="mm" width="356px" height="80px">
                <div class="overlay">
                    <div class="text">@if (sizeof($data2)!==0)

                        <table class="table table-dark">
                            <thead>
                                <td>Course Code</td>
                                <td> Start</td>
                                <td>End</td>
                            </thead>
                            <tbody>
                                @foreach ($data2 as $cdb2 )
                            <tr>
                                <td>{{$cdb2->course_code}}</td>
                                <td>{{$cdb2->start_time}}</td>
                                <td>{{$cdb2->end_time}}</td>
                            </tr>
                                @endforeach
                        </tbody>
                        </table>
                    </div>
                    <div class="text">
                    @else
                    <table class="table table-dark">
                        <tbody>
                            <tr>
                                <td colspan="3">No Time slotes allocated For Today!</td>
                            </tr>
                        </tbody>
                    </table>
                    @endif </div> <!--4-->
                </div>
            </div>

            <div class="container2">
                    <img src="images/im2rec.png"  class="mm1" width="509px" height="93px">
                <div class="overlay1">
                    <div class="text">@if (sizeof($data3)!==0)

                        <table class="table table-dark">
                            <thead>
                                <td>Course Code</td>
                                <td> Start</td>
                                <td>End</td>
                            </thead>
                            <tbody>
                                @foreach ($data4 as $cdb4 )
                            <tr>
                                <td>{{$cdb4->course_code}}</td>
                                <td>{{$cdb4->start_time}}</td>
                                <td>{{$cdb4->end_time}}</td>
                            </tr>
                                @endforeach
                        </tbody>
                        </table>
                    </div>
                    <div class="text">
                    @else
                    <table class="table table-dark">
                        <tbody>
                            <tr>
                                <td colspan="3">No Time slotes allocated For Today!</td>
                            </tr>
                        </tbody>
                    </table>
                    @endif</div> <!--03-->
                </div>
            </div>

            <div class="container3">
                    <img src="images/im2rec.png"  class="mm2" width="363px" height="80px">
                <div class="overlay2">
                    <div class="text">@if (sizeof($data1)!==0)

                        <table class="table table-dark">
                            <thead>
                                <td>Course Code</td>
                                <td> Start</td>
                                <td>End</td>
                            </thead>
                            <tbody>
                                @foreach ($data1 as $cdb1 )
                            <tr>
                                <td>{{$cdb1->course_code}}</td>
                                <td>{{$cdb1->start_time}}</td>
                                <td>{{$cdb1->end_time}}</td>
                            </tr>
                                @endforeach
                        </tbody>
                        </table>
                    </div>
                    <div class="text">
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
                    <div class="text">@if (sizeof($data6)!==0)

                        <table class="table table-dark">
                            <thead>
                                <td>Course Code</td>
                                <td> Start</td>
                                <td>End</td>
                            </thead>
                            <tbody>
                                @foreach ($data6 as $cdb6 )
                            <tr>
                                <td>{{$cdb6->course_code}}</td>
                                <td>{{$cdb6->start_time}}</td>
                                <td>{{$cdb6->end_time}}</td>
                            </tr>
                                @endforeach
                        </tbody>
                        </table>
                    </div>
                    <div class="text">
                    @else
                    <table class="table table-dark">
                        <tbody>
                            <tr>
                                <td colspan="3">No Time slotes allocated For Today!</td>
                            </tr>
                        </tbody>
                    </table>
                    @endif</div> <!--16-->
                </div>
            </div>

            <div class="container5">
                    <img src="images/im2rec.png"  class="mm4" width="379px" height="209px">
                <div class="overlay4">
                    <div class="text">@if (sizeof($data3)!==0)

                        <table class="table table-dark">
                            <thead>
                                <td>Course Code</td>
                                <td> Start</td>
                                <td>End</td>
                            </thead>
                            <tbody>
                                @foreach ($data3 as $cdb3 )
                            <tr>
                                <td>{{$cdb3->course_code}}</td>
                                <td>{{$cdb3->start_time}}</td>
                                <td>{{$cdb3->end_time}}</td>
                            </tr>
                                @endforeach
                        </tbody>
                        </table>
                    </div>
                    <div class="text">
                    @else
                    <table class="table table-dark">
                        <tbody>
                            <tr>
                                <td colspan="3">No Time slotes allocated For Today!</td>
                            </tr>
                        </tbody>
                    </table>
                    @endif</div> <!--13-->
                </div>
            </div>

            <div class="container6">
                    <img src="images/im2rec.png"  class="mm5" width="310px" height="90px">
                <div class="overlay5">
                    <div class="text">@if (sizeof($data5)!==0)

                        <table class="table table-dark">
                            <thead>
                                <td>Course Code</td>
                                <td> Start</td>
                                <td>End</td>
                            </thead>
                            <tbody>
                                @foreach ($data5 as $cdb5 )
                            <tr>
                                <td>{{$cdb5->course_code}}</td>
                                <td>{{$cdb5->start_time}}</td>
                                <td>{{$cdb5->end_time}}</td>
                            </tr>
                                @endforeach
                        </tbody>
                        </table>
                    </div>
                    <div class="text">
                    @else
                    <table class="table table-dark">
                        <tbody>
                            <tr>
                                <td colspan="3">No Time slotes allocated For Today!</td>
                            </tr>
                        </tbody>
                    </table>
                    @endif</div> <!--09-->
                </div>
            </div>

            <div class="container7">
                    <img src="images/im2rec.png"  class="mm6" width="253px" height="78px">
                <div class="overlay6">
                    <div class="text">@if (sizeof($data7)!==0)

                        <table class="table table-dark">
                            <thead>
                                <td>Course Code</td>
                                <td> Start</td>
                                <td>End</td>
                            </thead>
                            <tbody>
                                @foreach ($data7 as $cdb7 )
                            <tr>
                                <td>{{$cdb7->course_code}}</td>
                                <td>{{$cdb7->start_time}}</td>
                                <td>{{$cdb7->end_time}}</td>
                            </tr>
                                @endforeach
                        </tbody>
                        </table>
                    </div>
                    <div class="text">
                    @else
                    <table class="table table-dark">
                        <tbody>
                            <tr>
                                <td colspan="3">No Time slotes allocated For Today!</td>
                            </tr>
                        </tbody>
                    </table>
                    @endif</div> <!--08-->
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
            var notice =@json($notices);
                //console.log(notice)
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

            

            //logo
            const logo = "<img src='/images/O.jpg' width='25px' style='margin:0 8px'/>";
            let tickerText = "";
            //looping through the news array
            for(let i=0; i<notice.length; i++){
            tickerText+=notice[i].notice;
            //adds the logo in between news items
            if(i!=notice.length-1){
                tickerText+=logo;
            }
            }

            document.querySelector("#scroll").innerHTML = tickerText;
            </script>
</body>
</html>
@endsection
