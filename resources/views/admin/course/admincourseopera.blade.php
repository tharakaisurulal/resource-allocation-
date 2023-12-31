@extends('layout.header')

@section("content2")
        <li><a href="/admin/adminhome">BACK</a></li>

@endsection

@section("content")
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Courses</title>

        <link rel="stylesheet" href="{{asset('css/adminlecturehallopera.css')}}">
    </head>
    <body>
        <div class="div1">
            <div class="div3">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Add courses
            </button>

            <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="{{route('addcourse')}}" method="POST">
            @csrf
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Add courses</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <table>

                <tr>
                    <td>Course Name:</td>
                    <td><input type="text" name="coursename" required></td>
                </tr>

                <tr>
                    <td>Course Code:</td>
                    <td><input type="text" name="coursecode" required></td>
                </tr>

             </table>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="reset" class="btn btn-primary">Reset</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
      </div>
    </div>
  </div>
            </div>

            <div class="text-center">
                <h1>Retrive data</h1>
            </div>

            @if(session()->has('success'))
            <div class="alert alert-success div5">{{session()->get('success')}}</div>
        @endif

        @if(session()->has('fail'))
            <div class="alert alert-danger">{{session()->get('fail')}}</div>
        @endif


            @if (sizeof($cusdata1)!==0)
         <div class="d-flex justify-content-center div2">

            <table class="table table-dark">
                <thead>
                    <td>Id</td>
                    <td>Course Name</td>
                    <td>Course Code</td>
                    <td>Action</td>

                </thead>
                <tbody>
                    @foreach ($cusdata1 as $cdb)
                <tr>
                    <td>{{$cdb->id}}</td>
                    <td>{{$cdb->course_name}}</td>
                    <td>{{$cdb->course_code}}</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Action
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="{{url('update-course/'.$cdb->id)}}" >Edit</a></li>
                              <li><a class="dropdown-item" href="{{url('delete-course/'.$cdb->id)}}">Delete</a></li>
                            </ul>
                          </div>
                    </td>
                </tr>
                    @endforeach
                </tbody>
              </table>

         </div>
         @else
         <div class="alert alert-danger div5">{{ 'No Data!' }}</div>
         @endif

        </div>

    </body>
</html>
@endsection
