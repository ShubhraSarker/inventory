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
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Update warehouse</a> 
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
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Advanced Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>

                <?php
    
    require('connection.php'); 

    $view=mysqli_query($db,"SELECT * FROM warehouse ");

?>
  <table>
  <tr>
    <th>ITEM NAME</th>
    <th>ITEM TAG</th>
    <th>QUANTITY</th>
    <th>ROW</th>
    <th>COLUMN</th>
    <th>BLOCK NO.</th>

    </tr>

    <?php
        while($row=mysqli_fetch_array($view)){
          echo"
          <tr>  <form action=search3.php method=post >

          <td><input type=text name=item_name value='".$row['item_name']."'</td>

          <td><input type=text name=item_tag value='".$row['item_tag']."'</td>
          
          <td><input type=text name=quantity value='".$row['quantity']."'</td>
          
          <td><input type=text name=row1 value='".$row['row1']."'</td>

          <td><input type=text name=column1 value='".$row['column1']."'</td>

          <td><input type=text name=block_no value='".$row['block_no']."'</td>
          
          <td><input type=submit value=save  >
          </form></tr>";

        }
    ?>
   
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
                <!-- /. ROW  -->
           
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
   
    
   
</body>
</html>
