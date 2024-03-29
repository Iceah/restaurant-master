<!DOCTYPE html>
<html lang="fr">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Modification des informations</title>

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

        <!-- Page title -->
        <div class="row add-margin">
          <div class="col-md-12">
            <h3 style="color:white">Modifier les informations</h3>
          </div>
        </div>

        <!-- User registration form -->
        <div class="row pad-left">
          <div class="col-md-12">
            <div class="error-message"><?php if(isset($message)) echo $message; ?></div>

            <div><h4 style="color:yellow;"> <?php if(isset($restaurant)) echo "Voulez-vous modifier " . $restaurant->name . " ?"; ?> </h4></div>

              <form method="POST" action="" enctype="multipart/form-data">

                <table class="table  table-bordered">
                <tbody>
                  <tr>
                    <td>Nom du restaurant :</td>
                    <td><input type="text" name="name" class="form-control mform-field" required id="inputName" value="<?php if(isset($restaurant)) echo $restaurant->name; ?>"></td>
                  </tr>

                  <tr>
                   <td>Description</td>
                   <td>
                     <p>Description de vos offres</p>
                     <textarea class="mform-field" rows="10" cols="80" name="description" required> <?php if(isset($restaurant)) echo $restaurant->description; ?> </textarea>
                   </td>
                 </tr>
                  <tr>
                    <td>Restaurant address</td>
                    <td><input type="text" name="address" class="form-control mform-field" required id="inputName" value="<?php if(isset($restaurant)) echo $restaurant->address; ?>"></td>
                  </tr>

                  <tr>
                    <td>Numéro de téléphone</td>
                    <td><input type="text" name="phone" class="form-control mform-field" required id="inputName" value="<?php if(isset($restaurant)) echo $restaurant->phone; ?>"></td>
                  </tr>

                  <tr>
                    <td>Adresse mail</td>
                    <td><input type="text" name="email" class="form-control mform-field" required id="inputName" value="<?php if(isset($restaurant)) echo $restaurant->email; ?>"></td>
                  </tr>

                  <tr>
                    <td>Horaires d'ouverture</td>
                    <td><input type="text" name="opening_time" class="form-control mform-field" required id="inputName" value="<?php if(isset($restaurant)) echo $restaurant->opening_time; ?>"></td>
                  </tr>

                </tbody>
              </table>
              <button type="submit" class="btn btn-default button-position color-white">Mettre à jour les informations</button> </div>
              </form>
            </div>
          </div>

      </div>
	</div>

  	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<!-- Include all compiled plugins (below), or include individual files as needed -->
  	<script src="./bootstrap/js/bootstrap.min.js"></script>
  	<script src="./bootstrap/js/js.js"></script>

  </body>
  </html>
