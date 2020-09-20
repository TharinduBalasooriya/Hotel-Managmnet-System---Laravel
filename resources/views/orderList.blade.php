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
  <link href="css/order_mgmt.css" rel="stylesheet">

  <!-- font awsome icons-->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
                <span class="text-white mr-3">{{session('userName', 'Employee')}}</span><i class="fas fa-user text-white"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/uLogout">Log Out</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>



      <!-- page contain starts from here-->

      <div id="myBtnContainer" class="container" >

        
          <div class="container" style="text-align: center;margin-bottom: 30px;"><h2 class="text-dark">Order List</h2></div>
          <div class="row mt-4">
          <div class="col-lg-2"></div>
          <button class="btn btn-primary col-lg-2 " onclick="filterSelection('all')" style="height: 50px;font-style:oblique;font-weight: bold;width:4cm;margin-right: 5px;"> Show all</button>
          <button class="btn btn-success col-lg-2 " onclick="filterSelection('completed')" style="height: 50px;font-style:oblique;font-weight: bold;width:4cm;margin-right: 5px;"> show completed</button>
          <button class="btn btn-warning col-lg-2 " onclick="filterSelection('processing')" style="height: 50px;font-style:oblique;font-weight: bold;width:4cm;margin-right: 5px;"> show processing</button>
          <button class="btn btn-danger col-lg-2 " onclick="filterSelection('pending')" style="height: 50px;font-style:oblique;font-weight: bold;width:4cm;margin-right: 5px;"> show pending</button>
          </div>
          
        

        

        
      </div>


      <div>
        
      </div>
    

      <!--Completd Orders-->
      <div class="row mt-4 " style="padding: 30px;padding-left: 10%;padding-right: 10%;">
        <div class="container filterDiv completed" style="text-align: center;margin-bottom: 30px;"><h2 class="text-success">Completed Orders</h2></div>
        @foreach($orders as $order)
          @php
            $orderStat = $order->orderStatus;
          @endphp
          @if($orderStat == "COMPLETED")
            <div class="col-sm-3 filterDiv completed">
              <a href="/viewOrderDetails/{{$order->id}}" class="orderCard">
                <div class="card text-white bg-success mb-3 " style="max-width: 18rem;height: 150px;">
                  <h2 style="text-align: center;margin-top: auto;margin-bottom: auto;">{{$order->orderCode}}</h2>
                </div>
              </a>
            </div>
        @endif
        @endforeach
      </div>

      <!--Processing Orders-->

      <div class="row mt-4" style="padding: 30px;padding-left: 10%;padding-right: 10%;">
        <div class="container filterDiv  processing" style="text-align: center;margin-bottom: 30px;"><h2 class="text-warning">Processing Orders</h2></div>
        @foreach($orders as $order)
          @php
            $orderStat = $order->orderStatus;
          @endphp
          @if($orderStat == "PROCESSING")
        
        <div class="col-sm-3 filterDiv processing">
          <a href="/viewOrderDetails/{{$order->id}}" class="orderCard">
            <div class="card text-white bg-warning mb-3 " style="max-width: 18rem;height: 150px;">
              <h2 style="text-align: center;margin-top: auto;margin-bottom: auto;">{{$order->orderCode}}</h2>
            </div>
          </a>
        </div>
        @endif
        @endforeach
      </div>

      <!--Pending Orders-->

      <div class="row mt-4 pending" style="padding: 30px;padding-left: 10%;padding-right: 10%;">
        <div class="container filterDiv pending" style="text-align: center;margin-bottom: 30px;"><h2 class="text-danger">Pending Orders</h2></div>
        @foreach($orders as $order)
          @php
            $orderStat = $order->orderStatus;
          @endphp
          @if($orderStat == "PENDING")
        
        <div class="col-sm-3 filterDiv pending">
          <a href="/viewOrderDetails/{{$order->id}}" class="orderCard">
            <div class="card text-white bg-danger mb-3 " style="max-width: 18rem;height: 150px;">
              <h2 style="text-align: center;margin-top: auto;margin-bottom: auto;">{{$order->orderCode}}</h2>
            </div>
          </a>
        </div>
        @endif
        @endforeach
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



    filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
  </script>

</body>

</html>
