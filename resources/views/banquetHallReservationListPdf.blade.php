<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <style>
            th {
                text-align: left;
            }
            td {
                padding: 100px;
            }
            tr:nth-child(odd) {
                background-color: #222222;
            }
        </style>
        <title>Example 1</title>
    </head>
    <body>
    <div id="page-content-wrapper">
        <div class="container">
            <h1 class="text-info text-center">Banquet Hall Reservations</h1>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-dark" style="width:100%">
                        <thead>
                            <th> Customer Name </th>
                            <th> Email Address </th>
                            <th> Hall ID </th>
                            <th> Reservation Date </th>
                            <th> Package </th>
                        </thead>
                        <tbody>
                            <tr></tr>
                            @foreach($list ?? '' as $r)
                                <tr>
                                    <td>{{$r->customerName}}</td>
                                    <td>{{$r->customerEmail}}</td>
                                    <td>{{$r->hallId}}</td>
                                    <td>{{$r->reservationDate}}</td>
                                    <td>{{$r->package}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
