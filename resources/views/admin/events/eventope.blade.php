@extends('layout.header')

@section("content2")
        <li><a href="/admin/adminhome">BACK</a></li>

@endsection

@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href={{asset('css/event.css')}}>
</head>
<body>
    <div class="div1">
        <div class="div3">
        <button type="button" class="btn btn-warning" onclick="window.location.href='/addevent'">
            Add Events
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


        @if (sizeof($cusdata4)!==0)
        <div class="d-flex justify-content-center div2">

        <table class="table table-dark">
            <thead>
                <td>Id</td>
                <td>Title</td>
                <td>Start Time</td>
                <td>End Time</td>
                <td>Action</td>

            </thead>
            <tbody>
                @foreach ($cusdata4 as $cdb)
            <tr>
                <td>{{$cdb->id}}</td>
                <td>{{$cdb->title}}</td>
                <td>{{$cdb->start_time}}</td>
                <td>{{$cdb->end_time}}</td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Action
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{url('update-event/'.$cdb->id)}}" >Edit</a></li>
                          <li><a class="dropdown-item" href="{{url('delete-event/'.$cdb->id)}}">Delete</a></li>
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
