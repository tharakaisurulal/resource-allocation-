<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    </head>
    <body class="container">
                
                <form class="formcl">
                <h1>Registration Form</h1>
                <br>
                    <div class="form-grouprow">
                            <label for="inputname3" class="col-sm-2 col-form-label">Initial Name:</label>
                            <input type="text" class="form-control" id="inputname3" placeholder="G.R.Perera">
                    </div>
                    <br>
                    <div class="form-grouprow">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email:</label>
                        <input type="email" class="form-control" id="inputEmail3" placeholder="email@gmail.com">
                        
                    </div>
                    <br>
                    <div class="form-grouprow">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password :</label>
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                        
                    </div>
                    <br>
                    <div class="form-grouprow">
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
                    <br> 
                    <div class="form-grouprow">
                        <label for="inputdepartment3" class="col-sm-2 col-form-label">Department :</label> 
                        <input type="text" class="form-control" id="inputDepartment3" placeholder="Department of Computer Science">    
                    </div>
                    <br>
                    <div class="form-grouprow">
                        <div class="col-sm-10">
                        <button type="reset" class="btn btn-primary">Reset</button>                                     <button type="register" class="btn btn-primary">Register</button>
                        </div>
                    </div>
    </body>
</html>
