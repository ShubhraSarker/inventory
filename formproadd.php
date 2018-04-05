  <?php
        if(isset($_POST['save'])){

        require('connection.php'); 

        mysqli_query($db,"INSERT into product values(
            '{$_POST['item_name']}',
            '{$_POST['price']}',
            '{$_POST['quantity']}',
            '{$_POST['item_tag']}',
            '{$_POST['type']}')
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
                <a class="navbar-brand" href="formproadd.php">Add product</a> 
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
                                    
                                    <form   action="formproadd.php" method="POST">
                                        

                                        <div class="form-group">
                                            <label>Item name</label>
                                            <input type="text" name="item_name" class="form-control"  />
                                        </div>

                                        <label>Price</label>
                                        <div class="form-group input-group">

                                            <span class="input-group-addon"><i class="fa fa-eur"></i>
                                            </span>
                                            <input type="text" name="price" class="form-control" >
                                        </div>

                                        <div class="form-group">
                                            <label>Quantity</label>
                                            <input type="text" name="quantity" class="form-control"  />
                                        </div>

                                        <div class="form-group">
                                            <label>Item tag</label>
                                            <input type="text" name="item_tag" class="form-control" />
                                        </div>

                                        <div class="form-group">
                                            <label>Type</label>
                                            <input type="text" name="type" class="form-control"   />
                                        </div>

                                         <input type="submit" value="save" name="save" class="btn btn-primary" />
 
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
 
    
   
</body>
</html>
