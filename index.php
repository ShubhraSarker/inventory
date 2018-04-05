<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body background-image="back.jpg">

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Home</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;

font-size: 20px;">  &nbsp; <a href="login.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
<div style="color: white;
padding: 15px 50px 5px 50px;
float: right;

font-size: 20px;">  &nbsp; <a href="login.php" class="btn btn-danger square-btn-adjust">Login</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                    </li>
                
                     <li>
                        <a class="active-menu"  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Home</a>
                    </li>
                    
                   
                           <li  >
                        <a   href="chart.php"><i class="fa fa-bar-chart-o fa-3x"></i> Report</a>
                    </li>   
        
                            
                         <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Product<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            
                           <li  >
                                <a  href="tablepro.php"><i class="fa fa-table fa-3x"></i>Show product list</a>
                            </li>

                            <li>
                                <a href="search.php">Update product</a>
                            </li>
                            

                            <li>
                                <a href="formproadd.php">Add item in Product list</a>
                            </li>
                        </ul>
                      </li>

                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Warehouse<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            
                             <li >
                                <a  href="tablewar.php"><i class="fa fa-table fa-3x"></i>Show warehouse product list</a>
                            </li>

                            <li>
                                <a href="search2.php">Update warehouse</a>
                            </li>

        
                            <li>
                                <a href="formwaradd.php">Add item in warehouse</a>
                            </li>

                        </ul>
                      </li>   
                </ul>
               
            </div>
            
        </nav> 
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">

                    </div>
                </div>              
                
                
                       
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

     <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Warehouse Products
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <form action="deletewar.php" method="POST">
                                                    <input type="text" name="touple">

                                        <input type="submit" value="Search" name="Search" >
                                        </form>




 <?php

                                        require('connection.php'); 
                                        $view=mysqli_query($db,'SELECT * FROM warehouse');


                                        echo "
                                        <tr>
                                            <th>ITEM NAME</th>
                                            <th>ITEM TAG</th>
                                            <th>QUANTITY</th>
                                            <th>ROW</th>
                                            <th>COLUMN</th>
                                            <th>BLOCK NO.</th>

                                        </tr>
                                        ";


                                        $result=mysqli_fetch_assoc($view);
                                        while($result!=NULL){
                                           echo "
                                                <tr>
                                                    <th>".$result['item_name'] ."</th>
                                                    <th>".$result['item_tag'] ."</th>
                                                    <th>".$result['quantity']  ."</th> 
                                                    <th>".$result['row1']  ."</th>
                                                    <th>".$result['column1']  ."</th>
                                                    <th>".$result['block_no']  ."</th>

                                                </tr>";

                                                    $result=mysqli_fetch_assoc($view);
            
                                                    }

                                                    mysqli_close($db);
                                                    ?>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Product Lists
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <form action="deletepro.php" method="POST">
                                                    <input type="text" name="touple">

                                <input type="submit" value="Search" name="Search" >
                                </form>
                            
                                        <form action="deletepro.php" method="POST">
                                                    <input type="text" name="touple">
                                        <input type="submit" value="Delete" name="delete"  >
                                        </form>

 <?php

                                        require('connection.php'); 

                                        
                                        $view=mysqli_query($db,'SELECT * FROM product');
                                        echo "
                                        <tr>
                                            <th>ITEM NAME</th>
                                            <th>PRICE</th>
                                            <th>QUANTITY</th>
                                            <th>ITEM TAG</th>
                                            <th>TYPE</th>
                                        

                                        </tr>
                                        ";


                                        $result=mysqli_fetch_assoc($view);
                                        while($result!=NULL){
                                           echo "
                                                <tr>
                                                    <th>".$result['item_name'] ."</th>
                                                    <th>".$result['price'] ."</th>
                                                    <th>".$result['quantity']  ."</th> 
                                                    <th>".$result['item_tag']  ."</th>
                                                    <th>".$result['type']  ."</th>
                                                   

                                                </tr>";

                                                    $result=mysqli_fetch_assoc($view);
            
                                                    }


                                                    mysqli_close($db);
                                                    ?>




                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
    
   
</body>
</html>
