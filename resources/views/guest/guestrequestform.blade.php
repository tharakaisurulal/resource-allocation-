<!DOCTYPE html>
<html>
    <head>
        @include('cdn')
        <link rel="stylesheet" type="text/css" href="{{asset('css/guestrequest.css')}}">
    </head>
    <body>

            <div class ="request">
                <div class="box">
                    <form action="{{route('guestreq')}}" method="post">
                        @if(session()->has('success'))
                        <div class="alert alert-success">{{session()->get('success')}}</div>
                    @endif

                    @if(session()->has('fail'))
                        <div class="alert alert-danger">{{session()->get('fail')}}</div>
                    @endif
                        @csrf
                        <h1>Send Your Request</h1>
                        <div class="inputBox">
                            <input type="text" placeholder="G.R.Perera" name="name">
                            <span>Name with Initial :</span>
                            <i><ion-icon name="person"><icon-icon></i>
                        </div>
                        <label class="text-danger span1">@error('name')  {{$message}}  @enderror</label>

                        <div class="inputBox">
                            <input type="email" placeholder="email@gmail.com" name="email">
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
                            <input type="time" name="endtime">
                            <span>End Time :</span>
                            <i><ion-icon name="time"><icon-icon></i>
                        </div>
                        <label class="text-danger span1">@error('endtime')  {{$message}}  @enderror</label>

                        <div class="inputBox">
                            <!--<label for="input_time3" class="col-sm-2 col-form-label">Location : </label>
                            <span>Time :</span>-->
                                <select name="hallname" id="location">
                                    <option value="">--Choose Location--</option>
                                    <option value="op1">lab 1</option>
                                    <option value="op2">lab 2</option>
                                    <option value="op3">lab 3</option>
                                    <option value="op4">lecture hall 01</option>
                                    <option value="op5">lecture hall 02</option>
                                    <option value="op6">lecture hall 03</option>
                                    <option value="op7">Main auditorium</option>
                                </select>
                        </div>
                        <label class="text-danger span1">@error('hallname')  {{$message}}  @enderror</label>

                        <div class="inputBox">
                        <!--<label for="input_time3" class="col-sm-2 col-form-label">Faculty: </label>-->
                            <select name="faculty" id="faculty">
                                <option value="">--Choose faculty--</option>
                            <option value="op1">Faculty of Science</option>
                            <option value="op2">Faculty of Management and Finance</option>
                            <option value="op3">Faculty of Humanities and Social Sciences	</option>
                            <option value="op4">Faculty of Fisheries and Marine Sciences and Technology</option>
                            <option value="op5">Faculty of Medicine</option>
                            <option value="op6">Faculty of Engineering</option>
                            <option value="op7">Faculty of Technology</option>
                            <option value="op7">Faculty of Agriculture</option>
                            </select>
                        </div>
                        <label class="text-danger span1">@error('faculty')  {{$message}}  @enderror</label>

                        <div class="inputBox">

                            <input type="text" placeholder="Department of Computer Science" name="department">
                            <span>Department :</span>
                            <i><ion-icon name="school"><icon-icon></i>

                        </div>
                        <label class="text-danger span1">@error('department')  {{$message}}  @enderror</label>

                        <div class="inputBox">
                            <label for="input_time3" class="col-sm-2 col-form-label" id="label1" >Reason:</label>
                            <textarea id="w3review" name="note" rows="6" cols="41" placeholder="--Description about request--"></textarea>
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
