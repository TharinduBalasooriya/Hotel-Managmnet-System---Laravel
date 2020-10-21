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

<table style="width:100%">

    <tbody>
    <tr>
        <td style="padding: 10px;"><h3>Customer Name : </h3></td>
        <td style="padding: 10px;">{{$reservation->customerName}}</td>
    </tr>
    <tr>
        <td style="padding: 10px;"><h3>E-mail : </h3></td>
        <td style="padding: 10px;">{{$reservation->customerEmail}}</td>
    </tr>
    <tr>
        <td style="padding: 10px;"><h3>Telephone : </h3></td>
        <td style="padding: 10px;">{{$reservation->customerMobile}}</td>
    </tr>
    <tr>
        <td style="padding: 10px;"><h3>Reservation Status : </h3></td>
        <td style="padding: 10px;">{{$reservation->status}}</td>
    </tr>
    <tr>
        <td style="padding: 10px;"><h3>Reservation Date : </h3></td>
        <td style="padding: 10px;">{{$reservation->reservationDate}}</td>
    </tr>
    <tr>
        <td style="padding: 10px;"><h3>Reference : </h3></td>
        <td style="padding: 10px;">{{$reservation->reservationDate}}-{{$reservation->hallId}}-{{$reservation->package}}</td>
    </tr>
    </tbody>
</table><br/>

<table style="width:100%">

    <tbody>
    <tr>
        <td style="text-align: right; padding: 10px;">*This system generated receipt doesn't need any signature/seal and is valid for any claim within the dates of purchase offer.</td>
    </tr>
    </tbody>
</table>
</body>
</html>
