<?php include 'templates/head.php'; ?>

  <div class="content">
    <h1>Список</h1>
    <hr>
    <div class="del_list">
    	<form action="" method="post">
    		<table>
					<tr>
			  		<td>
			  			<p>ИД</p>
						</td>
						<td>
							<p>Логин</p>
						</td>
						<td>
							<p>Имя</p>
						</td>
						<td>
							<p>Адрес</p>
						</td>
						<td>
							<p>Почта</p>
						</td>
					</tr>
				<?php 
				  $link = mysqli_connect("localhost", "admin", "admin", "db_pharm");
				  if(!$link){
				      echo 'Connection error';
				  }
				  $sql = 'SELECT * FROM user WHERE role != "admin" ORDER BY id';
				  $result = mysqli_query($link, $sql);

				  $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

				  foreach ($users as $user){?>
				  	<tr>
				  		<td>
								<input type="checkbox" name="DelList[]" value=<?php echo $user['id']; ?>><?php echo $user['id']; ?><br>
							</td>
							<td>
								<p class="table_item"><?php echo $user['login']; ?> </p>
							</td>
							<td>
								<p class="table_item"><?php echo $user['name']; ?> </p>
							</td>
							<td class="td_address">
								<p class="table_item"><?php echo $user['address']; ?> </p>
							</td>
							<td>
								<p class="table_item"><?php echo $user['email']; ?> </p>
							</td>
						</tr>
			  <?php } ?>
				</table>
				<button type="submit">Удалить</button>
			</form>
			<?php
			  $Dels = $_POST['DelList'];

		    foreach ($Dels as $app_id) {
		    	$sql = "DELETE FROM user WHERE id = $app_id";
				  $result = mysqli_query($link, $sql);
		    }
			?>
    </div>
  </div>

<?php include 'templates/footer.php'; ?>