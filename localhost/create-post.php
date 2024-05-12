<?php 
   require_once "./app/components/header.php";

   $communities = $link->query("SELECT * FROM `communities`");
?>
   <main>
      <div class="main-container">
         <?php require_once "./app/components/aside.php"; ?>
         <section class="main-central">
            <div class="main-central__header">
               <div class="main-central__header__title">
                  Создание поста
               </div>
            </div>
            <div class="separator"></div>
            <div class="main-central__addPost">
            <div class="main-central__selectCommunityBlock">
               <a href="#" class="main-central__selectCommunity">
                  <div class="main-central__selectCommunity__circle"></div>
                  <div class="main-central__selectCommunity__placeholder">Выберите сообщество</div>
                  <img src="./assets/images/arrow.svg" alt="Стрелочка" class="main-central__selectCommunity__iconArrow">
                  <div class="main-central__selectCommunity__listCommunity">
                     <?php while($community = $communities->fetch_assoc()) { ?>
                        <div class="main-central__listCommunity__community">
                           <img src="./assets/images/<?php echo $community['community_image'] ?>" alt="<?php echo $community['community'] ?>" class="main-central__listCommunity__iconCommunity">
                           <?php echo $community['community'] ?>
                        </div>
                     <?php } ?>
                  </div>
               </a>
            </div>
               <div class="main-central__createPost">
                  <div class="main-central__createPost__headerCreatePost">
                     <a href="#" class="main-central__headerCreatePost__btn main-central__headerCreatePost__btnActive" data-id="1">
                        <img src="./assets/images/text.svg" alt="Текст" class="main-central__headerCreatePost__iconBtn">Текст
                     </a>
                     <a href="#" class="main-central__headerCreatePost__btn" data-id="2">
                        <img src="./assets/images/image-or-video.svg" alt="Текст" class="main-central__headerCreatePost__iconBtn">Изображение или видео
                     </a>
                  </div>
                  <form class="main-central__createPost__mainCreatePost main-central__createPost__mainCreatePostText" data-id="1">
                     <input type="text" class="main-central__mainCreatePost__title" placeholder="Укажите заголовок" required>
                     <textarea class="main-central__mainCreatePost__description" placeholder="Введите текст (необязательно)"></textarea>
                     <div class="main-central__mainCreatePost__footer">
                        <a href="./index.php" class="main-central__mainCreatePost__reject">Отмена</a>
                        <button class="main-central__mainCreatePost__accept">Создать</button>
                     </div>
                  </form>
                  <form class="main-central__createPost__mainCreatePost main-central__createPost__mainCreatePostImageOrVideo" data-id="2">
                     <input type="text" class="main-central__mainCreatePost__title" placeholder="Укажите заголовок" required>
                     <label for="file" class="main-central__mainCreatePost__label">
                        <div class="main-central__mainCreatePost__fileDivPlaceholder">Выберите файл</div>
                        <input type="file" id="file" class="main-central__mainCreatePost__file" required>
                        <div class="main-central__mainCreatePost__fileDiv">Выбрать</div>
                     </label>
                     <div class="main-central__mainCreatePost__uploadFileView">
                        Загрузите файл для предпросмотра
                     </div>
                     <div class="main-central__mainCreatePost__footer">
                        <a href="./index.php" class="main-central__mainCreatePost__reject">Отмена</a>
                        <button class="main-central__mainCreatePost__accept">Создать</button>
                     </div>
                  </form>
               </div>
            </div>
         </section>
         <section class="main-right">
            <div class="main-right__block main-right__rules">
               <div class="main-right__rules__title">
                  <img src="./assets/images/warning.svg" alt="Правила" class="main-right__rules__iconWarning">ПУБЛИКАЦИЯ НА DATACUBE
               </div>
               <div class="main-right__rules__rule main-right__rules__ruleFirst">
                  1. Помните о человеке
               </div>
               <div class="separator"></div>
               <div class="main-right__rules__rule">
                  2. Веди себя так, как вёл бы себя в реальной жизни
               </div>
               <div class="separator"></div>
               <div class="main-right__rules__rule">
                  3. Ищите первоисточник контента
               </div>
               <div class="separator"></div>
               <div class="main-right__rules__rule">
                  4. Ищите дубликаты перед публикацией
               </div>
               <div class="separator"></div>
               <div class="main-right__rules__rule main-right__rules__ruleLast">
                  5. Читайте правила сообщества
               </div>
            </div>
         </section>
      </div>
   </main>
   <?php require_once "./app/components/modal-window.php"; ?>
   <script src="./assets/scripts/header.js"></script>
   <script src="./assets/scripts/aside.js"></script>
   <script src="./assets/scripts/create-post.js"></script>
</body>
</html>