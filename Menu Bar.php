<?php 
session_start();
$eid=$_SESSION['create_account_logged_in'];
error_reporting(0);
?>
<!--Menu Bar Close Here-->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <img src="logo/logo1.png"/width="100px"height="90px"style="margin-top:1px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php"title="Home">Home</a></li>
        <li><a href="about.php"title="About">About </a></li>
		    <li><a href="image gallery.php"title="Gallery">Gallery </a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
      

        <?php 
      if($_SESSION['create_account_logged_in']!="")
      {
        ?>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">View Status <span class="caret"></span></a>
        	<ul class="dropdown-menu">
          		<li><a href="profile.php">Profile</a></li>
              <li><a href="order.php">Booking Status</a></li>
              <li><a href="logout.php">Logout</a></li>
        	</ul>
        </li>
        <?PHP } else
		{
		?>
		<li><a href="Login.php"title="login"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;User Login</a>
        </li>
		<?php 
		} ?>
      </ul>
    </div>
  </div>
</nav>   

<!--Menu Bar Close Here-->
