<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>Login con faces</title>
<link href="https://www.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet"> 
 </head>
  <body>
  <?php if ($_SESSION['FBID']): ?>      <!--  After user login  -->
<div class="container">
<div class="hero-unit">
  <h1>Holaaaaa <?php echo $_SESSION['FULLNAME']; ?></h1>
  <p>pruebaaaaaaaaaaaaaaaaaaaa</p>
  </div>
<div class="span4">
 <ul class="nav nav-list">
<li class="nav-header">Image</li>
	<li><img src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture"></li>
<li class="nav-header">Facebook ID</li>
<li><?php echo  $_SESSION['FBID']; ?></li>
<li class="nav-header">Facebook fullname</li>
<li><?php echo $_SESSION['FULLNAME']; ?></li>
<li class="nav-header">Facebook Email</li>
<li><?php echo $_SESSION['EMAIL']; ?></li>
<div><a href="logout.php">Logout</a></div>

<li class="nav-header">Primer nombre</li>
<li><?php echo $_SESSION['FFIRST_NAME']; ?></li>
<li class="nav-header">Apellido</li>
<li><?php echo $_SESSION['FLAST_NAME']; ?></li>


<li class="nav-header">Trabajo</li>
<li><?php echo  $_SESSION['FWORK']; ?></li>
<li class="nav-header">Website</li>
<li><?php echo $_SESSION['FWEBSITE']; ?></li>

<li class="nav-header">Fecha de nacimiento</li>
<li><?php echo $_SESSION['FBIRTHDAY']; ?></li>
<li class="nav-header">Ubicacion</li>
<li><?php echo $_SESSION['FLOCATION']; ?></li>

</ul></div></div>
    <?php else: ?>     <!-- Before login --> 
<div class="container">
<h1>Login with Facebook</h1>
           Not Connected
<div>
      <a href="<?php $this->load->view('fb/fbconfig'); ?>">Login with Facebook</a></div>
	 <div> <a href=""  title="Login with facebook">no voy a ningun lado</a>
	  </div>
      </div>
    <?php endif ?>
  </body>
</html>
