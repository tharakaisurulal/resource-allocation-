<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>

    <title>Complaints</title>
</head>

<body>
    <h1>Complaints</h1>

    @if(count($labComplaints)==!0)
        <h2>Lab Complaints</h2>

        <table>
            <tr>
                <th>Username</th>
                <th>Lab</th>
                <th>Problems of PC/Lep</th>
                <th>A/C Problems</th>
                <th>Issues on Fans</th>
                <th>Projector</th>
                <th>Sound system</th>
                <th>Lights</th>
                <th>Other Issues</th>
                <th>Additional comment</th>
                <th>Action</th>
            </tr>
            @foreach($labComplaints as $complaint)
                <tr>
                    <td>{{ $complaint->user_name }}</td>
                    <td>{{ $complaint->lab }}</td>
                    <td>{{ $complaint->lap_pc ? 'Yes' : 'No' }}</td>
                    <td>{{ $complaint->a_c ? 'Yes' : 'No' }}</td>
                    <td>{{ $complaint->fan ? 'Yes' : 'No' }}</td>
                    <td>{{ $complaint->projector ? 'Yes' : 'No' }}</td>
                    <td>{{ $complaint->sound ? 'Yes' : 'No' }}</td>
                    <td>{{ $complaint->light ? 'Yes' : 'No' }}</td>
                    <td>{{ $complaint->other }}</td>
                    <td>{{ $complaint->add_comment }}</td>
                    <td>
                        <div class="dropdown">
                              <!--<li><a class="dropdown-item" href="{{url('update-student/'.$complaint->id)}}" >Edit</a></li>-->
                              <li><a class="dropdown-item" href="{{url('deletelabmainta/'.$complaint->id)}}">Delete</a></li>
                            </ul>
                          </div>

                    </td>
                </tr>
            @endforeach
        </table>
    @endif

    @if(count($hallComplaints)==!0)
        <h2>Hall Complaints</h2>

        <table>
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>Hall</th>
                    <th>A/C</th>
                    <th>Fan</th>
                    <th>Projector</th>
                    <th>Sound</th>
                    <th>Light</th>
                    <th>Chair</th>
                    <th>Other</th>
                    <th>Additional Comment</th>
                    <th>Timestamp</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($hallComplaints as $complaint)
                    <tr>
                        <td>{{ $complaint->user_name }}</td>
                        <td>{{ $complaint->hall }}</td>
                        <td>{{ $complaint->a_c ? 'Yes' : 'No' }}</td>
                        <td>{{ $complaint->fan ? 'Yes' : 'No' }}</td>
                        <td>{{ $complaint->projector ? 'Yes' : 'No' }}</td>
                        <td>{{ $complaint->sound ? 'Yes' : 'No' }}</td>
                        <td>{{ $complaint->light ? 'Yes' : 'No' }}</td>
                        <td>{{ $complaint->chair ? 'Yes' : 'No' }}</td>
                        <td>{{ $complaint->other }}</td>
                        <td>{{ $complaint->add_comment }}</td>
                        <td>{{ $complaint->created_at }}</td>
                        <td>
                            <div class="dropdown">
                                  <!--<li><a class="dropdown-item" href="{{url('update-student/'.$complaint->id)}}" >Edit</a></li>-->
                                  <li><a class="dropdown-item" href="{{url('deletehallmainta/'.$complaint->id)}}">Delete</a></li>
                                </ul>
                              </div>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <button type="button" onclick="history.back()" style="margin-left: 1100px; margin-top:40px;">Back</button>
</body>

</html>
