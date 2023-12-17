<html>
 <head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

    @include('cdn')
	<title>ABOUT</title>

    <link rel="stylesheet" href="{{asset('css/viewp.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!---boxicons links-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!--remixicons link-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- scrollreveal effect-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--custom js link --->
 </head>

 <body>

        <div class="card">

      <div class="left-container">
        <img src="{{asset('/uploads/students/'.$dater1->photo) }}" alt="image" width="50px" height="50px">
        <h2 class="gradienttext">{{$dater1->first_name}} {{$dater1->last_name}}</h2>
        <p>Student</p>

        <p>Email:- <a class="email" href="">{{$dater1->username}}</a></p>
        <p>Mobile:- {{$dater1->mobile}}</p>





        <div class="links">
            <a class="ResearchGate" href="https://www.ResearchGate.com/geeksforgeeks.org/"
                target="_blank" title="GFG_ResearchGate">
                <i class="fab fa-ResearchGate"></i>
            </a>
            <a class="git" href="https://github.com/topics/geeksforgeeks"
                title="GFG_github" target="_blank">
                <i class="fab fa-github-square"></i>
            </a>
            <a class="linkedin" href="https://www.geeksforgeeks.org/tag/linkedin/"
                title="GFG_linkedin" target="_blank">
                <i class="fab fa-linkedin"></i>
            </a>

        </div>
      </div>
      <div class="right-container">
        <div class="dd1">

        <p>
            Program:- @foreach ($dater2 as $cd )
                @if (($dater1->program_Id == $cd->id))
                        {{ $cd->program }}
                @endif
                      @endforeach
        </p>
        <p>Level:- {{$dater1->level}}</p>
        <p>Semester:- {{$dater1->semester}}</p>
        </div>
        <table>
            <tr>
                <th>SUBJECTS</th>
              </tr>
          <tr>
            <td><ul>@foreach ($dater3 as $cd )
                @if (($dater1->subject1 == $cd->id))
                        {{ $cd->course_code }} {{ $cd->course_name }}
                @endif
                      @endforeach</ul></td>
         </tr>
          <tr>
            <td><ul>@foreach ($dater3 as $cd )
                @if (($dater1->subject2 == $cd->id))
                        {{ $cd->course_code }} {{ $cd->course_name }}
                @endif
                      @endforeach</ul></td>
          </tr>
          <tr>
            <td><ul>@foreach ($dater3 as $cd )
                @if (($dater1->subject3 == $cd->id))
                        {{ $cd->course_code }} {{ $cd->course_name }}
                @endif
                      @endforeach</ul></td>
          </tr>
          <tr>
            <td><ul>@foreach ($dater3 as $cd )
                @if (($dater1->subject4 == $cd->id))
                        {{ $cd->course_code }} {{ $cd->course_name }}
                @endif
                      @endforeach</ul></td>
            </tr>
            <tr>
                <td><ul>@foreach ($dater3 as $cd )
                    @if (($dater1->subject5 == $cd->id))
                            {{ $cd->course_code }} {{ $cd->course_name }}
                    @endif
                          @endforeach</ul></td>
            </tr>
            <tr>
                <td><ul>@foreach ($dater3 as $cd )
                    @if (($dater1->subject6 == $cd->id))
                            {{ $cd->course_code }} {{ $cd->course_name }}
                    @endif
                          @endforeach</ul></td>
            </tr>
            <tr>
                <td><ul>@foreach ($dater3 as $cd )
                    @if (($dater1->subject7 == $cd->id))
                            {{ $cd->course_code }} {{ $cd->course_name }}
                    @endif
                          @endforeach</ul></td>
            </tr>
            <tr>
                <td><ul>@foreach ($dater3 as $cd )
                    @if (($dater1->subject8 == $cd->id))
                            {{ $cd->course_code }} {{ $cd->course_name }}
                    @endif
                          @endforeach</ul></td>
            </tr>

            <tr>

                <td class="td13"><a href="/students/studenthome" > <button class="btn btn-secondary btn-sm" type="button">Back</button></a></td>
            </tr>


            <!--<tr>
                <th>Research Interests...</th>
            </tr>

            <tr>
                <td><ul>Ontology Development for Representing and Searching Information and Knowledge in User Context</ul></td>
             </tr>
             <tr>
                <td><ul>Knowledge Management Systems</ul></td>
             </tr>
             <tr>
                <td><ul>Semantic Web Technologies</ul></td>
             </tr>
             <tr>
                <td><ul>Ontology Engineering and Mobile Applications</ul></td>
             </tr>-->
        </table>

      </div>
    </div>





 </body>
</html>

