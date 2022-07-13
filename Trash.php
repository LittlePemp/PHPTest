<?php include 'templates/head.php'; ?>

  <div class="content">
  	  <?php
      	$link = mysqli_connect("localhost", "admin", "admin", "db_pharm");
      	if(!$link){
      		echo 'Connection error';
      	}

      	$id_user = $_SESSION['user_id'];

      	$sql = "SELECT * FROM drug INNER JOIN trash ON trash.id_item = drug.id and id_user='$id_user' ORDER BY added DESC";
      	$result = mysqli_query($link, $sql);

      	$drugs = mysqli_fetch_all($result, MYSQLI_ASSOC);
      ?>

			<?php foreach ($drugs as $drug) { ?>
	      <div class="item">
	        <a href="Item.php" class="item_name">
	        	<?php echo $drug['name']; ?>
	        </a>
	        <div class="photo">
	          <img class="img-item" src="Img/<?php echo $drug['img']; ?>" width="200em">
	        </div>
	        <div class="description">
	          <hr>
	          <p><?php echo $drug['description']; ?></p>
	        </div>
	        <div class="price_block">
	          <div class="price">
	            <?php echo $drug['price']; ?> R
	          </div>
	          <a href="del_from_trash.php?item=<?php echo $drug['id'] ?>" class="add_buy_button">
	            Удалить
	          </a>
	        </div>
	      </div>
	    <?php } ?> 
  </div>

<?php include 'templates/footer.php'; ?>