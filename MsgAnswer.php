<?php include 'templates/head.php'; ?>

<div class="content">
	<div class="review_form registration_form answer_form">
	  <form class="form_grid" method="post">
	      <p class="message">
	        <label for="message">Ответ:<span class="formTextRed">*</span></label>
	      <textarea class="message" rows="4" cols="25" name="message" placeholder="Ответ..." type="review"></textarea>
	      </p>
	      <p class="name input">  
	        <label for="name">Имя:</label>
	        <input type="text" name="name" placeholder="Имя..." value=<?php echo $_SESSION['session_username']; ?>>
	      </p>
	      <p class="ph_number input">  
	        <label for="ph_number">Номер телефона:</label>
	        <input type="text" name="ph_number" placeholder="+Х ХХХ ХХХ ХХ ХХ" value="+79223223232">
	      </p>
	      <p class="email input">  
	        <label for="email">Почта:</label>
	        <input type="text" name="email" placeholder="example@mail.ru" value="help@help.com">
	      </p>
	      <button type="submit">Ответить</button>
	  </form>

		<?php
		  $link = mysqli_connect("localhost", "admin", "admin", "db_pharm");
		  if(!$link){
		    echo 'Connection error';
		  }
		    if (!empty($_POST["message"])
		      && !empty($_POST["email"])
		      && !empty($_POST["name"])
		      && !empty($_POST["ph_number"])
		    ){
		      $name = $_POST['name'];
		      $message = $_POST['message'];
		      $email = $_POST['email'];
		      $ph_number = $_POST['ph_number'];
		      $recipient = $_GET['recipient'];


		      $sql =  "INSERT INTO `message` (`message`, `name`, `ph_number`, `email`, `user_id`, `sended`, `recipient`) VALUES ('$message', '$name', '$ph_number', '$email', 0, current_timestamp(), '$recipient')";
		      $link->query($sql);
		      $mysqli->close;
		    }
		?>
	</div>
</div>

<?php include 'templates/footer.php'; ?>