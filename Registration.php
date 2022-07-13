<?php include 'templates/head.php'; ?>

  <div class="content registration">
      <div class="review_form registration_form">
        <p class="form_name item_name">Регистрация</p>
        <hr>
        <form class="form_grid" method="post">
          <p class="name">  
            <label for="name">Имя:</label>
            <input type="text" name="name" placeholder="Имя...">
          </p>
          <p class="login">  
            <label for="login">Логин:<span class="formTextRed">*</span></label>
            <input type="text" name="login" placeholder="Логин...">
          </p>
          <p class="password">  
            <label for="password">Пароль:<span class="formTextRed">*</span></label>
            <input type="password" name="password" placeholder="Пароль...">
          </p>
          <p class="confirm_password">  
            <label for="confirm_password">Подтвердите пароль:<span class="formTextRed">*</span></label>
            <input type="password" name="confirm_password" placeholder="Подтвердите пароль...">
          </p>
          <p class="email">  
            <label for="email">Почта:</label>
            <input type="text" name="email" placeholder="EMAIL...">
          </p>
          <p class="ph_number">  
            <label for="ph_number">Номер телефона:</label>
            <input type="text" name="ph_number" placeholder="+Х ХХХ ХХХ ХХ ХХ">
          </p>
          <p class="address">  
            <label for="address">Адрес:</label>
            <input type="text" name="address" placeholder="Адрес...">
          </p>
          <p class="check_remember"><input type="checkbox" name="remember" value="remember" checked>Подписаться на рассылку</p>
          <button type="submit">Зарегестрироваться</button>
        </form>
        <?php
        $link = mysqli_connect("localhost", "admin", "admin", "db_pharm");
        if(!$link){
          echo 'Connection error';
        }
          if (!empty($_POST["login"])
            && !empty($_POST["email"])
            && !empty($_POST["password"])
            && ($_POST["password"] = $_POST["confirm_password"]
            && preg_match('/^((([0-9A-Za-z]{1}[-0-9A-z\.]{1,}[0-9A-Za-z]{1})|([0-9А-Яа-я]{1}[-0-9А-я\.]{1,}[0-9А-Яа-я]{1}))@([-A-Za-z]{1,}\.){1,2}[-A-Za-z]{2,})$/u', $_POST["email"]))){
            $name = $_POST['name'];
            $login = $_POST['login'];
            $password = $_POST['confirm_password'];
            $email = $_POST['email'];
            $ph_number = $_POST['ph_number'];
            $address = $_POST['address'];

            $sql =  "INSERT INTO `user` (`name`, `address`, `login`, `email`, `ph_numper`, `created`, `password`) VALUES ('$name', '$address', '$login', '$email', '$ph_numper', current_timestamp(), '$password')";
            $link->query($sql);
            $mysqli->close;
            header('Location: '.$_SERVER['Login.php']);
          }
        ?>
      </div>
    </div>

<?php include 'templates/footer.php'; ?>