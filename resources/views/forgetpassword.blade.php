@extends('layout.headerFooter')
@section("content")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href={{asset('css/style.css')}}>
    <link rel="stylesheet" href={{asset('css/forgetpassword.css')}}>

</head>
<body>
    <section class="login">
        <div class="box">
            <form action="">
                <h1> FORGET PASSWORD </h1>
                <div class="inputBox">
                    <input type="text" required>
                    <span>Email</span>
                    <i><ion-icon name="mail"></ion-icon></i>
                </div>

                <div class="inputBox">
                    <input type="password" required>
                    <span>Password</span>
                    <i><ion-icon name="lock-closed"></ion-icon></i>
                </div>


                <div class="inputBox">
                    <input type="password" required>
                    <span>Conformed Password</span>
                    <P ID="message"></P>
                    <i><ion-icon name="lock-closed"></ion-icon></i>
                </div>

                <div class="links">
                    <input type="submit" onclick="checkpassword()" value="Submit"/>
                        <div class="link2">
                            <a href="/loginpage">login</a>
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
