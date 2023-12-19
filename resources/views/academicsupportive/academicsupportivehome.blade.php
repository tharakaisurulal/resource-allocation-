@extends('layout.headerFooter')

@section("content1")
    <div class="header3"><img src="{{asset('/uploads/accsup/'.$dater->photo) }}" alt="image" class="img1"></div>
    <div class="header2">
        <h6>Welcome! {{$dater->acc_name}}</h6><br>
        <h6>You are login as a Academic Sup.</h6>
    </div>
@endsection


@section("content2")
        <li><a href="/logout">LOG OUT</a></li>
@endsection

@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('css/lecturerhome.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">


</head>
<body>
<!--------------------card section---------------------------->
<div class="div1">
    <div class="card">

            <div class="face front">
                <img src="/images/main1.jpg" alt=""  width=300px height=350px>
                <h3> Lecture Hall</h3>
            </div>

            <div class="face back">
                    <div class="back-content center">
                        <h3> Lecture Hall</h3>
                        <div class="button">
                            <a href="/academicsupportive/accsuplecturehalldetails"><span>CLICK</span></a>
                        </div>
                    </div>
            </div>
        </div>


        <div class="card">

            <div class="face front">
                <img src="/images/lab2.jpeg" alt="" width=300px height=350px>
                <h3> Laboratory</h3>
            </div>

            <div class="face back">
                    <div class="back-content center">
                        <h3> Laboratory</h3>
                        <div class="button">
                            <a href="/academicsupportive/accsuplab"><span>CLICK</span></a>
                        </div>
                    </div>
            </div>
        </div>

        <div class="card">

            <div class="face front">
                <img src="/images/1523342686phpo9K5NA.jpeg" alt="" width=300px height=350px>
                <h3> Time Table</h3>
            </div>

            <div class="face back">
                    <div class="back-content center">
                        <h3 class="hh1"> Time Table</h3><br>
                        <hr>
                            <form action="{{route('choosetimetable')}}" method="POST">
                                @csrf
                                <table>

                                    <tr>
                                        <td colspan="3" id="td1"><h5><b>Choose Program</b></h5></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="container3">BCs
                                                <input type="radio" checked="checked" name="radio2" value="1">
                                                <span class="checkmark"></span>
                                              </label>
                                        </td>
                                        <td>
                                            <label class="container3">BSc
                                                <input type="radio" name="radio2" value="2">
                                                <span class="checkmark"></span>
                                              </label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="3" id="td1"><h5><b>Choose Level</b></h5></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="container">One
                                                <input type="radio" checked="checked" name="radio" value="1">
                                                <span class="checkmark"></span>
                                              </label>
                                        </td>
                                        <td>
                                            <label class="container">Two
                                                <input type="radio" name="radio" value="2">
                                                <span class="checkmark"></span>
                                              </label>
                                        </td>
                                        <td>
                                            <label class="container">Three
                                                <input type="radio" name="radio" value="3">
                                                <span class="checkmark"></span>
                                              </label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="3" id="td1"><h5><b>Choose Semester</b></h5></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="container1">One
                                                <input type="radio" checked="checked" name="radio1" value="1">
                                                <span class="checkmark"></span>
                                              </label>
                                        </td>
                                        <td>
                                            <label class="container1">Two
                                                <input type="radio" name="radio1" value="2">
                                                <span class="checkmark"></span>
                                              </label>
                                        </td>

                                    </tr>
                                </table>
                                <hr>
                                <button type="submit" class="btn btn-primary">View</button>
                            </form>

                        <!--<div class="dropdown">
                        <div class="button btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <a><span>BCs</span></a>
                        </div>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/academicsupportive/acasuptablebcslevel1sem1" >Level 1</a></li>
                            <li><a class="dropdown-item" href="/academicsupportive/acasuptablebcslevel2sem2">Level 2</a></li>
                            <li><a class="dropdown-item" href="/academicsupportive/acasuptablebcslevel3sem1">Level 3</a></li>
                          </ul>
                        </div>-->
                    </div>
            </div>
        </div>

        <div class="card">

            <div class="face front">
                <img src="/images/904740.png" alt="" width=300px height=350px>
                <h3>Lab Maintains</h3>
            </div>

            <div class="face back">
                    <div class="back-content center">
                        <h3> Maintains Form</h3>
                        <div class="button">
                            <a href="/maintanceformview"><span>CLICK</span></a>
                        </div>
                    </div>
            </div>
        </div>
        <div class="card">

            <div class="face front">
                <img src="/images/904740.png" alt="" width=300px height=350px>
                <h3> Lecturehall Maintains</h3>
            </div>

            <div class="face back">
                    <div class="back-content center">
                        <h3> Maintains Form</h3>
                        <div class="button">
                            <a href="/maintanceformview1"><span>CLICK</span></a>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    </body>
</html>
@endsection
