<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
}

/* Style the top navigation bar */
.topnav { 
  overflow: hidden;
  background-color: DodgerBlue;
}

/* Style the topnav links */
.topnav a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create three unequal columns that floats next to each other */
.column {
  float: left;
  padding: 60px;
}

/* Left and right column */
.column.side {
  width: 75%;
}

/* Middle column */
.column.middle {
  width: 90%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column.side, .column.middle {
    width: 100%;
  }
}

/* Style the footer */
.footer {
  background-color: #f1f1f1;
  padding: 5px;
  text-align: center;
}
</style>
</head>
<body>

<div class="header">
  <h1>INSTRUCTORY</h1>
  <p></p>
</div>

<div class="topnav">
  <a href="store.php">Regestration</a>
  <a href="login1.php">Login</a>
  <a href="logo.php">Home</a>
</div>

<div class="row">
  <div class="middle side">
  
    <!DOCTYPE html>
<html>
<head>

</head>
<body>

<h2>Login Form</h2>

<form action="/action_page.php" method="post">
  

    <label for="uname"><b>Username</b></label>
    <input type="text" name="uname" required>
     <br><br>
    <label for="psw"><b>Password</b></label>
    <input type="password"  name="psw" required>
    <br><br>     
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <br><br>
    <button type="submit">submit</button>
    
  </div>
>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>    
   
</div>
  
<br><br>

<div class="footer">
  <p>copyright@2018</p>
</div>
  
</body>
</html>
