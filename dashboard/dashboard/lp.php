<!DOCTYPE html>
<html lang=en>

<head>
	<title>Liste professeur</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/ready.css">
	<!--Fonction  ouverture page inscription-->
	<script>
		function openinscription() {
			var url = './inscriptionprof.html';
			var windowFeatures = 'height=600px,width=350px,toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no';
			window.open(url, '_blank', windowFeatures);
		}
	</script>
</head>

<body>
	<div class="wrapper">
		<div class="main-header">
			<div class="logo-header">
				<a class="logo">
					Dashboard
				</a>
			</div>
			<!--navnar-->
			<nav class="navbar navbar-header navbar-expand-lg">
				<div class="container-fluid">
				</div>
				<form class="navbar-left navbar-form nav-search mr-md-3" method="post" action="../recherche.php">
					<div class="input-group">
						<input type="text" placeholder="Recherche" name="recherche" class="form-control">
						<div class="input-group-append">
							<span class="input-group-text">
								<i class="la la-search search-icon"></i>
							</span>
						</div>
					</div>
				</form>
			</nav>
		</div>
		<!--sidebar-->
		<div class="sidebar">
			<div class="sidebar-wrapper">
				<!--information user-->
				<div class="user">
					<div class="photo">
						<img src="./assets/img/miaous.jpg">
					</div>
					<div class="info">
						<a>
							<span>
								Admin
								<span class="user-level">Admin@ecole.com</span>
							</span>
							<!--déconnection-->
							<button onclick="location.href='../logout.php'" type="button" class="btn btn-secondary">Déconnection</button>
						</a>
					</div>
				</div>
				<ul class="nav">
					<!--lien accueil-->
					<li class="nav-item ">
						<a href="index.php">
							<i class="la la-dashboard"></i>
							<p>Accueil</p>
						</a>
					</li>
					<!--lien eleve-->
					<li class="nav-item">
						<a href="le.php">
							<i class="la la-group"></i>
							<p>Liste élèves</p>
							<span class="badge badge-count">
								<!--Fonction comptage pour badge eleve-->
								<?php function nbreleve()
								{
									require('../config.php');
									$nombreeleve = 0;
									$query = $conn->prepare("SELECT COUNT(*) FROM personn WHERE fonction = 'eleve'");
									$query->execute();
									$nombreeleve = $query->fetchColumn();
									echo $nombreeleve;
								}
								nbreleve();
								?>
							</span>
						</a>
					</li>
					<!--lien prof-->
					<li class="nav-item ">
						<a href="lp.php">
							<i class="la la-group"></i>
							<p>Liste professeurs</p>
							<span class="badge badge-count">
								<!--fonction comptage pour prof-->
								<?php function nbrprof()
								{
									require('../config.php');
									$nombreprof = 0;
									$query = $conn->prepare("SELECT COUNT(*) FROM personn WHERE fonction = 'prof'");
									$query->execute();
									$nombreprof = $query->fetchColumn();
									echo $nombreprof;
								}
								nbrprof();
								?>
							</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="main-panel">
			<div class="content">
				<div class="container-fluid" style="text-align: center;">
					<h4 class="page-title">Liste professeurs</h4>
				</div>
				<!--boutton pour formulaire-->
				<button onclick="openinscription()" type="button" class="btn btn-secondary">Ajouter un
					professeur</button>
			</div>
			<table class="table table-bordered table-bordered-bd-warning mt-4">
				<thead>
					<!-- forme du tableau-->
					<tr>
						<th scope="col">photo</th>
						<th scope="col">Nom</th>
						<th scope="col">Prénom</th>
						<th scope="col">Tel</th>
						<th scope="col">Adresse</th>
						<th scope="col">Email</th>
						<th scope="col">Niveau</th>
						<th scope="col">Edit</th>
					</tr>
				</thead>
				<tbody>
					<!--insertion donné formulaire dans tableau-->
					<tr>
						<?php
						require('../config.php');
						$query = $conn->prepare(" SELECT * FROM personn WHERE fonction = 'prof' ");
						$query->execute();
						while ($rows = $query->fetch(PDO::FETCH_ASSOC)) {
						?>
					<tr>
						<td><?php echo $rows['photo']; ?></td>
						<td><?php echo $rows['name']; ?></td>
						<td><?php echo $rows['firstname']; ?></td>
						<td><?php echo $rows['numero']; ?></td>
						<td><?php echo $rows['adresse']; ?></td>
						<td><?php echo $rows['email']; ?></td>
						<td><?php echo $rows['niveau']; ?></td>
						<td><button onclick="openinscription()" type="file" class="btn btn-secondary btn-sm">Edit</button></td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
							<!--Retrieve the updated data from the request
							$data = json_decode(file_get_contents("php://input"), true);
							Validate and sanitize the data
							$name = trim($data['name']);
							$firstname = trim($data['firstname']);
							$numero = trim($data['numero']);
							$email = trim($data['email']);
							$adresse = trim($data['adresse']);
							$niveau = trim($data['niveau']);
							$fonction = trim($data['fonction']);
							$mdp = trim($data['mdp']);
							$photo = trim($data['photo']);
							Update the database with the new information
							Your database update logic here
							Return a response to the client
							$response = array("status" => "success");
							echo json_encode($response);-->

		</div>
</body>

</html>