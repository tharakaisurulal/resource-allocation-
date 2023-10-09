@extends('layout.headerFooter')
@section('content2')
<div class="sidenav">
        <li><a href="#">DASHBOARD</a></li>
        <li><a href="#">TIMETABLE</a></li>
        <div class="dropdown">
        <li><button class="dropbtn">ACTORS</button></li>
            <div class="dropdown-content">
            <li><a href="#">ACTOR 1</a></li>
            <li><a href="#">ACTOR 2</a></li>
            <li><a href="#">ACTOR 3</a></li>
            </div>
        </div>
        <li><a href="#">Contact</a></li>
    <<div>
                    @yield('content2')
                </ul>
      

        
@endsection

@section("content")

@endsection
