<?php $pageTitle="SignUp | Twitter"; ?>
<?php require_once 'backend/shared/header.php'; ?>
<section class="sign-container">
	<nav class="nav-header-sign_up">
		<ul>
			<li>
				<a href="index.php">
					<i class="fa fa-twitter"></i>
					Home
				</a>
			</li>
			<li>
				<a href="#">About</a>
			</li>
			<li>
				<a href="#">Language: English</a>
			</li>
		</ul>
	</nav>
	<div class="form-container">
		<div class="form-content">
			<div class="header-form-content">
				<h2>Create your account</h2>
			</div>
			<form action="sign.php" class="formField">
				<div class="form-group">
					<label for="firstName">First Name</label>
					<input type="text" name="firstName" id="firstName" autocomplete="off">
				</div>
				<div class="form-group">
					<label for="lastName">Last Name</label>
					<input type="text" name="lastName" id="lastName" autocomplete="off">
				</div>
				<div class="form-group">
					<label for="email">E-Mail</label>
					<input type="text" name="email" id="email" autocomplete="off">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="text" name="password" id="password" autocomplete="off">
				</div>
				<div class="form-group">
					<label for="cpassword">Confirm Password</label>
					<input type="text" name="cpassword" id="cpassword" autocomplete="off">
				</div>
				<div class="s-password">
					<label for="s-password">Show Password</label>
					<input type="checkbox" class="form-checkbox" id="s-password" autocomplete="off">
				</div>
				<div class="form-btn-wrapper">
					<button type="submit" class="btn-form">Signup</button>
					<input type="checkbox" id="check" name="remember">
					<label for="check">Remember me</label>
				</div>
			</form>
		</div>
		<footer class="form-footer">
			<p>Already have an account <a href="login.php"">Log In</a></p>
		</footer>
	</div>
</section>