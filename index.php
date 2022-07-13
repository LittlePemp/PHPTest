<?php include 'templates/head.php'; ?>
  <div class="content">
    <div class="search">
      <form method="get">
        <input name="review" placeholder="Искать здесь..." type="search">
        <button type="submit"></button>
      </form>
    </div>

    <div class="newests">
      <ul id="slides">
        <li class="slide showing"><img class="li_img" src="Img/1slide.jpg" alt=""></li>
        <li class="slide"><img class="li_img" src="Img/2slide.jpg" alt=""></li>
        <li class="slide"><img class="li_img" src="Img/3slide.jpg" alt=""></li>
        <li class="slide"><img class="li_img" src="Img/4slide.jpg" alt=""></li>
              <div class="controllers">
        <button class="controls" id="previous"></button>
        <button class="controls pause_btn" id="pause">Pause</button>
        <button class="controls" id="next"></button>
      </div>
      </ul>
    </div>

    <div class='items'>
      <?php
      	$link = mysqli_connect("localhost", "admin", "admin", "db_pharm");
      	if(!$link){
      		echo 'Connection error';
      	}

      	$sql = 'SELECT * FROM drug ORDER BY id DESC';
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
	          <a href="add_to_trash.php?item=<?php echo $drug['id'] ?>" class="add_buy_button">
	            В корзину
	          </a>
	        </div>
	      </div>
	    <?php } ?>  
    </div>
  </div>

<script type="text/javascript" src="Scripts/script.js"></script>
<?php include 'templates/footer.php'; ?>
