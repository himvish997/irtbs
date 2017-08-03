<?php
	session_start();
	if (isset($_SESSION['name']))
	{
	}
	else
	{
        header ("location:plog.php");
	}
?>
<!DOCTYPE html>
<html >

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head 
         content must come *after* these tags -->

    <title>Railway Ticket</title>
    
            <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/mystyles.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap-social.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="img/Indian_Railway.svg.png" height=30 width=41></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
                        <li><a href="aboutus.html"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>About</a></li>
                        <li><a href="ticket_booking.php">Ticket_Booking</a></li>
                        <li><a href="contactus.html"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
<?php
        echo "<li><a href='profil.php' '>".$_SESSION['name']."</a></li>";
        echo "<li><a data-toggle='modal' data-target='#LogoutModal'><button type='logout' class='btn btn-primary'>Log Out</button></a></li>";
?>
                    </ul>



                </div>
                


                
            </div>
        </nav>
    <div id="LogoutModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">LogOut </h4>
            </div>
            <div class="modal-body">
                <form class="form-inline" role="search" method="POST" action="logout.php" >
                    <h3>Are sure want to logout ??</h3>
                    <div >
                        <button type="sign in" class="btn btn-info">Log Out</button>
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
    <div>
    <div class="container">
        <div class="row row-content">
            <div>
              <h3>Search your train</h3> 
            </div>
            
            <div>
                <br>
                <form role="form" method="POST" action="search.php" >
                    <div class="form-group">
                        <label for="date">Date : </label>
                        <input type="date" id="firstname" name="date" size="30"><br><br>
                        <label for="source" class="control-label">Source : </label>
                        <input type="text" size="30" name="source" placeholder="source"><br><br>
                        <label for="destination" class="control-label">Destination : </label>
                        <input type="text" size="30" name="destination" placeholder="destination"><br><br>
                        <button type="sign in" class="btn btn-primary" value="submit" >go</button>
                    </div>
                </form>


            </div>
            
            <div class="col-xs-12 col-sm-12">
                <p style="padding:100px;"></p>
            </div>
            <div class="col-xs-12 col-sm-12">
                <p style="padding:40px;"></p>
            </div>
       </div>

    </div>

    
    <footer id="footer">
        <div class="container">
            <div class="row row-footer">             
                <div class="col-xs-12">
                    <p align=center>Â© Copyright 2015 Indian Railway Ticket Booking System</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>   
    <script>
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
         });
    </script>
    
</body>

</html>
