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

  <!-- Custom styles for this template -->
  <link href="css/employee-profile.css" rel="stylesheet">


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

     <form action="updateUser" method="post">
           @csrf
      <div > 
        
        
        <label class="pro" for="NIC Number"><b>NIC Number</b></label><br>
        <input type="text" placeholder="NIC Number" name="NICNumber" id="NICNumber" value="{{$user->NIC}}"required><br>
        <input type="hidden" placeholder="NIC Number" name="id" id="NICNumber" value="{{$user->id}}"><br>
       

      
      </div>

        <div class="container">
          <h1>{{$user->firstName}}</h1>

          
          

          <h3>Contact Informations</h3>
          <label for="Mobile Number"><b>Mobile Number</b></label><br>
          <input type="number" placeholder="Mobile Number" name="MobileNumber" id="MobileNumber" value="{{$user->mobile}}" required><br>

          

          <h3>General Informations</h3>
          <label for="First Name"><b>First Name</b></label><br>
          <input type="text" placeholder="First Name" name="FirstName" id="FirstName" value="{{$user->firstName}}" required ><br>

         
          
          <label for="Martial Status"><b>Martial Status</b></label><br>

          <input type="radio" name="MartialStatus" value="Single" > Single<br>
          <input type="radio" name="MartialStatus" value="Married" > Married<br>
          <input type="radio" name="MartialStatus" value="Separated" > Separated<br>
          <input type="radio" name="MartialStatus" value="Divorced" > Divorced<br>
          <input type="radio" name="MartialStatus" value="Prefernottoanswer" > Prefer not to answer<br><br>

          <label for="psw"><b>Password</b></label><br> 
          <input type="password" placeholder="Password" name="psw" id="psw" value="{{$user->password}}" required><br> 

          <label for="Address"><b>Address</b></label><br> 
          <input type="text" placeholder="Address" name="Address" id="Address" value="{{$user->address}}" required class="textbox"><br> 

          <label for="Bank Name"><b>Bank Name</b></label><br> 
          <input type="text" placeholder="Bank Name" name="BankName" id="BankName" value="{{$user->bankName}}" required><br> 

          <label for="Account Number"><b>Account Number</b></label><br> 
          <input type="text" placeholder="Account Number" name="AccountNumber" id="AccountNumber" value="{{$user->accountNumber}}" required><br> 

        
          <button type="submit" class="registerbtn2">update</button> 
          
        </div>
      
    
      </form>

      <form action="/deleteUser" method="post">
            @csrf
              <input type="hidden" placeholder="NIC Number" name="id" id="NICNumber" value="{{$user->id}}"><br>
              <button type="submit" class="registerbtn3">Delete</button>
      </form>
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
