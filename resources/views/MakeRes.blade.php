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

<body>
 
<div class="d-flex" id="wrapper">






        <!-- Sidebar -->
        <div class="bg-dark " id="sidebar-wrapper" style="background: radial-gradient( circle farthest-corner at 10% 20%,  rgba(90,92,106,1) 0%, rgba(32,45,58,1) 81.3% );">
          <div class="sidebar-heading text-white" style="font-weight: bold;">Hotel Chathumadura</div>
          <div class="list-group list-group-flush mt-4">
            <a href="#" class="list-group-item list-group-item-action  text-white bg-transparent"> <i class="fa fa-dashboard" style="font-size: 24px;"></i><p style="margin-left: 25px;display: inline;font-size: 18px;">Dashboard</p></a>
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
                <a id="menu-toggle" href="#"><i class="fa fa-bars fa-2x text-white" aria-hidden="true"></i></a>

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
                                <span class="text-white mr-3">Resturent Manager</span><i class="fas fa-user text-white"></i>
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
            <div class="container-fluid">
                <h1 class="mt-4">Add Personal Info</h1>

                <div class="row">
                    <div id="common_alert"></div>
                      <div class="col-sm-6">
                         <div class="alert alert-success">
                            <h2>Room/s Selected</h2>

                         </div>
                           <form id="new_booking" class="form-horizontal" action="#" accept-charset="UTF-8" method="#">
                               <div id="form_alert"></div>
                               <div class="panel panel-default">
                                   <div class="panel-heading">
                                   <h3 class="panel-title">Contact info</h3>
                               </div>
                                   <div class="panel-body contact-info">
                                       <div id="guest_select">
                                           <div class="form-group">
                                               <label class="control-label col-sm-4" for="booking_guest_email">E-mail</label>
                                               <div class="controls col-sm-8">
                                                   <input id="booking_guest_email" class="text_field form-control" title="E-mail" type="text" name="booking[guest_email]" />
                                               </div>
                                           </div>
                                           <div class="form-group">
                                               
                                               <label class="control-label col-sm-4" for="booking_guest_last_name">Last Name</label>
                                               <div class="controls col-sm-8">
                                                   <input id="booking_guest_last_name" class="text_field form-control" title="Last Name" type="text" name="booking[guest_last_name]" />
                                               </div>
                                           </div>
                                           <div class="form-group">
                                               
                                               <label class="control-label col-sm-4" for="booking_guest_first_name">first Name</label>
                                               <div class="controls col-sm-8">
                                                   <input id="booking_guest_first_name" class="text_field form-control" title="Last Name" type="text" name="booking[guest_first_name]" />
                                               </div>
                                           </div>
                                           <div class="form-group">
                                               
                                               <label class="control-label col-sm-4" for="booking_guest_phone_number">Phone Number</label>
                                               <div class="controls col-sm-8">
                                                   <input id="booking_guest_phone_number" class="text_field form-control" title="Phone Number" type="text" name="booking[guest_phone_number]" />
                                               </div>
                                           </div>
                                           <div class="form-group">
                                               <div class="controls col-sm-8 col-sm-offset-4">
                                                   <div class="form-check form-check-inline">
                                                       <input class="form-check-input" type="checkbox" id="inlineCheckbox" value="option">
                                                       <label class="form-check-label" for="inlineCheckbox">I accept terms & conditions</label>
                                                   </div>
                                               </div>

                                           </div>
                                       </div>
                                   </div>
                                   <div class="panel panel-default">
                                       <div class="panel-heading">
                                           <h3 class="panel-title">Select guarantee method</h3>
                                       </div>
                                       <div class="panel-body">
                                           <div class="form-group guarantee-methods">
                                               <div class="controls col-sm-8 col-sm-offset-4">
                                                   <label>
                                                       <input id="booking_pay_pal" class="guarantee-type" data-target="_top" title="Paypal" type="radio" value="pay_pal" name="booking[pay_service]" />PayPal
                                                   </label>
                                               </div>
                                               <div class="controls col-sm-8 col-sm-offset-4">
                                                   <label>
                                                       <input id="booking_online_bank" class="guarantee-type" data-target="_top" title="Pay by credit card or online banking" type="radio" value="online_bank" name="booking[pay_service]" />Pay by credit card or online banking
                                                   </label>
                                               </div>
                                               <div class="controls col-sm-8 col-sm-offset-4">
                                                   <label>
                                                       <input id="booking_credit_card" class="guarantee-type" data-target="_top" title="Credit card" type="radio" value="credit_card" name="booking[pay_service]" />Credit card
                                                   </label>
                                               </div>
                                               <div class="controls col-sm-8 col-sm-offset-4">
                                                   <label>
                                                       <input id="booking_bank" class="guarantee-type" data-target="_top" title="Bank transfer" type="radio" value="bank" name="booking[pay_service]" />Bank transfer
                                                   </label>
                                               </div>
                                           </div>
                                       </div>

                                   </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Finishing</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="booking_comments">Comment & Suggestions</label>
                                            <div class="controles col-sm-8">
                                                <textarea id="booking_comments" class="text_field form-control" rows="6" title="Comments & Suggestions" name="booking[comments]"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="controls col-sm-8 col-sm-offset-4">
                                                <div class="form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox" value="option">
                                                    <label class="form-check-label" for="inlineCheckbox">I agree with the hotel and guarantee policy</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="form-actions col-sm-8 col-sm-offset-4">
                                            <input class="btn btn-success" type="submit" name="commit" value="Add Room" data-dismiss="Processing..." />
                                        </div>
                                    </div>
                                </div>
                           </form>
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
