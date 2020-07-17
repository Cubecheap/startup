<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Gwisely - Create a new account</title>
    <!--<link rel="stylesheet" href="form.css">-->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap" rel="stylesheet">

</head>
<style>
<?php include "form.css"; ?>
    
    </style>
<body bgcolor="white">
    
    <div class="row">
        <div class="col-sm-12">
            <div class="main-content">
                <div class="header">
                <h1><span style="color: #ff5757">O</span><span style="color: #ffde59">n</span><span style="color: #ff914d">e</span><span style="color: #ff5757">O</span><span style="color: #38b6ff">c</span><span style="color: #ffff">e</span><span style="color: #c9e265">a</span><span style="color:#ff66c4">n</span></h1>
                <h2 style="text-align: center;"><strong>Create a new account</strong></h2>
            <h3 style="text-align: center;">Join & boost your productivity with us</h3><hr>
                </div>
        
<div class="l-part">
        <form method="post" id="register" action="">
           
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
           
            <input type="text" name="first_name" class="form-control" placeholder="Enter your First Name" required>
</div><br>
            
<div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
           
            <input type="text" name="last_name" class="form-control" placeholder="Enter your Last Name" required>
</div><br>
 
<div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
           
            <input id="password" type="password" name="u_pass" class="form-control" placeholder="Enter a new password" required>
</div><br>

<div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
           
            <input id="email" type="email" name="u_email" class="form-control" placeholder="Enter your Email ID" required>
</div><br>

<div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
           
            <select class="form-control" name="u_country" required="required">
            <option disabled>Select your Country</option>
            <option>India</option>
    
    </select>
    </div><br>
    <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
           
            <select class="form-control input-md" name="u_gender" required="required">
            <option disabled>Select your Gender</option>
            <option>Male</option>
            <option>Female</option>
            <option>Others</option>
    </select>
    </div><br>

    <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
           
            <input type="date" name="u_birthday" class="form-control input-md" placeholder="Enter your Email ID" required>
</div><br>

<a style="text-decoration: none; float: right; color: white;" data-toggle="tooltip" title="signin" href="signin.php">Already have an account?</a><br><br>

 <center><button id="signup" class="btn btn-info btn-lg" name="sign_up">Sign up</button></center>
        <?php //include("insert_user.php"); ?>
        </form>
</div>
</div>
</div>
</div>

































</body>