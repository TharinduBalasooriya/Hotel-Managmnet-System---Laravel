@if (!session()->has('userID'))
  @php
    echo App\Http\Controllers\employeeContoller::slogout();
  @endphp
@else
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    <style>
     
        #customeTable {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        #customeTable th{
            background-color: crimson;
            color: white;
            height: 30px;
            margin-bottom: 10px;
            text-align: left;
          
        }
        #customeTable td, #customeTable th {
            border: 3px solid darkgray;
            padding: 3px;
        }

        #customeTable tr:nth-child(even){background-color: #f2f2f2;}
        .topic{

            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-style: italic;
            color: darkblue;
            text-align: center;
            font-size: xx-large;
        }
    
    </style>
</head>
<body>
    <h2 class="topic">Past Order Table</h2>
    <table id="customeTable">

    
        <tr>
            <th>
                Order_Code
            </th>
            <th>
                Customer Name
            </th>
            <th>
                Customer Mobile
            </th>
            <th>
                Order Type
            </th>
            <th>
                Order Status
            </th>
            <th>
                Order Date-Time
            </th>
            <th>
                Price
            </th>
        </tr>

        @foreach ($orderList as $order)
            <tr>
                <td>{{$order->orderCode}}</td>
                <td>{{$order->customerName}}</td>
                <td>{{$order->customerMobile}}</td>
                <td>{{$order->orderType}}</td>
                <td>{{$order->orderStatus}}</td>
                <td>{{$order->created_at}}</td>
                <td>{{$order->price}}</td>
            
            </tr>
        
        @endforeach
     

    </table>
</body>
</html>
@endif