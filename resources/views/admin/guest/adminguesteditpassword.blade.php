@extends('layout.header')

@section("content2")
        <li><a href="/admin/student/stuopera">BACK</a></li>
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
            <div class="text-center">
                <h1>Retrive data</h1>
            </div>

            <form action="{{url('update1-guest/'.$guest->id)}}" method="POST">
                @csrf
         <div class="d-flex justify-content-center div2">

            <table class="table table-dark">
                <thead>
                    <td>Id</td>
                    <td>Old password</td>
                    <td>New password</td>
                    <td>Action</td>

                </thead>
                <tbody>

                <tr>
                    <td><input type="text" name="id" value="{{$guest->id}}" required disabled></td>
                    <td><input type="text" name="password1" value="{{$guest->password}}"></td>
                    <td><input type="text" name="password"  required></td>

                    <td>
                            <button class="btn btn-secondary btn-sm" type="submit" >Submit</button>
                           <a href="/admin/guest/guestopera"> <button class="btn btn-secondary btn-sm" type="button" >Back</button></a>
                    </td>
                </tr>

                </tbody>
              </table>

         </div>
        </form>
        </div>
    </body>
</html>
@endsection

