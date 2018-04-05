  <?php
        if(isset($_POST['save'])){

        require('connection.php'); 

        mysqli_query($db,"INSERT into admin values(
            '{$_POST['username']}',
            '{$_POST['email_id']}',
            '{$_POST['age']}',
            '{$_POST['gender']}',
            '{$_POST['phone_no']}',
            '{$_POST['password1']}')
            ");
mysqli_close($db);}
?>


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
<body>

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        
            <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> &nbsp; <a href="login.php" class="btn btn-danger square-btn-adjust">SIGN IN</a> </div>


            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>  
           <!-- /. NAV TOP  -->
          

                    
                                       
                  

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



<style type="text/css">
    body{
        background-size: cover;
        background-color: 86ACB7;
        background-image: url(bg.jpg);
    
    }

    .h1{
        text-align:center;
        font-size: 20px;
    }


    .log{
        width: 300px;
        height: 500px;
        background-color: #202020;
        margin: 0 auto;
        margin-top: 80px;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: 15px;
        padding-right: 15px;
        border-radius: 15px;
        -webkit-border-radius:15px;
        -o-border-radius:15px;
        -moz-border-radius:15px;
        color:black;
        font-weight: bolder;


    }

.log input[type="text"]{
    width: 200px;
    height: 35px;
    border=0;
    border-radius: 5px;
    -webkit-border-radius:5px;
    -o-border-radius:5px;
    -moz-border-radius:5px;
}

.log input[type="password"]{
    width: 200px;
    height: 35px;
    border=0;
    border-radius: 5px;
    -webkit-border-radius:5px;
    -o-border-radius:5px;
    -moz-border-radius:5px;
}

.log input[type="submit"]{
    width: 100px;
    height: 100;
    border:0;
    border-radius: 5px;
    -webkit-border-radius:5px;
    -o-border-radius:5px;
    -moz-border-radius:5px;
    background-color: #DB0630;
    font-weight: bolder;
}

.log h2{
    color: white;

}



 </style>



</head>
<body>

<div class="h1">
    <h1> Inventory management system</h1>
</div>



<div class="log">
<h2> Signup </h2>

<form action="signup.php" method="post">
<input type="text" name="username" placeholder ="Username"><br/><br/>
<input type="text" name="email_id" placeholder="Email"><br/><br/>
<input type="text" name="age" placeholder ="Age"><br/><br/>
<input type="text" name="gender" placeholder ="Gender"><br/><br/>
<input type="text" name="phone_no" placeholder="Phone No."><br/><br/>
<input type="password" name="password1" placeholder="Password"><br/><br/>


<input type="submit" name="save" value="save" class="btn btn-primary">


</form>

</div>


   
</body>
</html>
