<?php require "templates/header.php"; ?>
	<div class="container">
		<div class="col-md-6">
			<h2 class="page-title"><?php echo $title; ?></h2>
			<div class="list-group">
			<?php
				if ( $data != "" ) {
					foreach ($data as $data_item ) {
						echo "<a href='#' class='list-group-item'>";
						echo "<h4 class='list-group-item-heading'>" . $data_item['news_title'] . "</h4>";
						echo "<p class='list-group-item-text'>" . $data_item['news_desc'] . "</p>";
						echo "</a>";
					}
				}
			?>
			</div>
			<a class="link-add-new" href="<?php echo $baseurl; ?>/news/add">Add News</a>
		</div>
		<div class="col-md-4 col-md-offset-2">
			<?php require "templates/sidebar.php"; ?>
		</div>
	</div>
<?php require "templates/footer.php"; ?>