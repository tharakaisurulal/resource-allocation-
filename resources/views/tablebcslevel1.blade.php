<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @include('cdn')
        <link rel="stylesheet" href="{{asset('css/tablebcslevel1.css')}}">
</head>
<body>



<h1>BCS(General) DEGREE PROGRAMME(LEVEL 1 SEMESTER 1)</h1>
<h2>Bachelor of Computer Science(General)(SC/2022)</h2>
<br>

<table class="myTimetable">
  <THEAD>
    <TR>
      <TH>Time</TH>
      <TH>Monday</TH>
      <TH>Tuesday</TH>
      <TH>Wednesday</TH>
      <TH>Thursday</TH>
      <TH>Friday</TH>
    </TR>
  </THEAD>
  <TBODY>
    <TR>

    <TD> 8.00-8.55</TD>
      <TD>
        @foreach ($data1 as $cdb)
        @foreach ($cdb as $mb)
            @php
                echo $mb->lec_name;
            @endphp
        @endforeach
        @endforeach
        <!--<div class="code" ></div>
        <div class="lecturer"></div>
        <div class="hall"></div>-->
        </TD>


      <TD>
        <div class="code" >MAT113D/MAT112D</div>
        <div class="lecturer"> </div>
        <div class="hall"> </div>

      </TD>
      <TD>
        <div class="code" >MAT112D/MAT113D</div>
        <div class="lecturer"></div>
        <div class="hall"></div>

      </TD>
      <TD rowspan="2">
        <div class="code" >CSC1153(T&P) LABORATORY ASSIGNMENTS(On campus)</div>
        <div class="lecturer"></div>
        <div class="hall"></div>

      </TD>
      <TD rowspan="2">
        <div class="code" ></div>
        <div class="lecturer"></div>
        <div class="hall"></div>

      </TD>
    </TR>

    <TR>
      <TD>9.00-9.55</TD>



      <TD>
        <div class="code" ></div>
        <div class="lecturer"></div>
        <div class="hall"></div>
        </TD>

        <TD>
        <div class="code" ></div>
        <div class="lecturer"></div>
        <div class="hall"></div>
        </TD>

        <TD>
        <div class="code" >AMT112B</div>
        <div class="lecturer"></div>
        <div class="hall"></div>
        </TD>



      </TR>

      <TR>
      <TD>10.00-10.55</TD>
      <TD rowspan="2">
        <div class="code" >CSC1153(T&P) LABORATORY ASSIGNMENT(On campus)</div>
        <div class="lecturer"></div>
        <div class="hall"></div>

      </TD>

      <TD rowspan="2">
        <div class="code" >CSC1122(T) COMPUTER SYSTEM</div>
        <div class="lecturer">DR. THUSANGI</div>
        <div class="hall"></div>

      </TD>
      <TD rowspan="2">
        <div class="code" >CSC1113(P) PROGRAMMING TECHNIQUES</div>
        <div class="lecturer">MS.G.K.MABULA</div>
        <div class="hall"></div>
        </TD>

      <TD rowspan="2">
        <div class="code" >CSC1142(T) SYSTEM ANALYSIS 7 DESIGN</div>
        <div class="lecturer">MS. HIRUNI & MS UPAMALIKA</div>
        <div class="hall"></div>

      </TD>

      <TD rowspan="2">
        <div class="code" >CSC113A (T) INTERNET SERVICES & WEB DEVELOPMENT</div>
        <div class="lecturer">MS. BINURI</div>
        <div class="hall"></div>

      </TD>
    </TR>

    <TR>
      <TD>11.00-12.00</TD>



    </TR>


      <TR>
      <TD colspan="6" class="lunch">Lunch</TD>
    </TR>

      <TR>
      <TD>13.00-13.55</TD>


        <TD rowspan="2">
        <div class="code" >CSC1113(T) PROGRAMMING TECHNIQUES</div>
        <div class="lecturer">MS GILMINI 7 MS. KALYANI</div>
        <div class="hall"></div>

      </TD>

      <TD>
        <div class="code" >MAT113D/MAT112D</div>
        <div class="lecturer"></div>
        <div class="hall"></div>
        </TD>


        <TD rowspan="2">
        <div class="code" >CSC 1153(T&P) LABORATORY ASSIGNMENTS (On campus)</div>
        <div class="lecturer"></div>
        <div class="hall"></div>
        </TD>

        <TD rowspan="2">
        <div class="code" >AMT112B</div>
        <div class="lecturer"></div>
        <div class="hall"></div>
        </TD>

        <TD>
        <div class="code" ></div>
        <div class="lecturer"></div>
        <div class="hall"></div>
        </TD>
</TR>

      <TR>
      <TD>14.00-14.55</TD>


        <TD rowspan="2">
        <div class="code" >CSC113A(P) INTERNET SERVICES AND WEB DEVELOPMET</div>
        <div class="lecturer">MS.NILANI</div>
        <div class="hall"></div>
        </TD>

        <TD>
        <div class="code" ></div>
        <div class="lecturer"></div>
        <div class="hall"></div>
        </TD>

    </TR>

    <TR>
      <TD>15.00-15.55</TD>



      <TD>
        <div class="code" ></div>
        <div class="lecturer"></div>
        <div class="hall"></div>
        </TD>

        <TD>
        <div class="code" ></div>
        <div class="lecturer"></div>
        <div class="hall"></div>
        </TD>

        <TD>
        <div class="code" ></div>
        <div class="lecturer"></div>
        <div class="hall"></div>
        </TD>

        <TD>
        <div class="code" ></div>
        <div class="lecturer"></div>
        <div class="hall"></div>
        </TD>

    </TR>

    <TR>
      <TD>16.00-16.55</TD>

      <TD>
        <div class="code" ></div>
        <div class="lecturer"></div>
        <div class="hall"></div>
        </TD>

       <TD>
        <div class="code" ></div>
        <div class="lecturer"></div>
        <div class="hall"></div>
        </TD>

       <TD>
        <div class="code" ></div>
        <div class="lecturer"></div>
        <div class="hall"></div>
        </TD>

       <TD>
        <div class="code" ></div>
        <div class="lecturer"></div>
        <div class="hall"></div>
        </TD>

        <TD>
        <div class="code" ></div>
        <div class="lecturer"></div>
        <div class="hall"></div>
        </TD>
    </TR>

    <TR>
        <TD>17.00-18.00</TD>

        <TD>
        <div class="code" ></div>
        <div class="lecturer"></div>
        <div class="hall"></div>
        </TD>

        <TD>
        <div class="code" ></div>
        <div class="lecturer"></div>
        <div class="hall"></div>
        </TD>

        <TD>
        <div class="code" ></div>
        <div class="lecturer"></div>
        <div class="hall"></div>
        </TD>

        <TD>
        <div class="code" ></div>
        <div class="lecturer"></div>
        <div class="hall"></div>
        </TD>

        <TD>
        <div class="code" ></div>
        <div class="lecturer"></div>
        <div class="hall"></div>
        </TD>


   </TBODY>
</table>


  <br><br>

  <h1 style="text-align: left;">NOTICE</h1>
  <div class="notice-board">
        <div class="notice-item">
            <div class="notice-title">Academic</div>
            <div class="notice-content">ahhhhddhiedhiediedhiehdih</div>
        </div>
        <div class="notice-item">
            <div class="notice-title">Non-academic</div>
            <div class="notice-content">agdeudglehclheich</div>
        </div>
        <div class="notice-item">
            <div class="notice-title">Important Notice </div>
            <div class="notice-content">uvsegdoiecgugoeoci</div>
        </div>
    </div>

    <div class="map">
    <h1>MAP </h1>
    <div class="contact map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3968.406479149826!2d80.57409017456467!3d5.938578379684964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1scomputer%20science%20department%20university%20of%20ruhuna!5e0!3m2!1sen!2slk!4v1694582628653!5m2!1sen!2slk"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        </div>

</body>
</html>
