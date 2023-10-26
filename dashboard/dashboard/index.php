<!DOCTYPE html>
<html lang=en>

<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/ready.css">
</head>

<body>
	<div class="wrapper">
		<div class="main-header">
			<div class="logo-header">
				<a class="logo">Dashboard</a>				
			</div>
			<nav class="navbar navbar-header navbar-expand-lg">
				<div class="container-fluid">
				</div>
			</nav>
		</div>
<!-- side bar -->
		<div class="sidebar">
			<div class="sidebar-wrapper">
<!--Information utilisateur-->
				<div class="user">
					<div class="photo">
						<img src="./assets/img/miaous.jpg">
					</div>
					<div class="info">
						<a>
							<span>
							<!-- test affichage
							require('../config.php');
							if(isset($_SESSION['name'])){
    						$name = $_SESSION['name'];
    						echo $name;
							} else {
   							 echo "Veuillez vous connecter pour accéder à cette page.";
							}
								-->Admin
								<span class="user-level">Admin@ecole.com</span>
							</span>
<!-- Deconnection-->
							<button onclick="location.href='../logout.php'" type="button" class="btn btn-secondary">Déconnection</button>
						</a>
					</div>
				</div>

				<ul class="nav">
<!-- Lien page accueil-->
					<li class="nav-item">
						<a href="index.php">
							<i class="la la-dashboard"></i>
							<p>Accueil</p>
						</a>
					</li>
<!-- Lien page élève-->
					<li class="nav-item">
						<a href="le.php">
							<i class="la la-group"></i>
							<p>Liste élèves</p>
							<span class="badge badge-count">
<!-- Badge Nombre d'élève-->
								<?php function nbreleve()
								{	require('../config.php');
									$nombreeleve = 0;
									$query = $conn->prepare("SELECT COUNT(*) FROM personn WHERE fonction = 'eleve'");
									$query->execute();
									$nombreeleve = $query->fetchColumn();
									echo $nombreeleve;
								}
								nbreleve();
								?></span>						</a>
					</li>
<!-- Lien page prof-->
					<li class="nav-item">
						<a href="lp.php">
							<i class="la la-group"></i>
							<p>Liste professeurs</p>
<!-- Badge Nombre de prof-->
							<span class="badge badge-count">
								<?php function nbrprof()
								{	require('../config.php');
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
<!-- Corp de page-->
		<div class="main-panel">
			<div class="content">
				<div class="container-fluid" style="text-align: center;">
					<h4 class="page-title">Dashboard</h4>
					<div class="row">
						<div class="col-md-3">
							<div class="card card-stats">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center icon-warning">
												<i class="la la-pie-chart text-warning"></i>
											</div>
										</div>
<!-- Compte nombre élève CM1-->
										<div class="col-7 d-flex align-items-center">
											<div class="numbers">
												<p class="card-category">Elèves CM1</p>
												<h4 class="card-title">
													<?php
													function nbrcm1()
													{	require('../config.php');
														$nombreElevesCM1 = 0;
														$query = $conn->prepare("SELECT COUNT(*) FROM personn WHERE fonction = 'eleve'AND niveau = 'cm1'");
														$query->execute();
														$nombreElevesCM1 = $query->fetchColumn();
														echo $nombreElevesCM1;
													}
													nbrcm1();
													?>
												</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="card card-stats">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="la la-pie-chart text-warning"></i>
											</div>
										</div>
<!-- Compte nombre élève CM2-->
										<div class="col-7 d-flex align-items-center">
											<div class="numbers">
												<p class="card-category">Elèves CM2</p>
												<h4 class="card-title">
													<?php
													function nbrcm2()
													{	require('../config.php');
														$nombreElevesCM2 = 0;
														$query = $conn->prepare("SELECT COUNT(*) FROM personn WHERE fonction = 'eleve'AND niveau = 'cm2'");
														$query->execute();
														$nombreElevesCM2 = $query->fetchColumn();
														echo $nombreElevesCM2;
													}
													nbrcm2();
													?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<!-- Iframe lien vers agenda-->
						<iframe src="https://calendar.google.com/calendar/embed?src=neharadz%40gmail.com&ctz=Europe%2FParis" style="border: 0" width="500" height="500" frameborder="0" scrolling="no"></iframe>
</body>
</html>