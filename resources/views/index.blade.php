
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
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Sidebar - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

  <!-- font awsome icons-->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body >


 
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
                <span class="text-white mr-3">{{session('userName', 'Employee')}}</span><i class="fas fa-user text-white"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="#">Profile Details </a>
                <div class="dropdown-divider"></div>
                <form action="uLogout" method="post">
                    <a class="dropdown-item" href="/uLogout">Log Out</a>
                </form>
                
              </div>
            </li>
          </ul>
        </div>
      </nav>



      <!-- page contain starts from here-->
      <div class="container-fluid">
          <h1 class="mt-4">Dashboard</h1>
         <!-- uses regular style -->
         
        
        

        <div class="row">
          <!-- 1st item-->
          <div class="col-sm-3" >
            <div class="card border">
              <div class="card-header  text-white " style="height: 150px;background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(63,103,217,1) 0%, rgba(67,209,222,1) 100.3% );" >
                <div class="row">
                  <div class="col-lg-4" style="text-align: left">
                      <i class="fa fa-users fa-5x" aria-hidden="true"></i>
                  </div>
                  <div class="col-lg-8" style="text-align:right">
                      <h4>Employee Managment</h4>
                  </div>
                  
                </div>
              </div>
              <div class="card-footer text-muted bg-light">
                   <a href="/staffIndex" class="card-link">View Details</a>
                  <a href="/staffIndex" class="card-link"> <i class="fa fa-arrow-circle-right" style="float: right"></i></a>
                   
              </div>
            </div>
          </div>
          <!-- second item -->
         
             <div class="col-sm-3" >
            <div class="card border" >
              <div class="card-header  text-white" style="height: 150px;background: linear-gradient(to right, rgb(242, 112, 156), rgb(255, 148, 114));" >
                <div class="row">
                  <div class="col-lg-4" style="text-align: left">
                     <i class="fa fa-university fa-5x" aria-hidden="true"></i>
                  </div>
                  <div class="col-lg-8" style="text-align:right">
                      <h4>Banquet Hall Reservation</h4>
                  </div>
                  
                </div>
              </div>
              <div class="card-footer text-muted bg-light">
                   <a href="banquet-hall-reservations" class="card-link " style="color: rgb(242, 112, 156);">View Details</a>
                  <a href="banquet-hall-reservations" class="card-link " style="color: rgb(242, 112, 156);"> <i class="fa fa-arrow-circle-right" style="float: right"></i></a>
                   
              </div>
            </div>
          </div>
         <!-- Third item-->
            
            <div class="col-sm-3" >
            <div class="card border" >
              <div class="card-header  text-white" style="height: 150px;background-image: linear-gradient( 111.7deg,  rgba(165,41,185,1) 19.9%, rgba(80,177,225,1) 95% );" >
                <div class="row">
                  <div class="col-lg-4" style="text-align: left">
                      <i class='fas fa-glass-martini fa-5x'></i>
                  </div>
                  <div class="col-lg-8" style="text-align:right">
                      <h4>Order Managment</h4>
                  </div>
                  
                </div>
              </div>
              <div class="card-footer text-muted bg-light">
                   <a href="orders" class="card-link " style="color: rgba(165,41,185,1);">View Details</a>
                  <a href="orders" class="card-link " style="color: rgba(165,41,185,1);"> <i class="fa fa-arrow-circle-right" style="float: right"></i></a>
                   
              </div>
            </div>
          </div>
            
        <!-- last item -->
                 <div class="col-sm-3" >
            <div class="card border" >
              <div class="card-header  text-white bg-info" style="height: 150px;background-image: radial-gradient( circle 939px at 94.7% 50%,  rgba(0,178,169,1) 0%, rgba(0,106,101,1) 76.9% );" >
                <div class="row">
                  <div class="col-lg-4" style="text-align: left">
                      <i class="fa fa-bed fa-4x" aria-hidden="true"></i>
                  </div>
                  <div class="col-lg-8" style="text-align:right">
                      <h4>Room Reservation</h4>
                  </div>
                  
                </div>
              </div>
              <div class="card-footer text-muted bg-light">
                   <a href="roomReservation" class="card-link" style="color: rgba(0,178,169,1);">View Details</a>
                  <a href="roomReservation" class="card-link" style="color: rgba(0,178,169,1);"> <i class="fa fa-arrow-circle-right" style="float: right"></i></a>
                   
              </div>
            </div>
          </div>
          

         <!--item list finish -->
        </div>


        
        <div class="row mt-4">
          <!-- 1st item-->
          <div class="col-sm-3" >
            <div class="card border">
              <div class="card-header  text-white " style="height: 150px;background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(63,103,217,1) 0%, rgba(67,209,222,1) 100.3% );" >
                <div class="row">
                  <div class="col-lg-4" style="text-align: left">
                      <i class="fas fa-swimmer fa-5x" aria-hidden="true"></i>
                  </div>
                  <div class="col-lg-8" style="text-align:right">
                      <h4>Swiming pool Managment</h4>
                  </div>
                  
                </div>
              </div>
              <div class="card-footer text-muted bg-light">
                   <a href="swimpool" class="card-link">View Details</a>
                  <a href="swimpool" class="card-link"> <i class="fa fa-arrow-circle-right" style="float: right"></i></a>
                   
              </div>
            </div>
          </div>
          <!-- second item -->
         
             <div class="col-sm-3" >
            <div class="card border" >
              <div class="card-header  text-white" style="height: 150px;background: linear-gradient(to right, rgb(242, 112, 156), rgb(255, 148, 114));" >
                <div class="row">
                  <div class="col-lg-4" style="text-align: left">
                    <i class="fa fa-list fa-5x" aria-hidden="true"></i>
                  </div>
                  <div class="col-lg-8" style="text-align:right">
                      <h4>Price <br/> Listing</h4>
                  </div>
                  
                </div>
              </div>
              <div class="card-footer text-muted bg-light">
                   <a href="/priceInter" class="card-link " style="color: rgb(242, 112, 156);">View Details</a>
                  <a href="/priceInter" class="card-link " style="color: rgb(242, 112, 156);"> <i class="fa fa-arrow-circle-right" style="float: right"></i></a>
                   
              </div>
            </div>
          </div>
         <!-- Third item-->
            
            <div class="col-sm-3" >
            <div class="card border" >
              <div class="card-header  text-white" style="height: 150px;background-image: linear-gradient( 111.7deg,  rgba(165,41,185,1) 19.9%, rgba(80,177,225,1) 95% );" >
                <div class="row">
                  <div class="col-lg-4" style="text-align: left">
                    <i class="fa fa-table fa-5x" aria-hidden="true"></i>
                  </div>
                  <div class="col-lg-8" style="text-align:right">
                      <h4>Table Reservation & Waiter Managment</h4>
                  </div>
                  
                </div>
              </div>
              <div class="card-footer text-muted bg-light">
                   <a href="/tableMyHome" class="card-link " style="color: rgba(165,41,185,1);">View Details</a>
                  <a href="/tableMyHome" class="card-link " style="color: rgba(165,41,185,1);"> <i class="fa fa-arrow-circle-right" style="float: right"></i></a>
                   
              </div>
            </div>
          </div>
            
        <!-- last item -->
                 <div class="col-sm-3" >
            <div class="card border" >
              <div class="card-header  text-white bg-info" style="height: 150px;background-image: radial-gradient( circle 939px at 94.7% 50%,  rgba(0,178,169,1) 0%, rgba(0,106,101,1) 76.9% );" >
                <div class="row">
                  <div class="col-lg-4" style="text-align: left">
                    <i class="fas fa-money-bill fa-4x"></i>
                  </div>
                  <div class="col-lg-8" style="text-align:right">
                      <h4>Payments and Billing</h4>
                  </div>
                  
                </div>
              </div>
              <div class="card-footer text-muted bg-light">
                   <a href="#" class="card-link" style="color: rgba(0,178,169,1);">View Details</a>
                  <a href="#" class="card-link" style="color: rgba(0,178,169,1);"> <i class="fa fa-arrow-circle-right" style="float: right"></i></a>
                   
              </div>
            </div>
          </div>
          

         <!--item list finish -->
        </div>
        
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
@endif