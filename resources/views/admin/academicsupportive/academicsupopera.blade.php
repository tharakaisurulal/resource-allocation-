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
            <button type="button" class="btn btn-warning" onclick="window.location.href='/admin/academicsupportive/academicsupregister'">
                Add Academicsupportives
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


            @if (isset($cusdata6))
         <div class="d-flex justify-content-center div2">

            <table class="table table-dark">
                <thead>
                    <td>Id</td>
                    <td>Photo</td>
                    <td>username</td>
                    <td>Name</td>
                    <td>Mobile</td>
                    <td>Action</td>

                </thead>
                <tbody>
                    @foreach ($cusdata6 as $cdb)
                <tr>
                    <td>{{$cdb->id}}</td>
                    <td><img src="{{asset('/uploads/accsup/'.$cdb->photo) }}" alt="image" width="50px" height="50px"></td>
                    <td>{{$cdb->username}}</td>
                    <td>{{$cdb->acc_name}}</td>
                    <td>{{$cdb->acc_mobile}}</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Action
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="{{url('update-accsupportive/'.$cdb->id)}}" >Edit</a></li>
                              <li><a class="dropdown-item" href="{{url('delete-accsupportive/'.$cdb->id)}}">Delete</a></li>
                              <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Change Password</a></li>  <!-- Button trigger modal -->

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


        <!-- Modal id="staticBackdrop"-->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Change Password</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Do You want to change password?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
          <button type="button" class="btn btn-primary"><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">Yes</a></button>
        </div>
      </div>
    </div>
  </div>

    </body>
</html>
@endsection

