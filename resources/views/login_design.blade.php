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
							<h4 class="card-title">Login</h4>
							<form method="POST">
							 
								<div class="form-group">
									<label for="username">Username</label>

									<input id="username" type="userrname" class="form-control" name="username" value="" required autofocus>
								</div>

								<div class="form-group">
									<label for="password">Password
										<a href="forgot.html" class="float-right">
											Forgot Password?
										</a>
									</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								</div>

								<div class="form-group">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>

								<div class="form-group no-margin">
									<button type="submit" class="btn btn-primary btn-block">
										Login
									</button>
								</div>
								<div class="margin-top20 text-center">
									Don't have an account? <a href="register">Create One</a>
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