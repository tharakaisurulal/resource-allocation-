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
        <title>Laravel</title>

        <link rel="stylesheet" href={{asset('css/adminlecturehallopera.css')}}>
    </head>
    <body>
        <div class="div1">
            <div class="div3">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-warning" onclick="window.location.href='/admin/student/sturegister'">
                Add Students
            </button>

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


            @if (isset($cusdata4))
         <div class="d-flex justify-content-center div2">

            <table class="table table-dark">
                <thead>
                    <td>Id</td>
                    <td>username</td>
                    <td>first name</td>
                    <td>last_name</td>
                    <td>mobile</td>
                    <td>Action</td>

                </thead>
                <tbody>
                    @foreach ($cusdata4 as $cdb)
                <tr>
                    <td>{{$cdb->id}}</td>
                    <td>{{$cdb->username}}</td>
                    <td>{{$cdb->first_name}}</td>
                    <td>{{$cdb->last_name}}</td>
                    <td>{{$cdb->mobile}}</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Action
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="{{url('update-student/'.$cdb->id)}}" >Edit</a></li>
                              <li><a class="dropdown-item" href="{{url('delete-student/'.$cdb->id)}}">Delete</a></li>

                              <li><a class="dropdown-item" href="">More</a></li>
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

