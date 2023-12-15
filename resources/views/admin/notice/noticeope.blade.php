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

        <link rel="stylesheet" href="{{asset('css/adminlecturehallopera.css')}}">
    </head>
    <body>
        <div class="div1">
            <div class="div3">
            <button type="button" class="btn btn-warning" onclick="window.location.href='/addnotice'">
                Add notices
            </button>
            </div>

            <div class="text-center">
                <h1>Notices</h1>
            </div>

            @if(session()->has('success'))
            <div class="alert alert-success div5">{{session()->get('success')}}</div>
        @endif

        @if(session()->has('fail'))
            <div class="alert alert-danger">{{session()->get('fail')}}</div>
        @endif


            @if (sizeof($notice4)!==0)
         <div class="d-flex justify-content-center div2">

            <table class="table table-dark">
                <thead>
                    <td>Id</td>
                    <td>Notice</td>
                    <td>Action</td>

                </thead>
                <tbody>
                    @foreach ($notice4 as $cdb)
                <tr>
                    <td>{{$cdb->id}}</td>
                    <td>{{$cdb->notice}}</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Action
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="{{url('update-notice/'.$cdb->id)}}" >Edit</a></li>
                              <li><a class="dropdown-item" href="{{url('delete-notice/'.$cdb->id)}}">Delete</a></li>
                            </form>
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

