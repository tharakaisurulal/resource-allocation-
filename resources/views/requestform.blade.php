<!DOCTYPE html>
<html>
    <head>

        <link rel="stylesheet" type="text/css" href="{{asset('css/regi.css')}}">


        <link rel="stylesheet" type="text/css" href="{{asset('css/request.css')}}">
    </head>
    <body>

        <div class ="container">
                
                <form class="formcl">
                <h1>SEND YOUR REQUEST</h1>
                <br>
                    <div class="form-grouprow">

            <div class ="login">
                <div class="box">
                    <form>
                        <h1>Send Your Request</h1>
                            <br>
                        <div class="inputBox">

                            <label for="inputname3" class="col-sm-2 col-form-label">Initial Name:</label>
                            <input type="text" class="form-control" id="inputname3" placeholder="G.R.Perera">
                            <i><ion-icon name="lock-closed"><icon-icon></i>
                        </div>
                        <br>
                        <div class="inputBox">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email:</label>
                            <input type="email" class="form-control" id="inputEmail3" placeholder="email@gmail.com">
                            <i><ion-icon name="lock-closed"><icon-icon></i>
                        </div>
                        <br>
                        <div class="inputBox">
                            <label for="inputdate3" class="col-sm-2 col-form-label">Date:</label>
                            <input type="Date" class="form-control" id="inputdate3">
                            <i><ion-icon name="lock-closed"><icon-icon></i>
                        </div>
                        <br>
                        <div class="inputBox">
                            <label for="input_time3" class="col-sm-2 col-form-label">Time:  from </label>
                            <input type="time" class="form-control" id="input_time3">
                            <i><ion-icon name="lock-closed"><icon-icon></i>
                        </div>
                        <div class="inputBox">
                            <label for="input_time3" class="col-sm-2 col-form-label">To </label>
                            <input type="time" class="form-control" id="input_time3">
                            <i><ion-icon name="lock-closed"><icon-icon></i>
                        </div>
                        <br>
                        <div class="inputBox">
                            <label for="inputlocation3" class="col-sm-2 col-form-label">Location:</label>
                            <select name="location" id="location">
                            <option value="op1">lab 1</option>
                            <option value="op2">lab 2</option>
                            <option value="op3">lab 3</option>
                            <option value="op4">lecture hall 01</option>
                            <option value="op5">lecture hall 02</option>
                            <option value="op6">lecture hall 03</option>
                            <option value="op7">Main auditorium</option>
                            </select>
                        </div>
                        <br>
                        <div class="inputBox">
                            <label for="inputfaculty3" class="col-sm-2 col-form-label">Faculty  : </label>
                            <select name="faculty" id="faculty">
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

                </div>
        </div>

                        <br>
                        <div class="inputBox">
                            <label for="inputdepartment3" class="col-sm-2 col-form-label">Department :</label> 
                            <input type="text" class="form-control" id="inputDepartment3" placeholder="Department of Computer Science">
                            <i><ion-icon name="lock-closed"><icon-icon></i>    
                        </div>
                        <br>
                        <div class="inputBox">
                            <div class="col-sm-10">
                            <button type="reset" class="btn btn-primary">Reset</button>
                            <button type="register" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
            </div>

    </body>
</html>