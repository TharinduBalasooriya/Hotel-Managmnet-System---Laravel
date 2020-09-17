<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Sidebar - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/css/simple-sidebar.css" rel="stylesheet">
  
  <link rel="stylesheet" href="/css/order_mgmt.css"> 

  <!-- font awsome icons-->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--food list js-->

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

        <h1 style="text-align: center;margin-top: 20px;margin-bottom: 20px;">Order Details</h1>

        <!--FORM STARTS HERE-->
        <div class="bg-dark orderDetails" >

            <div class="row ">
              <div class="col-sm-4 orderFormSide">

              </div>
              <div class="col-sm-8 orderFormRSide ">
                <h3 class="orderDetailsH">Customer Details</h3>


                <div class="form-group">
                  
                  <h4 style="font-family: fantasy;">Customer Name   : <span style="font-family: Georgia, 'Times New Roman', Times, serif;font-size:25px;">{{$orderData->customerName}}</span> </h4>
                </div>
      
                <div class="form-group">
                  <h4 style="font-family: fantasy;">Customer Mobile   : <span style="font-family: Georgia, 'Times New Roman', Times, serif;font-size:25px;">{{$orderData->customerMobile}}</span> </h4>
                </div>
      
                
                <div class="form-group">
                  <h4 style="font-family: fantasy;">Customer Email   : <span style="font-family: Georgia, 'Times New Roman', Times, serif;font-size:25px;">{{$orderData->customerEmail}}</span> </h4>
                </div>
              
             
             
                <h3 class="orderDetailsH">Order Details</h3>
    
              <div class="form-group">
                <h4 style="font-family: fantasy;">Order Code  : <span style="font-family: Georgia, 'Times New Roman', Times, serif;font-size:25px;">{{$orderData->orderCode}}</span> </h4>
              </div>
              <div class="form-group">
                <h4 style="font-family: fantasy;">Order Date  : <span style="font-family: Georgia, 'Times New Roman', Times, serif;font-size:25px;">{{$orderData->created_at}}</span> </h4>
              </div>
              <div class="form-group">
                <h4 style="font-family: fantasy;">Order Type  : <span style="font-family: Georgia, 'Times New Roman', Times, serif;font-size:25px;">{{$orderData->orderType}}</span> </h4>
              </div>
              <div class="form-group">
                <h4 style="font-family: fantasy;">Order status  : <span style="font-family: Georgia, 'Times New Roman', Times, serif;font-size:25px;">{{$orderData->orderStatus}}</span> </h4>
              </div>

              <h3 class="orderDetailsH" >Food List</h3>
              <div class="form-group ">
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name" class="form-control">
    
                <ul id="myUL" class="foodList" style="list-style: none;">
                  @php
                    $x = 0;
                  @endphp

                  @foreach($itemList as $item)

                    <li>
                        <div class="d-flex justify-content-start">
                          <label for="{{$item->itemName}}" style="height: 25px;margin-right: 30px;"><h5>{{$item->ItemName}}</h5></label>
                          <input type="number" class="form-control "  name="{{$item->ItemName}}" value="{{$quan[$x++]}}" disabled>
                        </div>
                    </li>
                  @endforeach

                 
      
                  
                </ul> 
              </div>
                    <form action="/deleteOrder" method="post">
                            {{csrf_field()}}
                          <input type="number" value="{{$orderData->id}}" name="oid" hidden>
                          <button class="btn btn-danger" type="submit">Withdraw Order</button>
                    </form> 
                  
                  <button class="btn btn-warning">Update Details</button>
                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">Change Status</button>
                  <button class="btn btn-primary">Pay Now</button>
                  <!-- Modal -->
                          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Change Order Status</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <form action="/updateOrderStatus" method="post">
                                {{csrf_field()}}
                                <div class="modal-body bg-white text-dark">

                                        <input type="number" value="{{$orderData->id}}" name="oid" hidden>
                                      <input type="radio" id="PENDING" name="orderStatus" value="PENDING">
                                      <label for="PENDING">PENDING</label><br>
                                      <input type="radio" id="COMPLETED" name="orderStatus" value="COMPLETED">
                                      <label for="COMPLETED">COMPLETED</label><br>
                                      <input type="radio" id="PROCESSING" name="orderStatus" value="PROCESSING">
                                      <label for="PROCESSING">PROCESSING</label><br>

                                   
                                  
                                </div>
                                <div class="modal-footer bg-white">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                              </form>
                              </div>
                            </div>
                          </div>
                  

                  <!--  -->

                  
              </div>
                
            </div>
          
          </div>
        <!--FORM ENDS HERE-->
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });

    function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("label")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}


  </script>

</body>

</html>
