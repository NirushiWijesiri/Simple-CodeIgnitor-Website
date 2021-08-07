<!DOCTYPE html>
<html>
    <head>
    <meta charset="uft-8">
    <title>Registration Form</title>

    <meta charset="uft-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="../js/main.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   
    <style>
        table,td{
            boder: 1px solid black;
            border-collapse: collapse;
        }
        td{
            padding:5px;
        }
        #t01 {  
                background-color: #fdaec9;
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
        <form name="userinput" method="post">
            <table id="t01" style="width:100%; ">
            <tr>
                <td>Enter Your Name</td>
                <td><input type="text" name="User_name"></td>
            </tr>
            <tr>
                <td>Enter Your Email</td>
                <td><input type="text" name="User_email"></td>
            </tr>
            <tr>
                <td>Enter Your Mobile</td>
                <td><input type="text" name="User_mobile"></td>
            </tr>
            <tr> 
                <td colspan="2" style="text-align:center;"><input type="submit" name="save" value="save data"></td>
            </tr>
            </table>
        </form>
    </body>
</html>
