<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Create Table Reservation </title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <link href="css/splitScreen.css" rel="stylesheet">

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
                <span class="text-white mr-3">{{session('userName', 'Employee')}}</span><i class="fas fa-user text-white"></i>
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

     
      <div class="container">
        <div class="split left">
          <div class="img">
            <img src="img/bell06.jpg" style="width:450px;height:635px;">
              <div class="center"> <h1> <b> Create a Table <br>&nbsp;&nbsp;&nbsp; Reservation... </b> </h1> </div>
           </div>
         </div>
       </div>

      <div class="split right"> <br> <br>
          <form class="form-horizontal" method="post" action="/tablesave">
              {{csrf_field()}}
                      <div class="form-group">

                          <div class="row">
                              <label class="col-sm-5 control-label"> Table Number: </label>
                                <div class="col-md-5">
                                    <div class="dropdown">
                                                <select name ="tableNum" type="button" data-toggle="dropdown" id="tableNum" name="tableNum" required> See avaliable Table
                                                    <option value = "T01"> T01 </option>
                                                    <option value = "T02"> T02 </option>
                                                    <option value = "T03"> T03 </option> 
                                                    <option value = "T04"> T04 </option>
                                                    <option value = "T05"> T05 </option>
                                                    <option value = "T06"> T06 </option>
                                                    <option value = "T07"> T07 </option>
                                                    <option value = "T08"> T08 </option>
                                                    <option value = "T09"> T09 </option>
                                                  </select>
                                     </div>
                                 </div>
                           </div> <br>

                          <div class="row">
                              <label class="col-sm-5 control-label">Customer's Name: </label>
                                  <div class="col-md-5">
                                      <input class="form-control" id="CusName" type="text" name="CusName" required maxlength="191">
                                  </div>
                          </div> <br>

                          <div class="row">
                              <label class="col-sm-5 control-label"> Number Of Guest: </label>
                                  <div class="col-md-5">
                                      <input class="form-control" id="NumofGuest" type="text" name="NumofGuest" required maxlength="10">
                                  </div>
                          </div> <br>

                          <div class="row">
                              <label class="col-sm-5 control-label"> Date: </label>
                                  <div class="col-md-5">
                                      <input class="form-control" id="date" type="date" name="date" required>
                                  </div>
                          </div> <br>

                          <div class="row">
                              <label class="col-sm-5 control-label"> Time: </label>
                                  <div class="col-md-5">
                                      <input class="form-control" id="time" type="time" name="time" required>
                                  </div>
                          </div> <br>
                          
                          <div class="row">
                              <label class="col-sm-5 control-label"> Phone Number: </label>
                                  <div class="col-md-5">
                                      <input class="form-control" id="Phone" type="text" name="Phone" required maxlength="10">
                                  </div>
                          </div> <br>
                          
                          <div class="row">
                              <label class="col-sm-5 control-label"> Occasion Type: </label>
                                  <div class="col-md-5">
                                      <div class="dropdown">
                                              <select name="occation" type="button" data-toggle="dropdown" id="occation" name="occation" aria-haspopup="true" aria-expanded="false" required maxlength="50"> See avaliable Table                                     
                                                  <option value = "family"> Family Time </option>
                                                  <option value = "birthday"> Birthday Celebration </option>
                                                  <option value = "annivasary"> Annivasary Celebration </option> 
                                              </select>
                                      </div>
                                  </div>
                          </div> <br>

                          <div class="row">
                              <label class="col-sm-5 control-label">Assign a Waiter:</label>
                                  <div class="col-md-5">
                                      <input class="form-control" id="AssignWaiter" type="text" name="AssignWaiter" required maxlength="50">
                                  </div>
                          </div> <br>

                          <div class="row">
                              <label class="col-sm-5 control-label"> Any Special Request? </label>
                                  <div class="col-md-5">
                                      <textarea class="form-control" rows="4" id="Request" name="Request" required></textarea>
                                  </div>
                          </div> <br>

                          <div class="row">                       
                                      <input type="submit" class="btn btn-info" id="button" value="Create Reservation" name="submit">                              
                          </div> 

                </div>
              </form> <br>
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
