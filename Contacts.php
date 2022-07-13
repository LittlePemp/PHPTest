<?php include 'templates/head.php'; ?>

  <div class="content registration">
      <h1>Контакты</h1>
      <div class="review_form registration_form contacts_form">
        <p class="form_name item_name">Свяжитесь с нами</p>
        <hr>
        <form class="form_grid" method="post">
          <p class="message">
            <label for="message">Сообщение:<span class="formTextRed">*</span></label>
          <textarea class="message" rows="8" cols="25" name="message" placeholder="Ваше сообщение..." type="review"></textarea>
          </p>
          <p class="name input">  
            <label for="name">Имя:</label>
            <input type="text" name="name" placeholder="Имя...">
          </p>
          <p class="ph_number input">  
            <label for="ph_number">Номер телефона:</label>
            <input type="text" name="ph_number" placeholder="+Х ХХХ ХХХ ХХ ХХ">
          </p>
          <p class="email input">  
            <label for="email">Почта:</label>
            <input type="text" name="email" placeholder="example@mail.ru">
          </p>
          
          <?php // Проверка регестрированного
            if (count($_SESSION) == 0){
              echo 'Войдите в систему, чтобы отправить сообщение.';
            } else {
              echo '<button type="submit">Отправить</button>';
            }

          ?>
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
              $user_id = $_SESSION['user_id'];

              $sql =  "INSERT INTO `message` (`message`, `name`, `ph_number`, `email`, `user_id`, `sended`) VALUES ('$message', '$name', '$ph_number', '$email', $user_id, current_timestamp())";
              $link->query($sql);
              $mysqli->close;
            }
        ?>
      </div>
      <br>
      <br>
      <hr>
      <div class="map_content">
        <p class="form_name item_name">Мы на карте</p>
        <div class="map">
          <script class="map_script" type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A933d10bbae7ee3be3a4c3f1b3a229500d9ecdb8df408e68c3f5e6471c81d6cda&amp;width=auto&amp;height=604&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
      </div>
      <div class="link_buttons">
        <script type="text/javascript">(function() {
          if (window.pluso)if (typeof window.pluso.start == "function") return;
          if (window.ifpluso==undefined) { window.ifpluso = 1;
            var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
            s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
            s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
            var h=d[g]('body')[0];
            h.appendChild(s);
          }})();</script>
        <div class="pluso" data-background="transparent" data-options="big,square,line,horizontal,nocounter,theme=04" data-services="vkontakte,odnoklassniki,facebook,moimir"></div>
      </div>
    </div>

<?php include 'templates/footer.php'; ?>