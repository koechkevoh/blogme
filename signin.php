<!DOCTYPE html>
<html>
<head>
	<title>Sign in</title>
	<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
</head>
<body>
	<!--navigation bar -->
	<nav class="navbar navbar-inverse fixed-top">
	  <div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span> 
	      </button>
	      <a class="navbar-brand" href="#">BlogMe</a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="#"><i class="fa fa-home"></i></a></li>
	        <li><a href="#">Posts</a></li>
	        <li><a href="#">Notification</a></li> 
	        <li><a href="#">About</a></li> 
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
	        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>

	<div class="container">
		<form class="form-horizontal" role="form" action="signup.php" method="post">
			<div class="form-group">
				<label>Email :</label>
				<input type="email" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label>Password :</label>
				<input type="password" class="form-control" name="password">
			</div>
			<button class="btn btn-default">Sign In</button>
		</form>
	</div>

</body>
</html>