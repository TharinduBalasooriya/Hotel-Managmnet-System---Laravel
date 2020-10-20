@if (!session()->has('userID'))
  @php
    echo App\Http\Controllers\employeeContoller::slogout();
  @endphp
@else

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title> Report </title>

  <!-- Bootstrap core CSS -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <style> 

          #tablepdf{
            font-family: serif;
            border-collapse: collapse;
            width: 100%;

            }

            #tablepdf td, #tablepdf th{
                border: 1px;
            }

            #tablepdf tr:nth-child(even){
                background-color:  #909497;
            }

            #tablepdf th{
                text-align: left;
                background-color: black;
                color: aliceblue;
                font-family: sans-serif;
            } 

            #button {
                position: absolute;
                height: 50px;
                width: 200px;
                left: 583px;
            }

            h2 {
              text-align: center;
            }

      </style>

  </head>

<body> 
      <br> 
      <a class="btn btn-danger btn-lg" href="/downloadtablepdf" role="button" id=button> Download Report </a> <br> <br> <br> 

      <h2> Table Reservations </h2> <br>

      <table id="tablepdf">
                        <tr>
                            <th> Reservation ID </th>
                            <th> Table Number </th>
                            <th> Customer Name </th>
                            <th> Number Of Guest </th>
                            <th> Date </th>
                            <th> Time </th>
                            <th> Phone Number</th>
                            <th> Occation Type </th>
                            <th> Assigned Waiter </th>
                            <th> Special Request</th>
                        </tr>
            
            <tbody>

                @foreach ($datas as $getall)

                        <tr>
                            <td> {{$getall->id}}</td>
                            <td> {{$getall->tableNum}}</td>
                            <td> {{$getall->CusName}}</td>
                            <td> {{$getall->NumofGuest}}</td>
                            <td> {{$getall->date}}</td>
                            <td> {{$getall->time}}</td>
                            <td> {{$getall->Phone}}</td>
                            <td> {{$getall->occation}}</td>
                            <td> {{$getall->AssignWaiter}}</td>
                            <td> {{$getall->Request}}</td>
                        </tr>
                @endforeach
            </tbody>
      </table>                
</body>

</html>
@endif
