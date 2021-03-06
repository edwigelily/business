<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>ECOLE 241 BUSINESS</title>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--===============================================================================================-->
		<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
		<!--===============================================================================================-->
		<link
			rel="stylesheet"
			type="text/css"
			href="vendor/bootstrap/css/bootstrap.min.css"
		/>
		<!--===============================================================================================-->
		<link
			rel="stylesheet"
			type="text/css"
			href="fonts/font-awesome-4.7.0/css/font-awesome.min.css"
		/>
		<!--===============================================================================================-->
		<link
			rel="stylesheet"
			type="text/css"
			href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css"
		/>
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css" />
		<!--===============================================================================================-->
		<link
			rel="stylesheet"
			type="text/css"
			href="vendor/css-hamburgers/hamburgers.min.css"
		/>
		<!--===============================================================================================-->
		<link
			rel="stylesheet"
			type="text/css"
			href="vendor/animsition/css/animsition.min.css"
		/>
		<!--===============================================================================================-->
		<link
			rel="stylesheet"
			type="text/css"
			href="vendor/select2/select2.min.css"
		/>
		<!--===============================================================================================-->
		<link
			rel="stylesheet"
			type="text/css"
			href="vendor/daterangepicker/daterangepicker.css"
		/>
		<!--===============================================================================================-->
		<!-- <link rel="stylesheet" type="text/css" href="css/util.css" />-->
		<link
			rel="stylesheet"
			type="text/css"
			href="<?= theme_url() ?>assets/css/main.css"
		/>
		<!--===============================================================================================-->
	</head>
	<body>
		<!--================= The container =======================-->
		<div class="container-contact100">
			<div class="wrap-contact100">
				<!--================= Start form =======================-->
				<form class="contact100-form validate-form">
					<span class="contact100-form-title">
						<img src="<?= theme_url() ?>assets/images/Ebusiness.png" alt="" />
					</span>
					<!--**** Start of the title ****-->
					<span class="contact100-form-title">
						Formulaire d'enregistrement du commercial
					</span>
					<!--**** End of the title ****-->
					<!--**** Start of the ALL input ****-->
					<div
						class="wrap-input100 validate-input"
						data-validate="Name is required"
					>
						<input
							id="nom"
							class="input100"
							type="text"
							name="nom"
							placeholder="Nom"
						/>
						<span class="focus-input100"></span>
					</div>
					<div
						class="wrap-input100 validate-input"
						data-validate="Name is required"
					>
						<input
							id="prenom"
							class="input100"
							type="text"
							name="prenom"
							placeholder="Prénom"
						/>
						<span class="focus-input100"></span>
					</div>
					<div
						class="wrap-input100 validate-input"
						data-validate="Name is required"
					>
						<input
							id="sexe"
							class="input100"
							type="text"
							name="sexe"
							placeholder="Sexe Ex. H ou F"
						/>
						<span class="focus-input100"></span>
					</div>

					<div
						class="wrap-input100 validate-input"
						data-validate="Name is required"
					>
						<input
							id="date"
							class="input100"
							type="text"
							name="date"
							placeholder="Date de naissance"
						/>
						<span class="focus-input100"></span>
					</div>

					<div
						class="wrap-input100 validate-input"
						data-validate="Valid email is required: ex@abc.xyz"
					>
						<input
							id="email"
							class="input100"
							type="text"
							name="email"
							placeholder="Address mail"
						/>
						<span class="focus-input100"></span>
					</div>

					<div
						class="wrap-input100 validate-input"
						data-validate="Name is required"
					>
						<input
							id="telephone"
							class="input100"
							type="text"
							name="telephone"
							placeholder="Numéro de téléphone"
						/>
						<span class="focus-input100"></span>
					</div>

					<div
						class="wrap-input100 validate-input"
						data-validate="Name is required"
					>
						<input
							id="numero-whatsapp"
							class="input100"
							type="text"
							name="numero-whatsapp"
							placeholder="Numéro de téléphone Whatsapp"
						/>
						<span class="focus-input100"></span>
					</div>

					<div
						class="wrap-input100 validate-input"
						data-validate="Name is required"
					>
						<input
							id="nom-utilisateur"
							class="input100"
							type="text"
							name="nom-utilisateur"
							placeholder="Nom utilisateur"
						/>
						<span class="focus-input100"></span>
					</div>

					<div
						class="wrap-input100 validate-input"
						data-validate="Name is required"
					>
						<input
							id="mot-passe"
							class="input100"
							type="password"
							name="mot-passe"
							placeholder="Mot de passe"
						/>
						<span class="focus-input100"></span>
					</div>

					<div
						class="wrap-input100 validate-input"
						data-validate="Name is required"
					>
						<input
							id="confirme-mot-passe"
							class="input100"
							type="password"
							name="service"
							placeholder="Confirmer le mot de passe"
						/>
						<span class="focus-input100"></span>
					</div>

					<div class="container-contact100-form-btn">
						<button class="contact100-form-btn">S’inscrire</button>
					</div>
				</form>

				<div
					class="contact100-more flex-col-c-m"
					style="
						background-image: url('<?= theme_url() ?>assets/images/Elect\ Moira\ Levy.png');
					"
				></div>
			</div>
		</div>

		<!--===============================================================================================-->
		<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
		<!--===============================================================================================-->
		<script src="vendor/animsition/js/animsition.min.js"></script>
		<!--===============================================================================================-->
		<script src="vendor/bootstrap/js/popper.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<!--===============================================================================================-->
		<script src="vendor/select2/select2.min.js"></script>
		<!--===============================================================================================-->
		<script src="vendor/daterangepicker/moment.min.js"></script>
		<script src="vendor/daterangepicker/daterangepicker.js"></script>
		<!--===============================================================================================-->
		<script src="vendor/countdowntime/countdowntime.js"></script>
		<!--===============================================================================================-->
		<script src="js/main.js"></script>
	</body>
</html>
