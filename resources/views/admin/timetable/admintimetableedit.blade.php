@extends('layout.header')

@section("content2")
        <li><a href="/admin/timetable/timetableopera">BACK</a></li>

@endsection

@section("content")
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Laravel</title>

        <link rel="stylesheet" href={{asset('css/adminlecturehallopera.css')}}>
    </head>
    <body>
        <div class="div1">
            <div class="text-center">
                <h1>Retrive data</h1>
            </div>

            <form action="{{url('update1-timetable/'.$timetable->id)}}" method="POST">
                @csrf
         <div class="d-flex justify-content-center div2">
            <div>
            <table class="table table-dark">
                <thead>
                    <td>Id</td>
                    <td>level</td>
                    <td>semester</td>
                    <td>day</td>
                    <td>start_time</td>
                    <td>end_time</td>
                    <td>Action</td>

                </thead>
                <tbody>

                <tr>
                    <td><input type="text" name="id" value="{{$timetable->id}}" required disabled></td>
                    <td><select name="level" id="faculty">
                        <option value="">--Choose course--</option>
                        <option value="level1" @selected($timetable->level == 'level1')>Level 1</option>
                        <option value="level2" @selected($timetable->level == 'level2')>Level 2</option>
                        <option value="level3" @selected($timetable->level == 'level3')>Level 3</option>
                        </select></td>
                    <td><select name="semester" id="faculty">
                            <option value="">--Choose course--</option>
                            <option value="semester1" @selected($timetable->semester == 'semester1')>Semester 1</option>
                            <option value="semester2" @selected($timetable->semester == 'semester2')>Semester 2</option>
                            </select></td>
                    <td><select name="day" id="faculty">
                        <option value="">--Choose course--</option>
                        <option value="Sunday" @selected($timetable->day == 'Sunday')>Sunday</option>
                        <option value="Monday" @selected($timetable->day == 'Monday')>Monday</option>
                        <option value="Tuesday" @selected($timetable->day == 'Tuesday')>Tuesday</option>
                        <option value="Wednesday" @selected($timetable->day == 'Wednesday')>Wednesday</option>
                        <option value="Thursday" @selected($timetable->day == 'Thursday')>Thursday</option>
                        <option value="Friday" @selected($timetable->day == 'Friday')>Friday</option>
                        <option value="Saturday" @selected($timetable->day == 'Saturday')>Saturday</option>
                        </select></td>
                    <td><input type="text" name="starttime" value="{{$timetable->start_time}}" required></td>
                    <td><input type="text" name="endtime" value="{{$timetable->end_time}}" required></td>
                    <td>
                            <button class="btn btn-secondary btn-sm" type="submit" >Submit</button>
                           <a href="/admin/timetable/timetableopera"> <button class="btn btn-secondary btn-sm" type="button" >Back</button></a>
                    </td>
                </tr>

                </tbody>
              </table>
            </div>
        </div>

        <div class="d-flex justify-content-center div2">
              <div class="div1">
                <div class="text-center">
                    <h1>Retrive data</h1>
                </div>
              <table class="table table-dark">
                <thead>
                    <td>Id</td>
                    <td>level</td>
                    <td>semester</td>
                    <td>day</td>
                    <td>start_time</td>
                    <td>end_time</td>
                    <td>Action</td>

                </thead>
                <tbody>

                <tr>
                    <td><input type="text" name="id" value="{{$timetable->id}}" required disabled></td>
                    <td><select name="level" id="faculty">
                        <option value="">--Choose course--</option>
                        <option value="level1" @selected($timetable->level == 'level1')>Level 1</option>
                        <option value="level2" @selected($timetable->level == 'level2')>Level 2</option>
                        <option value="level3" @selected($timetable->level == 'level3')>Level 3</option>
                        </select></td>
                    <td><select name="semester" id="faculty">
                            <option value="">--Choose course--</option>
                            <option value="semester1" @selected($timetable->semester == 'semester1')>Semester 1</option>
                            <option value="semester2" @selected($timetable->semester == 'semester2')>Semester 2</option>
                            </select></td>
                    <td><select name="day" id="faculty">
                        <option value="">--Choose course--</option>
                        <option value="Sunday" @selected($timetable->day == 'Sunday')>Sunday</option>
                        <option value="Monday" @selected($timetable->day == 'Monday')>Monday</option>
                        <option value="Tuesday" @selected($timetable->day == 'Tuesday')>Tuesday</option>
                        <option value="Wednesday" @selected($timetable->day == 'Wednesday')>Wednesday</option>
                        <option value="Thursday" @selected($timetable->day == 'Thursday')>Thursday</option>
                        <option value="Friday" @selected($timetable->day == 'Friday')>Friday</option>
                        <option value="Saturday" @selected($timetable->day == 'Saturday')>Saturday</option>
                        </select></td>
                    <td><input type="text" name="starttime" value="{{$timetable->start_time}}" required></td>
                    <td><input type="text" name="endtime" value="{{$timetable->end_time}}" required></td>
                    <td>
                            <button class="btn btn-secondary btn-sm" type="submit" >Submit</button>
                            <a href="/admin/timetable/timetableopera"> <button class="btn btn-secondary btn-sm" type="button" >Back</button></a>
                    </td>
                </tr>

                </tbody>
              </table>
            </div>

         </div>
        </form>
        </div>
    </body>
</html>
@endsection

