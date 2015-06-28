<?php require "templates/header.php"; ?>
	<div class="container">
		<div class="col-md-6">
			<h2 class="page-title">Edit info user</h2>
			<?php
				if ( is_array( $error ) ) {
					echo "<ul>";
					foreach ( $error as $error_item ) {
						echo "<li class='error-msg'>$error_item</li>";
					}
					echo "</ul>";
				}
			?>
			<form action="<?php echo $baseurl; ?>/user/edit/uid/<?php echo $data['id']; ?>" method="post">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" class="form-control"  name="txtuser" placeholder="Username" value="<?php echo $data['username']; ?>">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" name="txtpass"  placeholder="Password">
				</div>
				<div class="form-group">
					<label for="repassword">Re-Password</label>
					<input type="password" class="form-control" name="txtrepass"  placeholder="Re-Password">
				</div>
				<div class="form-group">
					<select class="form-control" name="level">
						<option value="1" <?php if ( $data['level'] == 1 ) echo "selected=selected"; ?>>Administrator</option>
						<option value="2" <?php if ( $data['level'] == 2 ) echo "selected=selected"; ?>>User</option>
					</select>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary" name="edit_user">Submit</button>
				</div>
			</form>
		</div>
		<div class="col-md-4 col-md-offset-2">
			<?php require "templates/sidebar.php"; ?>
		</div>
	</div>
<?php require "templates/footer.php"; ?>