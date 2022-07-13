<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>

  <?php if ((($_SERVER['SCRIPT_NAME'] == '/drugs/MsgAnswer.php')
              || ($_SERVER['SCRIPT_NAME'] == '/drugs/UsersList.php')
              || ($_SERVER['SCRIPT_NAME'] == '/drugs/DrugssList.php')
              || ($_SERVER['SCRIPT_NAME'] == '/drugs/ItemAppend.php'))
            && ($_SESSION['role'] == 'user')){
              header('Location: index.php ');
            } ?>

  <title>TITLE</title>
</head>
<body>
<header>
  <div class="container in_header">
    <div class="logo in_container">
      <a href="index.php">
        <img class="logo_img in_header" src="Img/logo.png" alt="NONE">
      </a>
    </div>
    <div class="buttons_block in_container">

    <?php 

    if (count($_SESSION) == 0){
      echo <<<END

      <a href="Registration.php" class="button in_header">
        <div class="button_block">
          <span class="header_text">Регистрация</span>
        </div>
      </a>

      <a href="Login.php" class="button in_header">
        <div class="button_block">
          <span class="header_text">Вход</span>
        </div>
      </a>

      END;
    } elseif ($_SESSION['role'] == 'admin') {

      echo <<<END

        <a href="Trash.php" class="button in_header">
          <div class="button_block">
            <span class="header_text">
              Корзина
            </span>
          </div>
        </a>

          <div class="button_block">
            <span class="header_text">
              {$_SESSION['session_username']}
            </span>
          </div>

        <a href="Chat.php" class="button in_header">
          <div class="button_block">
            <span class="header_text">
              <img src="Img/msg.png" alt="Сообщение" width="25">
            </span>
          </div>
        </a>

        <a href="UsersList.php" class="button in_header">
          <div class="button_block">
            <span class="header_text">
              Список челов
            </span>
          </div>
        </a>

        <a href="DrugsList.php" class="button in_header">
          <div class="button_block">
            <span class="header_text">
              Список лекарств
            </span>
          </div>
        </a>

        <a href="Logout.php" class="button in_header">
          <div class="button_block">
            <span class="header_text">Выйти</span>
          </div>
        </a>
      </div>
      END;
    } else {
        echo <<<END

        <a href="Trash.php" class="button in_header">
          <div class="button_block">
            <span class="header_text">
              Корзина
            </span>
          </div>
        </a>

          <div class="button_block">
            <span class="header_text">
              {$_SESSION['session_username']}
            </span>
          </div>

        <a href="Chat.php" class="button in_header">
          <div class="button_block">
            <span class="header_text">
              <img src="Img/msg.png" alt="Сообщение" width="25">
            </span>
          </div>
        </a>

        <a href="Logout.php" class="button in_header">
          <div class="button_block">
            <span class="header_text">Выйти</span>
          </div>
        </a>
      </div>
      END;
    }
    ?>
  </div>
</header>

<style type="text/css">
  <?php include 'Styles/style.css'; ?>
</style>

<main>
  <div class="promotion">
    Рекалама
  </div>