
    

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
     <link rel="stylesheet" type="text/css" href="{{asset('css/Contact.css')}}">
    <title>profile</title>



    <link rel="stylesheet" type="text/css" href="{{asset('css/profile.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <style>
        /* CSS for styling the bell icon */
        /*.bell-icon {
            font-size: 24px; /* Adjust the size as needed */
            vertical-align: middle;
            margin-right: 5px; /* Add some spacing between the icon and text */
         
    </style>
  
</head>
<body>
        <table class="inner-table">
                    <tr>
                        <div class="image">
                    
                            <img src="images/pexels-simon-robben-614810.jpg" width="50%"/><br/>
                            <h4>Dr.abufhr</h4>
                        </td>
                         </div>

                        <td width="75%">
                            <h2>My Profile</h2></br>


                          <div class="sform"> 
                        <form>
                                <label for="name">Name:</label>
                                <input type="text" name="name"><br><br>
                                 <label for="gender">Gender:</label>
                                 <input type="radio" name="sex" id="male" value="male">
                                 <label for="male">Male</label>
                                <input type="radio" name="gender" id="female" value="female">
                                 <label for="female">Female</label> <br><br>
                                 <label for="department">Department: </label>
                                 <select name="department" id="department">

                                <option>Select an option</option>
                                 <option value="computer science">Computer Science</option>
                                 <option value="physical scinece">Physical Science</option>
                                 <option value="bio science">Bio Science</option>
                             </select><br><br>
                          </form>
        </div>




                        </td>
                    </tr>
                </table>
        
                
                <!-- Notifications & Message -->
                <div class="notifications-message">
                    <i class="ri-notification-line bell-icon"></i>
			<a href="#"> Notifications &nbsp</a>
			<a href="#"> Message</a>
                </div>
                

                <div class="editbtn">
                
                <br><button class="custom-button" onclick="alert('Button Clicked!')">Edit</button>
        </div>
</body>
</html>
