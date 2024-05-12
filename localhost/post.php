<?php 
   require_once "./app/components/header.php";

   $post = $link->query("SELECT `users`.*, `communities`.*, `topics`.*, `posts`.*
   FROM `posts`
      LEFT JOIN `users` ON `posts`.`user_id` = `users`.`id` 
      LEFT JOIN `communities` ON `posts`.`community_id` = `communities`.`id` 
      LEFT JOIN `topics` ON `posts`.`topic_id` = `topics`.`id`
      WHERE `posts`.`id` = '{$_GET['id']}'");

   $post = $post->fetch_assoc();
?>
   <main>
      <div class="main-container">
         <?php require_once "./app/components/aside.php"; ?>
         <section class="main-central">
            <div class="main-central__feedPosts">
                  <div class="main-central__postView">
                     <div class="main-central__postHeader">
                        <span href="#" class="main-central__postCommunity">
                           <img src="./assets/images/<?php echo $post['community_image']; ?>" alt="<?php echo $post['community']; ?>" class="main-central__postCommunity__icon">
                           <div class="main-central__postCommunity__authorAndCommunity">
                              <a href="./community.php?id=<?php echo $post['community_id']; ?>" class="main-central__authorAndCommunity__community"><?php echo $post['community']; ?></a>
                              <a href="./profile.php?id=<?php echo $post['user_id']; ?>" class="main-central__authorAndCommunity__author"><?php echo $post['login']; ?></a>
                           </div>
                        </span>
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
                  </div>
                  <div class="separator"></div>
                  <form action="" method="POST" class="main-central__addComments">
                        <textarea class="main-central__addComments__textarea" placeholder="Добавьте комментарий"></textarea>
                        <div class="main-central__addComments__blockButton">
                           <button class="main-central__addComments__button">Добавить</button>
                        </div>
                  </form>
                  <div class="main-central__comments">
                     <div class="main-central__comments__comment">
                        <div class="main-central__comment__block">
                           <a href="#" class="main-central__comment__user"><img src="./assets/images/Funny.jpg" alt="" class="main-central__comment__iconUser"></a>
                        </div>
                        <div class="main-central__comment__block main-central__comment__blockText">
                           <a href="#" class="main-central__comment__user">admin</a>
                           <div class="main-central__comment__text">
                              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi optio sequi voluptate obcaecati culpa harum quod, nostrum suscipit nihil architecto ut odit numquam id. Voluptates.
                           </div>
                           <div class="main-central__comment__feedbackAndDate">
                              <div class="main-central__comment__feedback">
                                 ОТВЕТИТЬ
                              </div>
                              <div class="main-central__comment__date">
                                 2 месяца назад
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
            </div>
         </section>
         <section class="main-right">
            <div class="main-right__block main-right__postCommunity">
               <a href="./community.php?id=<?php echo $post['community_id']; ?>" class="main-right__postCommunity__community">
                  <img src="./assets/images/<?php echo $post['community_image']; ?>" alt="<?php echo $post['community']; ?>" class="main-right__postCommunity__iconCommunity"><?php echo $post['community']; ?>
               </a>
               <div class="separator main-right__postCommunity__separator"></div>
               <?php if($post['description'] != NULL) { ?>
                  <div class="main-right__postCommunity__description">
                     <?php echo $post['description']; ?>
                  </div>
               <?php } ?>
               <div class="main-right__postCommunity__subscribers">
                  <?php echo $post['count_subscribers'] . " подписчика"; ?>
               </div>
               <form action="#">
                  <button class="main-right__postCommunity__subscribe">Подписаться</button>
               </form>
            </div>
         </section>
      </div>
   </main>
   <?php require_once "./app/components/modal-window.php"; ?>
   <script src="./assets/scripts/header.js"></script>
   <script src="./assets/scripts/aside.js"></script>
</body>
</html>