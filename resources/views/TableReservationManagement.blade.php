<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Table Reservation Management </title>

  <!-- Bootstrap core CSS -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/css/simple-sidebar.css" rel="stylesheet">
  <link href="/css/TableReservationHome.css" rel="stylesheet">

  <!-- font awsome icons-->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
 
<div class="d-flex" id="wrapper">






        <!-- Sidebar -->
        <div class="bg-dark " id="sidebar-wrapper" style="background: radial-gradient( circle farthest-corner at 10% 20%,  rgba(90,92,106,1) 0%, rgba(32,45,58,1) 81.3% );">
          <div class="sidebar-heading text-white" style="font-weight: bold;">Hotel Chathumadura</div>
          <div class="list-group list-group-flush mt-4">
            <a href="/home" class="list-group-item list-group-item-action  text-white bg-transparent"> <i class="fa fa-dashboard" style="font-size: 24px;"></i><p style="margin-left: 25px;display: inline;font-size: 18px;">Dashboard</p></a>
            <a href="#" class="list-group-item list-group-item-action  text-white bg-transparent"> <i class="fa fa-bell" style="font-size: 24px;"></i><p style="margin-left: 25px;display: inline;font-size: 18px;">Notifications</p></a>
            <a href="#" class="list-group-item list-group-item-action  text-white bg-transparent"> <i class="fas fa-envelope-open-text" style="font-size: 24px;"></i><p style="margin-left: 25px;display: inline;font-size: 18px;">Email</p></a>
            <a href="#" class="list-group-item list-group-item-action  text-white bg-transparent"> <i class="fa fa-phone" style="font-size: 24px;"></i><p style="margin-left: 25px;display: inline;font-size: 18px;">Customer Contacts</p></a>
            <a href="#" class="list-group-item list-group-item-action  text-white bg-transparent"> <i class="fa fa-phone" style="font-size: 24px;"></i><p style="margin-left: 25px;display: inline;font-size: 18px;">Employee Contact</p></a>
            <a href="#" class="list-group-item list-group-item-action  text-white bg-transparent"> <i class="fa fa-calendar" style="font-size: 24px;"></i><p style="margin-left: 25px;display: inline;font-size: 18px;">Events</p></a>
            <a href="#" class="list-group-item list-group-item-action  text-white bg-transparent"> <i class="fa fa-ticket" style="font-size: 24px;"></i><p style="margin-left: 25px;display: inline;font-size: 18px;">Reservations</p></a>
            <a href="#" class="list-group-item list-group-item-action  text-white bg-transparent"> <i class="fa fa-industry" style="font-size: 24px;"></i><p style="margin-left: 25px;display: inline;font-size: 18px;">Stock Details</p></a>
            <a href="#" class="list-group-item list-group-item-action  text-white bg-transparent"> <i class="fa fa-truck" style="font-size: 24px;"></i><p style="margin-left: 25px;display: inline;font-size: 18px;">Suppliers</p></a>
            <a href="#" class="list-group-item list-group-item-action  text-white bg-transparent"> <i class="fa fa-cog" style="font-size: 24px;"></i><p style="margin-left: 25px;display: inline;font-size: 18px;">Settings</p></a>
            <a href="#" class="list-group-item list-group-item-action  text-white bg-transparent"> <i class="fa fa-question-circle" style="font-size: 24px;"></i><p style="margin-left: 25px;display: inline;font-size: 18px;">Help</p></a>
          </div>
        </div>
        <!-- /#sidebar-wrapper -->  

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-primary " style="background: #2193b0;  /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, #6dd5ed, #2193b0);  /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, #6dd5ed, #2193b0); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      ">
        <a  id="menu-toggle" href="#"><i class="fa fa-bars fa-2x text-white" aria-hidden="true" ></i></a>
    
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link text-white" href="#">Home <i class="fas fa-home"></i> <span class="sr-only">(current)</span></a>
            </li>
           
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="text-white mr-3">Restaurant Manager</span><i class="fas fa-user text-white"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>



      <!-- page contain starts from here-->
      <h2 style="text-align: center;margin-top: 30px;"> Table Reservations Management</h2>

      <div class="row" style="margin: 30px; margin-left: 8%;">
        <div class="col-sm-3">

          <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
            <div class="card-header text-center"> Today Reservations </div>
            <div class="card-body">
              <h1 style="text-align: center;">31</h1>
              
            </div>
          </div>


        </div>


        <div class="col-sm-3">

          <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-header text-center"> Current in House </div>
            <div class="card-body">
              <h1 style="text-align: center;">13</h1>
              
            </div>
          </div>


        </div>

        <div class="col-sm-3">

          <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
            <div class="card-header text-center"> Expected Arrivals </div>
              <div class="card-body">
                <h1 style="text-align: center;">18</h1>  
              </div>
            </div>
          </div>
  
  <div class="iframe">
  <div style="text-align:center;padding:1em 0;"> <h3><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/en/country/lk"><span style="color:gray;"> <b> Today </b> <br></span> </a></h3><iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=medium&timezone=Asia%2FColombo&show=hour_minute" width="110%" height="170%" frameborder="0" seamless></iframe> </div>  
  </div>
</div>
  <br> <br> 

      <div class="row customCard"  style="padding-left: 150px;padding-right: 30px " >

        <div class="col-sm-6">
          <div class="card text-white text-center" style="background-color: #6c33a3;
          background-image: linear-gradient(316deg, #6c33a3 0%, #8241b8 50%);">
            <div class="card-body">
              <i class="fa fa-plus-circle fa-5x mt-3" aria-hidden="true"></i>
             <a href="/tablecreate"><h3 > Create a New Reservation </h3></a>
            </div>
            
          </div>

        </div>

        <div class="col-sm-6">
          <div class="card text-white text-center" style="background-color: #3bb78f;
          background-image: linear-gradient(315deg, #3bb78f 0%, #0bab64 50%);
          ">
            <div class="card-body">
              <i class="fa fa-list fa-5x mt-3" aria-hidden="true"></i>
              <h3 > Update Table Reservation </Table></h3>
            </div>
            
          </div>

        </div>

        <div class="col-sm-6">
          <div class="card text-white text-center" style="background-color: #2a2a72;
          background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 50%);">
            <div class="card-body">
              <i class="fa fa-plus-circle fa-5x" aria-hidden="true"></i>
              <h3 > See Available Waiters </h3>
            </div>
            
          </div>

        </div>

        <div class="col-sm-6">
          <div class="card text-white text-center" style="background-color: #ffd700;
          background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 50%);">
            <div class="card-body">
              <i class="fa fa-plus-circle fa-5x" aria-hidden="true"></i>
              <h3 > See Table Reservations Details </h3>
            </div>
            
          </div>

        </div>
       <!--item list finish -->
      </div>

      



    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
