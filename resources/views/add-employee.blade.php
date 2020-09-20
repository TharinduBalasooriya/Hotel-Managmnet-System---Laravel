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
  <link href="css/add-employee.css" rel="stylesheet">


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

      <form action="/storeEmployee" method="post">
            {{csrf_field()}}
        <div class="container">
          <h1>Register</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>
      
          <label for="Surname"><b>Surname</b></label>
          <input type="text" placeholder="Surname" name="Surname" id="Surname" required>

          <label for="First Name"><b>First Name</b></label>
          <input type="text" placeholder="First Name" name="FirstName" id="FirstName" required>

          <label for="NIC Number"><b>NIC Number</b></label>
          <input type="text" placeholder="NIC Number" name="NICNumber" id="NICNumber" required>
          
          <label for="Gender"><b>Gender</b></label><br>
          <input type="radio" name="gender" value="Male"> Male<br>
          <input type="radio" name="gender" value="Female"> Female<br>
          <input type="radio" name="gender" value="Other"> Other<br><br>

          <label for="Country"><b>Country</b></label>
          <input type="text" placeholder="Country" name="Country" id="Country" required>

          <label for="Martial Status"><b>Martial Status</b></label><br>

          <input type="radio" name="MartialStatus" value="Single"> Single<br>
          <input type="radio" name="MartialStatus" value="Married"> Married<br>
          <input type="radio" name="MartialStatus" value="Separated"> Separated<br>
          <input type="radio" name="MartialStatus" value="Divorced"> Divorced<br>
          <input type="radio" name="MartialStatus" value="Prefernottoanswer"> Prefer not to answer<br><br>


             <label for="Martial Status"><b>Job Role</b></label><br>

                <input type="radio" name="jobRole" value="KM"> Kitchen Manager<br>
                <input type="radio" name="jobRole" value="RM"> Resturant Manager<br>
                <input type="radio" name="jobRole" value="GM"> General Manager<br>
                <input type="radio" name="jobRole" value="SM"> Staff Manager<br>
               

          <label for="Date Of Birth"><b>Date Of Birth</b></label>
          <input type="date" placeholder="Date Of Birth" name="DateOfBirth" id="DateOfBirth" required><br><br>
          
          <label for="Join Date"><b>Join Date</b></label>
          <input type="date" placeholder="Join Date" name="JoinDate" id="JoinDate" required> <br><br>

          <label for="userName"><b>User Name</b></label>
          <input type="text" placeholder="Password" name="uN" id="userName" required> 
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Password" name="psw" id="psw" required> 
          <label for="mobile"><b>mobileNumber</b></label>
          <input type="number" placeholder="mobileNumber" name="mobile" id="mobile" required> 

          <label for="Address"><b>Address</b></label>
          <input type="text" placeholder="Address" name="Address" id="Address" required class="textbox">

          <label for="Bank Name"><b>Bank Name</b></label>
          <input type="text" placeholder="Bank Name" name="BankName" id="BankName" required>

          <label for="Account Number"><b>Account Number</b></label>
          <input type="text" placeholder="Account Number" name="AccountNumber" id="AccountNumber" required>

          <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
          <button type="submit" class="registerbtn">Add</button>
        </div>
      
    
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
