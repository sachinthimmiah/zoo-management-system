<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

 
      
            <div class="main-content-inner">
                <div class="row">
        
                    <div class="col-lg-12 col-ml-12">
                        <div class="row">
                            <!-- basic form start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body" id="exampl">
                                      <h4 class="header-title" style="color: blue">Ticket ID:  </h4>
                                        <h5 class="header-title" style="color: blue">Visiting Date:  </h5>
                                          <h5 class="header-title" style="color: blue">Visitor Name:  </h5>


                                        <table border="1" class="table table-striped table-bordered first" width="100%">
                              <tr>
                                                <th>#</th>
                                                <th>No of Tickets</th>
                                                <th>Price per unit</th>
                                                <th>Total</th>
                                            </tr>
                                <tr>
                                    <th >Number of Adult </th>
                                    <td style="padding-left: 10px"> </td>
                                     <td style="padding-left: 10px"></td>
                                     <td style="padding-left: 10px"></td>
                                </tr>
                                <tr>
                                    <th>Number of Chlidren </th>
                                    <td style="padding-left: 10px"> </td>
                                    <td style="padding-left: 10px"> </td>
                                     <td style="padding-left: 10px"> </td>
                                </tr>
     
                                 <tr>
                                    <th style="text-align: center;color: red;font-size: 20px" colspan="3">Total Ticket Price</th>
                                    <td style="padding-left: 10px;"> 
                                </tr>
                                </table>
                                    </div>
                                    
                                     <p style="margin-top:1%"  align="center">
  <i class="fa fa-print fa-2x" style="cursor: pointer;"  OnClick="CallPrint(this.value)" ></i>
</p>
                                </div>
                            </div>
                           
                         
                            
                        </div>
                    </div>
                </div>
            
</div>
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
 
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>

     <script>
function CallPrint(strid) {
var prtContent = document.getElementById("exampl");
var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
WinPrint.document.write(prtContent.innerHTML);
WinPrint.document.close();
WinPrint.focus();
WinPrint.print();
}

</script>
</body>
</html>