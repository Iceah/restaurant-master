<!DOCTYPE html>
<html lang="fr">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Ajout de produit</title>

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
            <h3 style="color:white">Ajouter un produit</h3>
          </div>
        </div>

        <!-- User registration form -->
        <div class="row pad-left">
          <div class="col-md-12">
            <div class="error-message"><?php if(isset($message)) echo $message; ?></div>
              <form method="POST" action="addmenuitem" enctype="multipart/form-data">

              <table class="table  table-bordered">
              <tbody>
                <tr>
                  <td>Nom :</td>
                  <td><input type="text" name="item_name" class="form-control mform-field" required id="inputName" placeholder="Nom du produit"></td>
                </tr>
                <tr>
                  <td>Choisir une image réprésentative :</td>
                  <td><input type="file" class="form-control mform-field" name="fileToUpload" id="fileToUpload"></td>
                </tr>

                <tr>
                  <td>Description :</td>
                  <td><input type="text" name="description" class="form-control mform-field" required id="inputName" placeholder="Description"></td>
                </tr>

                <tr>
                  <td>Prix :</td>
                  <td><input type="number" name="item_price" class="form-control mform-field" required id="inputName" placeholder="Prix" step="0.01"></td>
                </tr>

                <tr>
                  <td>Qantité en stock :</td>
                  <td><input type="number" name="item_quantity" class="form-control mform-field" required id="inputName" placeholder="Quantité"></td>
                </tr>

                <tr>
                  <td>Bon plan :</td>
                  <td><input type="number" name="hot_deal" class="form-control mform-field" required id="inputName" placeholder="1 pour produit en promo, 0 sinon"></td>
                </tr>

                <tr>
                  <td>Catégorie</td>
                  <td>
                    <p>Choisir la catégorie parente</p>
                    <select name="menu_id" class="mform-field" style="color:black; width:100%; padding:12px;">
                      <?php
                      if(isset($menu)){
                          foreach($menu as $recipe){ ?>
                            <option value="<?php if(isset($recipe->menu_id)) echo $recipe->menu_id; ?>"> <?php if(isset($recipe->menu_name)) echo $recipe->menu_name; ?> </option>
                      <?php }  }
                      ?>
                     </select>
                  </td>
                </tr>

              </tbody>
            </table>
              <button type="submit" class="btn btn-default button-position color-white">Ajouter</button> </div>
              </form>
            </div>
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
