<!DOCTYPE html>
<html>
    <head>
        @include('cdn')
        <link rel="stylesheet" type="text/css" href="{{asset('css/lecturerrequest.css')}}">
        <link rel="icon" type="text/css" href="{{asset('/images/R.png')}}">

    </head>
    <body>

            <div class ="request">
                <div class="box">
                    <form action="{{route('lecturerreq')}}" method="post">
                        @csrf
                    @if(session()->has('success'))
                        <div class="alert alert-success">{{session()->get('success')}}</div>
                    @endif

                    @if(session()->has('fail'))
                        <div class="alert alert-danger">{{session()->get('fail')}}</div>
                    @endif

                    @php
                    if(session()->has('reid')){
                        $name=$dater->lec_name;
                        $id=$dater->id;
                        $email=$dater->username;
                    }
                    else{
                        $name='';
                        $id='';
                        $email='';
                    }
                    @endphp

                        <h1>Send Your Request</h1>
                        <div class="inputBox">
                            <input type="text" placeholder="G.R.Perera" name="name" value="{{$name}}" readonly="readonly" id="in1">
                            <span>Name with Initial :</span>
                            <i><ion-icon name="person"><icon-icon></i>
                        </div>
                        <label class="text-danger span1">@error('name')  {{$message}}  @enderror</label>


                        <div class="inputBox">
                            <input type="text" value="{{$id}}" readonly="readonly" id="in1" name="lecturerid">
                            <span>Lecturer Id :</span>
                            <i><ion-icon name="person"><icon-icon></i>
                        </div>
                        <label class="text-danger span1">@error('lecturerid')  {{$message}}  @enderror</label>

                        <div class="inputBox">
                            <input type="email" placeholder="email@gmail.com" name="email" value="{{$email}}" readonly="readonly" id="in1">
                            <span>E-mail :</span>
                            <i><ion-icon name="mail-sharp"><icon-icon></i>
                        </div>
                        <label class="text-danger span1">@error('email')  {{$message}}  @enderror</label>

                        <div class="inputBox">
                            <input type="Date" name="date">
                            <span>Date :</span>
                            <i><ion-icon name="calendar"><icon-icon></i>
                        </div>
                        <label class="text-danger span1">@error('date')  {{$message}}  @enderror</label>

                        <div class="inputBox">
                            <input type="time" name="starttime">
                            <span>Start Time :</span>
                            <i><ion-icon name="time"><icon-icon></i>
                        </div>
                        <label class="text-danger span1">@error('starttime')  {{$message}}  @enderror</label>

                        <div class="inputBox">
                            <input type="time"  name="endtime">
                            <span>End Time :</span>
                            <i><ion-icon name="time"><icon-icon></i>
                        </div>
                        <label class="text-danger span1">@error('endtime')  {{$message}}  @enderror</label>


                        <div class="inputBox">
                            <!--<label for="input_time3" class="col-sm-2 col-form-label">Location : </label>
                            <span>Time :</span>-->
                                <select name="hallname" id="location">
                                    <option value="">--Choose Location--</option>
                                    <option value="Lecture Hall 01">Lecture Hall 01</option>
                                    <option value="mini-auditorium">mini-auditorium</option>
                                    <option value="main-auditorium">main-auditorium</option>
                                    <option value="Computer lab 01">Computer lab 01</option>
                                    <option value="Computer lab 02">Computer lab 02</option>
                                    <option value="Computer lab 03">Computer lab 03</option>
                                    <option value="Special lab">Special lab</option>
                                </select>
                        </div>
                        <label class="text-danger span1">@error('hallname')  {{$message}}  @enderror</label>

                        <div class="inputBox">
                            <label for="input_time3" class="col-sm-2 col-form-label" id="label1" >Reason: </label>
                            <textarea id="w3review" name="note" rows="10" cols="41" placeholder="--Description about request--"></textarea>
                        </div>
                        <div class="inputBox">
                            <div class="col-sm-10">
                                <input type="reset"value="Reset" name="reset">
                                <input type="submit"value="Submit" name="submit">
                        </div>
                    </form>
            </div>
            <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>
