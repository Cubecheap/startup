<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>OneOcean</title>
    <link rel="stylesheet" href="first page.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap" rel="stylesheet">
    
</head>
<style>
    <?php include "first page.css"; ?>
    
    </style>
<body bgcolor="black">
    
    <div class="container">
        <div class="col-sm-6">
            <img src="gwisely_logo_social media.png" class="logoimage" title="gwisely" width="80px" height="80px">
        </div>
        <div class="gwisely_brandname_social" title="gwisely">
            <p><span style="color: #ff5757">O</span><span style="color: #ffde59">n</span><span style="color: #ff914d">e</span><span style="color: #ff5757">O</span><span style="color: #38b6ff">c</span><span style="color: #ffff">e</span><span style="color: #c9e265">a</span><span style="color:#ff66c4">n</span>                                                   </p>
        </div>

        <h6><span style="color: #ffde59">your</span> <span style="color: #ff5757">productivity</span> <span style="color: #38b6ff">matters</span></h6>
        <form method="post" id="login" action="">
        <div class="box">
            <input type="Email" name="email" id="email" placeholder=" Email or phone number" required>
        </div>

        <div class="box">
            <input type="password" placeholder=" Password" required>
        </div>
        <button class="btn" name="login">Log in</button>
        </form>
        <p><a href="#" id="forgotpassword">Forgot password?</a></p>
        <hr>
        <form method="post" action="">

        Don't have an account? <button id="Signup" name="Signup">Sign up</button> </form>
    </div>
    <?php
if(isset($_POST['Signup'])){
    echo "<script>window.open('signup.php','_self')</script>";
}
?>


<nav class="footer_container">
    <ul>
        <li><a href="#">ABOUT US</a></li>
        <li><a href="#">HELP</a></li>
        <li><a href="#">PRIVACY</a></li>
        <li><a href="#">TERMS</a></li>
    </ul>
</nav>




























</body>

</html>