<?php require "templates/header.php"; ?>
	<div class="container">
		<div class="col-md-8">
			<h3 class="page-title">List all user added</h3>
			<div class="sort-view">
				<select name="" id="selectlv">
					<option value="0">Show all</option>
					<option value="1">Administrator</option>
					<option value="2">User</option>
				</select>
			</div>
			<div class="list-user" id="level">
				<table>
					<tr class="table-caption">
						<td>Số thứ tự</td>
						<td>Username</td>
						<td>Level</td>
						<td>Edit</td>
						<td>Delete</td>
					</tr>
					<?php
						$stt = 1;
						if ( $data != "") {
							foreach ($data as $data_item) {
								$value_level = $data_item['level'];
								echo "<tr>";
								echo "<td>$stt</td>";
								echo "<td>{$data_item['username']}</td>";
								if ( $value_level == 1 ) {
									echo "<td class='role-admin'>Administrator</td>";
								} else {
									echo "<td class='role-user'>User</td>";
								}
								echo "<td><a href='$baseurl/user/edit/uid/$data_item[id]'>Edit</a></td>";
								echo "<td><a href='$baseurl/user/del/uid/$data_item[id]'>Delete</a></td>";
								echo "</tr>";
								$stt++;
							}
						} else {
							echo "<tr><td colspan=5 class='error-msg'>Empry data</td></tr>";
						}
					?>
					</table>
					<a class="link-add-new" href="<?php echo $baseurl; ?>/user/add">
						<button type="button" class="btn btn-success">Add user</button>
					</a>
			</div>
		</div>
		<div class="col-md-4">
			<?php require "templates/sidebar.php"; ?>
		</div>
	</div>
<?php require "templates/footer.php"; ?>