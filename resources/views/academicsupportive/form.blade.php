<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <style>
        body {
            background-color: #0805056b;
        }
    </style>
</head>

<body>
    <div id="full">
        <div class="box">

            <form action="{{ route('viewcomplain') }}" method="POST">
                @if(Session::has('success'))
                <div style="color: black; text-align: center; background-color: #129999;" class="alert alert-success">{{
                    Session::get('success') }}</div>
                @endif

                @if(Session::has('fail'))
                <div style="color: white; background-color: red;" class="alert alert-danger">{{ Session::get('fail') }}
                </div>
                @endif

                @csrf

                <h1>Lab Maintainance Form</h1><br>

                <div class="s1">
                    <label>User name</label>
                    <input type="text" name="user_name" required><br>

                    <label>Select Lab</label>
                    <select name="Lab">
                        <option>Lab 01</option>
                        <option>Lab 02</option>
                        <option>Special Lab</option>
                    </select>
                </div>

               <br> <h3>Please select the issue</h3><br>

                <div class="s2">
                    <table>
                        <tr>

                            <td><label>PC/Laptop</label></td>
                            <td></td>

                            <td><input type="checkbox" name="lap/pc" value="Issues"></td>
                        </tr>

                        <tr>

                            <td><label>A/C Problem</label></td>
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

                            <td><label>Sound System</label></td>
                            <td></td>

                            <td><input type="checkbox" name="sound" value="sound"></td>
                        </tr>

                        <tr>

                            <td><label>Lights</label></td>
                            <td></td>

                            <td><input type="checkbox" name="light" value="light"></td>
                        </tr>


                    </table>



                    <br><label >Other Issues:</label>
                    <textarea name="other" rows="3" cols="50"></textarea><br>



                    <label>Additional Comment:</label>
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
