<?php 
   require_once "./app/components/header.php";
?>
   <main>
      <div class="main-container">
         <?php require_once "./app/components/aside.php"; ?>
         <section class="main-central">
            <div class="main-central__header">
               <a href="#" class="main-central__header__btnSort">
                  Сортировать по<img src="./assets/images/arrow.svg" alt="Стрелочка" class="main-central__header__iconArrow">
               </a>
               <div class="main-central__header__menuSort">
                  <a href="./index.php?sort=popular" class="main-central__header__menuSortBtn">
                     Популярное
                  </a>
                  <a href="./index.php?sort=old" class="main-central__header__menuSortBtn">
                     Старое
                  </a>
                  <a href="./index.php?sort=new" class="main-central__header__menuSortBtn">
                     Новое
                  </a>
               </div>
            </div>
            <div class="separator"></div>
            <div class="main-central__feedPosts">
            <?php if($posts->num_rows > 0) { ?>
               <?php while($post = $posts->fetch_assoc()) { ?>
                  <a href="./post.php?id=<?php echo $post['id']; ?>" class="main-central__post">
                     <div class="main-central__postHeader">
                        <span href="#" class="main-central__postCommunity">
                           <img src="./assets/images/<?php echo $post['community_image']; ?>" alt="<?php echo $post['community']; ?>" class="main-central__postCommunity__icon"><?php echo $post['community']; ?>
                        </span>
                        <form action="#">
                           <button class="main-central__postSubscribe">Подписаться</button>
                        </form>
                     </div>
                     <div class="main-central__postText">
                        <?php echo $post['heading']; ?>
                     </div>
                     <?php if($post['text'] == NULL) { ?>
                        <div class="main-central__postImg">
                           <img src="./assets/images/<?php echo $post['post_image']; ?>" alt="Фоновое изображение" class="main-central__postImg__backgroundImg">
                           <div class="main-central__postImg__slot">
                              <img src="./assets/images/<?php echo $post['post_image']; ?>" alt="Основное изображение" class="main-central__postImg__mainImg">
                           </div>
                        </div>
                     <?php } else { ?>
                     <div class="main-central__postTextP">
                        <?php echo $post['text']; ?>
                     </div>
                     <?php } ?>
                     <form action="#" class="main-central__postFooter">
                        <div class="main-central__postFooter__block">
                           <button class="main-central__postFooter__btn"><img src="./assets/images/inactive-like.svg" alt="Лайк" class="main-central__postFooter__btnIcon"><?php echo $post['count_likes']; ?></button>
                           <button class="main-central__postFooter__btn"><img src="./assets/images/comment.svg" alt="Комментарий" class="main-central__postFooter__btnIcon"><?php echo $post['count_comments']; ?></button>
                           <button class="main-central__postFooter__btn"><img src="./assets/images/inactive-save.svg" alt="Сохранить" class="main-central__postFooter__btnIcon">Сохранить</button>
                           <button class="main-central__postFooter__btn"><img src="./assets/images/share.svg" alt="Поделиться" class="main-central__postFooter__btnIcon">Поделиться</button>
                        </div>
                        <div class="main-central__postFooter__block main-central__postFooter__time">
                           19 часов назад
                        </div>
                     </form>
                  </a>
                  <div class="separator"></div>
                  <?php } ?>
               <?php } else { ?>
                  <div class="main-central__feedPosts__noPosts">
                     По вашему запросу нет постов
                  </div>
               <?php } ?>
            </div>
         </section>
         <section class="main-right">
            <div class="main-right__block main-right__communities">
               <div class="main-right__communities__title">
                  ПОПУЛЯРНЫЕ СООБЩЕСТВА
               </div>
               <a href="#" class="main-right__community">
                  <img src="./assets/images/Funny.jpg" alt="Логотип сообщества" class="main-right__community__icon">
                  <div class="main-right__community__text">
                     <span class="main-right__community__name">Funny</span>
                     <span class="main-right__community__subscribers">10.107.205 подписчиков</span>
                  </div>
               </a>
               <a href="#" class="main-right__community">
                  <img src="./assets/images/Funny.jpg" alt="Логотип сообщества" class="main-right__community__icon">
                  <div class="main-right__community__text">
                     <span class="main-right__community__name">Funny</span>
                     <span class="main-right__community__subscribers">10.107.205 подписчиков</span>
                  </div>
               </a>
               <a href="#" class="main-right__community">
                  <img src="./assets/images/Funny.jpg" alt="Логотип сообщества" class="main-right__community__icon">
                  <div class="main-right__community__text">
                     <span class="main-right__community__name">Funny</span>
                     <span class="main-right__community__subscribers">10.107.205 подписчиков</span>
                  </div>
               </a>
               <a href="#" class="main-right__community">
                  <img src="./assets/images/Funny.jpg" alt="Логотип сообщества" class="main-right__community__icon">
                  <div class="main-right__community__text">
                     <span class="main-right__community__name">Funny</span>
                     <span class="main-right__community__subscribers">10.107.205 подписчиков</span>
                  </div>
               </a>
               <a href="#" class="main-right__community">
                  <img src="./assets/images/Funny.jpg" alt="Логотип сообщества" class="main-right__community__icon">
                  <div class="main-right__community__text">
                     <span class="main-right__community__name">Funny</span>
                     <span class="main-right__community__subscribers">10.107.205 подписчиков</span>
                  </div>
               </a>
               <a href="#" class="main-right__community__btnMore">
                  Показать больше
               </a>
            </div>
         </section>
      </div>
   </main>
   <?php require_once "./app/components/modal-window.php"; ?>
   <script src="./assets/scripts/header.js"></script>
   <script src="./assets/scripts/aside.js"></script>
   <script src="./assets/scripts/sort.js"></script>
</body>
</html>