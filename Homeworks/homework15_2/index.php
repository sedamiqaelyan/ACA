<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Bootstrap 101 Template</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
      <form action="text.txt">
        <div class="form-group">
          <label for="exampleInputEmail1">First Name</label>
          <input type="text" class="form-control" id="fname" placeholder="First Name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Last Name</label>
          <input type="text" class="form-control" id="lname" placeholder="Last Name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Username</label>
          <input type="text" class="form-control" id="uname" placeholder="Username">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
    <div class="col-sm-3"></div>
  </div>
</div>
<?php
  $myfile = fopen("text.txt", "w")  or die("Unable to open file!");
  $t1=isset($_Get["fname"]);
  fwrite($myfile,$t1);
  $t2=isset($_Get["lname"]);
  fwrite($myfile,$t2);
  $t3=isset($_Get["email"]);
  fwrite($myfile,$t3);
  $t4=isset($_Get["uname"]);
  fwrite($myfile,$t4);
  $t5= isset($_Get["password"]);
  fwrite($myfile,$t5);
  fclose($myfile);
?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>

