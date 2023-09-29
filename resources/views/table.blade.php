<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @include('cdn')
        <link rel="stylesheet" href={{asset('css/table.css')}}>
</head>
<body>



<H1>MY TIMETABLE</H1>
<TABLE class="myTimetable"> 
  <THEAD>
    <TR>
      <TH></TH>
      <TH>Monday</TH>
      <TH>Tuesday</TH>
      <TH>Wednesday</TH>
      <TH>Thursday</TH>
      <TH>Friday</TH>     
    </TR>
  </THEAD>
  <TBODY>
    <TR>
      <TD>8.00-10.00</TD>
      <TD>
        <div class="subject">Maths</div>
        <div class="code">Mat211</div>
        <div class="hall">hall1</div>
      </TD>
      <TD>
      <div class="subject">Maths</div>
        <div class="code">Mat211</div>
        <div class="hall">hall1</div>
      </TD>
      <TD>        
      <div class="subject">Maths</div>
        <div class="code">Mat211</div>
        <div class="hall">hall1</div>
      </TD>
      <TD>        
      <div class="subject">Maths</div>
        <div class="code">Mat211</div>
        <div class="hall">hall1</div>
      </TD>
       <TD>        
       <div class="subject">Maths</div>
        <div class="code">Mat211</div>
        <div class="hall">hall1</div>
      </TD>     
    </TR>
    <TR>
      <TD>10.00-12.00</TD>
      <TD>        
      <div class="subject">Maths</div>
        <div class="code">Mat211</div>
        <div class="hall">hall1</div>
      </TD>
      <TD>        
      <div class="subject">Maths</div>
        <div class="code">Mat211</div>
        <div class="hall">hall1</div>
      </TD>
      <TD>        
      <div class="subject">Maths</div>
        <div class="code">Mat211</div>
        <div class="hall">hall1</div>
      </TD>
      <TD>        
      <div class="subject">Maths</div>
        <div class="code">Mat211</div>
        <div class="hall">hall1</div>
      </TD>
      <TD>        
      <div class="subject">Maths</div>
        <div class="code">Mat211</div>
        <div class="hall">hall1</div>
      </TD>
    </TR>
      <TR>
      <TD colspan="6" class="break">Break</TD>
      </TR>
      <TR>
      <TD>1.00-2.00</TD>
      <TD>        
      <div class="subject">Maths</div>
        <div class="code">Mat211</div>
        <div class="hall">hall1</div>
      </TD>
      <TD>        
      <div class="subject">Maths</div>
        <div class="code">Mat211</div>
        <div class="hall">hall1</div>
      </TD>
      <TD>        
      <div class="subject">Maths</div>
        <div class="code">Mat211</div>
        <div class="hall">hall1</div>
      </TD>
      <TD>        
      <div class="subject">Maths</div>
        <div class="code">Mat211</div>
        <div class="hall">hall1</div>
      </TD>
      <TD>        
      <div class="subject">Maths</div>
        <div class="code">Mat211</div>
        <div class="hall">hall1</div>
      </TD>
    </TR>
      <TR>
      <TD colspan="6" class="lunch">Lunch</TD>
    </TR>
      <TR>
      <TD>4.00-5.00</TD>
      <TD>        
      <div class="subject">Maths</div>
        <div class="code">Mat211</div>
        <div class="hall">hall1</div>
      </TD>
      <TD>        
      <div class="subject">Maths</div>
        <div class="code">Mat211</div>
        <div class="hall">hall1</div>
      </TD>
      <TD>        
      <div class="subject">Maths</div>
        <div class="code">Mat211</div>
        <div class="hall">hall1</div>
      </TD>
      <TD>        
      <div class="subject">Maths</div>
        <div class="code">Mat211</div>
        <div class="hall">hall1</div>
      </TD>
      <TD>        
      <div class="subject">Maths</div>
        <div class="code">Mat211</div>
        <div class="hall">hall1</div>
      </TD>
    </TR>
      <TR>
      <TD>5.00-6.00</TD>
      <TD>        
      <div class="subject">Maths</div>
        <div class="code">Mat211</div>
        <div class="hall">hall1</div>
      </TD>
      <TD>        
      <div class="subject">Maths</div>
        <div class="code">Mat211</div>
        <div class="hall">hall1</div>
      </TD>
      <TD>        
      <div class="subject">Maths</div>
        <div class="code">Mat211</div>
        <div class="hall">hall1</div>
      </TD>
      <TD>        
      <div class="subject">Maths</div>
        <div class="code">Mat211</div>
        <div class="hall">hall1</div>
      </TD>
      <TD>        
      <div class="subject">Maths</div>
        <div class="code">Mat211</div>
        <div class="hall">hall1</div><div class="subject">Maths</div>
       
      </TD>
    </TR>
   </TBODY>
  </TABLE>


  <br><br>

  <h1 style="text-align: left;">NOTICE</h1>
  <div class="notice-board">
        <div class="notice-item">
            <div class="notice-title">Important Notice 1</div>
            <div class="notice-content">ahhhhddhiedhiediedhiehdih</div>
        </div>
        <div class="notice-item">
            <div class="notice-title">Important Notice 2</div>
            <div class="notice-content">agdeudglehclheich</div>
        </div>
        <div class="notice-item">
            <div class="notice-title">Important Notice 3</div>
            <div class="notice-content">uvsegdoiecgugoeoci</div>
        </div>
    </div>

    <div class="map">
    <h1 style="text-align: right;">MAP </h1>>
    <div class="contact map">
        <<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3968.406479149826!2d80.57409017456467!3d5.938578379684964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1scomputer%20science%20department%20university%20of%20ruhuna!5e0!3m2!1sen!2slk!4v1694582628653!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>>
        </div>
        </div>

</body>
</html>