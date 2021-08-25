<!DOCTYPE html>
	<html lang="fr">
		<head>
			<meta charset="utf-8"/>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link href='https://fonts.googleapis.com/css?family=Maitree' rel='stylesheet'>
			<link rel="stylesheet" href="css/style2.css" />
			<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
			<title>Espace Abonné</title>
		</head>

		<body>
			<header>
				<div class="button">
					<a href="logout.php">Déconnexion</a>
				</div>
			</header>

			<h2>Bienvenue dans votre espace abonné !</h2>


			<div id="img">
				<img src="image/utilisateur.png" alt="user image">
			</div>

			<form>
				<div class="row justify-content-center">
					<div class="col-sm-4 text-center">
						<div class="form-group">
		  					<label class="col-form-label mt-4" for="inputDefault">Plaque Immatriculation</label>
		 					<input type="text" class="form-control text-center" placeholder="AA-123-AA" id="inputDefault">
						</div>
						<div class="form-group">
		  					<label class="col-form-label mt-4" for="inputDefault">Couleur</label>
		 					<input type="text" class="form-control text-center" placeholder="Insérez la couleur" id="inputDefault">
						</div>
						<div class="form-group">
		  					<label class="col-form-label mt-4" for="inputDefault">Marque</label>
		 					<input type="text" class="form-control text-center" placeholder="Insérez la marque" id="inputDefault">
						</div>
						<div class="form-group">
		  					<label class="col-form-label mt-4" for="inputDefault">Modèle</label>
		 					<input type="text" class="form-control text-center" placeholder="Insérez le modèle" id="inputDefault">
						</div>

						<div class="d-grid gap-2">
							<button class="btn btn-lg btn-outline-primary" id="btn" type="button">Ajouter</button>
						</div>
					</div>
				</div>
			</form>

			<!-- <div id="bienvenue">
				<p>Salut <span> <?php echo $_GET['pseudo']; ?> </span></p>
				<p>N'oublies pas de te déconnecter :)</p>
			</div>
		</body> -->
	</html>