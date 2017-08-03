
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
	session_start();
    
    $a=1;
	if (isset($_SESSION['name']))
	{
		//echo "YOU HAVE SUCCESSFULLY LOGGED IN HERE";
		//echo $_SESSION['name']; 
		//echo "<a href = 'logout.php'> LOGOUT </a>";
        echo "<li><a href='profil.php' '>".$_SESSION['name']."</a></li>";
        echo "<li><a data-toggle='modal' data-target='#LogoutModal'><button type='logout' class='btn btn-primary'>Log Out</button></a></li>";
	}
	else
	{
		//header("location:log.php");
        echo "<li><a data-toggle='modal' data-target='#loginModal'><button type='login' class='btn btn-primary'>Log in</button></a></li>";
        echo "<li><a data-toggle='modal' data-target='#signupModal'><button type='signup' class='btn btn-primary'>Sign Up</button></a></li>";
	}
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
    <div id="loginModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login </h4>
            </div>
            <div class="modal-body">
                <form class="form-inline" role="search" method="POST" action="log.php" >
                    <div class="form-group">
                        <label class="sr-only" for="email">Email address</label>
                        <input type="email" class="form-control" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <label class="sr-only">password</label>
                        <input type="password" class="form-control" id="password" placeholder="password" name="passwd" >
                    </div><br><br>             
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="approve" value="">Remember me
                        </label>
                    </div>
                    <br><br>
                    <div >
                        <button type="sign in" class="btn btn-info">Sign in</button>
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
    <div id="signupModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">SignUp</h4>
            </div>
            <div class="modal-body">
                <form class="form-inline" method="POST" action="signup.php" role="search">
                    <div class="form-group">
                        <label for="email">Name : </label>
                        <input type="text" class="form-control" name="name" placeholder="Full Name">
                    </div><br><br>
                    <div class="form-group">
                        <label  for="email">Email address : </label>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div><br><br>
                    <div class="form-group">
                        <label >Password : </label>
                        <input type="password" class="form-control" name="passwd" id="password" placeholder="password">
                    </div><br><br>
                    <div class="form-group">
                        <label >Confirm Password : </label>
                        <input type="password" class="form-control" name="repasswd" id="repassword" placeholder="Confirm password">
                    </div><br><br>
                    <div>
                        <label for="details_gender">Gender: </label>
                        <input type="radio" name="details_gender" value="Male">Male
                        <input type="radio" name="details_gender" value="Female">Female
                    </div><br>
                    <div>
                        <label for="details_DOB">Date of birth: </label>
                        <input type="date" name="details_DOB" class="form-control">
                    </div><br>
                    <div>
                        <label for="contact_tel">Mobile: </label>
                        <input type="tel" name="contact_tel" class="form-control"><br><br>
                        <label for="contact_address">Address: </label>
                        <textarea name="contact_address" class="form-control" rows="4" cols="30"></textarea><br><br>
                        <label for="details_country">Which country: </label>
                        <select name="details_country" class="form-control">
                            <option value="country_empty">Select country</option>
                            <option value="country_UK">United Kingdom</option>
                            <option value="country_US">United States</option>
                            <option value="country_China">China</option>
                            <option value="country_India">India</option>
                            <option value="country_Germany">Germany</option>
                        </select>
                    </div><br>
                    <div >
                        <button type="sign in" class="btn btn-info">Sign in</button>
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
                
            </div>
        </div>
        </div>
    </div>


    <header class="jumbotron">

        <!-- Main component for a primary marketing message or call to action -->

        <div class="container">
            



            <div class="row row-header">
                <div class="col-xs-12 col-sm-8">
                    <h1>Indian Railway Ticket Booking System</h1>
                    <p style="padding:40px;"></p>
                    <p>A Government of India Enterprise</p>
                </div>
                <div class="col-xs-12 col-sm-2">
                </div>
                <div class="col-xs-12 col-sm-2">
                    <p style="padding:20px;"></p>
                    <img src="img/Indian_Railway.svg.png" class="img-responsive">
                </div>
                

            </div>
        </div>
    </header>
    
    

    
    
    
    

    <div class="container">
          <div class="row row-content">
           <div class="col-xs-12">
            <div id="mycarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#mycarousel" data-slide-to="1"></li>
                    <li data-target="#mycarousel" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img class="img-responsive"
                         src="img/Indian_Rail.jpg" alt="Uthappizza">
                        <div class="carousel-caption">
                        <h2>Indian Railway</h2>
                        <p>India’s 65,000 kilometers of train tracks embroider the subcontinent, connecting thousands of cities. In 2010, Monisha Rajesh, a London-based journalist, set out to discover the railways, detailing her adventures in her new book, “Around India in 80 Trains.”</p>
                        <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-responsive"
                         src="img/Luxurytrain.jpg" alt="buffet">
                        <div class="carousel-caption">
                        <h2>Luxury Trains in India offering royal Rail Journeys</h2>
                         <p>The age-old, unrivaled Indian hospitality, luxury, opulence and royalty can now be experienced in a week-long train tour to India. Please welcome our guest, Nikhil Chandra from http://www.indianluxurytrains.com/, to describe the luxury of royal trains and tours in India.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="media-object img-thumbnail"
                         src="img/maharaja%20express.jpg" alt="Alberto Somayya">
                        <div class="carousel-caption">
                            <h2 class="media-heading">Maharajas Express</h2>
                        <h4></h4>
                         <p>No great traveler can say they have aspired to travel until they’ve explored this vast country via India’s legendary railway. Maharajas Express train, with its 5 itineraries offers the most luxurious mode to unravel the varied kaleidoscope of India. Plush interiors, gracious hospitality and an array of exclusive experiences in Rajasthan and Lucknow makes Maharaja train tour truly a journey like no other.</p>
                        </div>
                    </div>
                    
                </div>


                <!-- Controls -->
                <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
               
            </div>
          </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        <div class="row row-content">
            <div class="col-xs-12 col-sm-3 col-sm-push-9">
                <p style="padding:20px;"></p>
                <h3 align=center>Book Railway ticket at one click</h3>
            </div>
            <div class="col-xs-12 col-sm-9 col-sm-pull-3">
                <div class="media">
                    <div class="media-left media-middle">
                        <a href="#">
                        <img class="media-object img-thumbnail"
                         src="img/Indian_Rail.jpg" alt="Indian_Rail" height="300px" width="400">
                        </a>
                    </div>
                    <div class="media-body">
                        <h2 class="media-heading">Indian Railway</h2>
                        <p>India’s 65,000 kilometers of train tracks embroider the subcontinent, connecting thousands of cities. In 2010, Monisha Rajesh, a London-based journalist, set out to discover the railways, detailing her adventures in her new book, “Around India in 80 Trains.”</p>
                        <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
                    </div>
                </div>

            </div>
        </div>

        <div class="row row-content">
            <div class="col-xs-12 col-sm-3">
                <p style="padding:20px;"></p>
                <h3 align=center>Royal Rajasthan on Wheels</h3>
            </div>
            <div class="col-xs-12 col-sm-9">
                <div class="media">
                    <div class="media-body">
                    <h2>Royal Rajasthan on Wheels</h2>
                <p>Luxury train offering 8 days tours across regal destinations in Rajasthan, Royal Rajasthan on Wheels itinerary also include trip to heartland of Hindu spirituality Varanasi and the World Heritage Khajuraho Group of Monuments bringing out the best of romance and heritage of Northern India.</p>
                <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>    
                    </div>
                    <div class="media-right media-middle">
                        <a href="#">
                        <img class="media-object img-thumbnail"
                         src="img/Royal-Rajasthan-on-wheels.jpg" alt="buffet"  height="300px" width="400">
                        </a>
                    </div>
                </div>

            </div>
        </div>    

        <div  class="row row-content">
            <div class="col-xs-12 col-sm-3 col-sm-push-9">
                <p style="padding:20px;"></p>
                <h3 align=center></h3>
            </div>
            <div class="col-xs-12 col-sm-9 col-sm-pull-3">
                <div class="media">
                    <div class="media-left media-middle">
                        <a href="#">
                        <img class="media-object img-thumbnail"
                         src="img/Indian-Maharaja.jpg" alt="Alberto Somayya" height="300px" width="400">
                        </a>
                    </div>
                    <div class="media-body">
                        <h2 class="media-heading">The Indian Maharaja</h2>
                        <p>Award winning three-star Michelin chef with wide
                         International experience having worked closely with
                         whos-who in the culinary world, he specializes in
                          creating mouthwatering Indo-Italian fusion experiences.
                         </p>
                        <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-content">
            <div class="col-xs-12 col-sm-3">
                <p style="padding:20px;"></p>
                <h3 align=center>The Golden Chariot</h3>
            </div>
            <div class="col-xs-12 col-sm-9">
                <div class="media">
                    <div class="media-body">
                    <h2>The Golden Chariot</h2>
                <p>Offering two itineraries across destinations in South Indian states of Karnataka, Tamil Nadu and Kerala, this luxury train offers a heady mix of culture, heritage, backwaters and wildlife for which this region in India is renowned.</p>
                <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>    
                    </div>
                    <div class="media-right media-middle">
                        <a href="#">
                        <img class="media-object img-thumbnail"
                         src="img/goldenchariot1.jpg" alt="buffet"  height="300px" width="400">
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <div  class="row row-content">
            <div class="col-xs-12 col-sm-3 col-sm-push-9">
                <p style="padding:20px;"></p>
                <h3 align=center></h3>
            </div>
            <div class="col-xs-12 col-sm-9 col-sm-pull-3">
                <div class="media">
                    <div class="media-left media-middle">
                        <a href="#">
                        <img class="media-object img-thumbnail"
                         src="img/palace-on-wheels.jpg" alt="Alberto Somayya" height="300px" width="400">
                        </a>
                    </div>
                    <div class="media-body">
                        <h2 class="media-heading">Palace on Wheels</h2>
                        <p>Voted 4th Best luxury train in the world, Palace on Wheels happens to be the precursor of luxury rail tours in India. Perhaps the most authentic luxury train in India, Palace on Wheels transports the guests into a more gracious age of traveling. A journey into the “land of maharajas” Rajasthan is designed in a way that the journey itself becomes as fascinating and royal as the destinations. Traditional Indian hospitality, red carpet welcome and exclusive experiences set this rail journey apart from any other rail tour across the world.</p>
                        <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="footer">
        <div class="container">
            <div class="row row-footer">             
                <div class="col-xs-5 col-xs-offset-1 col-sm-2 col-sm-offset-1">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="aboutus.html">About</a></li>
                        <li><a href="ticket_booking.html">Ticket_Booking</a></li>
                        <li><a href="contactus.html">Contact</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-5">
                    <h5>Our Address</h5>
                    <address>Headquarters:-<br>New Delhi, India<br>
                      <i class="fa fa-phone"></i>: +852 1234 5678<br>
		              <i class="fa fa-fax"></i>: +852 8765 4321<br>
		              <i class="fa fa-envelope"></i>: <a href="http://www.indianrail.gov.in">www.indianrail.gov.in</a>
                      <i class="fa fa-envelope"></i>: <a href="http://indianrailways.gov.in"> indianrailways.gov.in</a>
		           </address>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="nav navbar-nav" style="padding: 40px 10px;">
                        <a class="btn btn-social-icon btn-google-plus" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-social-icon btn-youtube" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-xs-12">
                    <p style="padding:10px;"></p>
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
