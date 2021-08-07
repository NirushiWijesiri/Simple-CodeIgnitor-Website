<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Get Registered</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
    <style>
	        body, html{
	            height: 100%;
	        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md">
	    <a class="navbar-brand" href="#">Logo</a>
	    <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
		    <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="main-navigation">
		    <ul class="navbar-nav">
			    <li class="nav-item">
				    <a class="nav-link" href="#">Home</a>
			    </li>
			    <li class="nav-item">
				    <a class="nav-link" href="#">About</a>
			    </li>
			    <li class="nav-item">
				    <a class="nav-link" href="#">Contact</a>
			    </li>
		    </ul>
	    </div>
    </nav>
    <form method="post">
        <h5>Name</h5>
        <input type = "text" name = "User_name" value = "<?php echo set_value('User_name');?>"/>
        <?php if(form_error('User_name'))
        {
            echo "<span style='color:red'>".form_error('User_name')."</span>";
        }
        ?>
        <h5>Email</h5>
        <input type = "email" name = "User_email" value = "<?php echo set_value('User_email');?>"/>
        <?php if(form_error('User_email'))
        {
            echo "<span style='color:red'>".form_error('User_email')."</span>";
        }
        ?>
        <div><input type = "submit" value = "submit" /></div>
    </form>
</body>
</html>