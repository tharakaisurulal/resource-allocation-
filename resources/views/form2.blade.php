<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    
    
</head>

<body>
    <div id="full">
        <div class="box">

            <form>
                
               
                

                
                
                <h1>Lecture Hall Maintain Form</h1><br>

                <div class="s1">
                    <label>User name</label>
                    <input type="text" name="user_name" required><br>

                    <label>Select Hall</label>
                    <select name="hall">
                        <option>Lecture Hall 01</option>
                        <option>Mini Auditorium</option>
                        <option>Main Auditorium</option>
                    </select>
                </div>

               <br> <h3>Please select the issue</h3><br>

                <div class="s2">
                    <table>
                        
            
                        <tr>
                            
                            <td><label>A/C Problam</label></td>
                            <td></td>
                            
                            <td><input type="checkbox" name="a_c" value="a/c"></td>
                        </tr>

                        <tr>
                            
                            <td><label>Issues on Fans</label></td>
                            <td></td>
                            
                            <td><input type="checkbox" name="fan" value="fan"></td>
                        </tr>
                        

                        <tr>
                            
                            <td><label>Projector</label></td>
                            <td></td>
                            
                            <td><input type="checkbox" name="projector" value="pro"></td>
                        </tr>
                    
                        <tr>
                            
                            <td><label>Sound system</label></td>
                            <td></td>
                            
                            <td><input type="checkbox" name="sound" value="sound"></td>
                        </tr>
                    
                        <tr>
                           
                            <td><label>Lights</label></td>
                            <td></td>
                            
                            <td><input type="checkbox" name="light" value="light"></td>
                        </tr>

                        <tr>
                            <td><lable>Chair</lable>
                            <td></td>
                            <td><input type="checkbox" name="chair" value="chair"></td>
                            
                        </tr>

                    </table>

                   

                    <br><label >Other Issues:</label>
                    <textarea name="other" rows="3" cols="50"></textarea><br>
                     


                    <label>Additional comment:</label>
                    <textarea  name="add_comment" cols="50"></textarea><br>
                
                
                    <br>
                     
                        <input type="reset" value="Reset" name="reset"   >
                        <input type="submit" value="Submit" name="submit" style="margin-left: 60px;">
                        <button type="button" onclick="history.back()" style="margin-left: 60px;">Back</button>
                    
                </div>
            </form>
        </div>
    </div>
</body>

</html>