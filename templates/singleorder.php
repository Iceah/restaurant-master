<!DOCTYPE html>
<html lang="fr">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Affichage d'une commande</title>

	<!-- Bootstrap -->
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

  <link href="../style.css" rel="stylesheet">

  </head>

  <body>

  	<div class="container">
  		<div class="row">

        <!-- right side coulumn -->
				<div class="col-md-3 remove-padding right-side-column">
  			<div class="first-header">
  				<h5 class="text-center color-white"></h5>
  			</div>

				<?php include_once 'secondarynavigation.php' ?>

  			</div>

  			<div class="col-md-9 remove-padding">
  			<div class="first-header right-side-column">
  				<h4 class="add-margin-left"><strong class="color-white"></strong> <span style="color:red; font-size: 14px; float:right;"> <?php $today = date("j M, Y"); echo $today; ?></span></h4>
  			</div>

        <!-- banner section -->
        <div class="business-header">  </div>

        <!-- Content of the webpage   -->
        <div class="main-content-box">

        <?php  if(isset($order)){
          $userinfo = $order->user;
        ?>
          <div class="row">
            <div class="col-md-6">
              <div class="order-by">
                <h4 class="color-yellow">Facture</h4><br/>
                <div><img src="../images/userprofile.png" alt="profile image"/></div>
                <h4 class="color-white"><?php if(isset($userinfo)){ echo $userinfo->username;} ?></h4>
                <p>Numéro de téléphone : <?php if(isset($userinfo)){ echo $userinfo->phone_number;} ?></p>
                <p>Email : <?php if(isset($userinfo)){ echo $userinfo->email;} ?></p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="order-by">
                <h4 class="color-yellow">Adresse de livraison</h4><br/>
                <p><?php if(isset($userinfo)){ echo $userinfo->address;} ?></p>
              </div>
            </div>
          </div>

          <div class="add-top-margin pad-left para-wrap">
            <h4 class="color-yellow">Commande ID</h4>
            <p><?php if(isset($order)){ echo "#" . $order->order_id;} ?></p>
            <br/>

            <h4 class="color-yellow">STATUS</h4>
            <p><?php if(isset($order)){ echo $order->status;}?></p>
            <br/>

            <h4 class="color-yellow">DATE</h4>
            <p> <?php if(isset($order)){ echo $order->order_date;}?></p>

          </div>


          <!-- Tabulation of the orders -->
          <div class="order-status pad-left para-wrap">

          <h3 class="color-yellow add-margin-top">Détails de la commande</h3>

          <table class="table  table-bordered">
            <thead>
              <tr style="background-color: #1674b3;">
                <th>Produits </th>
                <th>Quantité </th>
                <th>Options</th>
                <th>Notes</th>
                <th>Prix unité</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>

                <?php
                foreach($order->menuItem as $orders){ ?>
                  <tr>
                      <td><?php if(isset($orders)){ echo $orders->item_name;} ?></td>
                      <td><?php if(isset($orders)){ echo $orders->pivot->quantity;} ?> </td>
                      <td><?php if(isset($orders)){ echo $orders->pivot->options;} ?></td>
                      <td><?php if(isset($orders)){ echo $orders->pivot->notes;} ?></td>
                      <td><?php if(isset($orders)){ echo $orders->pivot->price . " €";} ?></td>
                      <td><?php if(isset($orders)){ echo $orders->pivot->subtotal . " €";} ?></td>
                   </tr>
              <?php }
                ?>
              <tr>
                <td colspan="6" style="text-align:right; padding-right:20px;"><strong>Total: </strong> <?php if(isset($order)){ echo $order->order_price . " €";} ?>  </td>
              </tr>
              <tr>
                <?php
                $total_amount = $order->order_price;
                $tax = (20 * $total_amount) / 100;
                $total_amount_with_tax = $total_amount + $tax;
                ?>
                <td colspan="6" style="text-align:right; padding-right:20px;"><strong>Taxe (20%): </strong> <?php if(isset($tax)) echo $tax . " €"; ?>  </td>
              </tr>
              <tr>
                <td colspan="6" style="text-align:right; padding-right:20px;"><strong>Total (taxe incluse): </strong><?php if(isset($total_amount_with_tax)) echo $total_amount_with_tax . " €"; ?> </td>
              </tr>

            </tbody>
          </table>

        </div>

    <?php }else{

        }
        ?>

    </div>

      </div>
  	</div>

  </div>

  	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<!-- Include all compiled plugins (below), or include individual files as needed -->
  	<script src="../bootstrap/js/bootstrap.min.js"></script>
  	<script src="../bootstrap/js/js.js"></script>

  </body>
  </html>
