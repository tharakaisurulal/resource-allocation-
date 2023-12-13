@extends('layout.header')
@section('content2')
        <li><a href="/">HOME</a></li>
        <li><a href="/welcome/about">ABOUT US</a></li>
        <li><a href="/loginpage">LOGIN</a></li>
        <li><a href="/guest/guestregistration">REGISTER</a></li>
@endsection

@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Notice</title>
    <link rel="stylesheet" href="{{asset('css/notice.css')}}">
</head>
<body>
    <div class="notice-board">
    <h1 style="text-align:center;">NOTICE</h1>

        @if (sizeof($cusdata1)!==0)
        @foreach ($cusdata1 as $cdb)
          <div class="notice-item">
            <img src="/images/O1.jpg" class="img4" alt=""  width=100px height=100px>
              <div class="notice-title">{{$cdb->notice}}</div>
              <!--<div class="notice-content"></div>-->
          </div>
          @endforeach
          @else
          <div class="notice-item">
            <img src="/images/O1.jpg" class="img4" alt=""  width=100px height=100px>
              <div class="notice-title"></div>
              <!--<div class="notice-content"></div>-->
          </div>
          @endif
          <!--<div class="notice-item">
              <div class="notice-title">Non-academic</div>
              <div class="notice-content">agdeudglehclheich</div>
          </div>
          <div class="notice-item">
              <div class="notice-title">Important Notice </div>
              <div class="notice-content">uvsegdoiecgugoeoci</div>
          </div>-->
      </div>


</body>
</html>
@endsection
