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



<H1>BSc(General) DEGREE PROGRAMME(LEVEL 3 SEMESTER 1)</H1>
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
        @foreach ($data1 as $cdb)
            @if ((($cdb->day)=="Monday")&(($cdb->start_time)=="08:00"))
                <div class="name" >{{$cdb->course_name}}</div>
                <div class="code" >{{$cdb->course_code}}</div>
                <div class="lecturer">{{$cdb->lec_name}}</div>
                <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
            @endif
        @endforeach

        @foreach ($data2 as $cdb)
        @if ((($cdb->day)=="Monday")&(($cdb->start_time)=="08:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
        @endif
    @endforeach
        </TD>


      <TD>
        @foreach ($data1 as $cdb)
        @if ((($cdb->day)=="Tuesday")&(($cdb->start_time)=="08:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
        @endif
        @endforeach

        @foreach ($data2 as $cdb)
        @if ((($cdb->day)=="Tuesday")&(($cdb->start_time)=="08:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
        @endif
        @endforeach

      </TD>
      <TD>
        @foreach ($data1 as $cdb)
        @if ((($cdb->day)=="Wednesday")&(($cdb->start_time)=="08:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
        @endif
        @endforeach

        @foreach ($data2 as $cdb)
        @if ((($cdb->day)=="Wednesday")&(($cdb->start_time)=="08:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
        @endif
        @endforeach

      </TD>
      <TD>
        @foreach ($data1 as $cdb)
        @if ((($cdb->day)=="Thursday")&(($cdb->start_time)=="08:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
        @endif
        @endforeach

        @foreach ($data2 as $cdb)
        @if ((($cdb->day)=="Thursday")&(($cdb->start_time)=="08:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
        @endif
        @endforeach

      </TD>
      <TD>
        @foreach ($data1 as $cdb)
        @if ((($cdb->day)=="Friday")&(($cdb->start_time)=="08:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
        @endif
        @endforeach

        @foreach ($data2 as $cdb)
        @if ((($cdb->day)=="Friday")&(($cdb->start_time)=="08:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
        @endif
        @endforeach

      </TD>
    </TR>

    <TR>
      <TD>9.00-9.55</TD>
      <TD>
        @foreach ($data1 as $cdb)
            @if ((($cdb->day)=="Monday")&(($cdb->start_time)=="09:00"))
                <div class="name" >{{$cdb->course_name}}</div>
                <div class="code" >{{$cdb->course_code}}</div>
                <div class="lecturer">{{$cdb->lec_name}}</div>
                <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
            @endif
        @endforeach

        @foreach ($data2 as $cdb)
        @if ((($cdb->day)=="Monday")&(($cdb->start_time)=="09:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
        @endif
    @endforeach
        </TD>

        <TD>
            @foreach ($data1 as $cdb)
            @if ((($cdb->day)=="Tuesday")&(($cdb->start_time)=="09:00"))
                <div class="name" >{{$cdb->course_name}}</div>
                <div class="code" >{{$cdb->course_code}}</div>
                <div class="lecturer">{{$cdb->lec_name}}</div>
                <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
            @endif
            @endforeach

            @foreach ($data2 as $cdb)
            @if ((($cdb->day)=="Tuesday")&(($cdb->start_time)=="09:00"))
                <div class="name" >{{$cdb->course_name}}</div>
                <div class="code" >{{$cdb->course_code}}</div>
                <div class="lecturer">{{$cdb->lec_name}}</div>
                <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
            @endif
            @endforeach
        </TD>

        <TD>
            @foreach ($data1 as $cdb)
            @if ((($cdb->day)=="Wednesday")&(($cdb->start_time)=="09:00"))
                <div class="name" >{{$cdb->course_name}}</div>
                <div class="code" >{{$cdb->course_code}}</div>
                <div class="lecturer">{{$cdb->lec_name}}</div>
                <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
            @endif
            @endforeach

            @foreach ($data2 as $cdb)
            @if ((($cdb->day)=="Wednesday")&(($cdb->start_time)=="09:00"))
                <div class="name" >{{$cdb->course_name}}</div>
                <div class="code" >{{$cdb->course_code}}</div>
                <div class="lecturer">{{$cdb->lec_name}}</div>
                <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
            @endif
            @endforeach

        </TD>

        <TD>
            @foreach ($data1 as $cdb)
            @if ((($cdb->day)=="Thursday")&(($cdb->start_time)=="09:00"))
                <div class="name" >{{$cdb->course_name}}</div>
                <div class="code" >{{$cdb->course_code}}</div>
                <div class="lecturer">{{$cdb->lec_name}}</div>
                <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
            @endif
            @endforeach

            @foreach ($data2 as $cdb)
            @if ((($cdb->day)=="Thursday")&(($cdb->start_time)=="09:00"))
                <div class="name" >{{$cdb->course_name}}</div>
                <div class="code" >{{$cdb->course_code}}</div>
                <div class="lecturer">{{$cdb->lec_name}}</div>
                <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
            @endif
            @endforeach
            </TD>

            <TD>
                @foreach ($data1 as $cdb)
                @if ((($cdb->day)=="Friday")&(($cdb->start_time)=="09:00"))
                    <div class="name" >{{$cdb->course_name}}</div>
                    <div class="code" >{{$cdb->course_code}}</div>
                    <div class="lecturer">{{$cdb->lec_name}}</div>
                    <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
                @endif
                @endforeach

                @foreach ($data2 as $cdb)
                @if ((($cdb->day)=="Friday")&(($cdb->start_time)=="09:00"))
                    <div class="name" >{{$cdb->course_name}}</div>
                    <div class="code" >{{$cdb->course_code}}</div>
                    <div class="lecturer">{{$cdb->lec_name}}</div>
                    <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
                @endif
                @endforeach
                </TD>


      </TR>

      <TR>
      <TD>10.00-10.55</TD>
      <TD>
        @foreach ($data1 as $cdb)
        @if ((($cdb->day)=="Monday")&(($cdb->start_time)=="10:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
        @endif
    @endforeach

    @foreach ($data2 as $cdb)
    @if ((($cdb->day)=="Monday")&(($cdb->start_time)=="10:00"))
        <div class="name" >{{$cdb->course_name}}</div>
        <div class="code" >{{$cdb->course_code}}</div>
        <div class="lecturer">{{$cdb->lec_name}}</div>
        <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
    @endif
@endforeach

      </TD>

      <TD>
        @foreach ($data1 as $cdb)
        @if ((($cdb->day)=="Tuesday")&(($cdb->start_time)=="10:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
        @endif
        @endforeach

        @foreach ($data2 as $cdb)
        @if ((($cdb->day)=="Tuesday")&(($cdb->start_time)=="10:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
        @endif
        @endforeach

      </TD>
      <TD>
        @foreach ($data1 as $cdb)
        @if ((($cdb->day)=="Wednesday")&(($cdb->start_time)=="10:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
        @endif
        @endforeach

        @foreach ($data2 as $cdb)
        @if ((($cdb->day)=="Wednesday")&(($cdb->start_time)=="10:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
        @endif
        @endforeach
        </TD>

      <TD>
        @foreach ($data1 as $cdb)
        @if ((($cdb->day)=="Thursday")&(($cdb->start_time)=="10:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
        @endif
        @endforeach

        @foreach ($data2 as $cdb)
        @if ((($cdb->day)=="Thursday")&(($cdb->start_time)=="10:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
        @endif
        @endforeach


      </TD>

      <TD>
        @foreach ($data1 as $cdb)
        @if ((($cdb->day)=="Friday")&(($cdb->start_time)=="10:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
        @endif
        @endforeach

        @foreach ($data2 as $cdb)
        @if ((($cdb->day)=="Friday")&(($cdb->start_time)=="10:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
        @endif
        @endforeach

      </TD>
    </TR>

    <TR>
      <TD>11.00-12.00</TD>
      <TD>
        @foreach ($data1 as $cdb)
        @if ((($cdb->day)=="Monday")&(($cdb->start_time)=="11:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
        @endif
    @endforeach

    @foreach ($data2 as $cdb)
    @if ((($cdb->day)=="Monday")&(($cdb->start_time)=="11:00"))
        <div class="name" >{{$cdb->course_name}}</div>
        <div class="code" >{{$cdb->course_code}}</div>
        <div class="lecturer">{{$cdb->lec_name}}</div>
        <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
    @endif
@endforeach

      </TD>

      <TD>
        @foreach ($data1 as $cdb)
        @if ((($cdb->day)=="Tuesday")&(($cdb->start_time)=="11:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
        @endif
        @endforeach

        @foreach ($data2 as $cdb)
        @if ((($cdb->day)=="Tuesday")&(($cdb->start_time)=="11:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
        @endif
        @endforeach

      </TD>
      <TD>
        @foreach ($data1 as $cdb)
        @if ((($cdb->day)=="Wednesday")&(($cdb->start_time)=="11:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
        @endif
        @endforeach

        @foreach ($data2 as $cdb)
        @if ((($cdb->day)=="Wednesday")&(($cdb->start_time)=="11:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
        @endif
        @endforeach
        </TD>

      <TD>
        @foreach ($data1 as $cdb)
        @if ((($cdb->day)=="Thursday")&(($cdb->start_time)=="11:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
        @endif
        @endforeach

        @foreach ($data2 as $cdb)
        @if ((($cdb->day)=="Thursday")&(($cdb->start_time)=="11:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
        @endif
        @endforeach


      </TD>

      <TD>
        @foreach ($data1 as $cdb)
        @if ((($cdb->day)=="Friday")&(($cdb->start_time)=="11:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
        @endif
        @endforeach

        @foreach ($data2 as $cdb)
        @if ((($cdb->day)=="Friday")&(($cdb->start_time)=="11:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
        @endif
        @endforeach

      </TD>
    </TR>


      <TR>
      <TD colspan="6" class="lunch">Lunch</TD>
    </TR>

      <TR>
      <TD>13.00-13.55</TD>
      <TD>
        @foreach ($data1 as $cdb)
        @if ((($cdb->day)=="Monday")&(($cdb->start_time)=="13:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
        @endif
    @endforeach

    @foreach ($data2 as $cdb)
    @if ((($cdb->day)=="Monday")&(($cdb->start_time)=="13:00"))
        <div class="name" >{{$cdb->course_name}}</div>
        <div class="code" >{{$cdb->course_code}}</div>
        <div class="lecturer">{{$cdb->lec_name}}</div>
        <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
    @endif
@endforeach

      </TD>

      <TD>
        @foreach ($data1 as $cdb)
        @if ((($cdb->day)=="Tuesday")&(($cdb->start_time)=="13:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
        @endif
        @endforeach

        @foreach ($data2 as $cdb)
        @if ((($cdb->day)=="Tuesday")&(($cdb->start_time)=="13:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
        @endif
        @endforeach

      </TD>
      <TD>
        @foreach ($data1 as $cdb)
        @if ((($cdb->day)=="Wednesday")&(($cdb->start_time)=="13:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
        @endif
        @endforeach

        @foreach ($data2 as $cdb)
        @if ((($cdb->day)=="Wednesday")&(($cdb->start_time)=="13:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
        @endif
        @endforeach
        </TD>

      <TD>
        @foreach ($data1 as $cdb)
        @if ((($cdb->day)=="Thursday")&(($cdb->start_time)=="13:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
        @endif
        @endforeach

        @foreach ($data2 as $cdb)
        @if ((($cdb->day)=="Thursday")&(($cdb->start_time)=="13:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
        @endif
        @endforeach


      </TD>

      <TD>
        @foreach ($data1 as $cdb)
        @if ((($cdb->day)=="Friday")&(($cdb->start_time)=="13:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
        @endif
        @endforeach

        @foreach ($data2 as $cdb)
        @if ((($cdb->day)=="Friday")&(($cdb->start_time)=="13:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
        @endif
        @endforeach

      </TD>
    </TR>

    <TR>
        <TD>14.00-14.55</TD>

        <TD>
            @foreach ($data1 as $cdb)
            @if ((($cdb->day)=="Monday")&(($cdb->start_time)=="14:00"))
                <div class="name" >{{$cdb->course_name}}</div>
                <div class="code" >{{$cdb->course_code}}</div>
                <div class="lecturer">{{$cdb->lec_name}}</div>
                <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
            @endif
        @endforeach

        @foreach ($data2 as $cdb)
        @if ((($cdb->day)=="Monday")&(($cdb->start_time)=="14:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
        @endif
    @endforeach

          </TD>

          <TD>
            @foreach ($data1 as $cdb)
            @if ((($cdb->day)=="Tuesday")&(($cdb->start_time)=="14:00"))
                <div class="name" >{{$cdb->course_name}}</div>
                <div class="code" >{{$cdb->course_code}}</div>
                <div class="lecturer">{{$cdb->lec_name}}</div>
                <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
            @endif
            @endforeach

            @foreach ($data2 as $cdb)
            @if ((($cdb->day)=="Tuesday")&(($cdb->start_time)=="14:00"))
                <div class="name" >{{$cdb->course_name}}</div>
                <div class="code" >{{$cdb->course_code}}</div>
                <div class="lecturer">{{$cdb->lec_name}}</div>
                <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
            @endif
            @endforeach

          </TD>
          <TD>
            @foreach ($data1 as $cdb)
            @if ((($cdb->day)=="Wednesday")&(($cdb->start_time)=="14:00"))
                <div class="name" >{{$cdb->course_name}}</div>
                <div class="code" >{{$cdb->course_code}}</div>
                <div class="lecturer">{{$cdb->lec_name}}</div>
                <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
            @endif
            @endforeach

            @foreach ($data2 as $cdb)
            @if ((($cdb->day)=="Wednesday")&(($cdb->start_time)=="14:00"))
                <div class="name" >{{$cdb->course_name}}</div>
                <div class="code" >{{$cdb->course_code}}</div>
                <div class="lecturer">{{$cdb->lec_name}}</div>
                <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
            @endif
            @endforeach
            </TD>

          <TD>
            @foreach ($data1 as $cdb)
            @if ((($cdb->day)=="Thursday")&(($cdb->start_time)=="14:00"))
                <div class="name" >{{$cdb->course_name}}</div>
                <div class="code" >{{$cdb->course_code}}</div>
                <div class="lecturer">{{$cdb->lec_name}}</div>
                <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
            @endif
            @endforeach

            @foreach ($data2 as $cdb)
            @if ((($cdb->day)=="Thursday")&(($cdb->start_time)=="14:00"))
                <div class="name" >{{$cdb->course_name}}</div>
                <div class="code" >{{$cdb->course_code}}</div>
                <div class="lecturer">{{$cdb->lec_name}}</div>
                <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
            @endif
            @endforeach


          </TD>

          <TD>
            @foreach ($data1 as $cdb)
            @if ((($cdb->day)=="Friday")&(($cdb->start_time)=="14:00"))
                <div class="name" >{{$cdb->course_name}}</div>
                <div class="code" >{{$cdb->course_code}}</div>
                <div class="lecturer">{{$cdb->lec_name}}</div>
                <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
            @endif
            @endforeach

            @foreach ($data2 as $cdb)
            @if ((($cdb->day)=="Friday")&(($cdb->start_time)=="14:00"))
                <div class="name" >{{$cdb->course_name}}</div>
                <div class="code" >{{$cdb->course_code}}</div>
                <div class="lecturer">{{$cdb->lec_name}}</div>
                <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
            @endif
            @endforeach

          </TD>
    </TR>

    <TR>
        <TD>15.00-15.55</TD>

        <TD>
            @foreach ($data1 as $cdb)
            @if ((($cdb->day)=="Monday")&(($cdb->start_time)=="15:00"))
                <div class="name" >{{$cdb->course_name}}</div>
                <div class="code" >{{$cdb->course_code}}</div>
                <div class="lecturer">{{$cdb->lec_name}}</div>
                <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
            @endif
        @endforeach

        @foreach ($data2 as $cdb)
        @if ((($cdb->day)=="Monday")&(($cdb->start_time)=="15:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
        @endif
    @endforeach

          </TD>

          <TD>
            @foreach ($data1 as $cdb)
            @if ((($cdb->day)=="Tuesday")&(($cdb->start_time)=="15:00"))
                <div class="name" >{{$cdb->course_name}}</div>
                <div class="code" >{{$cdb->course_code}}</div>
                <div class="lecturer">{{$cdb->lec_name}}</div>
                <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
            @endif
            @endforeach

            @foreach ($data2 as $cdb)
            @if ((($cdb->day)=="Tuesday")&(($cdb->start_time)=="15:00"))
                <div class="name" >{{$cdb->course_name}}</div>
                <div class="code" >{{$cdb->course_code}}</div>
                <div class="lecturer">{{$cdb->lec_name}}</div>
                <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
            @endif
            @endforeach

          </TD>
          <TD>
            @foreach ($data1 as $cdb)
            @if ((($cdb->day)=="Wednesday")&(($cdb->start_time)=="15:00"))
                <div class="name" >{{$cdb->course_name}}</div>
                <div class="code" >{{$cdb->course_code}}</div>
                <div class="lecturer">{{$cdb->lec_name}}</div>
                <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
            @endif
            @endforeach

            @foreach ($data2 as $cdb)
            @if ((($cdb->day)=="Wednesday")&(($cdb->start_time)=="15:00"))
                <div class="name" >{{$cdb->course_name}}</div>
                <div class="code" >{{$cdb->course_code}}</div>
                <div class="lecturer">{{$cdb->lec_name}}</div>
                <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
            @endif
            @endforeach
            </TD>

          <TD>
            @foreach ($data1 as $cdb)
            @if ((($cdb->day)=="Thursday")&(($cdb->start_time)=="15:00"))
                <div class="name" >{{$cdb->course_name}}</div>
                <div class="code" >{{$cdb->course_code}}</div>
                <div class="lecturer">{{$cdb->lec_name}}</div>
                <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
            @endif
            @endforeach

            @foreach ($data2 as $cdb)
            @if ((($cdb->day)=="Thursday")&(($cdb->start_time)=="15:00"))
                <div class="name" >{{$cdb->course_name}}</div>
                <div class="code" >{{$cdb->course_code}}</div>
                <div class="lecturer">{{$cdb->lec_name}}</div>
                <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
            @endif
            @endforeach


          </TD>

          <TD>
            @foreach ($data1 as $cdb)
            @if ((($cdb->day)=="Friday")&(($cdb->start_time)=="15:00"))
                <div class="name" >{{$cdb->course_name}}</div>
                <div class="code" >{{$cdb->course_code}}</div>
                <div class="lecturer">{{$cdb->lec_name}}</div>
                <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
            @endif
            @endforeach

            @foreach ($data2 as $cdb)
            @if ((($cdb->day)=="Friday")&(($cdb->start_time)=="15:00"))
                <div class="name" >{{$cdb->course_name}}</div>
                <div class="code" >{{$cdb->course_code}}</div>
                <div class="lecturer">{{$cdb->lec_name}}</div>
                <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
            @endif
            @endforeach

          </TD>
    </TR>

    <TR>
      <TD>16.00-16.55</TD>
      <TD>
        @foreach ($data1 as $cdb)
        @if ((($cdb->day)=="Monday")&(($cdb->start_time)=="16:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
        @endif
    @endforeach

    @foreach ($data2 as $cdb)
    @if ((($cdb->day)=="Monday")&(($cdb->start_time)=="16:00"))
        <div class="name" >{{$cdb->course_name}}</div>
        <div class="code" >{{$cdb->course_code}}</div>
        <div class="lecturer">{{$cdb->lec_name}}</div>
        <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
    @endif
@endforeach

      </TD>

      <TD>
        @foreach ($data1 as $cdb)
        @if ((($cdb->day)=="Tuesday")&(($cdb->start_time)=="16:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
        @endif
        @endforeach

        @foreach ($data2 as $cdb)
        @if ((($cdb->day)=="Tuesday")&(($cdb->start_time)=="16:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
        @endif
        @endforeach

      </TD>
      <TD>
        @foreach ($data1 as $cdb)
        @if ((($cdb->day)=="Wednesday")&(($cdb->start_time)=="16:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
        @endif
        @endforeach

        @foreach ($data2 as $cdb)
        @if ((($cdb->day)=="Wednesday")&(($cdb->start_time)=="16:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
        @endif
        @endforeach
        </TD>

      <TD>
        @foreach ($data1 as $cdb)
        @if ((($cdb->day)=="Thursday")&(($cdb->start_time)=="16:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
        @endif
        @endforeach

        @foreach ($data2 as $cdb)
        @if ((($cdb->day)=="Thursday")&(($cdb->start_time)=="16:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
        @endif
        @endforeach


      </TD>

      <TD>
        @foreach ($data1 as $cdb)
        @if ((($cdb->day)=="Friday")&(($cdb->start_time)=="16:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
        @endif
        @endforeach

        @foreach ($data2 as $cdb)
        @if ((($cdb->day)=="Friday")&(($cdb->start_time)=="16:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
        @endif
        @endforeach

      </TD>
    </TR>

    <TR>
        <TD>17.00-18.00</TD>

        <TD>
            @foreach ($data1 as $cdb)
            @if ((($cdb->day)=="Monday")&(($cdb->start_time)=="17:00"))
                <div class="name" >{{$cdb->course_name}}</div>
                <div class="code" >{{$cdb->course_code}}</div>
                <div class="lecturer">{{$cdb->lec_name}}</div>
                <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
            @endif
        @endforeach

        @foreach ($data2 as $cdb)
        @if ((($cdb->day)=="Monday")&(($cdb->start_time)=="17:00"))
            <div class="name" >{{$cdb->course_name}}</div>
            <div class="code" >{{$cdb->course_code}}</div>
            <div class="lecturer">{{$cdb->lec_name}}</div>
            <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
        @endif
    @endforeach

          </TD>

          <TD>
            @foreach ($data1 as $cdb)
            @if ((($cdb->day)=="Tuesday")&(($cdb->start_time)=="17:00"))
                <div class="name" >{{$cdb->course_name}}</div>
                <div class="code" >{{$cdb->course_code}}</div>
                <div class="lecturer">{{$cdb->lec_name}}</div>
                <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
            @endif
            @endforeach

            @foreach ($data2 as $cdb)
            @if ((($cdb->day)=="Tuesday")&(($cdb->start_time)=="17:00"))
                <div class="name" >{{$cdb->course_name}}</div>
                <div class="code" >{{$cdb->course_code}}</div>
                <div class="lecturer">{{$cdb->lec_name}}</div>
                <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
            @endif
            @endforeach

          </TD>
          <TD>
            @foreach ($data1 as $cdb)
            @if ((($cdb->day)=="Wednesday")&(($cdb->start_time)=="17:00"))
                <div class="name" >{{$cdb->course_name}}</div>
                <div class="code" >{{$cdb->course_code}}</div>
                <div class="lecturer">{{$cdb->lec_name}}</div>
                <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
            @endif
            @endforeach

            @foreach ($data2 as $cdb)
            @if ((($cdb->day)=="Wednesday")&(($cdb->start_time)=="17:00"))
                <div class="name" >{{$cdb->course_name}}</div>
                <div class="code" >{{$cdb->course_code}}</div>
                <div class="lecturer">{{$cdb->lec_name}}</div>
                <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
            @endif
            @endforeach
            </TD>

          <TD>
            @foreach ($data1 as $cdb)
            @if ((($cdb->day)=="Thursday")&(($cdb->start_time)=="17:00"))
                <div class="name" >{{$cdb->course_name}}</div>
                <div class="code" >{{$cdb->course_code}}</div>
                <div class="lecturer">{{$cdb->lec_name}}</div>
                <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
            @endif
            @endforeach

            @foreach ($data2 as $cdb)
            @if ((($cdb->day)=="Thursday")&(($cdb->start_time)=="17:00"))
                <div class="name" >{{$cdb->course_name}}</div>
                <div class="code" >{{$cdb->course_code}}</div>
                <div class="lecturer">{{$cdb->lec_name}}</div>
                <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
            @endif
            @endforeach


          </TD>

          <TD>
            @foreach ($data1 as $cdb)
            @if ((($cdb->day)=="Friday")&(($cdb->start_time)=="17:00"))
                <div class="name" >{{$cdb->course_name}}</div>
                <div class="code" >{{$cdb->course_code}}</div>
                <div class="lecturer">{{$cdb->lec_name}}</div>
                <div class="hall">{{$cdb->lh_name}}</div>    <!--theory-->
            @endif
            @endforeach

            @foreach ($data2 as $cdb)
            @if ((($cdb->day)=="Friday")&(($cdb->start_time)=="17:00"))
                <div class="name" >{{$cdb->course_name}}</div>
                <div class="code" >{{$cdb->course_code}}</div>
                <div class="lecturer">{{$cdb->lec_name}}</div>
                <div class="hall">{{$cdb->lab_name}}</div>    <!--practical-->
            @endif
            @endforeach

          </TD>
    </TR>

   </TBODY>
  </TABLE>


  <br><br>

  <h1 style="text-align: left;">NOTICE</h1>
  <div class="notice-board">
        <div class="notice-item">
            <div class="notice-title">Academic</div>
            <div class="notice-content">ahhhhddhiedhiediedhiehdih</div>
        </div>
        <div class="notice-item">
            <div class="notice-title">Non-academic</div>
            <div class="notice-content">agdeudglehclheich</div>
        </div>
        <div class="notice-item">
            <div class="notice-title">Important Notice </div>
            <div class="notice-content">uvsegdoiecgugoeoci</div>
        </div>
    </div>

    <div class="map">
    <h1>MAP </h1>
    <div class="contact map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3968.406479149826!2d80.57409017456467!3d5.938578379684964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1scomputer%20science%20department%20university%20of%20ruhuna!5e0!3m2!1sen!2slk!4v1694582628653!5m2!1sen!2slk"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        </div>

</body>
</html>
