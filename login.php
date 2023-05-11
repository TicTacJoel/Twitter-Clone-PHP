<?php $pageTitle = "Login | Twitter"; ?>
<?php require_once "backend/shared/header.php"; ?>
<section class="sign-container">
	<?php require_once "backend/shared/signNav.php"; ?>
	<div class="form-container">
		<div class="form-content">
			<div class="header-form-content">
				<h2>Login to Twitter</h2>
			</div>
			<form action="sign.php" class="formField">
				<div class="form-group">
					<label for="username">Username or E-Mail</label>
					<input type="text" name="username" id="username" autocomplete="off">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" autocomplete="off">
				</div>
				<div class="s-password">
					<label for="s-password">Show Password</label>
					<input type="checkbox" class="form-checkbox" id="s-password" autocomplete="off" onclick="showLoginPassword()">
				</div>
				<div class="form-btn-wrapper">
					<button type="submit" class="btn-form" name="login">Log In</button>
					<input type="checkbox" class="form-checkbox" id="check" name="remember">
					<label for="check">Remember me</label>
				</div>
			</form>
		</div>
		<footer class="form-footer">
			<p>New to Twitter? <a href="sign.php">Sign up</a></p>
		</footer>
	</div>
</section>
<script src="frontend/assets/js/showPassword.js"></script>
