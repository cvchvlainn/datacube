<?php 
   require_once "./app/components/header.php";
?>
   <main>
      <div class="main-container">
         <?php require_once "./app/components/aside.php"; ?>
         <section class="main-central">
            <div class="main-central__header main-central__headerFlex">
               <div class="main-central__header__btn main-central__header__btnActive">
                  <img src="./assets/images/my-posts.svg" alt="Мои посты" class="main-central__header__btnIcon">Мои посты
               </div>
               <div class="main-central__header__btn">
                  <img src="./assets/images/save-active.svg" alt="Мои посты" class="main-central__header__btnIcon">Сохранённое
               </div>
               <div class="main-central__header__btn">
                  <img src="./assets/images/like-active.svg" alt="Мои посты" class="main-central__header__btnIcon">Понравившееся
               </div>
            </div>
            <div class="separator"></div>
            <div class="main-central__feedPostsProfile">
               <div class="main-central__postProfile">
                  <div class="main-central__postProfileBlock main-central__postProfileBlockUp">
                     <div class="main-central__postProfileBlock__postBlockImg">
                        <img src="./assets/images/post.jpeg" alt="Изображение поста" class="main-central__postBlockImg__postImg">
                     </div>
                     <div class="main-central__postProfileBlock__postMain">
                        <div class="main-central__postMain__block">
                           <a href="#" class="main-central__postMain__blockHeader">
                              <div class="main-central__blockHeader__author">
                                 <img src="./assets/images/default-logo-user.jpg" alt="Аватар автора" class="main-central__blockHeader__authorImg">опубликовал user
                              </div>
                              <button class="main-central__blockHeader__subscribeBtn">Подписаться</button>
                           </a>
                           <div class="main-central__postMain__blockContent">
                              А к какому типу относитесь вы?
                           </div>
                        </div>
                        <div class="main-central__postMain__block main-central__postMain__time">
                           23 часа назад
                        </div>
                     </div>
                  </div>
                  <div class="separator"></div>
                  <div class="main-central__postProfileBlock">
                     <form action="#" class="main-central__postProfileBlock__footer">
                        <div class="main-central__postProfileBlock__subblock">
                           <button class="main-central__postProfileBlock__subblockBtn"><img src="./assets/images/inactive-like.svg" alt="Лайк" class="main-central__postProfileBlock__btnIcon">631</button>
                           <button class="main-central__postProfileBlock__subblockBtn"><img src="./assets/images/comment.svg" alt="Комментарий" class="main-central__postProfileBlock__btnIcon">27</button>
                           <button class="main-central__postProfileBlock__subblockBtn"><img src="./assets/images/inactive-save.svg" alt="Сохранить" class="main-central__postProfileBlock__btnIcon">Сохранить</button>
                           <button class="main-central__postProfileBlock__subblockBtn"><img src="./assets/images/share.svg" alt="Поделиться" class="main-central__postProfileBlock__btnIcon">Поделиться</button>
                        </div>
                        <div class="main-central__postProfileBlock__subblock">
                           <button class="main-central__postProfileBlock__redactAndDeleteBtn"><img src="./assets/images/edit.svg" alt="Редактировать" class="main-central__postProfileBlock__redactAndDeleteBtnIcon"></button>
                           <button class="main-central__postProfileBlock__redactAndDeleteBtn"><img src="./assets/images/trash.svg" alt="Удалить" class="main-central__postProfileBlock__redactAndDeleteBtnIcon"></button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </section>
         <section class="main-right">
            <div class="main-right__block main-right__block__profile">
               <div class="main-right__profile__cover">
                  <img src="./assets/images/cover.jpg" alt="Обложка" class="main-right__profile__coverImg">
                  <div class="main-right__profile__avatar">
                     <img src="./assets/images/default-logo-user.jpg" alt="Обложка" class="main-right__profile__avatarImg">
                  </div>
               </div>
               <div class="main-right__profile__main">
                  <div class="main-right__profile__mainNickname">
                     Mukhedien
                  </div>
                  <div class="main-right__profile__mainDateOfBirthday">
                     <img src="./assets/images/birthday-cake.svg" alt="День рождения аккаунта" class="main-right__profile__mainDateOfBirthdayImg">23 января, 2024
                  </div>
                  <a href="./create-post.php" class="main-right__profile__mainCreatePost">Создать пост</a>
                  <a href="#" class="main-right__profile__mainCreateCommunity">Создать сообщество</a>
               </div>
            </div>
            <div class="main-right__block main-right__block__myCommunities">
               <div class="main-right__myCommunities__header">Мои сообщества:</div>
               <a href="#" class="main-right__myCommunities__content">
                  <img src="./assets/images/Funny.jpg" alt="Логотип сообщества" class="main-right__myCommunities__communityImg">
                  <div class="main-right__myCommunities__community">
                     <div class="main-right__myCommunities__communityName">Mukhedien's team</div>
                     <div class="main-right__myCommunities__communitySubscribers">395 подписчиков</div>
                  </div>
               </a>
            </div>
            <div class="main-right__block main-right__block__myFriends">
               <div class="main-right__myFriends__header">Мои друзья:</div>
               <a href="#" class="main-right__myFriends__content">
                  <img src="./assets/images/psychology.jpg" alt="Логотип сообщества" class="main-right__myFriends__friendImg">
                  <div class="main-right__myFriends__friendName">user</div>
               </a>
            </div>
         </section>
      </div>
   </main>
   <?php require_once "./app/components/modal-window.php"; ?>
   <script src="./assets/scripts/header.js"></script>
   <script src="./assets/scripts/aside.js"></script>
</body>
</html>