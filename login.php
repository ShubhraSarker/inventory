







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
        background-color: #202020 ;
        
    }

    .h1{
        text-align:center;
        font-size: 100px;
    }



    .log{
        width: 400px;
        height: 300px;
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
    width: 300px;
    height: 35px;
    border=0;
    border-radius: 5px;
    -webkit-border-radius:5px;
    -o-border-radius:5px;
    -moz-border-radius:5px;
}

.log input[type="password"]{
    width: 300px;
    height: 35px;
    border=0;
    border-radius: 5px;
    -webkit-border-radius:5px;
    -o-border-radius:5px;
    -moz-border-radius:5px;
}

.log input[type="submit"]{
    width: 100px;
    height: 35;
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
<h2> Login </h2>

<form action="login.php" method="post">
<input type="text" name="email" placeholder ="Email"><br/><br/>
<input type="password" name="password1" placeholder="Password"><br/><br/>

<input type="submit" name="submit" value="Login" class="btn btn-primary">
</form>
                 or

<form action="signup.php" method="post">
<input type="submit" name="submit" value="Signup" class="btn btn-primary"></form>

</div>

 
</body>
</html>
<?php

/*$servername='localhost';
    $username='root';
    $password='';
    $db_name='sad';
    $db=new mysqli($servername,$username,$password,$db_name);
    //echo "conn"

/*if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty(trim($_POST["login"]))){
            $username_err = "Please enter a username.";
        }
        if(empty(trim($_POST["login"]))){

        }

        else{
            $sql=mysqli_query($db,"select * from admin where username={$_POST['login']} and password1={$_POST['password1']}");


        }
}*/

/*if(isset($_POST['submit']))
{
    if ($_POST['login'] == NULL or $_POST['password1'] == NULL) {
        echo "Please Enter UserName and Password....";
    }
    //elseif ($_POST['password1'] == NULL) {
      //  echo "string2";
    //}
   /* else{
        $sql=mysqli_query($db,"select * from admin where username={$_POST['login']} and password1={$_POST['password1']}");
        $result=mysqli_query($db,$sql);

        $row=mysqli_fetch_assoc($result);

        if ($result != NULL) {
            echo "string";
        }
    }
    
    /*if($result!=NULL)
    {
        header("location: login.php");
    }

    else{
        echo "Your userid or password is incorrct!";
    }
    
}*/
    require('connection.php'); 
    session_start();

if(isset($_POST['submit']))  
{  
    $user_pass=$_POST['password1'];  
    $user_email=$_POST['email'];    
  
    if($user_pass=='')  
    {  
        echo"<script>alert('Please enter the password')</script>";  
        exit();  
    }  
  
    if($user_email=='')  
    {  
        echo"<script>alert('Please enter the email')</script>";  
        exit();  
    }  
      $check_email_query="select * from admin";
      $run_query=mysqli_query($db,$check_email_query);

      while ($row=mysqli_fetch_array($run_query)) {
            $db_email = $row["email_id"];
            $db_password = $row["password1"];
            //$db_type = $row["type"];

            if ($user_email== $db_email AND $user_pass==$db_password) {
                session_start();
                $_SESSION["email"] = $db_email;
                //$_SESSION["type"] = $db_type;
                $_SESSION['login'] = "true";
               
                //if ($_SESSION["type"]=='user') {
                 header('Location:index.php');
                //}
                /*else
                {
                    //$_SESSION['login'] = "Yes";
                    
                    header('Location:admin_panel.php');
                }*/
            }
        }  
  } 

?>