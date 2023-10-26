<!DOCTYPE html>
<html lang=en>

<head>
	<title>Liste élève</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/ready.css">	
<!--Fonction pour ouvrir page inscription-->
	<script>
			function openinscription() {
				var url = './inscriptioneleve.php';
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
<!-- nav bar-->
			<nav class="navbar navbar-header navbar-expand-lg">
				<div class="container-fluid">
				</div>
				<form class="navbar-left navbar-form nav-search mr-md-3" method="post" action="../recherche.php">
					<div class="input-group">
						<input type="text" placeholder="Recherche"  name="recherche" class="form-control">
						<div class="input-group-append">
							<span class="input-group-text">
								<i class="la la-search search-icon"></i>								
							</span>
						</div>
					</div>
				</form>
			</nav>
		</div>
<!--side bar-->
		<div class="sidebar">
			<div class="sidebar-wrapper">
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
<!--deconnection-->
							<button onclick="location.href='../logout.php'" type="button" class="btn btn-secondary">Déconnection</button>
						</a>
					</div>
				</div>
				<ul class="nav">
<!-- Lien liste accueil--> 
					<li class="nav-item">
						<a href="index.php">
							<i class="la la-dashboard"></i>
							<p>Accueil</p>
						</a>
					</li>
<!-- Lien liste élève et fonction pour compter dans le badge--> 
					<li class="nav-item">
						<a href="le.php">
							<i class="la la-group"></i>
							<p>Liste élèves</p>
							<span class="badge badge-count">
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
<!-- Lien liste prof et fonction pour compter dans le badge--> 
					<li class="nav-item">
						<a href="lp.php">
							<i class="la la-group"></i>
							<p>Liste professeurs</p>
							<span class="badge badge-count">
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
					<h4 class="page-title">Liste élèves</h4>
				</div>
<!--Appel de la fonction pour ouvrir L'inscription élève-->
				<button onclick="openinscription()" type="file" class="btn btn-secondary">Ajouter un élève</button>
			</div>
			<table class="table table-bordered table-bordered-bd-warning mt-4">
				<thead>
<!--Structure tableau-->
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
					<tr>
<!-- Recherche élève dans DB -->
						 <?php 
						 require('../config.php');
						 $query = $conn ->prepare(" SELECT * FROM personn WHERE fonction = 'eleve' "); 	
						 $query-> execute()	;				  
						 while($rows=$query->fetch(PDO::FETCH_ASSOC))
						 {
					 ?>
<!-- Envoie des données rechercher dans le tableau-->
					 <tr>
						 <td><?php echo $rows['photo'];?></td>
						 <td><?php echo $rows['name'];?></td>
						 <td><?php echo $rows['firstname'];?></td>
						 <td><?php echo $rows['numero'];?></td>
						 <td><?php echo $rows['adresse'];?></td>
						 <td><?php echo $rows['email'];?></td>
						 <td><?php echo $rows['niveau'];?></td>
						 <td><button onclick="openinscription()" type="file" class="btn btn-secondary btn-sm">Edit</button></td>						
					 </tr>
					 <?php } ?>
					</tr>
				</tbody>
			</table>
		</div>
	
</body>
</html>