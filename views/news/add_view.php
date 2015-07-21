<?php require "templates/header.php"; ?>
	<div class="container">
		<div class="col-md-6">
			<h2 class="page-title">Add news</h2>
			<?php
				if ( is_array( $error ) ) {
					echo "<ul>";
					foreach ( $error as $error_item ) {
						echo "<li class='error-msg'>$error_item</li>";
					}
					echo "</ul>";
				}
			?>
			<form action="<?php echo $baseurl; ?>/news/add" method="post">
				<div class="form-group">
					<label for="news-title">News Title</label>
					<input type="text" class="form-control"  name="txtnews_title" placeholder="News Title">
				</div>
				<div class="form-group">
					<label for="news-desc">News short description</label>
					<textarea class="form-control" name="txtnews_desc" id="" cols="30" rows="5" placeholder="News short description"></textarea>
				</div>
				<div class="form-group">
					<label for="news-full">News Full</label>
					<textarea class="form-control" name="txtnews_full" id="" cols="30" rows="10" placeholder="News full content"></textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success" name="add_news">Add News</button>
				</div>
			</form>
			<a class="link-add-new" href="<?php echo $baseurl; ?>/news/list">List News</a>
		</div>
		<div class="col-md-4 col-md-offset-2">
			<?php require "templates/sidebar.php"; ?>
		</div>
	</div>
<?php require "templates/footer.php"; ?>