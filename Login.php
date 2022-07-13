<?php include 'templates/head.php'; ?>

  <div class="content registration">
      <div class="review_form registration_form">
        <p class="form_name item_name">Вход</p>
        <hr>
        <form class="form_grid" method="post">
          <p class="login">  
            <label for="login">Логин:</label>
            <input type="text" name="login" placeholder="Логин...">
          </p>
          <p class="password">  
            <label for="password">Пароль:</label>
            <input type="password" name="password" placeholder="Пароль...">
          </p>
          <button type="submit">Войти</button>
        </form>
        <?php
          $link = mysqli_connect("localhost", "admin", "admin", "db_pharm");
          if(!$link){
            echo 'Connection error';
          }
          if (!empty($_POST["login"])
            && !empty($_POST["password"])){
            $login = $_POST['login'];
            $password = $_POST['password'];

            $sql = "SELECT id, login, password, role FROM user WHERE login='$login' and password='$password'";

            $query = mysqli_query($link, $sql);

            if (mysqli_num_rows($query) > 0){
              echo 'ВЫ В СИСТЕМЕ';
              while($row=mysqli_fetch_assoc($query))
               {
                  $dbid = $row['id'];
                  $dblogin = $row['login'];
                  $dbpassword =  $row['password'];
                  $dbrole =  $row['role'];
               }
                  if($login == $dblogin && $password == $dbpassword)
               {
                  $_SESSION['session_username'] = $login;
                  $_SESSION['user_id'] = $dbid;
                  $_SESSION['role'] = $dbrole;

                  header("location:index.php");
                }
              }
            }
            else{
              echo 'НЕ ЗАРЕГЕСТРИРОВАНА ТАКАЯ КОМБИНАЦИЯ ЛОГИН-ПАРОЛЬ';
            }
        ?>
      </div>
    </div>

<?php include 'templates/footer.php'; ?>