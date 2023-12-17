@extends('layout.header')

@section("content2")
        <li><a href="/noticeope">BACK</a></li>

@endsection

@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/event.css')}}">
</head>
<body>
    <form action="{{route('storertnotice')}}" method="POST">
        @if(session()->has('success'))
            <div class="alert alert-success div55">{{session()->get('success')}}</div>
        @endif

        @if(session()->has('fail'))
            <div class="alert alert-danger div55">{{session()->get('fail')}}</div>
        @endif
            @csrf
  <div class="container">
    <p>Please fill in this form to add Notice.</p>
    <hr>
<div>
    <label for="name"><b>Notice:</b></label>
    <textarea id="notice" name="notice" rows="10" cols="41" placeholder="           --Description about Notice--" required></textarea>
    <label class="text-danger span1">@error('notice')  {{$message}}  @enderror</label><br>
</div>
   <hr>
    <button type="submit" class="registerbtn">Submit</button>
  </div>
</form>
</body>
</html>
@endsection
