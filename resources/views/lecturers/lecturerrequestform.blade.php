<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="{{asset('css/lecturerrequest.css')}}">
    </head>
    <body>

            <div class ="request">
                <div class="box">
                    <form>
                        <h1>Send Your Request</h1>
                        <div class="inputBox">
                            <input type="text" class="form-control" id="inputname3" placeholder="G.R.Perera" name="name">
                            <span>Name with Initial :</span>
                            <i><ion-icon name="person"><icon-icon></i>
                        </div>
                        <div class="inputBox">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="email@gmail.com" name="email">
                            <span>E-mail :</span>
                            <i><ion-icon name="mail-sharp"><icon-icon></i>
                        </div>
                        <div class="inputBox">
                            <input type="Date" class="form-control" id="inputdate3" name="date">
                            <span>Date :</span>
                            <i><ion-icon name="calendar"><icon-icon></i>
                        </div>
                        <div class="inputBox">
                            <input type="time" class="form-control" id="input_time3" name="starttime">
                            <span>Start Time :</span>
                            <i><ion-icon name="time"><icon-icon></i>
                        </div>
                        <div class="inputBox">
                            <input type="time" class="form-control" id="input_time3" name="endtime">
                            <span>End Time :</span>
                            <i><ion-icon name="time"><icon-icon></i>
                        </div>



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
                        <div class="inputBox">
                            <label for="input_time3" class="col-sm-2 col-form-label" id="label1" >Reason : </label>
                            <textarea id="w3review" name="w3review" rows="10" cols="41" placeholder="--Description about request--"></textarea>
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
