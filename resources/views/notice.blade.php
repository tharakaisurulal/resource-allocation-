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

    <h1 style="text-align: left;">NOTICE</h1>
    <div class="notice-board">
          <div class="notice-item">
            <img src="/images/O1.jpg" class="img4" alt=""  width=100px height=100px>
              <div class="notice-title">Academic</div>
              <div class="notice-content">ahhhhddhiedhiediedhiehdih</div>
          </div>
          <div class="notice-item">
              <div class="notice-title">Non-academic</div>
              <div class="notice-content">agdeudglehclheich</div>
          </div>
          <div class="notice-item">
              <div class="notice-title">Important Notice </div>
              <div class="notice-content">uvsegdoiecgugoeoci</div>
          </div>
      </div>


</body>
</html>
@endsection
