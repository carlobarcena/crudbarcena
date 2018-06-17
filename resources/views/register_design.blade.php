<!DOCTYPE html>
<html>
<head>
	@include('partials.loginhead')
</head>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="img/logo.jpg">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Register</h4>
							<form method="POST">	
							 
								<div class="form-group">
									<label for="username">Username</label>
									<input id="username" type="text" class="form-control" name="username" required autofocus>
								</div>

								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" required>
								</div>

								<div class="form-group">
									<label for="password">Password</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								</div>

								<div class="form-group">
									<label for="password2">Confirm Password</label>
									<input id="password2" type="password" class="form-control" name="password2" required data-eye>
								</div>

								<div class="form-group no-margin">
									<button type="submit" class="btn btn-primary btn-block">
										Register
									</button>
								</div>
								<div class="margin-top20 text-center">
									Already have an account? <a href="/">Login</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Carlo Barcena &copy; 2018 &mdash; Employee-Department CRUD 
					</div>
				</div>
			</div>
		</div>
	</section>

	@include('partials.script')
</body>
</html>