<?php
	include 'inc/header.php';
	include 'lib/User.php';

	$user = new User();
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])){
		$userReg = $user->userRegistration($_POST);
	}
?>
<div class="panel panel-default">
	<div class="panel-heading">
		<h2>User Registration</h2>
	</div>

	<div class="panel-body">
		<div style="max-width: 700px; margin: 0 auto">
			<form action="" method="POST">
				<div class="form-group">
					<label for="name">Your Name</label>
					<input type="text" id='name' name="name" class="form-control" required="">
				</div>
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" id='username' name="username" class="form-control" required="">
				</div>
				<div class="form-group">
					<label for="email">Email Address</label>
					<input type="text" id='email' name="email" class="form-control" required="">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" id='password' name="password" class="form-control" required="">
				</div>
				<button type="submit" name="register" class="btn btn-success">Register</button>
			</form>
		</div>
	</div>
</div>

<?php
	include 'inc/footer.php';
?>