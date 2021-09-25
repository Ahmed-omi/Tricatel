<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tricatel</title>
  <script src="https://kit.fontawesome.com/c70a4c5665.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="csss/style.css">
</head>
<body>


	<?php require_once('backends/config.php'); ?>
  






<!--Tri starts here -->
				<div id="button_container">
				  <form class="form_index" method="POST">
				    <div>
				      <label for="type_plat">Type</label>
				      <select name="type_plat" id="type_plat">
				          <option value="">--Choisir un type de plat--</option>
				          <option value="entrée">Entrée</option>
				          <option value="plat">Plat</option>
				          <option value="dessert">Dessert</option>
									  <option value="petit-dejeuner">Petit-dejeuner</option>
				      </select>
				    </div>
				    <div>
				      <label for="continent_origine">Origine</label>
				      <select name="continent_origine" id="continent_origine">
				          <option value="">--Choisir un continent--</option>
				          <option value="Europe">Europe</option>
				          <option value="America">America</option>
				          <option value="Africa">Africa</option>
				          <option value="Asia">Asia</option>
				      </select>
				    </div>
				    <div>
				      <label for="regime_alimentaire">Régime</label>
				      <select name="regime_alimentaire" id="regime_alimentaire">
				          <option value="">--Choisir un régime--</option>
				          <option value="non-vegetarian">Non-vegetarian</option>
				          <option value="vegetarian">Vegetarian</option>
									 <option value="dessert">Dessert</option>
									 	 <option value="sans gluten">Sans Gluten</option>
				      </select>
				    </div>
				   <div>
				        <button type="submit" class="btn tri all" name ="search"><i class="fas fa-check fav-creer"></i>Trier</button>
				    </div>
				  </form>
				</div>
				<!--Tri Ends here-->


	</div>

</section>
