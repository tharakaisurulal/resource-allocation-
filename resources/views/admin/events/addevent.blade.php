@extends('layout.header')

@section("content2")
        <li><a href="/eventope">BACK</a></li>

@endsection

@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/event.css')}}">
</head>
<body>
    <form action="{{route('storert')}}" method="POST">
        @if(session()->has('success'))
            <div class="alert alert-success div55">{{session()->get('success')}}</div>
        @endif

        @if(session()->has('fail'))
            <div class="alert alert-danger div55">{{session()->get('fail')}}</div>
        @endif
            @csrf
  <div class="container">
    <p>Please fill in this form to add event.</p>
    <hr>

    <label for="name"><b>Title:</b></label>
    <input type="text" placeholder="title" name="name" id="name" required>
    <label class="text-danger span1">@error('name')  {{$message}}  @enderror</label><br>

    <label for="name"><b>start time:</b></label>
    <input type="text" placeholder="2022-09-02 10:30:00.0000" name="start" id="start" required>
    <label class="text-danger span1">@error('start')  {{$message}}  @enderror</label><br>

    <label for="psw"><b>end time:</b></label>
    <input type="text" placeholder="2022-09-02 10:30:00.0000" name="end" id="end" required>
    <label class="text-danger span1">@error('end')  {{$message}}  @enderror</label><br>

   <hr>
    <button type="submit" class="registerbtn">Submit</button>
  </div>
</form>
</body>
</html>
@endsection
