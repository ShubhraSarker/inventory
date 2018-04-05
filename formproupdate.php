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
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="formproupdate.php">Update product</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> &nbsp; <a href="login.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
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
                                <a href="formproupdate.php">Update product</a>
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
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    
                                    <form role="form">
                                        

                                        <div class="form-group">
                                            <label>Item name</label>
                                            <input class="form-control" placeholder="" />
                                            <br>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>

                                        <label>Price</label>
                                        <div class="form-group input-group">

                                            <span class="input-group-addon"><i class="fa fa-eur"></i>
                                            </span>
                                            <input type="text" class="form-control" placeholder="">

                                        </div>

                                      
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        <br>

                                        <div class="form-group">
                                        	<br>
                                            <label>Quantity</label>
                                            <input class="form-control" placeholder="" />
                                        </div>

                                            <button type="submit" class="btn btn-primary">Save</button>
                                        

                                        <div class="form-group">
                                        <br>
                                            <label>Item tag</label>
                                            <input class="form-control" placeholder="" />
                                        </div>

                                        <button type="submit" class="btn btn-primary">Save</button>

                                        <div class="form-group">
                                        <br>
                                            <label>Type</label>
                                            <input class="form-control" placeholder="" />
                                        </div>

                                         
                                        <button type="submit" class="btn btn-primary">Save</button>

                                    </form>
                                  
                                    
                                 
    </div>
                               
                                    
                                   
                                    
                                    
               
                <!-- /. ROW  -->
                
                <!-- /. ROW  -->
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
