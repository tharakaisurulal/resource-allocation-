@extends('layout.header')
@section("content2")
        <li><a href="/loginpage">BACK</a></li>

@endsection

@section("content")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/forgetpassword1.css')}}">

</head>
<body>
    <section class="login">
        <div class="box">
            <form action="{{ route('forget.password.post') }}" method="POST">
                @csrf
                <h1> FORGET PASSWORD </h1>

                @if(session()->has('success'))
                <div class="alert alert-success">{{session()->get('success')}}</div>
                @endif

                @if(session()->has('fail'))
                    <div class="alert alert-danger">{{session()->get('fail')}}</div>
                @endif

                <div class="inputBox">
                    <input type="email" name="email"  placeholder="silva@gmail.com">
                    <span>Email</span>
                    <i><ion-icon name="mail-sharp"></ion-icon></i>
                </div>
                <label class="text-danger span1">@error('email')  {{$message}}  @enderror</label>

                <div class="links2">
                    <input type="submit"value="Send Password Reset Link">
                </div>

                <!--<div class="links">
                    <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Send Password Reset Link
                              </button>
                          </div>
                </div>
            </form>
        </div>
    </section>


        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script src="assets/js/script.js"></script>
</body>
</html>
@endsection
