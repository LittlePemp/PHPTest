
      <div class="review_form registration_form">
        <p class="form_name item_name">Добавить</p>
        <hr>
        <form class="append_form" method="post">
          <p class="name">  
            <label for="name">Название:</label>
            <input type="text" name="name" placeholder="Название...">
          </p>
          <p class="item_description">  
            <label for="item_description">Описание:<span class="formTextRed">*</span></label>
            <textarea class="item_description" rows="8" cols="25" name="item_description" placeholder="Описание..." type="review"></textarea>
          <p class="item_price">
            <label for="item_price">Стоимость:<span class="formTextRed">*</span></label>
            <input type="text" name="item_price" placeholder="Стоимость...">
          </p>
          <p class="img">  
            <label for="img">Картинка:</label>
            <input type="text" name="img" placeholder="img...">
          </p>
          <button type="submit">Добавить</button>
        </form>
        <?php
        $link = mysqli_connect("localhost", "admin", "admin", "db_pharm");
        if(!$link){
          echo 'Connection error';
        }
          if (!empty($_POST["item_description"])
              && !empty($_POST["name"])){
            $name = $_POST['name'];
            $description = $_POST['item_description'];
            $price = $_POST['item_price'];

            # Проверка на ИМГ
            if (empty($_POST['img'])) {
                $img = 'items/nophoto.png';
            }
            else {
                $img = $_POST['img'];
            }

                        # Проверка на цену
            if (!is_numeric($price)){
                $sql =  "INSERT INTO `drug` (`name`, `description`, `img`) VALUES ('$name', '$description', '$img')";
            }
            else{
                $sql =  "INSERT INTO `drug` (`name`, `description`, `img`, `price`) VALUES ('$name', '$description', '$img', '$price')";
            }
            $link->query($sql);
            $mysqli->close;
            header('Location: '.$_SERVER['index.php']);
          }
        ?>
      </div>
