  <?php
        if(isset($_POST['save'])){

        require('connection.php'); 

        mysqli_query($db,"INSERT into warehouse values(
            '{$_POST['item_name']}',
            '{$_POST['item_tag']}',
            '{$_POST['quantity']}',
            '{$_POST['row1']}',
            '{$_POST['column1']}',
            '{$_POST['block_no']}')
            ");
mysqli_close($db);}
?>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
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
                <a class="navbar-brand" href="formwaradd.php">Add in warehouse</a> 
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
                                    
                                    <form action="formwaradd.php" method="POST">
                                        

                                        <div class="form-group">
                                            <label>ITEM NAME</label>
                                            <input type="text" name="item_name" class="form-control" placeholder="" />
                                        </div>

                                        <label>ITEM TAG</label>
                                        <div class="form-group">
                                           
                                            <input type="text" name="item_tag" class="form-control" placeholder="" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>QUANTITY</label>
                                            <input type="text" name="quantity" class="form-control" placeholder="" />
                                        </div>

                                        <div class="form-group">
                                            <label>ROW</label>
                                            <input type="text" name="row1" class="form-control" placeholder="" />
                                        </div>

                                        <div class="form-group">
                                            <label>COLUMN</label>
                                            <input type="text" name="column1" class="form-control" placeholder="" />
                                        </div>

                                         <div class="form-group">
                                            <label>BLOCK NO.</label>
                                            <input type="text" name="block_no" class="form-control" placeholder="" />
                                        </div>

                                        <input type="submit"  value="save" name='save' class="btn btn-primary" />
                                        
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
