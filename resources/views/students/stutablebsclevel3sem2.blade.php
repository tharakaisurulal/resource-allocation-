<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @include('cdn')
        <link rel="stylesheet" href="{{asset('css/tablebcslevel1.css')}}">
</head>
<body>



<H1>BSc(General) DEGREE PROGRAMME(LEVEL 3 SEMESTER 2)</H1>
<H2>Bachelor of Physical Science(General)(SC/2019)</H2>
<br>

<TABLE class="myTimetable">
  <THEAD>
    <TR>
      <TH>Time</TH>
      <TH>Monday</TH>
      <TH>Tuesday</TH>
      <TH>Wednesday</TH>
      <TH>Thursday</TH>
      <TH>Friday</TH>
    </TR>
  </THEAD>
  <TBODY>
    <TR>

        <TD> 8.00-8.55</TD>
        <TD>
          @foreach ($dat1 as $data1)
          @foreach ($data1 as $cdb)
              @if ((($cdb->day)=="Monday")&(($cdb->start_time)=="08:00"))
                  <div class="name" >{{$cdb->course_name}}</div>
                  <div class="code" >{{$cdb->course_code}}</div>
                  <div class="lecturer">{{$cdb->lec_name}}</div>
                  <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
              @endif
          @endforeach
          @endforeach

          @foreach ($dat2 as $data2)
          @foreach ($data2 as $cdb)
          @if ((($cdb->day)=="Monday")&(($cdb->start_time)=="08:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->acc_name}}</div>
              <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
          @endif
      @endforeach
      @endforeach
          </TD>


        <TD>
          @foreach ($dat1 as $data1)
          @foreach ($data1 as $cdb)
          @if ((($cdb->day)=="Tuesday")&(($cdb->start_time)=="08:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->lec_name}}</div>
              <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
          @endif
          @endforeach
          @endforeach

          @foreach ($dat2 as $data2)
          @foreach ($data2 as $cdb)
          @if ((($cdb->day)=="Tuesday")&(($cdb->start_time)=="08:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->acc_name}}</div>
              <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
          @endif
          @endforeach
          @endforeach

        </TD>
        <TD>
          @foreach ($dat1 as $data1)
          @foreach ($data1 as $cdb)
          @if ((($cdb->day)=="Wednesday")&(($cdb->start_time)=="08:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->lec_name}}</div>
              <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
          @endif
          @endforeach
          @endforeach

          @foreach ($dat2 as $data2)
          @foreach ($data2 as $cdb)
          @if ((($cdb->day)=="Wednesday")&(($cdb->start_time)=="08:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->acc_name}}</div>
              <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
          @endif
          @endforeach
          @endforeach

        </TD>
        <TD>
          @foreach ($dat1 as $data1)
          @foreach ($data1 as $cdb)
          @if ((($cdb->day)=="Thursday")&(($cdb->start_time)=="08:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->lec_name}}</div>
              <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
          @endif
          @endforeach
          @endforeach

          @foreach ($dat2 as $data2)
          @foreach ($data2 as $cdb)
          @if ((($cdb->day)=="Thursday")&(($cdb->start_time)=="08:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->acc_name}}</div>
              <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
          @endif
          @endforeach
          @endforeach

        </TD>
        <TD>
          @foreach ($dat1 as $data1)
          @foreach ($data1 as $cdb)
          @if ((($cdb->day)=="Friday")&(($cdb->start_time)=="08:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->lec_name}}</div>
              <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
          @endif
          @endforeach
          @endforeach

          @foreach ($dat2 as $data2)
          @foreach ($data2 as $cdb)
          @if ((($cdb->day)=="Friday")&(($cdb->start_time)=="08:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->acc_name}}</div>
              <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
          @endif
          @endforeach
          @endforeach

        </TD>
      </TR>

      <TR>
        <TD>9.00-9.55</TD>
        <TD>
          @foreach ($dat1 as $data1)
          @foreach ($data1 as $cdb)
              @if ((($cdb->day)=="Monday")&(($cdb->start_time)=="09:00"))
                  <div class="name" >{{$cdb->course_name}}</div>
                  <div class="code" >{{$cdb->course_code}}</div>
                  <div class="lecturer">{{$cdb->lec_name}}</div>
                  <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
              @endif
          @endforeach
          @endforeach

          @foreach ($dat2 as $data2)
          @foreach ($data2 as $cdb)
          @if ((($cdb->day)=="Monday")&(($cdb->start_time)=="09:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->acc_name}}</div>
              <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
          @endif
      @endforeach
      @endforeach
          </TD>

          <TD>
              @foreach ($dat1 as $data1)
              @foreach ($data1 as $cdb)
              @if ((($cdb->day)=="Tuesday")&(($cdb->start_time)=="09:00"))
                  <div class="name" >{{$cdb->course_name}}</div>
                  <div class="code" >{{$cdb->course_code}}</div>
                  <div class="lecturer">{{$cdb->lec_name}}</div>
                  <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
              @endif
              @endforeach
              @endforeach

              @foreach ($dat2 as $data2)
              @foreach ($data2 as $cdb)
              @if ((($cdb->day)=="Tuesday")&(($cdb->start_time)=="09:00"))
                  <div class="name" >{{$cdb->course_name}}</div>
                  <div class="code" >{{$cdb->course_code}}</div>
                  <div class="lecturer">{{$cdb->acc_name}}</div>
                  <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
              @endif
              @endforeach
              @endforeach
          </TD>

          <TD>
              @foreach ($dat1 as $data1)
              @foreach ($data1 as $cdb)
              @if ((($cdb->day)=="Wednesday")&(($cdb->start_time)=="09:00"))
                  <div class="name" >{{$cdb->course_name}}</div>
                  <div class="code" >{{$cdb->course_code}}</div>
                  <div class="lecturer">{{$cdb->lec_name}}</div>
                  <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
              @endif
              @endforeach
              @endforeach

              @foreach ($dat2 as $data2)
              @foreach ($data2 as $cdb)
              @if ((($cdb->day)=="Wednesday")&(($cdb->start_time)=="09:00"))
                  <div class="name" >{{$cdb->course_name}}</div>
                  <div class="code" >{{$cdb->course_code}}</div>
                  <div class="lecturer">{{$cdb->acc_name}}</div>
                  <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
              @endif
              @endforeach
              @endforeach

          </TD>

          <TD>
              @foreach ($dat1 as $data1)
              @foreach ($data1 as $cdb)
              @if ((($cdb->day)=="Thursday")&(($cdb->start_time)=="09:00"))
                  <div class="name" >{{$cdb->course_name}}</div>
                  <div class="code" >{{$cdb->course_code}}</div>
                  <div class="lecturer">{{$cdb->lec_name}}</div>
                  <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
              @endif
              @endforeach
              @endforeach

              @foreach ($dat2 as $data2)
              @foreach ($data2 as $cdb)
              @if ((($cdb->day)=="Thursday")&(($cdb->start_time)=="09:00"))
                  <div class="name" >{{$cdb->course_name}}</div>
                  <div class="code" >{{$cdb->course_code}}</div>
                  <div class="lecturer">{{$cdb->acc_name}}</div>
                  <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
              @endif
              @endforeach
              @endforeach
              </TD>

              <TD>
                  @foreach ($dat1 as $data1)
                  @foreach ($data1 as $cdb)
                  @if ((($cdb->day)=="Friday")&(($cdb->start_time)=="09:00"))
                      <div class="name" >{{$cdb->course_name}}</div>
                      <div class="code" >{{$cdb->course_code}}</div>
                      <div class="lecturer">{{$cdb->lec_name}}</div>
                      <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
                  @endif
                  @endforeach
                  @endforeach

                  @foreach ($dat2 as $data2)
                  @foreach ($data2 as $cdb)
                  @if ((($cdb->day)=="Friday")&(($cdb->start_time)=="09:00"))
                      <div class="name" >{{$cdb->course_name}}</div>
                      <div class="code" >{{$cdb->course_code}}</div>
                      <div class="lecturer">{{$cdb->acc_name}}</div>
                      <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
                  @endif
                  @endforeach
                  @endforeach
                  </TD>


        </TR>

        <TR>
        <TD>10.00-10.55</TD>
        <TD>
          @foreach ($dat1 as $data1)
          @foreach ($data1 as $cdb)
          @if ((($cdb->day)=="Monday")&(($cdb->start_time)=="10:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->lec_name}}</div>
              <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
          @endif
      @endforeach
      @endforeach

      @foreach ($dat2 as $data2)
      @foreach ($data2 as $cdb)
      @if ((($cdb->day)=="Monday")&(($cdb->start_time)=="10:00"))
          <div class="name" >{{$cdb->course_name}}</div>
          <div class="code" >{{$cdb->course_code}}</div>
          <div class="lecturer">{{$cdb->acc_name}}</div>
          <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
      @endif
      @endforeach
      @endforeach

        </TD>

        <TD>
          @foreach ($dat1 as $data1)
          @foreach ($data1 as $cdb)
          @if ((($cdb->day)=="Tuesday")&(($cdb->start_time)=="10:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->lec_name}}</div>
              <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
          @endif
          @endforeach
          @endforeach

          @foreach ($dat2 as $data2)
          @foreach ($data2 as $cdb)
          @if ((($cdb->day)=="Tuesday")&(($cdb->start_time)=="10:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->acc_name}}</div>
              <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
          @endif
          @endforeach
          @endforeach

        </TD>
        <TD>
          @foreach ($dat1 as $data1)
          @foreach ($data1 as $cdb)
          @if ((($cdb->day)=="Wednesday")&(($cdb->start_time)=="10:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->lec_name}}</div>
              <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
          @endif
          @endforeach
          @endforeach

          @foreach ($dat2 as $data2)
          @foreach ($data2 as $cdb)
          @if ((($cdb->day)=="Wednesday")&(($cdb->start_time)=="10:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->acc_name}}</div>
              <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
          @endif
          @endforeach
          @endforeach
          </TD>

        <TD>
          @foreach ($dat1 as $data1)
          @foreach ($data1 as $cdb)
          @if ((($cdb->day)=="Thursday")&(($cdb->start_time)=="10:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->lec_name}}</div>
              <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
          @endif
          @endforeach
          @endforeach

          @foreach ($dat2 as $data2)
          @foreach ($data2 as $cdb)
          @if ((($cdb->day)=="Thursday")&(($cdb->start_time)=="10:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->acc_name}}</div>
              <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
          @endif
          @endforeach
          @endforeach


        </TD>

        <TD>
          @foreach ($dat1 as $data1)
          @foreach ($data1 as $cdb)
          @if ((($cdb->day)=="Friday")&(($cdb->start_time)=="10:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->lec_name}}</div>
              <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
          @endif
          @endforeach
          @endforeach

          @foreach ($dat2 as $data2)
          @foreach ($data2 as $cdb)
          @if ((($cdb->day)=="Friday")&(($cdb->start_time)=="10:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->acc_name}}</div>
              <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
          @endif
          @endforeach
          @endforeach

        </TD>
      </TR>

      <TR>
        <TD>11.00-12.00</TD>
        <TD>
          @foreach ($dat1 as $data1)
          @foreach ($data1 as $cdb)
          @if ((($cdb->day)=="Monday")&(($cdb->start_time)=="11:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->lec_name}}</div>
              <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
          @endif
      @endforeach
      @endforeach

      @foreach ($dat2 as $data2)
      @foreach ($data2 as $cdb)
      @if ((($cdb->day)=="Monday")&(($cdb->start_time)=="11:00"))
          <div class="name" >{{$cdb->course_name}}</div>
          <div class="code" >{{$cdb->course_code}}</div>
          <div class="lecturer">{{$cdb->acc_name}}</div>
          <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
      @endif
      @endforeach
      @endforeach

        </TD>

        <TD>
          @foreach ($dat1 as $data1)
          @foreach ($data1 as $cdb)
          @if ((($cdb->day)=="Tuesday")&(($cdb->start_time)=="11:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->lec_name}}</div>
              <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
          @endif
          @endforeach
          @endforeach

          @foreach ($dat2 as $data2)
          @foreach ($data2 as $cdb)
          @if ((($cdb->day)=="Tuesday")&(($cdb->start_time)=="11:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->acc_name}}</div>
              <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
          @endif
          @endforeach
          @endforeach

        </TD>
        <TD>
          @foreach ($dat1 as $data1)
          @foreach ($data1 as $cdb)
          @if ((($cdb->day)=="Wednesday")&(($cdb->start_time)=="11:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->lec_name}}</div>
              <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
          @endif
          @endforeach
          @endforeach

          @foreach ($dat2 as $data2)
          @foreach ($data2 as $cdb)
          @if ((($cdb->day)=="Wednesday")&(($cdb->start_time)=="11:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->acc_name}}</div>
              <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
          @endif
          @endforeach
          @endforeach
          </TD>

        <TD>
          @foreach ($dat1 as $data1)
          @foreach ($data1 as $cdb)
          @if ((($cdb->day)=="Thursday")&(($cdb->start_time)=="11:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->lec_name}}</div>
              <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
          @endif
          @endforeach
          @endforeach

          @foreach ($dat2 as $data2)
          @foreach ($data2 as $cdb)
          @if ((($cdb->day)=="Thursday")&(($cdb->start_time)=="11:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->acc_name}}</div>
              <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
          @endif
          @endforeach
          @endforeach


        </TD>

        <TD>
          @foreach ($dat1 as $data1)
          @foreach ($data1 as $cdb)
          @if ((($cdb->day)=="Friday")&(($cdb->start_time)=="11:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->lec_name}}</div>
              <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
          @endif
          @endforeach
          @endforeach

          @foreach ($dat2 as $data2)
          @foreach ($data2 as $cdb)
          @if ((($cdb->day)=="Friday")&(($cdb->start_time)=="11:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->acc_name}}</div>
              <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
          @endif
          @endforeach
          @endforeach

        </TD>
      </TR>


        <TR>
        <TD colspan="6" class="lunch">Lunch</TD>
      </TR>

        <TR>
        <TD>13.00-13.55</TD>
        <TD>
          @foreach ($dat1 as $data1)
          @foreach ($data1 as $cdb)
          @if ((($cdb->day)=="Monday")&(($cdb->start_time)=="13:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->lec_name}}</div>
              <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
          @endif
      @endforeach
      @endforeach

      @foreach ($dat2 as $data2)
      @foreach ($data2 as $cdb)
      @if ((($cdb->day)=="Monday")&(($cdb->start_time)=="13:00"))
          <div class="name" >{{$cdb->course_name}}</div>
          <div class="code" >{{$cdb->course_code}}</div>
          <div class="lecturer">{{$cdb->acc_name}}</div>
          <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
      @endif
      @endforeach
      @endforeach

        </TD>

        <TD>
          @foreach ($dat1 as $data1)
          @foreach ($data1 as $cdb)
          @if ((($cdb->day)=="Tuesday")&(($cdb->start_time)=="13:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->lec_name}}</div>
              <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
          @endif
          @endforeach
          @endforeach

          @foreach ($dat2 as $data2)
          @foreach ($data2 as $cdb)
          @if ((($cdb->day)=="Tuesday")&(($cdb->start_time)=="13:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->acc_name}}</div>
              <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
          @endif
          @endforeach
          @endforeach

        </TD>
        <TD>
          @foreach ($dat1 as $data1)
          @foreach ($data1 as $cdb)
          @if ((($cdb->day)=="Wednesday")&(($cdb->start_time)=="13:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->lec_name}}</div>
              <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
          @endif
          @endforeach
          @endforeach

          @foreach ($dat2 as $data2)
          @foreach ($data2 as $cdb)
          @if ((($cdb->day)=="Wednesday")&(($cdb->start_time)=="13:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->acc_name}}</div>
              <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
          @endif
          @endforeach
          @endforeach
          </TD>

        <TD>
          @foreach ($dat1 as $data1)
          @foreach ($data1 as $cdb)
          @if ((($cdb->day)=="Thursday")&(($cdb->start_time)=="13:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->lec_name}}</div>
              <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
          @endif
          @endforeach
          @endforeach

          @foreach ($dat2 as $data2)
          @foreach ($data2 as $cdb)
          @if ((($cdb->day)=="Thursday")&(($cdb->start_time)=="13:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->acc_name}}</div>
              <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
          @endif
          @endforeach
          @endforeach


        </TD>

        <TD>
          @foreach ($dat1 as $data1)
          @foreach ($data1 as $cdb)
          @if ((($cdb->day)=="Friday")&(($cdb->start_time)=="13:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->lec_name}}</div>
              <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
          @endif
          @endforeach
          @endforeach

          @foreach ($dat2 as $data2)
          @foreach ($data2 as $cdb)
          @if ((($cdb->day)=="Friday")&(($cdb->start_time)=="13:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->acc_name}}</div>
              <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
          @endif
          @endforeach
          @endforeach

        </TD>
      </TR>

      <TR>
          <TD>14.00-14.55</TD>

          <TD>
              @foreach ($dat1 as $data1)
              @foreach ($data1 as $cdb)
              @if ((($cdb->day)=="Monday")&(($cdb->start_time)=="14:00"))
                  <div class="name" >{{$cdb->course_name}}</div>
                  <div class="code" >{{$cdb->course_code}}</div>
                  <div class="lecturer">{{$cdb->lec_name}}</div>
                  <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
              @endif
          @endforeach
          @endforeach

          @foreach ($dat2 as $data2)
          @foreach ($data2 as $cdb)
          @if ((($cdb->day)=="Monday")&(($cdb->start_time)=="14:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->acc_name}}</div>
              <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
          @endif
          @endforeach
          @endforeach


            </TD>

            <TD>
              @foreach ($dat1 as $data1)
              @foreach ($data1 as $cdb)
              @if ((($cdb->day)=="Tuesday")&(($cdb->start_time)=="14:00"))
                  <div class="name" >{{$cdb->course_name}}</div>
                  <div class="code" >{{$cdb->course_code}}</div>
                  <div class="lecturer">{{$cdb->lec_name}}</div>
                  <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
              @endif
              @endforeach
              @endforeach

              @foreach ($dat2 as $data2)
              @foreach ($data2 as $cdb)
              @if ((($cdb->day)=="Tuesday")&(($cdb->start_time)=="14:00"))
                  <div class="name" >{{$cdb->course_name}}</div>
                  <div class="code" >{{$cdb->course_code}}</div>
                  <div class="lecturer">{{$cdb->acc_name}}</div>
                  <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
              @endif
              @endforeach
              @endforeach

            </TD>
            <TD>
              @foreach ($dat1 as $data1)
              @foreach ($data1 as $cdb)
              @if ((($cdb->day)=="Wednesday")&(($cdb->start_time)=="14:00"))
                  <div class="name" >{{$cdb->course_name}}</div>
                  <div class="code" >{{$cdb->course_code}}</div>
                  <div class="lecturer">{{$cdb->lec_name}}</div>
                  <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
              @endif
              @endforeach
              @endforeach

              @foreach ($dat2 as $data2)
              @foreach ($data2 as $cdb)
              @if ((($cdb->day)=="Wednesday")&(($cdb->start_time)=="14:00"))
                  <div class="name" >{{$cdb->course_name}}</div>
                  <div class="code" >{{$cdb->course_code}}</div>
                  <div class="lecturer">{{$cdb->acc_name}}</div>
                  <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
              @endif
              @endforeach
              @endforeach
              </TD>

            <TD>
              @foreach ($dat1 as $data1)
              @foreach ($data1 as $cdb)
              @if ((($cdb->day)=="Thursday")&(($cdb->start_time)=="14:00"))
                  <div class="name" >{{$cdb->course_name}}</div>
                  <div class="code" >{{$cdb->course_code}}</div>
                  <div class="lecturer">{{$cdb->lec_name}}</div>
                  <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
              @endif
              @endforeach
              @endforeach

              @foreach ($dat2 as $data2)
              @foreach ($data2 as $cdb)
              @if ((($cdb->day)=="Thursday")&(($cdb->start_time)=="14:00"))
                  <div class="name" >{{$cdb->course_name}}</div>
                  <div class="code" >{{$cdb->course_code}}</div>
                  <div class="lecturer">{{$cdb->acc_name}}</div>
                  <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
              @endif
              @endforeach
              @endforeach


            </TD>

            <TD>
              @foreach ($dat1 as $data1)
              @foreach ($data1 as $cdb)
              @if ((($cdb->day)=="Friday")&(($cdb->start_time)=="14:00"))
                  <div class="name" >{{$cdb->course_name}}</div>
                  <div class="code" >{{$cdb->course_code}}</div>
                  <div class="lecturer">{{$cdb->lec_name}}</div>
                  <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
              @endif
              @endforeach
              @endforeach

              @foreach ($dat2 as $data2)
              @foreach ($data2 as $cdb)
              @if ((($cdb->day)=="Friday")&(($cdb->start_time)=="14:00"))
                  <div class="name" >{{$cdb->course_name}}</div>
                  <div class="code" >{{$cdb->course_code}}</div>
                  <div class="lecturer">{{$cdb->acc_name}}</div>
                  <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
              @endif
              @endforeach
              @endforeach

            </TD>
      </TR>

      <TR>
          <TD>15.00-15.55</TD>

          <TD>
              @foreach ($dat1 as $data1)
              @foreach ($data1 as $cdb)
              @if ((($cdb->day)=="Monday")&(($cdb->start_time)=="15:00"))
                  <div class="name" >{{$cdb->course_name}}</div>
                  <div class="code" >{{$cdb->course_code}}</div>
                  <div class="lecturer">{{$cdb->lec_name}}</div>
                  <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
              @endif
          @endforeach
          @endforeach

          @foreach ($dat2 as $data2)
          @foreach ($data2 as $cdb)
          @if ((($cdb->day)=="Monday")&(($cdb->start_time)=="15:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->acc_name}}</div>
              <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
          @endif
      @endforeach
      @endforeach

            </TD>

            <TD>
              @foreach ($dat1 as $data1)
              @foreach ($data1 as $cdb)
              @if ((($cdb->day)=="Tuesday")&(($cdb->start_time)=="15:00"))
                  <div class="name" >{{$cdb->course_name}}</div>
                  <div class="code" >{{$cdb->course_code}}</div>
                  <div class="lecturer">{{$cdb->lec_name}}</div>
                  <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
              @endif
              @endforeach
              @endforeach

              @foreach ($dat2 as $data2)
              @foreach ($data2 as $cdb)
              @if ((($cdb->day)=="Tuesday")&(($cdb->start_time)=="15:00"))
                  <div class="name" >{{$cdb->course_name}}</div>
                  <div class="code" >{{$cdb->course_code}}</div>
                  <div class="lecturer">{{$cdb->acc_name}}</div>
                  <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
              @endif
              @endforeach
              @endforeach

            </TD>
            <TD>
              @foreach ($dat1 as $data1)
              @foreach ($data1 as $cdb)
              @if ((($cdb->day)=="Wednesday")&(($cdb->start_time)=="15:00"))
                  <div class="name" >{{$cdb->course_name}}</div>
                  <div class="code" >{{$cdb->course_code}}</div>
                  <div class="lecturer">{{$cdb->lec_name}}</div>
                  <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
              @endif
              @endforeach
              @endforeach

              @foreach ($dat2 as $data2)
              @foreach ($data2 as $cdb)
              @if ((($cdb->day)=="Wednesday")&(($cdb->start_time)=="15:00"))
                  <div class="name" >{{$cdb->course_name}}</div>
                  <div class="code" >{{$cdb->course_code}}</div>
                  <div class="lecturer">{{$cdb->acc_name}}</div>
                  <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
              @endif
              @endforeach
              @endforeach
              </TD>

            <TD>
              @foreach ($dat1 as $data1)
              @foreach ($data1 as $cdb)
              @if ((($cdb->day)=="Thursday")&(($cdb->start_time)=="15:00"))
                  <div class="name" >{{$cdb->course_name}}</div>
                  <div class="code" >{{$cdb->course_code}}</div>
                  <div class="lecturer">{{$cdb->lec_name}}</div>
                  <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
              @endif
              @endforeach
              @endforeach

              @foreach ($dat2 as $data2)
              @foreach ($data2 as $cdb)
              @if ((($cdb->day)=="Thursday")&(($cdb->start_time)=="15:00"))
                  <div class="name" >{{$cdb->course_name}}</div>
                  <div class="code" >{{$cdb->course_code}}</div>
                  <div class="lecturer">{{$cdb->acc_name}}</div>
                  <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
              @endif
              @endforeach
              @endforeach


            </TD>

            <TD>
              @foreach ($dat1 as $data1)
              @foreach ($data1 as $cdb)
              @if ((($cdb->day)=="Friday")&(($cdb->start_time)=="15:00"))
                  <div class="name" >{{$cdb->course_name}}</div>
                  <div class="code" >{{$cdb->course_code}}</div>
                  <div class="lecturer">{{$cdb->lec_name}}</div>
                  <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
              @endif
              @endforeach
              @endforeach

              @foreach ($dat2 as $data2)
              @foreach ($data2 as $cdb)
              @if ((($cdb->day)=="Friday")&(($cdb->start_time)=="15:00"))
                  <div class="name" >{{$cdb->course_name}}</div>
                  <div class="code" >{{$cdb->course_code}}</div>
                  <div class="lecturer">{{$cdb->acc_name}}</div>
                  <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
              @endif
              @endforeach
              @endforeach

            </TD>
      </TR>

      <TR>
        <TD>16.00-16.55</TD>
        <TD>
          @foreach ($dat1 as $data1)
          @foreach ($data1 as $cdb)
          @if ((($cdb->day)=="Monday")&(($cdb->start_time)=="16:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->lec_name}}</div>
              <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
          @endif
      @endforeach
      @endforeach

      @foreach ($dat2 as $data2)
      @foreach ($data2 as $cdb)
      @if ((($cdb->day)=="Monday")&(($cdb->start_time)=="16:00"))
          <div class="name" >{{$cdb->course_name}}</div>
          <div class="code" >{{$cdb->course_code}}</div>
          <div class="lecturer">{{$cdb->acc_name}}</div>
          <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
      @endif
      @endforeach
      @endforeach

        </TD>

        <TD>
          @foreach ($dat1 as $data1)
          @foreach ($data1 as $cdb)
          @if ((($cdb->day)=="Tuesday")&(($cdb->start_time)=="16:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->lec_name}}</div>
              <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
          @endif
          @endforeach
          @endforeach

          @foreach ($dat2 as $data2)
          @foreach ($data2 as $cdb)
          @if ((($cdb->day)=="Tuesday")&(($cdb->start_time)=="16:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->acc_name}}</div>
              <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
          @endif
          @endforeach
          @endforeach

        </TD>
        <TD>
          @foreach ($dat1 as $data1)
          @foreach ($data1 as $cdb)
          @if ((($cdb->day)=="Wednesday")&(($cdb->start_time)=="16:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->lec_name}}</div>
              <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
          @endif
          @endforeach
          @endforeach

          @foreach ($dat2 as $data2)
          @foreach ($data2 as $cdb)
          @if ((($cdb->day)=="Wednesday")&(($cdb->start_time)=="16:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->acc_name}}</div>
              <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
          @endif
          @endforeach
          @endforeach
          </TD>

        <TD>
          @foreach ($dat1 as $data1)
          @foreach ($data1 as $cdb)
          @if ((($cdb->day)=="Thursday")&(($cdb->start_time)=="16:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->lec_name}}</div>
              <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
          @endif
          @endforeach
          @endforeach

          @foreach ($dat2 as $data2)
          @foreach ($data2 as $cdb)
          @if ((($cdb->day)=="Thursday")&(($cdb->start_time)=="16:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->acc_name}}</div>
              <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
          @endif
          @endforeach
          @endforeach


        </TD>

        <TD>
          @foreach ($dat1 as $data1)
          @foreach ($data1 as $cdb)
          @if ((($cdb->day)=="Friday")&(($cdb->start_time)=="16:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->lec_name}}</div>
              <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
          @endif
          @endforeach
          @endforeach

          @foreach ($dat2 as $data2)
          @foreach ($data2 as $cdb)
          @if ((($cdb->day)=="Friday")&(($cdb->start_time)=="16:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->acc_name}}</div>
              <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
          @endif
          @endforeach
          @endforeach

        </TD>
      </TR>

      <TR>
          <TD>17.00-18.00</TD>

          <TD>
              @foreach ($dat1 as $data1)
              @foreach ($data1 as $cdb)
              @if ((($cdb->day)=="Monday")&(($cdb->start_time)=="17:00"))
                  <div class="name" >{{$cdb->course_name}}</div>
                  <div class="code" >{{$cdb->course_code}}</div>
                  <div class="lecturer">{{$cdb->lec_name}}</div>
                  <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
              @endif
          @endforeach
          @endforeach

          @foreach ($dat2 as $data2)
          @foreach ($data2 as $cdb)
          @if ((($cdb->day)=="Monday")&(($cdb->start_time)=="17:00"))
              <div class="name" >{{$cdb->course_name}}</div>
              <div class="code" >{{$cdb->course_code}}</div>
              <div class="lecturer">{{$cdb->acc_name}}</div>
              <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
          @endif
      @endforeach
      @endforeach

            </TD>

            <TD>
              @foreach ($dat1 as $data1)
              @foreach ($data1 as $cdb)
              @if ((($cdb->day)=="Tuesday")&(($cdb->start_time)=="17:00"))
                  <div class="name" >{{$cdb->course_name}}</div>
                  <div class="code" >{{$cdb->course_code}}</div>
                  <div class="lecturer">{{$cdb->lec_name}}</div>
                  <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
              @endif
              @endforeach
              @endforeach

              @foreach ($dat2 as $data2)
              @foreach ($data2 as $cdb)
              @if ((($cdb->day)=="Tuesday")&(($cdb->start_time)=="17:00"))
                  <div class="name" >{{$cdb->course_name}}</div>
                  <div class="code" >{{$cdb->course_code}}</div>
                  <div class="lecturer">{{$cdb->acc_name}}</div>
                  <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
              @endif
              @endforeach
              @endforeach

            </TD>
            <TD>
              @foreach ($dat1 as $data1)
              @foreach ($data1 as $cdb)
              @if ((($cdb->day)=="Wednesday")&(($cdb->start_time)=="17:00"))
                  <div class="name" >{{$cdb->course_name}}</div>
                  <div class="code" >{{$cdb->course_code}}</div>
                  <div class="lecturer">{{$cdb->lec_name}}</div>
                  <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
              @endif
              @endforeach
              @endforeach

              @foreach ($dat2 as $data2)
              @foreach ($data2 as $cdb)
              @if ((($cdb->day)=="Wednesday")&(($cdb->start_time)=="17:00"))
                  <div class="name" >{{$cdb->course_name}}</div>
                  <div class="code" >{{$cdb->course_code}}</div>
                  <div class="lecturer">{{$cdb->acc_name}}</div>
                  <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
              @endif
              @endforeach
              @endforeach
              </TD>

            <TD>
              @foreach ($dat1 as $data1)
              @foreach ($data1 as $cdb)
              @if ((($cdb->day)=="Thursday")&(($cdb->start_time)=="17:00"))
                  <div class="name" >{{$cdb->course_name}}</div>
                  <div class="code" >{{$cdb->course_code}}</div>
                  <div class="lecturer">{{$cdb->lec_name}}</div>
                  <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
              @endif
              @endforeach
              @endforeach

              @foreach ($dat2 as $data2)
              @foreach ($data2 as $cdb)
              @if ((($cdb->day)=="Thursday")&(($cdb->start_time)=="17:00"))
                  <div class="name" >{{$cdb->course_name}}</div>
                  <div class="code" >{{$cdb->course_code}}</div>
                  <div class="lecturer">{{$cdb->acc_name}}</div>
                  <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
              @endif
              @endforeach
              @endforeach


            </TD>

            <TD>
              @foreach ($dat1 as $data1)
              @foreach ($data1 as $cdb)
              @if ((($cdb->day)=="Friday")&(($cdb->start_time)=="17:00"))
                  <div class="name" >{{$cdb->course_name}}</div>
                  <div class="code" >{{$cdb->course_code}}</div>
                  <div class="lecturer">{{$cdb->lec_name}}</div>
                  <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
              @endif
              @endforeach
              @endforeach

              @foreach ($dat2 as $data2)
              @foreach ($data2 as $cdb)
              @if ((($cdb->day)=="Friday")&(($cdb->start_time)=="17:00"))
                  <div class="name" >{{$cdb->course_name}}</div>
                  <div class="code" >{{$cdb->course_code}}</div>
                  <div class="lecturer">{{$cdb->acc_name}}</div>
                  <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
              @endif
              @endforeach
              @endforeach

            </TD>
    </TR>

   </TBODY>
  </TABLE>

  <br><br>

  <button type="button" class="btn btn-warning but1" onclick="window.location.href='/academicsupportive/filtertimetable'">Filter Timetable</button>
  <div class="but2">
    <button type="button" class="btn btn-warning but1" onclick="window.location.href='/students/studenthome'">Back</button>
  </div>

</body>
</html>
