@extends('layout.header')

@section("content2")
        <li><a href="/admin/academicsupportive/academicsupopera">BACK</a></li>
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
                <h1>Update data</h1>
            </div>

            <form action="{{url('update1-accsupportive/'.$accsupportive->id)}}" method="POST">
                @csrf
                <div class="d-flex justify-content-center div2">
       <table class="table table-dark tb1">
        <tbody>
    <tr>
        <td>Id</td>
        <td><input type="text" name="id" value="{{$accsupportive->id}}" required disabled></td>
    </tr>
    <tr>
        <td>username</td>
        <td><input type="text" name="username" value="{{$accsupportive->username}}" required></td>
    </tr>
    <tr>
        <td>Lecturer name</td>
        <td><input type="text" name="name" value="{{$accsupportive->acc_name}}" required></td>
    </tr>
    <tr>
        <td>mobile</td>
        <td><input type="text" name="mobile" value="{{$accsupportive->acc_mobile}}" required></td>
    </tr>
    <tr>
        <td>Action</td>
        <td>
            <button class="btn btn-secondary btn-sm" type="submit" >Submit</button>
           <a href="/admin/academicsupportive/academicsupopera"> <button class="btn btn-secondary btn-sm" type="button" >Back</button></a>
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

