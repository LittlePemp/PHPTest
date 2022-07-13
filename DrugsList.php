<?php include 'templates/head.php'; ?>

  <div class="content">
    <h1>Список лекарств</h1>
    <hr>
    <div class="del_list">
    	<form action="" method="post">
    		<table>
					<tr>
			  		<td>
			  			<p>ИД</p>
						</td>
						<td>
							<p>Цена</p>
						</td>
						<td>
							<p>Название</p>
						</td>
						<td>
							<p>Описание</p>
						</td>
						<td>
							<p>Картинка</p>
						</td>
					</tr>
				<?php 
				  $link = mysqli_connect("localhost", "admin", "admin", "db_pharm");
				  if(!$link){
				      echo 'Connection error';
				  }
				  $sql = 'SELECT * FROM drug';
				  $result = mysqli_query($link, $sql);

				  $drugs = mysqli_fetch_all($result, MYSQLI_ASSOC);
				  echo $drugs;
				  foreach ($drugs as $drug){?>
				  	<tr>
				  		<td>
						<input type="checkbox" name="DelList[]" value=<?php echo $drug['id']; ?>><?php echo $drug['id']; ?><br>
						</td>
						<td>
							<p class="table_item"><?php echo $drug['price']; ?> </p>
						</td>
						<td>
							<p class="table_item"><?php echo $drug['name']; ?> </p>
						</td>
						<td class="td_address">
							<p class="table_item"><?php echo $drug['description']; ?> </p>
						</td>
						<td>
							<img class="img-item" src="Img/<?php echo $drug['img']; ?>" width="200em">
						</td>
					</tr>
			  <?php } ?>
				</table>
				<button type="submit">Удалить</button>
			</form>
			<?php
			  $Dels = $_POST['DelList'];

		    foreach ($Dels as $app_id) {
		    	$sql = "DELETE FROM drug WHERE id = $app_id";
				  $result = mysqli_query($link, $sql);
		    }
			?>
    </div>
    <?php include 'ItemAppend.php'; ?>
  </div>


<?php include 'templates/footer.php'; ?>