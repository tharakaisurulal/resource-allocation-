<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Laravel</title>

        @include('cdn')
        <link rel="stylesheet" href="{{asset('css/timetablefilter.css')}}">

    </head>
    <body class="bdy">

      <div class="box">
        <div class="div1">
            <form action="{{route('filtertimetablesubmit')}}" method="post">
            @csrf

            <div class="text-center">
                <h1><b>Timetable Filter</b></h1>
            </div>

            @if(session()->has('success'))
            <div class="alert alert-success div5">{{session()->get('success')}}</div>
        @endif

        @if(session()->has('fail'))
            <div class="alert alert-danger">{{session()->get('fail')}}</div>
        @endif

            <label for="name"><b>Program:</b></label>
             <select name="prog" id="faculty">
                 <option value="">--Choose Program--</option>
                 @foreach ($dater2 as $cdb )
                 <option value="{{$cdb->id}}">@php
                     echo $cdb->program;
                 @endphp</option>
                 @endforeach
                 </select>
                 <label class="text-danger span1">@error('prog')  {{$message}}  @enderror</label><br>

                 <label for="name"><b>Level:</b></label>
                 <select name="level" id="faculty">
                     <option value="">--Choose course--</option>
                     <option value="level1">Level 1</option>
                     <option value="level2">Level 2</option>
                     <option value="level3">Level 3</option>
                     </select>
                     <label class="text-danger span1">@error('level')  {{$message}}  @enderror</label><br>

                     <label for="name"><b>Semester:</b></label>
                 <select name="semester" id="faculty">
                     <option value="">--Choose Semester--</option>
                     <option value="semester1">Semester 1</option>
                     <option value="semester2">Semester 2</option>
                     </select>
                     <label class="text-danger span1">@error('semester')  {{$message}}  @enderror</label><br>

                     <label for="name"><b>Day:</b></label>
                 <select name="day" id="faculty">
                     <option value="">--Choose Day--</option>
                     <option value="Sunday">Sunday</option>
                     <option value="Monday">Monday</option>
                     <option value="Tuesday">Tuesday</option>
                     <option value="Wednesday">Wednesday</option>
                     <option value="Thursday">Thursday</option>
                     <option value="Friday">Friday</option>
                     <option value="Saturday">Saturday</option>
                     </select>
                     <label class="text-danger span1">@error('day')  {{$message}}  @enderror</label><br>

                     <label for="name"><b>CourseCode:</b></label>
                 <select name="coursecode" id="faculty">
                     <option value="">--Choose CourseCode--</option>
                        @foreach ($dater1 as $cdb1 )
                     <option value="{{$cdb1->id}}">@php
                            echo $cdb1->course_code;
                            @endphp</option>
                            @endforeach
                     </select>
                     <label class="text-danger span1">@error('coursecode')  {{$message}}  @enderror</label><br>

                         <div class="div3">
                            <button type="submit" class="btn btn-warning">
                                Submit
                            </button>
                            <div class="but2">
                                <button type="button" class="btn btn-warning but1" onclick="history.back()">Back</button>
                              </div><br>
                            </div><br>
            </form>
        </div>
</div>

<div class="box1">
     <h4><b>Theory</b></h4>
         <div class="d-flex justify-content-center div2">
            @if (isset($joindata))
         <table class="table table-dark">
            <thead>
                <td>Start Time</td>
                <td>End Time</td>
                <td>Course Name</td>
                <td>Course Code</td>
                <td>Lecturer Name</td>

            </thead>
            @foreach ($joindata as $cdb)
            <tr class="table-active">
                    <td>{{$cdb->start_time}}</td>
                    <td>{{$cdb->end_time}}</td>
                    <td>{{$cdb->course_name}}</td>
                    <td>{{$cdb->course_code}}</td>
                    <td>{{$cdb->lec_name}}</td>

              </tr>

            @endforeach

        </tbody>
      </table>





    @else
    <div class="alert alert-danger">{{ 'Enter valid details' }}</div>
    @endif
    </div><br>


<h4><b>Practical</b></h4>
<div class="d-flex justify-content-center div2">
    @if (isset($joindata1))
    <table class="table table-dark">
        <thead>
            <td>Start Time</td>
            <td>End Time</td>
            <td>Course Name</td>
            <td>Course Code</td>
            <td>Lecturer Name</td>

        </thead>
        @foreach ($joindata1 as $cdb)
        <tr class="table-active">
                <td>{{$cdb->start_time}}</td>
                <td>{{$cdb->end_time}}</td>
                <td>{{$cdb->course_name}}</td>
                <td>{{$cdb->course_code}}</td>
                <td>{{$cdb->acc_name}}</td>

          </tr>

        @endforeach

    </tbody>
  </table>

<div>
</div>
@else
<div class="alert alert-danger">{{ 'Enter valid details' }}</div>
@endif
</div>

</div>

</div>
</body>
</html>


