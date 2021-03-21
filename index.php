<?php
require_once("config\conexion.php");
if (isset($_POST["send"]) and $_POST["send"] == "yes") {
	require_once("models\user.php");
	$user = new User();
	$user->login();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AdminLTE 3 | Log in (v2)</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="public/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
	<div class="login-box">
		<!-- /.login-logo -->
		<div class="card card-outline card-primary">
			<div class="card-header text-center">
				<div class="h1"><b>Acceso</b> Usuario</div>
			</div>

			<div class="card-body">
				<p class="login-box-msg">Inicia sesion</p>

				<form action="" method="post" id="login_form">

					<div class="input-group mb-3">
						<input type="email" id="user_email" name="user_email" class="form-control" placeholder="Correo">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="password" id="user_pass" name="user_pass" class="form-control" placeholder="Contraseña">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<?php
					if (isset($_GET["m"])) {
						switch ($_GET["m"]) {
							case '1':
								?>
								<div class="card card-danger mb-3"">
									<div class="card-header">
										<h3 class="card-title">Correo y/o contraseña incorrectos</h3>
										<div class="card-tools">
											<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
											</button>
										</div>
									</div>
								</div>
								<?php
							break;
							case '2':
								?>
								<div class="card card-danger mb-3">
									<div class="card-header">
										<h3 class="card-title">Campos vacios</h3>
										<div class="card-tools">
											<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
											</button>
										</div>
									</div>
								</div>
								<?php
							break;
						}
					}
?>
<input type="hidden" id="send" name="send" value="yes">
<div class="row">
	<!-- /.col -->
	<div class="col">
		<button type="submit" class="btn btn-primary btn-block">Continuar</button>
	</div>
	<!-- /.col -->
</div>
</form>
<!-- /.social-auth-links -->
<p class="mb-1">
	<a href="forgot-password.html">Olvide mi contraseña</a>
</p>
<p class="mb-0">
	<a href="register.html" class="text-center">Crear cuenta</a>
</p>
		</div>
		<!-- /.card-body -->
	</div>
	<!-- /.card -->
	</div>
	<!-- /.login-box -->

	<!-- jQuery -->
	<script src="plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="public/js/adminlte.min.js"></script>
</body>

</html>