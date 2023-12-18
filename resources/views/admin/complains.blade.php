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
                </tr>
            @endforeach
        </table>
    @endif
</body>

</html>
