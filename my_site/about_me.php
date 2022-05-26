<div class="container px-4">
  <div class="row gx-5">
    <div class="col">
     <div class="p-3"><img src="user.webp" alt="Фотография"></div>
    </div>
    <div class="col">
      <div class="p-3 main_text">
          <div>Имя: <?php echo $userName?></div>
          <div>Возраст: <?php echo $age?></div>
          <div>Город: <?php echo $city?></div>
          <div>Должность: <?php echo $jobPosition?></div>
          <div>Основной язык: <?php echo $mainLanguage?></div>
          <div>Дополнительно использую: <?php echo $additionalLanguage?></div>
          <div>Изучаю / увлекаюсь: 
              <ul class="interests">
                  <?php 
                  for ($i=0; $i < count($interests); $i++) {
                    echo "<li>" . $interests[$i] . "</li>";
                  }
                  ?>
              </ul>
          </div>
        </div>
    </div>
  </div>
</div>