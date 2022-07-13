<?php include 'templates/head.php'; ?>

  <div class="content">
    <p class="block_name">Описание</p>
    <div class="item">
      <a href="Item.html" class="item_name">Лазолван, капли, 200мл</a>
      <div class="rating">
        5.0
      </div>
      <div class="photo">
        Фото
      </div>
      <div class="description">
        <hr>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus quo, quisquam quae perferendis inventore dicta. Aliquid voluptas reiciendis, consequatur quibusdam laboriosam nostrum in enim distinctio temporibus, odio doloribus, accusantium deleniti! Lorem ipsum dolor sit...</p>
      </div>
      <div class="price_block">
        <div class="price">
          349.99 R
        </div>
        <a href="" class="add_buy_button">
          В корзину
        </a>
      </div>      
    </div>
    <hr>
    <br>
    <div class="specs">
      <p class="block_name">Характеристики</p>
      <table class="spec item">
        <tr class="head"><td>Хар-ка</td><td>Кол-во</td><td>Размерность</td></tr>
        <tr><td>данные</td><td>данные</td><td>данные</td></tr>
        <tr><td>данные</td><td>данные</td><td>данные</td></tr>
        <tr><td>данные</td><td>данные</td><td>данные</td></tr>
        <tr><td>данные</td><td>данные</td><td>данные</td></tr>
        <tr><td>данные</td><td>данные</td><td>данные</td></tr>
      </table>
    </div>
    <hr>
    <br>
    <div class="reviews_block">
      <p class="block_name">Отзывы</p>

      <div class="review_form">
        <p class="form_name item_name">Добавить отзыв</p>
        <hr>
        <form method="post">
          <p class="review_field">
            <label for="review">Сообщение:<span class="formTextRed">*</span></label>
          <textarea rows="8" name="review" placeholder="Введите отзыв" type="review"></textarea>
          </p>
          <p class="marks_field">
            <label for="marks">Оценка:<span class="formTextRed">*</span></label>
            <select name="marks">
              <option>5</option>
              <option>4</option>
              <option>3</option>
              <option>2</option>
              <option>1</option>
            </select>
          </p>
          <p class="photo_field">  
            <label for="review_photo">Фото:</label>
            <input type="file" name="review_photo" placeholder="Выберите изображение">
          </p>
          <button type="submit">Отправить</button>
        </form>
      </div>
      <br>
      <br>
      <div class="reviews">
        <div class="review item">
          <a href="Item.html" class="item_name">Не лечит короче</a>
          <div class="rating">
            2.0
          </div>
          <p class="reviewer">Виталий Цаль</p>
          <div class="photo review_photo">
            Фото
          </div>
          <div class="description">
            <hr>
            <p>Lorem ip</p>
          </div>
          <div class="pub_date">
            <p>21.02.2021</p>
        </div>
      </div>
        <div class="review item">
          <a href="Item.html" class="item_name">Пойдет</a>
          <div class="rating">
            4.0
          </div>
          <p class="reviewer">Виталий Громяко</p>
          <div class="photo review_photo">
            Фото
          </div>
          <div class="description">
            <hr>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Laboriosam commodi nisi, blanditiis quis cupiditate, dicta sunt aspernatur accusamus perspiciatis magnam perferendis repudiandae nihil harum sit suscipit ab, nemo laudantium rem!</p>
          </div>
          <div class="pub_date">
            <p>21.02.2021</p>
        </div>
      </div>
    </div>
  </div>

<?php include 'templates/footer.php'; ?>