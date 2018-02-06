<!DOCTYPE html>
<html lang="fr">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Dashboard Restaurant</title>

	<!-- Bootstrap -->
	<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

  <link href="./style.css" rel="stylesheet">

  </head>

  <body>

  	<div class="container">
  		<div class="row">

        <!-- right side coulumn -->
				<div class="col-md-3 remove-padding right-side-column">
  			<div class="first-header">
  				<h5 class="text-center color-white"></h5>
  			</div>

				<?php include_once 'primarynavigation.php' ?>


  			</div>

  			<div class="col-md-9 remove-padding">
  			<div class="first-header right-side-column">
  				<h4 class="add-margin-left"><strong class="color-white"></strong> <span style="color:red; font-size: 14px; float:right;"> <?php $today = date("j M, Y"); echo $today; ?></span></h4>
  			</div>

				<!-- banner section -->
        <div class="business-header">  </div>

				<div class="dashboard">
					<h4>Bienvenue sur le Dashboard du restaurant</h4>
				</div>

				<div class="row dashboard-counter">
                    <a href="user">
                        <div class="col-md-4 dashboard-one">
						<h4>Comptes enregistrés</h4>
						<p><?php if(isset($users)) echo count($users); ?></p>
                        </div>
                    </a>
                    <a href="menu">
                        <div class="col-md-4 dashboard-two">
                            <h4>Catégories</h4>
                            <p><?php if(isset($menu)) echo count($menu); ?></p>
                        </div>
                    </a>
                    <a href="menuitem">
                        <div class="col-md-4 dashboard-three">
                            <h4>Plats enregistrés</h4>
                            <p><?php if(isset($menuitem)) echo count($menuitem); ?></p>
                        </div>
                    </a>
				</div>


  			</div>
  		</div>

  	</div>

  	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<!-- Include all compiled plugins (below), or include individual files as needed -->
  	<script src="./bootstrap/js/bootstrap.min.js"></script>
  	<!-- <script src="./bootstrap/js/npm.js"></script> -->
  	<script src="./bootstrap/js/js.js"></script>

  </body>
  </html>
