<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="dinal_eranda" content="">

    <title>dier</title>

    <!-- Bootstrap Core CSS -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Custom Theme CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">Dier</span> Artifiacial intelligence
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About Us</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#download">Tank Games</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <section class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">
                        <span class="dd animated bounceInDown">d</span>
                        <span class="di animated bounceInDown">i</span>
                        <span class="de animated bounceInDown">e</span>
                        <span class="dr animated bounceInDown">r</span>
                        </h1>
                        <p class="intro-text">Well come to the world of Artificial Intelligence. Let your intelligent agents meet ours!</p>
                        <div class="page-scroll">
                            <a href="#about" class="btn btn-circle">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About dier</h2>
                <p>dier is an AI development team of two, <a href="https://github.com/dinal24">Dinal Kurukulasooriya</a> and <a href="https://github.com/ecr666">Eranda Rajapakshe</a>. We are a team of undergraduates from University of Moratuwa who are passionate about immerging AI.</p>
                <p>This time we have developed quality AI for the autonomous multiplayer tank game. There will be many autonomous players seeking glory. Remember to Cheer up dier!</p>
            </div>
        </div>
    </section>

    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Tank Games</h2>
					<p></p>
                    <p>Dier tank will be released soon! If you feel confident challenge us! Lets meet up in the arena!</p>
					<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Challenge</button>
					<!-- Modal -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<form method="POST" name="contactform" action="contact-form-handler.php"> 
								  
									<div class="form-group">
										<label for="exampleInputname">Name</label>
										<input type="text" class="form-control" name="name" placeholder="Enter your Name">
									</div>
									<div class="form-group">
									<label for="exampleInputemail">Email</label>
									<label for='email'>Email Address:</label> <br>
									<input type="email" class="form-control" name="email" placeholder="Enter email"> 
									</div>
									<div class="form-group">
									<label for="exampleInputComments">Comments</label>
									<label for='message'>Message:</label> <br>
									<textarea name="message" class="form-control" placeholder="Comments..."></textarea>
									</div>
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								  <button type="submit" class="btn btn-primary">Submit</button>
																	  
								  
								</form>
							<!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
							<!--<button type="button" class="btn btn-primary">Save changes</button>-->
						  </div>
						</div>
					  </div>
					</div>
					
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact Dier</h2>
                <p>Feel free to email us to provide some feedback on our Website, give us suggestions for improvements, or to just say hello and challenge us!</p>
                <p>kasundinal@gmail.com</p>
                <p>erandacr@gmail.com</p>
                <ul class="list-inline banner-social-buttons">
                    <li><a href="https://twitter.com/dier_AI" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li><a href="https://github.com/dinal24/Dier" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li><a href="https://plus.google.com/114029505921724824869/about" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <div id="map"></div>

    <!-- Core JavaScript Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - You will need to use your own API key to use the map feature -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>
