<!DOCTYPE html>
<html lang="fr">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Gestion des commandes</title>

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
        <!-- Tabulation of the orders -->
        <div class="order-status pad-left para-wrap">

        <h3 class="color-yellow add-margin-top">Liste des commandes</h3>

        <table class="table  table-bordered">
          <thead>
            <tr style="background-color: #1674b3;">
              <th>Status </th>
              <th>Date </th>
              <th>Numéro de commande</th>
              <th>Client</th>
              <th>Mode de paiement</th>
              <th>Total</th>
              <th>Voir la facture</th>
                <th>Edition</th>
            </tr>
          </thead>
          <tbody>
            <?php
             if(isset($order)){
               foreach($order as $singleOrder){
                 ?>
                 <tr>
                   <td><?php echo $singleOrder->status; ?> </td>
                   <td><?php echo $singleOrder->order_date; ?> </td>
                   <td><?php echo $singleOrder->order_id; ?></td>

                   <td><?php if(isset($singleOrder->user->username)) echo $singleOrder->user->username; ?></td>
                   <td><?php echo $singleOrder->payment_method; ?></td>
                   <td><?php echo "$" . $singleOrder->order_price; ?></td>
                   <td><a class="color-yellow" href="singleorder/<?php echo $singleOrder->order_id ?>">Facture</a></td>
                     <td>
                         <a href="editorder/<?php if(isset($singleOrder->order_id)) echo $singleOrder->order_id ?>"><span class="glyphicon glyphicon-edit color-white" aria-hidden="true"></span></a>
                         <a href="deleteorder/<?php if(isset($singleOrder->order_id)) echo $singleOrder->order_id ?>"><span class="glyphicon glyphicon-trash color-red mDelete" aria-hidden="true"></span></a></td>

                 </tr>


          <?php   }

        }else{
          echo '<h3 class="color-yellow">Vous n\'avez pas encore reçu de commandes</h3>';
        }

            ?>

          </tbody>
        </table>

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
