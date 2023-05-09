<?php
require_once "backend/initialize.php";

if (is_post_requested()) {
  if (isset($_POST["firstName"]) && !empty($_POST["firstName"])) {
    $fname = FormSanitizer::formSanitizerName($_POST["firstName"]);
    $lname = FormSanitizer::formSanitizerName($_POST["lastName"]);
    $email = FormSanitizer::formSanitizerString($_POST["email"]);
    $password = FormSanitizer::formSanitizerString($_POST["password"]);
    $cpassword = FormSanitizer::formSanitizerString($_POST["cpassword"]);
  }
}
?>

<?php $pageTitle = "SignUp | Twitter"; ?>
<?php require_once "backend/shared/header.php"; ?>
<section class="sign-container">
	<?php require_once "backend/shared/signNav.php"; ?>
	<div class="form-container">
		<div class="form-content">
			<div class="header-form-content">
				<h2>Create your account</h2>
			</div>
			<form action="sign.php" class="formField" method="POST">
				<div class="form-group">
					<label for="firstName">First Name</label>
					<input type="text" name="firstName" id="firstName" autocomplete="off" required>
				</div>
				<div class="form-group">
					<label for="lastName">Last Name</label>
					<input type="text" name="lastName" id="lastName" autocomplete="off" required>
				</div>
				<div class="form-group">
					<label for="email">E-Mail</label>
					<input type="email" name="email" id="email" autocomplete="off" required>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" autocomplete="off" required>
				</div>
				<div class="form-group">
					<label for="cpassword">Confirm Password</label>
					<input type="password" name="cpassword" id="cpassword" autocomplete="off" required>
				</div>
				<div class="s-password">
					<label for="s-password">Show Password</label>
					<input type="checkbox" class="form-checkbox" id="s-password" autocomplete="off" onclick="showPassword()">
				</div>
				<div class="form-btn-wrapper">
					<button type="submit" class="btn-form">Sign Up</button>
					<input type="checkbox" class="form-checkbox" id="check" name="remember">
					<label for="check">Remember me</label>
				</div>
			</form>
		</div>
		<footer class="form-footer">
			<p>Already have an account <a href="login.php"">Log In</a></p>
		</footer>
	</div>
</section>
<script src="frontend/assets/js/showPassword.js"></script>