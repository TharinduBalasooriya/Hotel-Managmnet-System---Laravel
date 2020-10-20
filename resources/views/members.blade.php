
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member List</title>

    <style>
        #mem{
            border-collapse: collapse;
            width: 100;
        }
        #mem td,#mem th{
            border: 1px solid #ddd;
            padding: 8px
        }
        #mem tr:nth-child(even){
            background-color: #00ffbf;
        }
        #mem th{
            padding-top:12px;
            padding-bottom:12px;
            text-align:left;
            background-color: #0080ff;
            color: #fff;
        }
    </style>
</head>
<body>
    


    <table id = "mem">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Home Town</th>
                <th>Phone</th>
                <th>Register Date</th>
                <th>Height</th>
                <th>Weight</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $mem)
                <tr>
                    <td>{{$mem->id}}</td>
                    <td>{{$mem->firstName}}</td>
                    <td>{{$mem->lastName}}</td>
                    <td>{{$mem->gender}}</td>
                    <td>{{$mem->age}}</td>
                    <td>{{$mem->homeTown}}</td>
                    <td>{{$mem->contactNumber}}</td>
                    <td>{{$mem->registerDate}}</td>
                    <td>{{$mem->height}}</td>
                    <td>{{$mem->weight}}</td>
                </tr>


            @endforeach
            </tbody>
    </table>

    </body>
</html>