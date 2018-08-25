<?php
	include 'inc/header.php';
?>
<div class="panel panel-default">
	<div class="panel-heading">
		<h2>User Login</h2>
	</div>

	<div class="panel-body">
		<div style="max-width: 700px; margin: 0 auto">
			<form action="" method="POST">
				<div class="form-group">
					<label for="email">Email Address</label>
					<input type="text" id='email' name="email" class="form-control" required="">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" id='password' name="password" class="form-control" required="">
				</div>
				<button type="submit" name="login" class="btn btn-success">Login</button>
			</form>
		</div>
	</div>
</div>

<?php
	include 'inc/footer.php';
?>