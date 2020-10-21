<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <style>
            table{
                border: 1px solid black;
            }
            th {
                text-align: left;
            }
            tr:nth-child(odd) {
                background-color: #222222;
            }
        </style>
        <title>Example 1</title>
    </head>
    <body>

    <table style="width:100%">
            <tbody>
                <tr>
                    <td style="width:50px; padding: 10px"><img src="images/logo.png" alt="logo" width="150"></td>
                    <td ><h1 class="text-info text-center">Banquet Hall Reservations</h1></td>
                    <td style="width:300px; padding: 10px; text-align: left;"><div id="company" class="clearfix" style="text-align: left;">
                            Hotel chathumdara<br/>
                            Ihala Yagoda,&nbspImbulgoda 11856<br/>
                            0112 262 652<br/>
                            <a href="#">info@chathumadura.com</a><br/>
                        </div>
                    </td>
                </tr>
    </table>
<br/>

    <table class="table table-dark" style="width:100%">
        <thead>
            <th style="border: 1px solid black;"><h3>Customer Name</h3></th>
            <th style="border: 1px solid black;"><h3>Email Address</h3></th>
            <th style="border: 1px solid black;"><h3>Hall ID</h3></th>
            <th style="border: 1px solid black;"><h3>Reservation Date</h3></th>
            <th style="border: 1px solid black;"><h3>Package</h3></th>
        </thead>
        <tbody>
            <tr></tr>
            @foreach($list ?? '' as $r)
                <tr>
                    <td style="border: 1px solid black;">{{$r->customerName}}</td>
                    <td style="border: 1px solid black;">{{$r->customerEmail}}</td>
                    <td style="border: 1px solid black;">{{$r->hallId}}</td>
                    <td style="border: 1px solid black;">{{$r->reservationDate}}</td>
                    <td style="border: 1px solid black;">{{$r->package}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </body>
</html>
