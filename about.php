<html>
<head>
  <link rel="apple-touch-icon" sizes="180x180" href="Resource/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="Resource/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="Resource/favicon/favicon-16x16.png">
  <link rel="manifest" href="Resource/favicon/site.webmanifest">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet"  href="css/about_style.css">

	<title> About </title>

</head>

<body style="background: black;">
<div class="navigation-bar">
 <img src="Resource/land.png" alt="logo">
  <?php
    session_start();
    if(isset($_SESSION["userID"]) && $_SESSION["uc"]=="1")
    {
      echo "<a href='logout.php'>Logout</a>
      <a href='pdashboard.php'>Profile </a>
      <a href='index.php'> Home</a>";
    }
    elseif (isset($_SESSION["userID"]) && $_SESSION["uc"]=="2") {
      echo "<a href='logout.php'>Logout</a>
      <a href='ddashboard.php'>Profile </a>
      <a href='index.php'> Home</a>";
    }
    elseif (isset($_SESSION["userID"]) && $_SESSION["uc"]=="3") {
      echo "<a href='logout.php'>Logout</a>
      <a href='sdashboard.php'>Profile </a>
      <a href='index.php'> Home</a>";
    }
    else {
      echo " <div class='dropdown'>
    <button class='dropbtn'> Login <i class='fa fa-caret-down'></i>
    </button>
    <div class='dropdown-content'>
      <a href='patient.login.php'>Patient Login</a>
      <a href='doctor.login.php'>Doctor Login</a>
      <a href='staff.login.php'>Staff Login</a>
    </div>
  </div>
  <a href='about.php'>About </a>
  <a href='index.php'> Home</a>";
    }
   ?>
</div>

<div class="wrapper">
  <div class="container">
<p> With the help of Patient Record Management System you can keep track of Patient's Records with Minimum effort</p>
<p>Doctors can view patient history within a click</p>
<p>We have used HTML and CSS for Front-End</p>
<p>We used PHP to connect to Back-End</p>
<p>At Back-end, we used MySQL as a Database</p>
  </div>
</div>



</body>
</html>
