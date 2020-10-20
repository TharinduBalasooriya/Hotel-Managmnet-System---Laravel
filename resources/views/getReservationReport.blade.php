<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservations</title>
    <style>
        #res{
            border-collapse: collapse;
            width: 100%;
        }
        #res td,#res th{
            border: 1px solid #ddd;
            padding: 8px;
        }
        #res tr:nth-child(even){
            background-color: #0bfdfd;
        }
        #res th{
            padding-top:12px;
            padding-bottom:12px;
            text-align:left;
            background-color: #4CAF50;
            color:#fff;

        }
    </style>
</head>
<body>
    <table  id = "res">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>NIC</th>
                <th>Mobile</th>
                <th>RoomID</th>
                <th>RoomName</th>
                <th>RoomCharge</th>
                <th>CheckIn</th>
                <th>CheckOut</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($room as $res)
                <tr>
                    <td>{{$res->id}}</td>
                    <td>{{$res->customerName}}</td>
                    <td>{{$res->NIC}}</td>
                    <td>{{$res->mobile}}</td>
                    <td>{{$res->roomID}}</td>
                    <td>{{$res->roomName}}</td>
                    <td>{{$res->roomCharge}}</td>
                    <td>{{$res->check_in}}</td>
                    <td>{{$res->check_out}}</td>
                </tr>
            @endforeach    
        </tbody>
    </table>
</body>
</html>