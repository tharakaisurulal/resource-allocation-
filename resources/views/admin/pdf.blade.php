<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<p>
Dr. Sugandima Vidanagamachchi,<br>
Head of the Department,<br>
Department of Computer Science,<br>
Faculty of Science,<br>
University of Ruhuna,<br>
Wellamadama,Matara,<br>
Sri Lanka<br>
<u>{{date('Y/m/d')}}</u><br><br>

<u>{{$guestrequest->name}}</u><br>
Lecturer,<br>
Department of Computer Science,<br>
Faculty of Science<br>
<u>{{$guestrequest->email}}</u><br><br>


Dear <u>{{$guestrequest->name}},</u><br><br>

<center><h2><b>Approval for Hall Request</b></h2></center><br><br>

I hope this letter finds you well. I have reviewed your request for the use of <u>{{$guestrequest->hall_name}}</u> at the University of Ruhuna, Faculty of Science, Department of Computer Science on <u>{{$guestrequest->date}}</u> for <u>{{$guestrequest->reason}}</u>.<br><br>

After careful consideration, I am pleased to inform you that your request has been approved. We trust that the requested space will be used responsibly and that all necessary arrangements will be made to ensure a smooth and successful event.<br><br>

Please adhere to the following guidelines during the use of the hall:<br><br>

1.[Specify any specific instructions or conditions related to the use of the hall.]<br>
2.[Include any information regarding access, setup, or cleanup procedures.]<br><br>
If you have any questions or require further assistance, please do not hesitate to contact Mr.Kamal Dharmasena by kamal@gmail.com.<br><br>

Thank you for your cooperation, and we wish you a successful and productive event.
<br><br>
Sincerely,<br><br>

.........................<br>
Dr. Sugandima Vidanagamachchi,<br>
Head of the Department,<br>
Department of Computer Science<br>

</p>
</body>
</html>
