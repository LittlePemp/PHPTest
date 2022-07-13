<?php include 'templates/head.php'; ?>

  <div class="content">
    <h1>Сообщения</h1>
    <hr>
    <?php 
        $link = mysqli_connect("localhost", "admin", "admin", "db_pharm");
        if(!$link){
            echo 'Connection error';
        }

        if ($_SESSION['role'] == 'admin'){

            $sql = 'SELECT * FROM message WHERE recipient=0 ORDER BY sended DESC';
            $result = mysqli_query($link, $sql);

            $msgs = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
        else {
            $user_id = $_SESSION['user_id'];
            $sql = "SELECT * FROM message WHERE recipient='$user_id' or user_id=$user_id ORDER BY sended DESC";
            $result = mysqli_query($link, $sql);

            $msgs = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
          foreach ($msgs as $msg) { ?> 
          <div class="item message_block">
            <?php

                $sender = ($msg['user_id'] == 0) ? 'admin' : $msg['user_id'];
                echo "{$sender} / ";
                echo $msg['name']; ?>
            <div class="sended_dt">
              <?php echo $msg['sended']; ?>
            </div>
            <div class="description message_description">
              <p><?php echo $msg['message']; ?></p>
            </div>
            <div class="user_info">
              <div class="user_info">
                <p><?php echo $msg['ph_number']; ?></p>
                <p><?php echo $msg['email']; ?></p>
              </div>
            </div>
          </div>
          <?php if ($_SESSION['role'] == 'admin'){ ?>
            <a href="MsgAnswer.php?recipient=<?php echo $msg['user_id'] ?>" class="add_buy_button">
              Ответить
            </a>
          <?php } ?>
        <?php } ?>  
  </div>

<?php include 'templates/footer.php'; ?>